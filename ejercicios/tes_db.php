<?php
require_once('habilidad.php');
$usu = new Habilidad();
$id=2;
$data['usu_id']="1";
$data['hab_descripcion']="administrador de servidores";

//$usu->update($id, $data);
$habilidad= $usu->get($id);
//foreach($habilidad as $item){
//echo $item  // array unidimencional o vector
//}
 ?>  	
 <table>
     <thead>
         <tr>
             <th>ID</th>
             <th>ID_us</th>
             <th>Descripcion</th>
         </tr>
     </thead>
     <tbody>
         <?php foreach($habilidad as $item): ?>
         <tr>
             <td><?php echo $item['hab_id'] ?></td>
             <td><?php echo $item['usu_id'] ?></td>
             <td><?php echo $item['hab_descripcion'] ?></td>
         </tr>
         <?php endforeach; ?>
     </tbody>
 </table>	 	  	 	
   	   	