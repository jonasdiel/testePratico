<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Médicos</title>
    <!-- Bootstrap core CSS -->
    <link href="/bootstrap-4.5.2-dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body class="bg-light">
<div class="container">
    <div class="py-5 text-center">
        <h2>Médicos</h2>
        <p class="lead">Formulário exemplo para consumo da api /api/medico</p>
    </div>

    <div class="row">
        <div class="col-md-12">
            @yield('body')
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020 Jonas Diel</p>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/bootstrap-4.5.2-dist/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/bootstrap-4.5.2-dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')
</body>
</html>
