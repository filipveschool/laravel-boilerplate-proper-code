<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <style>
        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: -1px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .login-btn{
            margin-top:10px;
        }
        .or-social{
            text-align:center;
            margin: 10px 0 10px 0;
        }
        .facebook{
            background-color: #4863ae;
            border-color: #4863ae;
        }
        .facebook:hover{
            background-color: #2871aa;
            border-color: #2871aa;
        }
        .twitter{
            background-color: #46c0fb;
            border-color: #46c0fb;
        }
        .twitter:hover{
            background-color: #00c7fb;
            border-color: #00c7fb;
        }
        .google{
            background-color: #DD4B39;
            border-color: #DD4B39;
        }
        .google:hover{
            background-color: #e15f4f;
            border-color:#e15f4f;
        }
        .github{
            background-color: #4183C4;
            border-color: #4183C4;
        }
        .github:hover{
            background-color: #5490ca;
            border-color:#5490ca;
        }
        .margin-bottom-10{
            margin-bottom:10px;
        }
        [type=checkbox]:checked, [type=checkbox]:not(:checked) {
            position: absolute;
            left: -9999px;
            visibility: hidden;
        }
        [type=checkbox], [type=radio] {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
        }
        [type=checkbox]+label {
            position: relative;
            height: 25px;
        }
        [type=checkbox]+label:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 18px;
            height: 18px;
            z-index: 0;
            border: 2px solid #5a5a5a;
            border-radius: 1px;
            margin-top: 2px;
            -webkit-transition: .2s;
            -moz-transition: .2s;
            -o-transition: .2s;
            -ms-transition: .2s;
            transition: .2s;
        }
        [type=radio]:checked+label, [type=radio]:not(:checked)+label, [type=checkbox]+label {
            -khtml-user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            cursor: pointer;
            font-size: 1rem;
            padding-left: 35px;
            display: inline-block;
            line-height: 25px;
        }
        [type=checkbox]:checked+label:before {
            top: -4px;
            left: -3px;
            width: 12px;
            height: 22px;
            border-top: 2px solid transparent;
            border-left: 2px solid transparent;
            border-right: 2px solid #4285F4;
            border-bottom: 2px solid #4285F4;
            -webkit-transform: rotate(40deg);
            -moz-transform: rotate(40deg);
            -ms-transform: rotate(40deg);
            -o-transform: rotate(40deg);
            transform: rotate(40deg);
            -webkit-backface-visibility: hidden;
            -webkit-transform-origin: 100% 100%;
            -moz-transform-origin: 100% 100%;
            -ms-transform-origin: 100% 100%;
            -o-transform-origin: 100% 100%;
            transform-origin: 100% 100%;
        }
        [type=checkbox]+label:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 18px;
            height: 18px;
            z-index: 0;
            border: 2px solid #5a5a5a;
            border-radius: 1px;
            margin-top: 2px;
            -webkit-transition: .2s;
            -moz-transition: .2s;
            -o-transition: .2s;
            -ms-transition: .2s;
            transition: .2s;
        }
        .error-text{
            color: #F44336;
            transition: .2s opacity ease-out,.2s color ease-out;
        }
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
