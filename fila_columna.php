<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
  </head>
  <body>
    <center>
       <table>
         <tr>
           <td>
             <label for="">
               Introdusca la fila :
             <input type="text" id="fila" name="fila"/>
             </label>
           </td>
         <tr>
       <tr>
         <td>
           <label for="">
             Introdusca la columna :
           <input type="text" id="columna" name="columna"/>
           </label>
         </td>
       </tr>
       </table>
       <br>
      <input type="button" value="Enviar"/ onclick="calular();">

      <div id="respuesta"></div>
    </center>
  </body>
</html>
