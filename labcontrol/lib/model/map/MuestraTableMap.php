<?php


/**
 * This class defines the structure of the 'muestra' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 04/08/13 15:58:29
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class MuestraTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.MuestraTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('muestra');
		$this->setPhpName('Muestra');
		$this->setClassname('Muestra');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NOMBRE_RESPONSABLE', 'NombreResponsable', 'VARCHAR', false, 255, null);
		$this->addColumn('FECHA_RECEPCION', 'FechaRecepcion', 'TIMESTAMP', false, null, null);
		$this->addColumn('FECHA_ENTREGA', 'FechaEntrega', 'TIMESTAMP', false, null, null);
		$this->addColumn('HORA_RECEPCION', 'HoraRecepcion', 'TIMESTAMP', false, null, null);
		$this->addColumn('CODIGO_INTERNO', 'CodigoInterno', 'VARCHAR', false, 255, null);
		$this->addColumn('CANTIDAD', 'Cantidad', 'FLOAT', false, null, null);
		$this->addColumn('TEMPERATURA_RECEPCION', 'TemperaturaRecepcion', 'VARCHAR', false, 45, null);
		$this->addColumn('TEMPERATURA_ALMACENAMIENTO', 'TemperaturaAlmacenamiento', 'VARCHAR', false, 45, null);
		$this->addColumn('OBSERVACIONES', 'Observaciones', 'LONGVARCHAR', false, null, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		$this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
		$this->addForeignKey('USUARIO_ID', 'UsuarioId', 'INTEGER', 'user_profile', 'ID', true, null, null);
		$this->addForeignKey('MUESTREO_ID', 'MuestreoId', 'INTEGER', 'muestreo', 'ID', true, null, null);
		$this->addForeignKey('PRESENTACION_ID', 'PresentacionId', 'INTEGER', 'presentacion', 'ID', true, null, null);
		$this->addForeignKey('NORMA_ID', 'NormaId', 'INTEGER', 'norma', 'ID', true, null, null);
		$this->addForeignKey('CLIENTE_ID', 'ClienteId', 'INTEGER', 'cliente', 'ID', true, null, null);
		$this->addForeignKey('TIPO_MUESTRA_ID', 'TipoMuestraId', 'INTEGER', 'tipo_muestra', 'ID', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('UserProfile', 'UserProfile', RelationMap::MANY_TO_ONE, array('usuario_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Muestreo', 'Muestreo', RelationMap::MANY_TO_ONE, array('muestreo_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Presentacion', 'Presentacion', RelationMap::MANY_TO_ONE, array('presentacion_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Norma', 'Norma', RelationMap::MANY_TO_ONE, array('norma_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Cliente', 'Cliente', RelationMap::MANY_TO_ONE, array('cliente_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('TipoMuestra', 'TipoMuestra', RelationMap::MANY_TO_ONE, array('tipo_muestra_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('MuestraHasMetodo', 'MuestraHasMetodo', RelationMap::ONE_TO_MANY, array('id' => 'muestra_id', ), 'CASCADE', null);
    $this->addRelation('Resultado', 'Resultado', RelationMap::ONE_TO_MANY, array('id' => 'muestra_id', ), null, null);
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
			'symfony_timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
		);
	} // getBehaviors()

} // MuestraTableMap
