<?php
header("Content-type:text/html;charset=\"utf-8\"");
$previsionTiempo =""; $error="";
if (array_key_exists('ciudad',$_GET))
{
    $urlContents = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET['ciudad']).",&appid=5e20ae18f93c9247b78ebe5caec6444c");
    $array = json_decode($urlContents,true);
    $previsionTiempo1 ="El tiempo en ".$_GET['ciudad']." es actualmente ".$array['weather'][0]['description']."";
    $temperaturaEnCelsius=$array['main']['temp']-273;
    $previsionTiempo2 = ". La temperatura es ".intval($temperaturaEnCelsius)."&deg;C";
    $tempMin = $array['main']['temp_min']-273;
    $tempMax = $array['main']['temp_max']-273;
    $previsionTiempo = ", oscilando entre ".intval($tempMin)."&deg;C de minima y ".intval($tempMax)."&deg;C de máxima.";
}
?>

<! DOCTYPE html>
<html lang="es">
    <head>
        <!-- Required meta tags always come first-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
        <title> ¿Qué tiempo hace? </title>

        <style type="text/css">
            html {
                background: url('fondo.jpg') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            body {
                background: none;
            }
            
            .container {
                text-align:center;
                margin-top:250px;
                width:450px;
            }

            input {
                margin: 20px 0;
            }
            
            #prevision Tiempo {
                margin-top: 30px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1>¿Que tiempo hace ? </h1>
            <form>
                <fieldset class="form-group">
                    <label for="ciudad">Introduce nombre de una ciudad : </llabel>
                    <input type="ciudad" class="form-control" id="ciudad" name="ciudad" placeholder="Por ej. Londres, Tokyo" value=""?>
                </fieldset>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

            <div id="prevision Tiempo">
                <?php
                    if ($previsionTiempo){
                        echo'<div class="alert alert-success" role="alert">'.$previsionTiempo1.$previsionTiempo2.$previsionTiempo.'</div>';
                    }
                    else if ($error != ""){
                        echo'<div class="alert alert-danger" role="alert">' .$error.'</div>';
                    }   
                ?> 
            </div>
        </div>

        <!-- jQuery first, then Bootstrap JS.-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AIO1L79snBrmgiDpglWJ82z8eA5lenwxbMV1PAh7" crossorigin="anonymous"></script>
    </body>
</html>




