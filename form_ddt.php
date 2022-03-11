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
            print '<form action="ddt.php" method="post">
            <div class="p-5">
            <div class="mb-3 form-group position-relative top-0 start-50 translate-middle ">
            <input type="date" id="data" name="data" class="form-control"/>
            <label for="data">Seleziona Giorno</label>
            </div>
            <button type="submit" class="btn btn-primary position-relative top-0 start-50 translate-middle">Conferma</button></div>
        </form>';
        }
    }       
        ?>       
    </body>
</html>