<?php


/**
 * Skeleton subclass for representing a row from the 'campo_resultado_patogeno' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 03/04/13 14:47:32
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class CampoResultadoPatogeno extends BaseCampoResultadoPatogeno {
   public function __toString(){
		$full_name= $this->getResultado();
		return $full_name;
	}
} // CampoResultadoPatogeno
