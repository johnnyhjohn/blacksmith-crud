$(document).ready( function() {    

    const enrichImperioObj = () => {
        return {
            nome : $('#name').val(),
            sigla : $('#sigla').val()
        }
    }
    
    $(document).on('click', '#btn-criar', async (e) => {
        e.preventDefault();
        cleanMensagemTags("#mensagem");

        let obj =  enrichImperioObj();
        
        const request = await buildAjax('POST', '/imperio/create', obj);
        enrichMensagemTags("#mensagem",request[0]);

        if(request[0].codigo == CONSTANTS.SUCCESS_CODE) {
            $('#name').val('');
            $('#sigla').val('');
        }
    })

    $(document).on('click', '#btn-confirm-delete', async function(e) {
        e.preventDefault();
        e.stopPropagation();
        cleanMensagemTags("#mensagem");
        let imperioId = $(this).attr('data-id');
        const request = await buildAjax('DELETE', `/imperio/${imperioId}`);
        enrichMensagemTags( "#mensagem",request[0]);
        rebuildTable(JSON.parse( request[0].objeto) );
        closeModal();
    })
        
    $(document).on('click', '#btn-update', async (e) => {
        e.preventDefault();
        cleanMensagemTags("#mensagem");

        let obj = enrichImperioObj();
        obj.id = $('#id').val();
        
        const request = await buildAjax('PUT', '/imperio/update', obj);
        enrichMensagemTags( "#mensagem",request[0]);
    });

    $(document).on('click', '.btn-modal', function(e) {
        e.preventDefault();
        let imperioId = $(this).attr('data-id');
        $("#modal-delete").addClass(["open", "show"]);
        $("#btn-confirm-delete").attr('data-id', imperioId);
    });

    $(document).on('click', '.close-modal', function(e) {
        e.preventDefault();
        closeModal();
    })

    const rebuildTable = ( imperios ) => {
        let tableImperios = $('.table-imperios');

        tableImperios.html('');
        imperios.map( value =>  {
            tableImperios.append(`
                <tr>
                    <td class="text-center"> ${value.id}</td>
                    <td>${value.nome}</td>	
                    <td class="text-left">${value.sigla}</td>	
                    <td class="text-center">
                        <a href="/imperio/update/${value.id}"><button data-id="${value.id}" class="btn btn-primary btn-blue"><i class="fa fa-pencil"></i></button></a>
                        <button data-id="${value.id}" class="btn btn-danger btn-red btn-modal"><i class="fa fa-trash"></i></button>
                    </td>	
                </tr>
            `);
        });
    }

})