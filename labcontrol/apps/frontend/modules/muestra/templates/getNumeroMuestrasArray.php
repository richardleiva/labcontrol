<h1>Muestras List</h1>

<table>
  <thead>
    <tr>
      <th>El numero total de muestras es:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
	  <td><?php echo $this->$MuestraPeer::getNumeroMuestras() ?></td>
    </tr>
  </tbody>
</table>

  <a href="<?php echo url_for('muestra/new') ?>">New</a>
  <p>El numero total de muestras es:</p>

  
