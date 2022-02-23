<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <?php
        session_start();
        if(isset($_SESSION['username']))
        {
            print "sei già loggato";
            include "footer.php";
        }
        else
        {
                print '<form action="login.php" method="POST">
                <div class=" p-5 ">
                    <div class="mb-3 form-group position-relative top-0 start-50 translate-middle ">
                        <input style="text-align:center;" class="form-control" type="text" name="username" placeholder="Inserisci username" />
                    </div>
                    <div class="mb-3 form-group position-relative top-0 start-50 translate-middle ">
                        <input style="text-align:center;" class="form-control" type="password" name="password" id="pass" placeholder="Inserisci password" />
                    </div>
                    <div class="mb-3 form-group position-relative top-0 start-50 translate-middle ">
                        <input type="checkbox" onclick="kek()">Mostra password
                    </div>
        
                    <button type="submit" class="btn btn-primary position-relative top-0 start-50 translate-middle">Conferma</button>
        
                </div>
        
            </form>
        
        </body>
        <script>
            function kek() {
                var x = document.getElementById("pass");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>';
        }
        
        ?>
    </body>
</html>