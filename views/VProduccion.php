<h1> Ver Produccion</h1>

     <table>
          <thead>
               <tr>
                    <th>Mesa</th>
                    <th>Descripcion</th>
                    <th>Accion</th>
               </tr>
          </thead>
          <tbody>
               <?php foreach($this->datos as $key => $value):?>
                    <tr>
                         <td><?php echo $value["mesa"];?></td>
                         <td><?php echo $value["descripcion"];?></td>
                         <td><?php echo "<a href='index.php?action=VProduccion&ind=".$value["id"]."'>Finalizar</a>";?>
                         </td>
                    </tr>
               <?php endforeach?>
          </tbody>
          
     </table>
               <input type="submit" onclick="window.location.href='index.php'" value= "Volver" />
     