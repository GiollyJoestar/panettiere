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
            echo '<div class=" p-5 "><a href="form_login.php" class="btn btn-primary position-relative start-50 translate-middle fixed-width">Login</a></div>';
        }
        else
        { 
            echo '<div class=" p-5 "><a href="logout.php" class="btn btn-primary position-relative start-50 translate-middle fixed-width">Logout</a></div>';     
            if($_SESSION['permessi']>0)
            {
                print '<div class="p-2"><a href="form_prodotto.php" class="btn btn-primary position-relative start-50 translate-middle fixed-width">Aggiungi un prodotto</a></div>';
                print '<div class="p-2"><a href="form_modifica_prodotto.php" class="btn btn-primary position-relative start-50 translate-middle fixed-width">Modifica prodotto</a></div>';
                print '<div class="p-2"><a href="form_vendita.php" class="btn btn-primary position-relative start-50 translate-middle fixed-width">Vendi</a></div>';
            }
            if($_SESSION['permessi']>1)
            {
                print '<div class="p-2"><a href="form_crea_clienti.php" class="btn btn-primary position-relative start-50 translate-middle fixed-width">Crea un cliente</a></div>';
                print '<div class="p-2"><a href="form_crea_metodo_pagamento.php" class="btn btn-primary position-relative start-50 translate-middle fixed-width">Crea un metodo di pagamento</a></div>';
                print '<div class="p-2"><a href="form_modifica_cliente.php" class="btn btn-primary position-relative start-50 translate-middle fixed-width">Modifica cliente</a></div>';
                print '<div class="p-2"><a class="btn btn-primary position-relative start-50 translate-middle fixed-width text-center" href="form_fattura.php">Stampa fattura</a></div>';
                print '<div class="p-2"><a href="form_ddt.php" class="btn btn-primary position-relative start-50 translate-middle fixed-width text-center">Stampa ddt</a></div>';
            }
        }       
        ?>
    </body>
    <style>
        .fixed-width{
            width: 250px;
        }
    </style>
</html>