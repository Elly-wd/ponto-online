@extends('main')

@section('title', 'Realizar Cadastro')

@section('content')
<div class="row">
    @if (session()->has('message'))
    <p style="color: white; background-color: #fc001acc;font-weight: 400; width: 100%; margin-top: 2%; border-radius: 4px;" 
    class="msg">
        {{ session('message') }}
    </p>
    @endif
</div>
<h1 style="font-weight: lighter; margin-top: 14%;">Preencha o Formulário</h1>
<form action="/realizar-cadastro" method="POST">
    @csrf
    <div class="mb-3 row">
        <div class="col-sm-10">
            <input style="font-weight: lighter;background-color: snow;border-left: 0;border-right: 0;border-radius: 0;" type="text" class="form-control border-top-0 border-right-0 border-left-0" id="nome" name="nome" placeholder="Nome Completo">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
            <input style="font-weight: lighter;background-color: snow;border-left: 0;border-right: 0;border-radius: 0;" type="email" class="form-control border-top-0 border-right-0 border-left-0" id="email" name="email" placeholder="Digite seu email">
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
            <input style="font-weight: lighter;background-color: snow;border-left: 0;border-right: 0;border-radius: 0;" type="password" class="form-control border-top-0 border-right-0 border-left-0" id="senha" name="senha" placeholder="Crie sua senha">
        </div>
    </div>
    </div>
    <div class="row" style="width: 65%; margin-bottom: 15%;">
        <div class="col-6">
            <a href="/"<button style="width: 100%; font-weight: bold;" type="button" class="btn btn-outline-dark" id="enviar"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
            </svg> Voltar </button></a>
        </div>
        <div class="col-6">
            <button style="width: 100%; font-weight: bold;" type="submit" class="btn btn-outline-dark" id="enviar">Enviar
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                </svg>
            </button>
        </div>

     
    </div>
    

</form>

@endsection