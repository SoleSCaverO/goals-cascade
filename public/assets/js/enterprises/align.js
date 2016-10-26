$(document).on('ready',principal);

var goals_id = [];
var goals_name = [];

function principal()
{
    populate_goals();
    $('#add').on('click',addRow);
    $(document).on('click','[data-delete]',deleteRow);
    $('#formAlinear').on('submit', alinear);
}

function populate_goals()
{
    var enterprise = $('#id').val();
    $.ajax({
            url: '../corporatives-list-id/'+enterprise,
            dataType: "JSON",
            processData: false,
            contentType: false,
            method: 'GET'
        })
        .done(function( data ) {
            $.each(data,function(key,val){
                goals_id.push(val);
            });
        });

    $.ajax({
            url: '../corporatives-list-name/'+enterprise,
            dataType: "JSON",
            processData: false,
            contentType: false,
            method: 'GET'
        })
        .done(function( data ) {
            $.each(data,function(key,val){
                goals_name.push(val);
            });
        });
}
function addRow()
{
    var aligned = $('#aligned').val();
    if(!aligned)
    {
        showmessage('Ingrese el objetivo estratégico alineado',0);
        return;
    }

    var corporative_val = $('#corporatives :selected').val();

    if( !repeated_element(goals_id,corporative_val ) )
        if (!repeated_element(goals_name, aligned))
        {
            goals_id.push(corporative_val);
            goals_name.push(aligned);
        }
        else
        {
            showmessage('Ya existe una meta corporativa de negocio con ese nombre',0);
            return;
        }
    else
    {
        showmessage('La meta corporativa ya ha sido seleccionada',0);
        return;
    }

    var corporative = '';
    $.ajax({
            url: '../corporative/'+corporative_val,
            dataType: "JSON",
            processData: false,
            contentType: false,
            method: 'GET'
        })
        .done(function( data ) {
            corporative = data.name;
            $('#goals').append('<tr>' +
                    '<td data-id style="visibility:hidden;">'+corporative_val+'</td>'+
                    '<td data-aligned>'+aligned+'</td>'+
                    '<td>'+corporative+'</td>'+
                    '<td> '+
                        '<button data-delete class="btn btn-danger"  > Quitar </button> ' +
                    '</td>'+
                '</tr>>');
        });
}

function repeated_element(  array, element )
{
    if( array.length == 0 )
        return false;

    for( var i=0; i<array.length;i++ )
        if( array[i] == element )
            return true;
    return false;
}

function delete_element(  array, element )
{
    var pos = 0;
    for( var i=0; i<array.length;i++ )
        if( array[i] == element )
            pos = i;

    array.splice(pos,1);
}

function deleteRow()
{
    var $tr = $(this).parents('tr');
    var id = $tr.find('[data-id]').text();
    var aligned = $tr.find('[data-aligned]').text();
    delete_element(goals_id,id);
    delete_element(goals_name,aligned);
    $tr.remove();
}

function alinear()
{
    event.preventDefault();
    var formData = new FormData();
    var _token = $('#_token').val();
    var id = $('#id').val();
    formData.append( 'id',id ); //enterprise
    formData.append( 'aligned',JSON.stringify(goals_name) ); //aligned_ids
    formData.append( 'corporatives',JSON.stringify(goals_id) ); //corporative_ids

    $.ajax({
            url: $(this).attr("action"),
            data: formData,
            dataType: "JSON",
            processData: false,
            contentType: false,
            method: 'POST',
            headers: { 'X-CSRF-TOKEN': _token }
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