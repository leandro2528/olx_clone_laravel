<!doctype html>
<html lang="pt-Br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
        <div class="row my-3">
            <div class="col-6">
                <a class="navbar-brand" href="{{ route('dashboards-index') }}">OLX - Clone</a>
            </div>
            <div class="col-6">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
            </div>
        </div>
    </div>
    <hr>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>