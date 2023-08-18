<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Project Management</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            <h1>Project Management</h1>
        </header>
        
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('projects.index') }}">Lista Proiectelor</a></li>
                    <li><a href="{{ route('projects.create') }}">Adaugă Proiect</a></li>
                    <!-- Adăugați link-uri către celelalte pagini aici -->
                </ul>
            </div>
        </nav>

        @yield('content')
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrapcdn/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>