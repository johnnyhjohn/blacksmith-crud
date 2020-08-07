@extends('index')
@section('title', 'Reinos')
@section('content')
    
    <section>
        <h2 class="section-title">Reinos <a href="/reino/create" class="btn btn-success">Criar</a></h2>
        <div class="card">
            <div id="mensagem"></div>
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
			<tbody class="table-imperios">
                @foreach($reinos as $reino)
                <tr>
                    <td class="text-center"> {{ $reino->id }}</td>
                    <td>{{ $reino->nome }}</td>	
                    <td class="text-left">{{ $reino->sigla }}</td>	
                    <td class="text-center">
                        <a href="/reino/update/{{$reino->id}}"><button data-id="{{ $reino->id }}" class="btn btn-primary btn-blue"><i class="fa fa-pencil"></i></button></a>
                        <button data-id="{{ $reino->id }}" class="btn btn-danger btn-red btn-modal"><i class="fa fa-trash"></i></button>
                    </td>	
                </tr>
				@endforeach
			</tbody>
            </table>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ATENÇÃO</h5>
            <button type="button" class="close close-modal" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Deseja deletar esse reino?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary close-modal" data-dismiss="modal">Close</button>
            <button type="button" id="btn-confirm-delete" class="btn btn-primary">Deletar</button>
        </div>
        </div>
    </div>
    </div>
    <script src="/js/imperio/imperio.js"></script>
@stop