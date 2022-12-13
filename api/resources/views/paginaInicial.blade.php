@extends('main')

<body style="background-color: snow;">
@section('title', 'Marcar Ponto')

@section('content2')
<div class="side-bar">
    <ul class="nav flex-column">
    <li class="nav-item">
           <a href="/encerrar-sessao" <button type="button" 
            style="margin-top: 22%;width: 99%; border-left: 0;border-right: 0;border-radius: 0;border-top: 0; border-bottom:0; margin-left: -1%;" 
            class="btn btn-outline-dark" id="verIncristos">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
            </svg> Encerrar Sessão</button></a>
        </li>

        <li class="nav-item">
            <button type="button" style="margin-top: 10%;margin-left:-1%;width: 99%;border-left: 0;border-right: 0;border-radius: 0;border-top: 0; border-bottom:0;" class="btn btn-outline-dark" id="verIncristos">Histórico de Ponto</button>
        </li>

       
    </ul>
</div>
@endsection('content2')

@section('content')
<div class="row">
    @if (session()->has('msg'))
    <p class="msg">
        {{ session('msg') }}
    </p>
    @endif
</div>
<h1 style="font-weight: lighter;margin-top: 14%; margin-left: -40%;">Olá, funcionário</h1>
<form style="margin-left: -46%;" method="POST">
    @csrf
    <button style="width: 50%; margin-top: 5%;; font-weight: bold;" type="button"
     class="btn btn-outline-dark" id="enviar-ponto"> Marcar Ponto </button>
</form>

@endsection
</body>