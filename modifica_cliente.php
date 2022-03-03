<?php
session_start();
if(isset($_SESSION['permessi']))
{
    if($_SESSION['permessi'])
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'panettiere';
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn)
            die('Could not connect');
        $id_cliente=$_POST['cliente'];
        if(!empty($_POST['metodo']))
        {
            $metodo=$_POST['metodo'];
            $sql="UPDATE clienti SET metodo=$metodo WHERE id=$id_cliente";
            if(mysqli_query($conn,$sql))
                print "metodo aggiornato<br>";
            else
                print "error".mysqli_error($conn);
        }
        if(!empty($_POST['nome']))
        {
            $nome=$_POST['nome'];
            $sql="UPDATE clienti SET nome='$nome' WHERE id=$id_cliente";
            if(mysqli_query($conn,$sql))
                print "nome aggiornato<br>";
            else
                print "error".mysqli_error($conn);
        }
        if(!empty($_POST['cognome']))
        {
            $cognome=$_POST['cognome'];
            $sql="UPDATE clienti SET cognome='$cognome' WHERE id=$id_cliente";
            if(mysqli_query($conn,$sql))
                print "cognome aggiornato<br>";
            else
                print "error".mysqli_error($conn);
        }
    }
}
include "footer.html";
?>