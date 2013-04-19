  $(document).ready(function(){
       $(".dropdown-toggle").dropdown();

       //$('#tabla').dataTable();

        $('#tabla').dataTable( {
        "aaSorting": [[ 8, "desc" ]],
        "aoColumns": [
                null,
                null,
                null,
                null,
                null,
                null,
                null,
                
                null
        ]
        } );

       $("input.file").si();

     });

  function eliminar(){

                    if (confirm("¿Realmente desea eliminar esta selección?")) {
                   //       //window.location=ruta;
                          document.form.submit();

                    }
                   //alert("ok");

             }



             function checkTodos (id,pID) {

                 $( "#" + pID + " :checkbox").attr('checked', $('#' + id).is(':checked'));

            }