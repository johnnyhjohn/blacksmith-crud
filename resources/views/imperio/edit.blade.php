@extends('index')
@section('title', 'Create Impérios')
@section('content')
    <section>
        <h2 class="section-title">Editar Império <a href="/imperio" class="btn btn-primary">Voltar</a></h2>
        <div class="card">
            <div class="card-body">
                <div id="mensagem"></div>
                <form>
                    <input type="hidden" id="id" value="{{ $imperio->id }}">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="name" value="{{ $imperio->nome }}">
                    <label for="exampleInputEmail1">Sigla</label>
                    <input type="text" class="form-control" id="sigla" value="{{ $imperio->sigla }}">
                    <button id="btn-update" class="btn btn-success">Atualizar</button>
                </form>
            </div>
        </div>
    </section>

    <script src="/js/imperio/imperio.js"></script>
@stop