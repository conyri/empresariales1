<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HABITACION</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <img src="/imagenes/u0.jpg"  width="1535" height="500" />
        <style>
            html, body {
                background-color: #E9D886;
                color: #E0C84F;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }


            .full-height {
                height: 100;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: absolute;
                top: 100px;
                right: 400px;
            }

            .top-right {
                position: absolute;
                right: 210px;
                top: 380px;
            }

            .content {
                text-align: center;
                font-size: 50px;
                color: #FFFFFF;
            }

            .title {
                font-size: 100px;
                color: #040404;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;         
                border: 3px black groove;
                background-color: #D8E04F;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .uper{
                position: absolute;
                top: 18px;
                right:1435px;
                border: 3px black groove;
                background-color: #D8E04F;
            }
            .imagenes{
                position: relative;

            }

        </style>
    </head>
    <body>
    <div class="uper">
        <a href="/" class="btn btn-primary">  ATRAS </a> 
    </div>   

        <div class="content full-height position-ref">                 
            <h1>HOTEL CLUB UCT</h1>               
        </div> 
        <br>
        <br>
        <br>   
            <div class="links flex-center top-right ">                                                            
                <a href="/restaurant">RESTAURANT</a> 
                <a href="/eventos">EVENTOS Y SALONES</a>  
                <a href="/fitnessclub">FITNESS CLUB</a> 
                <a href="/promociones">PROMOCIONES </a>            
            </div>
            
            <strong><font color="black" size="4px" align="center" > <h1 >Hermosas habitaciones y suites amuebladas</h1> </font></strong>

        <div class="imagenes">
            <img width="500" height="400" src="/imagenes/a01.jpg" top="700px" right="800px" />
            <font color="black" ><p ><h1>Junior Suite</h1> <br>La suite premium reúne espacio, lujo y elegancia para crear un verdadero oasis urbano. Con 
            la cama extra grande, esta suite también cuenta con un escritorio,  área de estar con dos cómodos sofás y un cuarto 
            de baño exquisito </p></font>
        </div>
        
    </body>
</html>
