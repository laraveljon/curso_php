
function Enviar(){

     var nombre = $("#nombre").val();
     var dataGral = "nombre="+nombre;
     //alert(dataGral);
      $.ajax({
         type:'POST',
         //dataType:'json',
         url:'recibe.php',
         data: dataGral,
           success : function(data){

              $("#respuesta").html(data);
              $('#respuesta').fideIn(1500);

           }
      });
}
