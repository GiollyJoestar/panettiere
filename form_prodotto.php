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
                print '<form action="crea_prodotto.php" method="POST">
                <div class=" p-5 ">
                    <div class="mb-3 form-group position-relative top-0 start-50 translate-middle ">
                        <input style="text-align:center;" class="form-control" type="text" name="nome" placeholder="Inserisci nome prodotto" />
                    </div>
                    <div class="mb-3 form-group position-relative top-0 start-50 translate-middle ">
                        <input style="text-align:center;" class="form-control" type="number" name="prezzo" placeholder="Inserisci prezzo al kg" />
                    </div>
                    <button type="submit" class="btn btn-primary position-relative top-0 start-50 translate-middle">Conferma</button>
                </div>
            </form>';
            }
            else 
                print"non hai i permessi necessari";
        }
        else 
            print"non hai i permessi necessari";
        ?>
    
    </body>
</html>