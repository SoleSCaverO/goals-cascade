$(document).on('ready',principal);

var $modalRegistrar;
var $modalEditar;
var $modalEliminar;

function principal()
{
    $modalRegistrar = $('#modalRegistrar');
    $modalEditar = $('#modalEditar');
    $modalEliminar = $('#modalEliminar');

    // Botones
    $('#new').on('click', mostrarRegistrar);
    $('[data-edit]').on('click', mostrarEditar);
    $('[data-delete]').on('click', mostrarEliminar);

    $('#formRegistrar').on('submit', perspective);
    $('#formEditar').on('submit', perspective);
    $('#formEliminar').on('submit', deletePerspective);
}
function mostrarRegistrar()
{
    $modalRegistrar.modal('show');
}

function mostrarEditar()
{
    var id = $(this).data('edit');
    var name = $(this).data('name');

    $modalEditar.find('[name="id"]').val(id);
    $modalEditar.find('[name="name"]').val(name);
    $modalEditar.modal('show')
}

function mostrarEliminar()
{
    var id = $(this).data('delete');
    var name = $(this).data('name');

    $modalEliminar.find('[name="id"]').val(id);
    $modalEliminar.find('[name="name"]').val(name);
    $modalEliminar.modal('show')
}

function perspective()
{
    event.preventDefault();

    $.ajax({
            url: $(this).attr("action"),
            data: new FormData(this),
            dataType: "JSON",
            processData: false,
            contentType: false,
            method: 'POST'
        })
        .done(function( response ) {
            if(response.error)
                showmessage(response.message,0);
            else{
                showmessage(response.message,1);
                setTimeout(function(){
                    location.reload();
                }, 500);
            }
        });
}

function deletePerspective()
{
    event.preventDefault();


    $.ajax({
            url: $(this).attr("action"),
            data: new FormData(this),
            dataType: "JSON",
            processData: false,
            contentType: false,
            method: 'POST'
        })
        .done(function( response ) {
            if(response.error)
                showmessage(response.message,0);
            else{
                showmessage(response.message,1);
                setTimeout(function(){
                    location.reload();
                }, 500);
            }
        });
}