  $(document).ready(function(){
       $(".dropdown-toggle").dropdown();

       //$('#tabla').dataTable();
       
        $('#tabla').dataTable( {
        "aaSorting": [[ 9, "desc" ]],
        "aoColumns": [
                null,
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

       $(".alert").fadeOut(9000);

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




      $(function (){

                $("#tel_con").mask("(999) 999-9999" ,{placeholder:" "});
                $("#tel_res1").mask("(999) 999-9999" ,{placeholder:" "});
                $("#tel_res2").mask("(999) 999-9999" ,{placeholder:" "});
                
                $("#ced_pas").mask("999-9999999-9");
                $("#fec_nac").mask("99/99/9999");
                

          });


             
           function aplicar(){
                document.forms.formg.action = "?accion=add-data";                
                document.forms.formg.submit();


           }  


           function guardar(){

                document.forms.formg.action = "?accion=addg-data";                
                document.forms.formg.submit();

             

           }

