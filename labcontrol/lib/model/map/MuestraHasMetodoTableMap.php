<?php


/**
 * This class defines the structure of the 'muestra_has_metodo' table.
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
class MuestraHasMetodoTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.MuestraHasMetodoTableMap';

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
		$this->setName('muestra_has_metodo');
		$this->setPhpName('MuestraHasMetodo');
		$this->setClassname('MuestraHasMetodo');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('MUESTRA_ID', 'MuestraId', 'INTEGER', 'muestra', 'ID', true, null, null);
		$this->addForeignKey('METODO_ID', 'MetodoId', 'INTEGER', 'metodo', 'ID', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Muestra', 'Muestra', RelationMap::MANY_TO_ONE, array('muestra_id' => 'id', ), 'CASCADE', null);
    $this->addRelation('Metodo', 'Metodo', RelationMap::MANY_TO_ONE, array('metodo_id' => 'id', ), 'CASCADE', null);
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
		);
	} // getBehaviors()

} // MuestraHasMetodoTableMap