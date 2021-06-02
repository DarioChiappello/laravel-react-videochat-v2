<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <style>
            html, body {
                /*background-color: rgb(10, 231, 247);
                background-image:  url("{{ asset('assets/back.jpg') }}");*/
                background-image:url({{url('/img/bc2.jpg')}});
                background-position: center center;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
                
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
            a{
                color: white;
            }

            .links > a {*/
                /*color: #636b6f;*/
                color:white;
                padding: 0 25px;
                /*font-size: 12px;*/
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            h1{
                color:white;
                font-size: 48px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
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
                    <h1>Streaming Videochat</h1>
                    
                </div>
                
       
    </body>
</html>
@section('scripts')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{ asset('js/jquery.vide.js') }}"></script>
<script src="{{ asset('js/jquery.vide.min.js') }}" ></script>
<script src="{{ asset('js/jquery.min.js') }}">
// $(document).ready(function () {
//   $(document.body).vide('video/ocean'); // Non declarative initialization
//
//   var instance = $(document.body).data('vide'); // Get the instance
//   var video = instance.getVideoObject(); // Get the video object
//   instance.destroy(); // Destroy instance
// });
</script>
@endsection