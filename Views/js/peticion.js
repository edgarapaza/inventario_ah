$(obtener_registros());

function obtener_registros(productos)
{
    console.log(productos);
    $.ajax({
        url: '../Models/consulta.php',
        type : 'POST',
        dataType : 'html',
        data : {productos: productos},
    })

    .done(function(resultado){
        $("#tabla_resultado").html(resultado);
    })
}
$(document).on('keyup', '#busqueda', function()
{
    var valorBusqueda=$(this).val();
    if(valorBusqueda!="")
    {
    
        obtener_registros(valorBusqueda);
    }
    else {
        
        obtener_registros();
    }
});