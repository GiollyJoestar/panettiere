<html>
    <head>
        <title>Logout</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>    
        <h1>Sloggato</h1>
        <?php 
        session_start();
        session_destroy();
        include "footer.html"
        ?>
    </body>
</html>