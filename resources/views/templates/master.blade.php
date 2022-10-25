<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investimento</title>


    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <!-- link href="//netdna.bootstrapcdn.com/font-awesome/4.7/css/font-awesome.css" rel="stylesheet"> -->
    
    @yield('css-view')

</head>
<body>
    @include('templates.menu-lateral')


    <section id="view-conteudo">
         @yield('conteudo-view')
    </section>

    
    @yield('js-view')
</body>
</html>