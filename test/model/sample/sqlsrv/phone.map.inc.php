<?php
$xpdo_meta_map['Phone']= array (
  'package' => 'sample',
  'table' => 'phone',
  'fields' => 
  array (
    'type' => '',
    'number' => NULL,
    'date_modified' => 'CURRENT_TIMESTAMP',
  ),
  'fieldMeta' => 
  array (
    'type' => 
    array (
      'dbtype' => 'enum',
      'precision' => '\'\',\'home\',\'work\',\'mobile\'',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'number' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '20',
      'phptype' => 'string',
      'null' => false,
    ),
    'date_modified' => 
    array (
      'dbtype' => 'datetime',
      'phptype' => 'datetime',
      'null' => false,
      'default' => 'CURRENT_TIMESTAMP',
    ),
  ),
  'indexes' => 
  array (
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'columns' => 
      array (
        'id' => 
        array (
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'composites' => 
  array (
    'PersonPhone' => 
    array (
      'class' => 'PersonPhone',
      'local' => 'id',
      'foreign' => 'phone',
      'cardinality' => 'many',
      'owner' => 'local',
    ),
  ),
);
