<!DOCTYPE html>
<html>
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="http://fonts.googleapis.com/icon?family=Lato" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ url("css/materialize.min.css") }}"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title_b')Funaria @yield('title')</title>
    @yield('head')
</head>

<body>
<nav class="header-navbar">
    <div class="nav-wrapper grey darken-3">
        <div class="container">
            <a href="#" class="">
                {{--<img src="{{ url("img/logo_header.png") }}" alt="" style="height: 56px; margin-top: 4px;">--}}
            </a>
            <a href="#" class="brand-logo" style="margin-left: 10px">
                FUNARIA
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down" style="font-family: Lato;text-transform: uppercase;">
                <li><a href="{{ route("home") }}">Accueil</a></li>
                <li><a href="{{ route("home") }}">Blog</a></li>
                <li><a href="{{ route("home") }}">Forum</a></li>
                <li><a href="{{ route("home") }}">Jeux</a></li>
                <li><a href="{{ route("home") }}">Wiki</a></li>
                <li><a href="{{ route("home") }}">Infos</a></li>
                <li><a href="{{ route("home") }}" class="btn yellow black-text">Boutique</a></li>
            </ul>
        </div>
    </div>
    <div>
        <div class="nav-wrapper grey darken-4" style="padding: 20px 0">
            <div class="container">
                <div class="center">
                    <a href="{{ route('login') }}" class="btn">Se connecter</a>
                    <a href="{{ route('register') }}" class="btn white black-text">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</nav>
<div class="section row" id="index-banner" style="margin-top: 115px;">
    <div class="container">
        @yield("content")
    </div>
</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{ url("js/materialize.min.js") }}"></script>

@yield('script')

</body>
</html>
