<?php
/*********************************************************************************
 * "Powered by BizForce"
 * BFtool 1.0 2019.12.02
 * Modules: BFD_Connects, Contacts
 ********************************************************************************/
$dictionary["bf_connects_contacts_collection"] = array (
    'bf_connects_contacts_collection' => 'many-to-many',
    'relationships' => array (
        'bf_connects_contacts_collection' => array (
            'rhs_module' => 'BF_Connects',
            'rhs_table' => 'bf_connects',
            'lhs_key' => 'id',
            'lhs_module' => 'Contacts',
            'lhs_table' => 'contacts',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'bf_connects_contacts_collection',
            'join_key_lhs' => 'bf_connects_contacts_collection_ida',
            'join_key_rhs' => 'bf_connects_contacts_collection_idb',
        ),
    ),
    'table' => 'bf_connects_contacts_collection',
    'fields' => array (
        0 => array (
            'name' => 'id',
            'type' => 'varchar',
            'len' => 36,
        ),
        1 => array (
            'name' => 'date_modified',
            'type' => 'datetime',
        ),
        2 => array (
            'name' => 'deleted',
            'type' => 'bool',
            'len' => '1',
            'default' => '0',
            'required' => true,
        ),
        3 => array (
            'name' => 'bf_connects_contacts_collection_ida',
            'type' => 'varchar',
            'len' => 36,
        ),
        4 => array (
            'name' => 'bf_connects_contacts_collection_idb',
            'type' => 'varchar',
            'len' => 36,
        ),
    ),
    'indices' => array (
        0 => array (
            'name' => 'bf_connects_contacts_collectionspk',
            'type' => 'primary',
            'fields' => array (
                0 => 'id',
            ),
        ),
        1 => array (
            'name' => 'bf_connects_contacts_collection_alt',
            'type' => 'alternate_key',
            'fields' => array (
                0 => 'bf_connects_contacts_collection_ida',
                1 => 'bf_connects_contacts_collection_idb',
            ),
        ),
    ),
);