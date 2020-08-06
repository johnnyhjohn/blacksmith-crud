$(document).ready( function() {    
    
    $(document).on('click', '#btn-criar', function(e) {
        e.preventDefault();

        $("#mensagem").removeClass('SUCCESS').removeClass('DANGER');
        $("#mensagem").html('');

        let obj =  {
            nome : $('#name').val(),
            sigla : $('#sigla').val()
        };
        
        $.ajax({
            type:'POST',
            url:'/imperio/create',
            data: obj,
            success: (data) => {
                $("#mensagem").addClass(data[0].codigo);
                $("#mensagem").html(data[0].mensagem);
                if(data[0].codigo == 'SUCCESS') {
                    $('#name').val('');
                    $('#sigla').val('');
                }
            }
        });
    })

        
    $(document).on('click', '#btn-update', function(e) {
        e.preventDefault();

        $("#mensagem").removeClass('SUCCESS').removeClass('DANGER');
        $("#mensagem").html('');

        let obj =  {
            id : $('#id').val(),
            nome : $('#name').val(),
            sigla : $('#sigla').val()
        };
        
        $.ajax({
            type:'PUT',
            url:'/imperio/update',
            data: obj,
            success: (data) => {
                $("#mensagem").addClass(data[0].codigo);
                $("#mensagem").html(data[0].mensagem);
            }
        });
    })

})