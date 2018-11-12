<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login do Usuário</title>
    <link rel="stylesheet" href=""{{asset('css/stylesheet.css')}}>
</head>
<body>
<section id="conteudo-view" class="login">

    <h1>
        Locadora Online
    </h1>

    <h2>
        Online sem estresse e com novidades!
    </h2>

    {!! Form::open(['route' => 'user.login', 'method' =>'post']) !!}
    {!! Form::close() !!}

    <p> Faça seu Login e reserve o seu filme</p>

        <label>
            {!! Form::text('username',null,['class'=>'input','placeholder' => "Usuário"]) !!}
        </label>

            <label>
                {!! Form::password('password',['placeholder' => 'Senha']) !!}
            </label>

    {!! Form::submit('Entrar') !!}
    {!! Form::close() !!}

</section>
    </body>
</html>