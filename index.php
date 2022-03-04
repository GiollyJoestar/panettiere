<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <?php 
        session_start();
        if(!isset($_SESSION['permessi']))
        {
            echo '<div class=" p-5 "><form action="form_login.php"><button type="submit" class="btn btn-primary position-relative start-50 translate-middle">Login</button></form></div>';
        }
        else
        { 
            echo '<div class=" p-5 "><form action="logout.php"><button type="submit" class="btn btn-primary position-relative start-50 translate-middle">Logout</button></form></div>';     
            if($_SESSION['permessi']>0)
            {
                print '<div class="p-2"><a href="form_prodotto.php"><button class="btn btn-primary position-relative start-50 translate-middle">Aggiungi un prodotto</button></a></div>';
                print '<div class="p-2"><a href="form_modifica_prodotto.php"><button class="btn btn-primary position-relative start-50 translate-middle">Modifica prodotto</button></a></div>';
                print '<div class="p-2"><a href="form_vendita.php"><button class="btn btn-primary position-relative start-50 translate-middle">Vendi</button></a></div>';
            }
            if($_SESSION['permessi']>1)
            {
                print '<div class="p-2"><a href="form_crea_clienti.php"><button class="btn btn-primary position-relative start-50 translate-middle">Crea un cliente</button></a><div>';
                print '<div class="p-2"><a href="form_crea_metodo_pagamento.php"><button class="btn btn-primary position-relative start-50 translate-middle">Crea un metodo di pagamento</button></a><div>';
                print '<div class="p-2"><a href="form_modifica_cliente.php"><button class="btn btn-primary position-relative start-50 translate-middle">Modifica cliente</button></a><div>';
                print '<div class="p-2"><a href="form_fattura.php"><button class="btn btn-primary position-relative start-50 translate-middle">Stampa fattura</button></a><div>';
            }
        }       
        ?>
    </body>
</html>