<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Usuario Investimento</title>

    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">

</head>
<body>
    
    <div class="background">

    </div>

    <section id="conteudo-view" class="login">

    <h1>Investimentos</h1>
    <h3>Faca Agora O Seu Investimento E Ganhe Mais</h3>
    
    <!-- abaixo fazemos a chamada do blade -->
    
        {!! Form::open(['route' =>'user.login', 'method'=>'post']) !!}

        <p>Inicia sua sessao</p>

        <label>
            {!! Form::text('username', null, ['class'=>'input', 'placeholder'=> 'Nome de Usuario']) !!}
        </label>

        <label>
        {!! Form::password('password', ['placeholder' => 'Senha de Usuario']) !!}
        </label>

        {!! Form::submit('Entrar') !!}

        {!! Form::close() !!}

        </form>

    </section>

</body>
</html>