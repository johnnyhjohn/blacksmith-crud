const urlMethods = ['GET', 'DELETE'];
const CONSTANTS = {
    SUCCESS_CODE : 'SUCCESS'
}

const buildAjax =  ( method, url, obj=null ) => {

    let options = {
        type: method,
        url: url
    }

    if( !urlMethods.includes(method) ) {
        options.data = obj;
    }

    return $.ajax( options );
}

const enrichMensagemTags = ( mensagemId, dataResponse ) => {
    $(mensagemId).addClass(dataResponse.codigo);
    $(mensagemId).html(dataResponse.mensagem);
}

const cleanMensagemTags = (mensagemId) => {
    $(mensagemId).attr('class', '');
    $(mensagemId).html('');
}

const closeModal = () => {
    $("#modal-delete").removeClass(["open", "show"]);
}