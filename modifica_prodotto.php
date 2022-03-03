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
        $id=$_POST['id_prodotto']; 
        if(!empty($_POST['nome_prodotto']))
        {
            $nome=$_POST['nome_prodotto'];
            $sql="UPDATE prodotti SET prodotto='$nome' WHERE id=$id";
            if(mysqli_query($conn,$sql))
                print "nome aggiornato<br>";
            else
                print "errore ".mysqli_error($conn);          
        }
        if(!empty($_POST['prezzo']))
        {
            $prezzo=$_POST['prezzo'];
            $sql="UPDATE prodotti SET prezzoxkg=$prezzo WHERE id=$id";
            if(mysqli_query($conn,$sql))
                print "prezzo aggiornato<br>";
            else
                print "errore ".mysqli_error($conn);
        }        
    }
}
include "footer.html";
?>