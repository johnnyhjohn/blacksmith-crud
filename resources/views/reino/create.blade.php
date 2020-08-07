@extends('index')
@section('title', 'Create Reinos')
@section('content')
    <section>
        <h2 class="section-title">Criar Reinos<a href="/reino" class="btn btn-primary">Voltar</a></h2>
        <div class="card">
            <div class="card-body">
                <div id="mensagem"></div>
                <form>
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name">
                    <label for="sigla">Sigla</label>
                    <input type="text" class="form-control" id="sigla">
                    <label for="imperios">Imperios</label>
                    <select id="imperios">
                    @foreach($imperios as $imperio)
                    <option value="{{$imperio->id}}">{{$imperio->nome}} </option>
                    @endforeach
                    </select>

                    <button id="btn-criar" class="btn btn-success">Criar</button>
                </form>
            </div>
        </div>
    </section>
    <script src="/js/reino/reino.js"></script>
@stop