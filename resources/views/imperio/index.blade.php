@extends('index')
@section('title', 'Impérios')
@section('content')
    
    <section>
        <h2 class="section-title">Imperio <a href="/imperio/create" class="btn btn-success">Criar</a></h2>
        <div class="card">
            <div class="card-body">
            <table class="table">
			<thead>
				<tr>
					<th class="text-center">Cod</th>
					<th>Nome</th>
					<th class="text-left">Sigla</th>
					<th class="text-center">Ações</th>
				</tr>
			</thead>
			<tbody class="table-clientes">
                @foreach($imperios as $imperio)
                <tr>
                    <td class="text-center"> {{ $imperio->id }}</td>
                    <td>{{ $imperio->nome }}</td>	
                    <td class="text-left">{{ $imperio->sigla }}</td>	
                    <td class="text-center">
                        <a href="/imperio/update/{{$imperio->id}}"><button data-id="{{ $imperio->id }}" class="btn btn-primary btn-blue"><i class="fa fa-pencil"></i></button></a>
                        <button data-id="{{ $imperio->id }}" class="btn btn-danger btn-red"><i class="fa fa-trash"></i></button>
                    </td>	
                </tr>
				@endforeach
			</tbody>
            </table>
            </div>
        </div>
    </section>
@stop