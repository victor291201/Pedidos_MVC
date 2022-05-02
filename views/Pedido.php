<h1> Haz tu pedido</h1>

<form method = "post">
     <table>
          <tr>
              <td class="sinl">Mesa</td>
              <td class="sinl">
                    <select name="mesa" class=" required>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="1">5</option>
                         <option value="2">6</option>
                         <option value="3">7</option>
                         <option value="4">8</option>
                         <option value="1">9</option>
                         <option value="2">10</option>
                         <option value="3">11</option>
                         <option value="4">12</option>
                         <option value="1">13</option>
                         <option value="2">14</option>
                         <option value="3">15</option>
                         <option value="4">16</option>
                         <option value="1">17</option>
                         <option value="2">18</option>
                         <option value="3">19</option>
                         <option value="4">20</option>
                    </select>
              </td>
         </tr>
         <tr>
              <td class="sinl">Descripcion</td>
              <td class="sinl"><textarea type="text" name="descripcion" rows="5" cols="30" required></textarea></td>
        </tr>
        <tr>
            <td class="sinl"></td>
            <td class="sinl btns">
               <button id="btn" style="border:1px solid gray; border-radius:3px">
                    Ver pedido
               </button>
               <input type="submit" value= "Agregar" />
               <script type="text/javascript">
                    document.getElementById("btn").addEventListener("click", function(event){
                         event.preventDefault();
                         window.location.href='?action=VPedido';
                    })   
               </script>
            </td>
        </tr>
     </table>
</form>
