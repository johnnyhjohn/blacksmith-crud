@extends('index')
@section('title', 'Material')
@section('content')
    
    <section>
        <h2 class="section-title">Material <a href="/material/create" class="btn btn-success">Criar</a></h2>
        <div class="card">
            <div class="card-body">
            <table class="table">
			<thead>
				<tr>
					<th class="text-center">Cod</th>
					<th>Nome</th>
					<th class="text-left">Quantidade</th>
                    <th class="text-left">Valor</th>
					<th class="text-center">Ações</th>
				</tr>
			</thead>
			<tbody class="table-clientes">
                @foreach($materiais as $material)
                <tr>
                    <td class="text-center"> {{ $material->id }}</td>
                    <td>{{ $material->nome }}</td>	
                    <td class="text-left">{{ $material->quantidade }}</td>	
                    <td class="text-left">{{ $material->valor }}</td>	
                    <td class="text-center">
                        <a href="/imperio/update/{{$material->id}}"><button data-id="{{ $material->id }}" class="btn btn-primary btn-blue"><i class="fa fa-pencil"></i></button></a>
                        <button data-id="{{ $material->id }}" class="btn btn-danger btn-red"><i class="fa fa-trash"></i></button>
                    </td>	
                </tr>
				@endforeach
			</tbody>
            </table>
            </div>
        </div>
    </section>
@stop