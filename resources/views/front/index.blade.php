<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Rodrigo dos Santos">
    <meta name="author" content="Rodrigo dos Santos">

    <title>Pherfil - Intranet</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('site/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('site/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('site/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
          type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{asset('site/css/landing-page.min.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('front.index')}}">PHERFIL | PHERFILTEC</a>
        <a class="btn btn-primary" href="{{route('admin.login')}}">Login</a>
    </div>
</nav>
<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="container-fluid">
        <p>
        <h1 class="mb-5">PHERFIL | PHERFILTEC</h1></p>
        <p>
        <h1 class="mb-5">SEJA BEM VINDO A INTRANET!</h1></p>
        <p>
        <h1 class="mb-5">MANTENHA-SE ATUALIZADO SOBRE TUDO QUE ESTÁ ROLANDO</h1></p>
    </div>
</header>
<!-- Footer -->
<footer class="footer bg-light">
    <div class="container align-content-center text-center">
        <p class="text-muted small mb-4 mb-lg-0">&copy; PHERFIL | PHERFILTEC - {{date('Y')}}.</p>
        <p class="text-muted small mb-4 mb-lg-0">All Rights Reserved.</p>
        <p>CNPJ: 03.079.700/0001-01</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('site/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('site/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
