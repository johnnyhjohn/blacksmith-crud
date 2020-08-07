@extends('index')
@section('title', 'Create Reinos')
@section('content')
    <section>
        <h2 class="section-title">Editar Reino <a href="/reino" class="btn btn-primary">Voltar</a></h2>
        <div class="card">
            <div class="card-body">
                <div id="mensagem"></div>
                
                <form>
                    <input type="hidden" id="id" value="{{ $reino->id }}">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" value="{{ $reino->nome }}">
                    <label for="sigla">Sigla</label>
                    <input type="text" class="form-control" id="sigla" value="{{ $reino->sigla }}">
                    <button id="btn-update" class="btn btn-success">Atualizar</button>
                </form>
            </div>
        </div>
    </section>

    <script src="/js/reino/reino.js"></script>
@stop