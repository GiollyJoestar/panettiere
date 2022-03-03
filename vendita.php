<?php
    session_start();
    if(isset($_SESSION['permessi']))
    {
        if($_SESSION['permessi']>0)
        {
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'panettiere';
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn)
                die('Could not connect');           
            $id_cliente=$_POST['cliente'];
            $id_prodotto=$_POST['prodotto'];
            $qt=$_POST['qt'];
            $data = $_POST['data'];
            $sql="SELECT metodo FROM clienti WHERE id=$id_cliente";
            $result=mysqli_query($conn,$sql);
            $metodo=0;
            while($row=mysqli_fetch_array($result))
                $metodo=$row[0];              
            $sql="INSERT INTO vendite(id_prodotto,id_cliente,data,kg,id_metodo) VALUES($id_prodotto,$id_cliente,'$data',$qt,$metodo)";
            if(mysqli_query($conn,$sql))
                print '<div class="form-group position-relative top-0 start-50 translate-middle ">vendita effettuata</div>';
            else
                print "failed ".mysqli_error($conn);
        }
    }
    include "footer.html";
?>