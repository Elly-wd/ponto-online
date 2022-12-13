@extends('main')

@section('title', 'Ponto Online')

@section('content2')
<h3 style=" margin-top: 29%; font-weight: unset;">Faça seu Login ou Crie uma conta</h3>
<a href="/cadastro"><button type="button" style="margin-top: 10%;width: 43%;" class="btn btn-outline-dark" id="verIncristos">Criar Conta</button></a>
@endsection('content2')

@section('content')
<div class="row">
    @if (session()->has('message'))
    <p style="color: white; background-color: #8fbc8feb; font-weight: 400; width: 100%; margin-top: 2%; border-radius: 4px;" 
    class="msg">
        {{ session('message') }}
    </p>
    @endif
</div>
<h1 style="font-weight: lighter; margin-top: 14%;">Iniciar Jornada</h1>
<form action="/pagina-inicial" method="POST">
    @csrf
    <div class="mb-3 row">
        <div class="col-sm-10">
            <input style="font-weight: lighter;background-color: snow;border-left: 0;border-right: 0;border-radius: 0;" type="email" class="form-control border-top-0 border-right-0 border-left-0" id="email" name="email" placeholder="Digite seu email">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
            <input style="font-weight: lighter;background-color: snow;border-left: 0;border-right: 0;border-radius: 0;" type="password" class="form-control border-top-0 border-right-0 border-left-0" id="senha" name="senha" placeholder="Digite sua senha">
        </div>
    </div>
    </div>

    <button style="width: 50%; margin-bottom: 29%; font-weight: bold;" type="submit" class="btn btn-outline-dark" id="enviar">Entrar
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
        </svg>
    </button>
</form>

@endsection