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
        $nome=strtolower($_POST['nome']);
        $cognome=$_POST['cognome'];
        $metodo=$_POST['metodo'];
        $sql="INSERT INTO clienti(id,nome,cognome,metodo) VALUES (NULL,'$nome','$cognome',$metodo)";
        if(mysqli_query($conn,$sql))
            print '<div class="form-group position-relative top-0 start-50 translate-middle ">cliente aggiunto</div>';
        else
            print "failed".mysqli_error($conn);
    }
    else 
        print "non hai i permessi necessari";

}
else
    print "non hai i permessi necessari";
include "footer.html";
?>