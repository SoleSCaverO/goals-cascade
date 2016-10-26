$(document).on('ready',principal);

var $modalAlinear;
function principal()
{
    $modalAlinear = $('#modalAlinear');
    $('[data-id]').on('click', mostrarAlinear);
    $('#formAlinear').on('submit', alinear);
}

function mostrarAlinear()
{
    var id = $(this).data('id');
    var name = $(this).data('name');
    var it = $(this).data('it');
    var align = $(this).data('align');
    $modalAlinear.find('[name=name]').val(name);
    $modalAlinear.find('[name=id]').val(id);

    var url =  '../public/objetivos-estrategicos-ti/'+id;

    $.getJSON(url,function(data)
    {
        var i = 0;
        $('#its').html('');
        $.each(data,function(key,value)
        {
            if( align == 1 )
            {
                if ( value.id == it )
                    $('#its').append('<input type="checkbox" name="its" value="'+value.id+'" checked>'+value.name+'<br>');
                else
                    $('#its').append('<input type="checkbox" name="its" value="'+value.id+'">'+value.name+'<br>');
            }else
            {
                if(i == 0 )
                {
                    $('#its').append('<input type="checkbox" name="its" value="'+value.id+'" checked>'+value.name+'<br>');
                    i=1;
                }
                else
                    $('#its').append('<input type="checkbox" name="its" value="'+value.id+'">'+value.name+'<br>');
            }
        });
    });
    setTimeout(function() {
        $modalAlinear.modal('show');
    }, 800);
}

function alinear()
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