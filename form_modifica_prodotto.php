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
             if($_SESSION['permessi']>0)
             {
                 $servername = 'localhost';
                 $username = 'root';
                 $password = '';
                 $dbname = 'panettiere';
                 $conn = mysqli_connect($servername, $username, $password, $dbname);
                 if (!$conn)
                     die('Could not connect');
                 $sql="SELECT * FROM prodotti";
                 $query=mysqli_query($conn,$sql);
                 print '<form action="modifica_prodotto.php" method="POST">
                 <div class=" p-5 ">
                     <div class="mb-3 form-group position-relative top-0 start-50 translate-middle "> <select class="form-select" name="id_prodotto">';
                 while($row=mysqli_fetch_array($query))
                 {
                     print"<option value='$row[0]'>$row[1]</option>";
                 }
                 print '</select></div>';                 
                 print'<div class="mb-3 form-group position-relative top-0 start-50 translate-middle ">
                        <input style="text-align:center;" class="form-control" type="text" name="nome_prodotto" placeholder="Nuovo nome prodotto"/>
                    </div>';
                print'<div class="mb-3 form-group position-relative top-0 start-50 translate-middle ">
                        <input style="text-align:center;" class="form-control" type="number" name="prezzo" placeholder="Nuovo prezzo al chilo"/>
                        </div>';
                print' <button type="submit" class="btn btn-primary position-relative top-0 start-50 translate-middle">Conferma</button>
                        </div></form>';
             }
         }
         include "footer.html";
       ?> 
    </body>
</html>