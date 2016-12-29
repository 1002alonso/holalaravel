<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="../public/css/app.css"rel=" stylesheet" type="text/css">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
            }

            .title {
                font-size: 84px;
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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="panel-body">
            <div class="container">
                <h1>Noticias</h1>
            
                <div class="row">
                       @if(isset($noticias))
                    @foreach( $noticias as $n)
                  
                        <div class="col-xs-12 col-sm-6">
                       
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                     <h3 class="panel-title">{{$n->titulo}}</h3>
                                </div>
                                
                                <div class="panel-body">
                                   
                                    <img class="img img-responsive" style="max-width:200px;" src="imgNoticias/{{$n->urlImg}}">
                                         <p>{{$n->descripcion}}</p>
                                </div>
                                <div class="panel-footer">Panel footer</div>
                            </div>
                        </div>
                
                    @endforeach
                 @endif
                </div>
                    
                
            </div>

           
     
           
                
      
        </div>
        </div>
    </body>
</html>
