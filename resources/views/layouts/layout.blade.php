{{-- layout di base, è un modello di riferimento per le altre pagine dinamiche --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{'css/app.css'}}">
    <title>@yield('titolo')</title>
</head>
<body>
    <section>
        @yield('section')
    </section>

    <header>
        @include('templates.header')
    </header>

    <main>
        @yield('main')
    </main>
    
    <footer>
        @include('templates.footer')
    </footer>
</body>
</html>