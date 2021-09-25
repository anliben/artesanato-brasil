<!DOCTYPE html>
<html lang="pt-br">
<head>
    @yield('meta_tags')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/materialize/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="manifest" href="icons/manifest.json">
    <meta name="msapplication-TileColor" content="#EE6E73">
    <meta name="theme-color" content="#EE6E73">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6ZYC6HRRKF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-6ZYC6HRRKF');
</script>
</head>
<body>
<nav>
    <div class="nav-wrapper">
        <a href="{{url('/')}}" class="brand-logo center ">Artesã Brasil</a>
        @isset($logged)
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a><i class="material-icons">search</i></a></li>
                <li><a  href="{{url('/product')}}">Postar Peça</a></li>
                <li><a href="{{url('/area')}}">Minhas Peças</a></li>
                <li><a href="#">Minha Conta</a></li>
                <li><a class="red lighten-3" href="{{url('account/logout')}}"><i class="material-icons">person_pin</i></a></li>
            </ul>
        @else
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="blue lighten-1 " href="{{url('account/login')}}"><i class="material-icons">account_circle</i></a></li>
            </ul>
        @endisset
    </div>
</nav>
<div class="container">
    @yield('content')
    <script src="/materialize/js/materialize.min.js"></script>
    @isset($logged)
        <div class="fixed-action-btn toolbar hide-on-extra-large-only hide-on-large-only show-on-med-and-down">
            <a class="btn-floating btn-large red">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a href="/" class="btn-floating"><i class="material-icons">home</i></a></li>
                <li><a href="/product" class="btn-floating "><i class="material-icons">publish</i></a></li>
                <li><a href="{{url('/area')}}" class="btn-floating "><i class="material-icons">storage</i></a></li>
                <li><a class="btn-floating "><i class="material-icons">attach_file</i></a></li>
                <li><a class="btn-floating " href="{{url('account/logout')}}"><i class="material-icons">person_pin</i></a></li>
            </ul>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.fixed-action-btn');
                var instances = M.FloatingActionButton.init(elems, {
                    toolbarEnabled: true,
                });
            });
        </script>
    @else
        <div class="fixed-action-btn toolbar hide-on-extra-large-only hide-on-large-only show-on-med-and-down">
            <a href="{{url('/account/login')}}" class="btn-floating btn-large red">
                <i class="large material-icons">login</i>
            </a>

        </div>


        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.fixed-action-btn');
                var instances = M.FloatingActionButton.init(elems, {
                    toolbarEnabled: false,
                });
            });
        </script>
    @endisset

</div>


</body>
</html>
