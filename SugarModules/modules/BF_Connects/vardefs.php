<?php
/*********************************************************************************
 * "Powered by BizForce"
 * BFtool  1.0 2019.12.02
 * Module: BF_Connects
 ********************************************************************************/

$dictionary['BF_Connects'] = array(
    'table'=>'bf_connects',
    'audited'=>true,
    'duplicate_merge'=>true,
    'fields'=>array (
        'address_link' => array (
            'required' => false,
            'name' => 'address_link',
            'vname' => 'LBL_ADDRESS_LINK',
            'type' => 'varchar',
            'massupdate' => 0,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => true,
            'reportable' => true,
            'unified_search' => true,
            'merge_filter' => 'disabled',
            'len' => '255',
            'size' => '20',
        ),
        'title' => array (
            'required' => true,
            'name' => 'title',
            'vname' => 'LBL_TITLE',
            'type' => 'enum',
            'massupdate' => 0,
            'default' => '',
            'no_default' => false,
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'options' => 'connects_title_list',
        ),
        'attribute' => array (
            'required' => true,
            'name' => 'attribute',
            'vname' => 'LBL_ATTRIBUTE',
            'type' => 'bool',
            'massupdate' => 0,
            'default' => '0',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
        ),
        'description' => array(
            'name' => 'description',
            'vname' => 'LBL_DESCRIPTION',
            'type' => 'text',
            'comment' => 'Full text of the note',
            'rows' => 1,
            'cols' => 80,
        ),
        'bf_connects_collection' => array (
            'name' => 'bf_connects_collection',
            'type' => 'link',
            'relationship' => 'bf_connects_contacts_collection',
            'module'=> 'Contacts',
            'bean_name'=>'Contacts',
            'source'=>'non-db',
            'vname'=>'LBL_CONTACTS_COLLECTION',
        ),
    ),
    'relationships'=>array (
    ),
    'optimistic_locking'=>true,
            'unified_search'=>true,
);
if (!class_exists('VardefManager')){
    require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('BF_Connects','BF_Connects', array('basic','assignable'));