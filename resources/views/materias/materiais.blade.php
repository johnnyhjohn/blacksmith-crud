@extends('index')
@section('title', 'Materiais')
@section('contet')
    <section>
    <h2 class="section-title">Materias<a href="/imperio" class="btn btn-primary">Voltar</a></h2>
        <div class="card">
            <div class="card-body">
                <div id="mensagem"></div>
                <table class="table">
                <thead>
                <tr>
                    <th class="text-center">Cod</th>
                    <th>Material</th>
                </tr>
                </thead>
                </table>
            </div>
        </div>
    </section>
    @stop