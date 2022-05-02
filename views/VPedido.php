<h1> Ver Pedido</h1>

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
                         <td><?php echo "<a href='index.php?action=VPedido&ind=".$value["id"]."'>Eliminar</a>";?>
                         </td>
                    </tr>
               <?php endforeach?>
          </tbody>
          
     </table>
               <input type="submit" onclick="window.location.href='?action=Pedido'" value= "Volver" />
     