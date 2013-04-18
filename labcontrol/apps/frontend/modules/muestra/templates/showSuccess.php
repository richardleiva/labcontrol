<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Muestra->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre responsable:</th>
      <td><?php echo $Muestra->getNombreResponsable() ?></td>
    </tr>
    <tr>
      <th>Fecha recepcion:</th>
      <td><?php echo $Muestra->getFechaRecepcion() ?></td>
    </tr>
    <tr>
      <th>Fecha entrega:</th>
      <td><?php echo $Muestra->getFechaEntrega() ?></td>
    </tr>
    <tr>
      <th>Hora recepcion:</th>
      <td><?php echo $Muestra->getHoraRecepcion() ?></td>
    </tr>
    <tr>
      <th>Codigo interno:</th>
      <td><?php echo $Muestra->getCodigoInterno() ?></td>
    </tr>
    <tr>
      <th>Cantidad:</th>
      <td><?php echo $Muestra->getCantidad() ?></td>
    </tr>
    <tr>
      <th>Temperatura recepcion:</th>
      <td><?php echo $Muestra->getTemperaturaRecepcion() ?></td>
    </tr>
    <tr>
      <th>Temperatura almacenamiento:</th>
      <td><?php echo $Muestra->getTemperaturaAlmacenamiento() ?></td>
    </tr>
    <tr>
      <th>Observaciones:</th>
      <td><?php echo $Muestra->getObservaciones() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $Muestra->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $Muestra->getUpdatedAt() ?></td>
    </tr>
    <tr>
      <th>Usuario:</th>
      <td><?php echo $Muestra->getUsuarioId() ?></td>
    </tr>
    <tr>
      <th>Muestreo:</th>
      <td><?php echo $Muestra->getMuestreoId() ?></td>
    </tr>
    <tr>
      <th>Presentacion:</th>
      <td><?php echo $Muestra->getPresentacionId() ?></td>
    </tr>
    <tr>
      <th>Norma:</th>
      <td><?php echo $Muestra->getNormaId() ?></td>
    </tr>
    <tr>
      <th>Cliente:</th>
      <td><?php echo $Muestra->getClienteId() ?></td>
    </tr>
    <tr>
      <th>Tipo muestra:</th>
      <td><?php echo $Muestra->getTipoMuestraId() ?></td>
    </tr>
  </tbody>
</table>

<hr />
<a href="<?php echo url_for('muestra/edit?id='.$Muestra->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('muestra/index') ?>">List</a>
