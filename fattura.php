<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
    <?php
    session_start();
    if(isset($_SESSION['permessi']))
    {
        if($_SESSION['permessi']>1)
        {
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'panettiere';
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn)
                die('Could not connect');
            $cliente=$_POST['cliente'];
            $mesemin=$_POST['mese']."-01";
            $mesemax=$_POST['mese']."-31";
            $tot=0;
            $prezzot=0;
            $sql="SELECT c.nome,c.cognome,p.prodotto,p.prezzoxkg,ROUND(SUM(v.kg),2) AS kg FROM (prodotti p JOIN vendite v ON p.id=v.id_prodotto) 
            JOIN clienti c ON v.id_cliente=c.id WHERE c.id=$cliente AND v.data BETWEEN '$mesemin' AND '$mesemax' GROUP BY p.prodotto";
            $query=mysqli_query($conn,$sql);
            $first=false;
            while($row=mysqli_fetch_array($query))
            {
                if(!$first)
                {
                    $first=true;
                    print"<h1>$row[0] $row[1]</h1>";
                    print'<table class="table">';
                    print"<thead><th>Prodotto</th><th>Quantità</th><th>Prezzo</th></tr></thead>";
                }
                $prezzot=round($row[3]*$row[4],2);
                $tot=$tot+$prezzot;
                print"<tr><td>$row[2]</td><td>$row[4]</td><td>$prezzot €</td></tr>";               
            }    
            print"<tfoot class='tfoot'><tr><td>Totale</td><td></td><td>$tot €</td></tr></tfoot></table>";      
        }
    }
    print'<div class="p-5">';
    include "footer.html";
    print"</div>";
    ?>   
    </body>
</html>