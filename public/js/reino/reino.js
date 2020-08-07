$(document).on("click","#btn-criar",async function(e){
    e.preventDefault()
     cleanMensagemTags("#mensagem");
    
    let reino = {
        imperioid:$("#imperios").val(),
        nome:$("#name").val(),
        sigla:$("#sigla").val(),
    }
     
     const request = await buildAjax('POST', '/reino/create', reino);
      enrichMensagemTags("#mensagem",request[0]);
     if(request[0].codigo == CONSTANTS.SUCCESS_CODE) {
        $('#name').val('');
        $('#sigla').val('');
    }


})
