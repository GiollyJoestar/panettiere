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
        $nome=strtolower($_POST['nome']);
        $sql="INSERT INTO pagamento(id,metodo) VALUES (NULL,'$nome')";
        if(mysqli_query($conn,$sql))
            print '<div class="form-group position-relative top-0 start-50 translate-middle ">metodo aggiunto</div>';
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