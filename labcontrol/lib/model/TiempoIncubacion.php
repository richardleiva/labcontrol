<?php


/**
 * Skeleton subclass for representing a row from the 'tiempo_incubacion' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 03/04/13 14:47:34
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class TiempoIncubacion extends BaseTiempoIncubacion {
    public function __toString(){
		$full_name= $this->getTiempo();
		return $full_name;
	}
} // TiempoIncubacion
