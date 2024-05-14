@extends('master')

@section('content')
<link rel="stylesheet" href="resources/css/app.css" type="text/css">

    <form action="{{route('login.store')}}" method="POST">
        @csrf

        <div class="form-header">
            <div class="title">
                <h1>Login</h1>
            </div>

        </div>
        <!--final da parte inicial das divs--->

        <div>
            <div class="input-group">
                <div class="input-box">
                    <label for="firstname">Usuário</label>
                    <input id="firstname" type="text" name="firstname" placeholder="Usuário" required>
                </div>
            </div>
        </div>
        <!--Primeira label que pede o nome de usuário--->
        <div class="input-box">
            <label for="password">Senha</label>
            <input id="password" type="password" name="password" placeholder="Senha" maxlength = "3" required onkeypress="return blockletras(window.event.keyCode)" >
        </div>
        <!--Segunda label que pede a senha--->
        </div>
        <div class="login-button">
           <button>  <input name="btnconsultar" type="submit" value="Entrar"></button>
            </div>
    </form>

    <a href="{{route('home')}}">Voltar</a>


@endsection
