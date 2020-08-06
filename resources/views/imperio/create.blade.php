@extends('index')
@section('title', 'Create Impérios')
@section('content')
    <section>
        <h2 class="section-title">Criar Império</h2>
        <div class="card">
            <div class="card-body">
                <div id="mensagem"></div>
                <form>
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="name">
                    <label for="exampleInputEmail1">Sigla</label>
                    <input type="text" class="form-control" id="sigla">
                    <button id="btn-criar" class="btn btn-success">Criar</button>
                </form>
            </div>
        </div>
    </section>
@stop