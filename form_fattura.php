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
            // SELECT * FROM ((prodotti p JOIN vendite v ON p.id=v.id_prodotto) JOIN clienti c ON v.id_cliente=c.id) JOIN pagamento pa ON v.id_metodo=pa.id query funzionante
            $sql="SELECT id,nome,cognome FROM clienti";
            $query=mysqli_query($conn,$sql);
            print '<form action="fattura.php" method="POST">
                <div class=" p-5 ">
                    <div class="mb-3 form-group position-relative top-0 start-50 translate-middle "> <select class="form-select" name="cliente">';
                while($row=mysqli_fetch_array($query))
                {
                    print"<option value='$row[0]'>$row[1] $row[2]</option>";
                }
                print '</select>
                </div><div class="mb-3 form-group position-relative top-0 start-50 translate-middle "><input type="month" name="mese" class"form-control"></div>
                <button type="submit" class="btn btn-primary position-relative top-0 start-50 translate-middle">Conferma</button></div></form>';
        }
    }
    ?>
    </body>
</html>