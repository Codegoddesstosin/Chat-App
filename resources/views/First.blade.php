@extends('layouts.app')


<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-Flakes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
          
    body {
        background: url("https://images.unsplash.com/photo-1536312975196-2f175c3c0eed?ixlib=rb-0.3.5&s=459ec3551c50310495398107fd043a0c&auto=format&fit=crop&w=643&q=80") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
        h1 {
            color: white;
         
        } 
        .container-index {
          ;
            margin-right: 15%;
            margin-left: 15%;
        }
        .text {
            color: white;
           
        
        }
        .footer-links {
            text-align: center;
            color: white;
            margin-top: 30%;
            font-size: 75%;
        }
        .log-in {
            float: right;
            width: 300px;
            height: 150px;
            margin-top: 7.5;
        }
        .sign-up {
            float: right;
            width: 300px;
            height: 250px;
        }

         .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;

        }

        .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
        }
        
   
 
 </style> 
      
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

             
            </div>
        </div>
    </body>
</html>
