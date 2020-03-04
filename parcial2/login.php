<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
</head>
<style>

        body{
            /*crea una gradiente de dos colores de color en pantalla completa*/
            background: #252556;
            height: 100vh;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .card-container.card {
            /*ajusta la tarjeta mas peque�a con el contenedor*/
            max-width: 350px;
            padding: 40px 40px;
            border-radius: 15px;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.17);
            padding: 20px 25px 30px;
            margin: 0 auto 25px;
            margin-top: 50px;/*<-ajusta la tarjeta un poco abajo*/
            /*parte de abajo sirve para la sombra de la tarjeta*/
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }

     
        input{
            cursor: pointer;
            text-align: center;
        }

        .form-signin input,
        .form-signin input,
        .form-signin input{
            margin-bottom: 10px;
        }


  

    </style>
<body>
<body>
        <div class="container">
            <div class="card card-container">
                <br>
                <form class="form-signin" action="index.php" method="post">
                    <input  autocomplete="off" type="text" name="usuario" class="form-control" placeholder="Usuario">
                    <input autocomplete="off" type="password" name="pass" class="form-control" placeholder="password">
                    <div>
                        <input type="submit" name="registrar" value="Iniciar Sesion" class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
    </body>
</body>
</html>