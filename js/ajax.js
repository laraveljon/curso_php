
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

function Enviar_edad(){

  var edad = $("#edad").val();
  var dataGral = "edad="+edad;

   $.ajax({
      type:'POST',
      //dataType:'json',
      url:'recibe2.php',
      data: dataGral,
        success : function(data){

           $("#respuesta").html(data);
           $('#respuesta').fideIn(1500);

        }
   });
}

function cantidad(){

  var cantidad = $("#cantidad").val();
  var dataGral = "cantidad="+cantidad;

   $.ajax({
      type:'POST',
      //dataType:'json',
      url:'recibe3.php',
      data: dataGral,
        success : function(data){

           $("#respuesta").html(data);
           $('#respuesta').fideIn(1500);

        }
   });

}

function calular(){

  var fila = $("#fila").val();
  var columna =$("#columna").val();
  var dataGral = "fila="+fila+"&columna="+columna;


   $.ajax({
      type:'POST',
      //dataType:'json',
      url:'recibe4.php',
      data: dataGral,
        success : function(data){

           $("#respuesta").html(data);
           $('#respuesta').fideIn(1500);

        }
   });

}
