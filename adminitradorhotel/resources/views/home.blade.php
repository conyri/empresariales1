@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hotel club UCT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: url("/imagenes/u0.jpg");
                background-size: cover;
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
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                font-size: 100px;
                color: #FFFFFF;
            }

            .title {
                font-size: 100px;
                color: #040404;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
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

        </style>
    </head>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="fixed-top"> 
            <div class="col-md-8">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            </div>
        </div>
    </div>
</div>
    <body>
        <div class="content">                 
            <h1>HOTEL CLUB UCT</h1>               
        </div> 
        <br>
        <br>
        <br>   
            <div class="links flex-center ">                                                            
                <a href="/cotizacion">COTIZACION</a> 
                <a href="/est_revs">ESTO DE RESEVA</a>  
                <a href="/habitaciones">HABITACIONES</a> 
                <a href="/reservas">RESERVAS</a>
                <a href="/servicios">SERVICIOS</a>                 
            </div>    
        
    </body>
</html>

@endsection


         
            




