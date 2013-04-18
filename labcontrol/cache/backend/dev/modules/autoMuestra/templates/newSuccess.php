<?php use_helper('I18N', 'Date') ?>
<?php include_partial('muestra/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Muestra', array(), 'messages') ?></h1>

  <?php include_partial('muestra/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('muestra/form_header', array('Muestra' => $Muestra, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('muestra/form', array('Muestra' => $Muestra, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('muestra/form_footer', array('Muestra' => $Muestra, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
