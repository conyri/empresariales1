<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RESTAURANT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <img src="/imagenes/u0.jpg"  width="1518" height="500" />
        <style>
            html, body {
                background-color: #E9D886;
                color: #636b6f;
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
                right: 450px;
            }

            .top-right {
                position: absolute;
                right: 250px;
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
            .button {
                font: bold 13px Arial;
                text-decoration: none;
                background-color: #EEEEEE;
                color: #333333;
                padding: 10px 15px 10px 10px;
                border-top: 1px solid #CCCCCC;
                border-right: 1px solid #333333;
                border-bottom: 1px solid #333333;
                border-left: 1px solid #CCCCCC;
            }
            .egt{
                position: absolute;
                top: 590px;
                right:400px;

            }
            .td, tr{
                text-align: center;
                top: 700px;
                right:1000px;
                
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
                <a href="/habitacion">HABITACIONES</a> 
                <a href="/eventos">EVENTOS Y SALONES</a>  
                <a href="/fitnessclub">FITNESS CLUB</a> 
                <a href="/promociones">PROMOCIONES </a>            
            </div>

            <table class="egt">
                <tr>
                <td><img width="700" height="500" src="/imagenes/u117.jpg"  /></td>
                </tr>
                <tr>
                <td><font color="black" ><p ><h1>Restaurant Bristol</h1> <br>Ven y disfruta lo mejor de nuestra tierra en el mejor<br> 
                restaurante de cocina chilena moderna de Santiago.​ </p></font>
                 <a href="/" class="button" >  MAS INFORMACION </a>
                 </td>
                </tr>
                <tr>
                <td>  <br> </td>
                </tr>
                <tr>
                <td><img width="700" height="500" src="/imagenes/u120.jpg"  /></td>
                </tr>
                <br><br>
                <tr>
                <td><font color="black" ><p ><h1>Bar ​Bristol</h1> <br>Un lugar en Santiago donde encontrarás la mejor <br>
                coctelería de autor música en vivo y más.​ </p></font>
                 <a href="/" class="button" >  MAS INFORMACION </a>
                 </td>
                </tr>
                <tr>
                <td>  <br> <br> <br> </td>
                </tr>

                

            </table>  
        
    </body>
</html>
