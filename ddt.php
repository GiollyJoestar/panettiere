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
        $data=$_POST['data'];
        $sql="SELECT p.prodotto,p.prezzoxkg,ROUND(SUM(v.kg),2) AS kg FROM (prodotti p JOIN vendite v ON p.id=v.id_prodotto) 
        JOIN clienti c ON v.id_cliente=c.id WHERE v.data='$data' GROUP BY p.prodotto";
        $query=mysqli_query($conn,$sql);
        $first=false;
        $prezzot=0;
        $tot=0;
        
        while($row=mysqli_fetch_array($query))
        {
            if(!$first)
            {
                $first=true;
                print'<table class="table">';
                print"<thead><th>Prodotto</th><th>Quantità</th><th>Prezzo</th></tr></thead>";
            }
            $prezzot=round($row[1]*$row[2],2);
            $tot=$prezzot+$tot;
            print"<tr><td>$row[0]</td><td>$row[2]</td><td>$prezzot</td></tr>";               
        }   
        print"<tfoot class='tfoot'><tr><td>Totale</td><td></td><td>$tot €</td></tr></tfoot></table>"; 
           
    }
}
include "footer.html";
?>