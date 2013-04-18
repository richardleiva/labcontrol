<h1>Muestras List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre responsable</th>
      <th>Fecha recepcion</th>
      <th>Fecha entrega</th>
      <th>Hora recepcion</th>
      <th>Codigo interno</th>
      <th>Cantidad</th>
      <th>Temperatura recepcion</th>
      <th>Temperatura almacenamiento</th>
      <th>Observaciones</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Usuario</th>
      <th>Muestreo</th>
      <th>Presentacion</th>
      <th>Norma</th>
      <th>Cliente</th>
      <th>Tipo muestra</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Muestras as $Muestra): ?>
    <tr>
      <td><a href="<?php echo url_for('muestra/show?id='.$Muestra->getId()) ?>"><?php echo $Muestra->getId() ?></a></td>
      <td><?php echo $Muestra->getNombreResponsable() ?></td>
      <td><?php echo $Muestra->getFechaRecepcion() ?></td>
      <td><?php echo $Muestra->getFechaEntrega() ?></td>
      <td><?php echo $Muestra->getHoraRecepcion() ?></td>
      <td><?php echo $Muestra->getCodigoInterno() ?></td>
      <td><?php echo $Muestra->getCantidad() ?></td>
      <td><?php echo $Muestra->getTemperaturaRecepcion() ?></td>
      <td><?php echo $Muestra->getTemperaturaAlmacenamiento() ?></td>
      <td><?php echo $Muestra->getObservaciones() ?></td>
      <td><?php echo $Muestra->getCreatedAt() ?></td>
      <td><?php echo $Muestra->getUpdatedAt() ?></td>
      <td><?php echo $Muestra->getUsuarioId() ?></td>
      <td><?php echo $Muestra->getMuestreoId() ?></td>
      <td><?php echo $Muestra->getPresentacionId() ?></td>
      <td><?php echo $Muestra->getNormaId() ?></td>
      <td><?php echo $Muestra->getClienteId() ?></td>
      <td><?php echo $Muestra->getTipoMuestraId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('muestra/new') ?>">New</a>

  
