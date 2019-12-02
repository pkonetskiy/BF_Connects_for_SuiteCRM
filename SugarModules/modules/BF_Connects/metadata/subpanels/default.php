<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * "Powered by BizForce"
 * BFtool  1.0 2019.12.02
 * Module: BF_Connects
 ********************************************************************************/
$module_name='BFD_Payplans';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopButtonQuickCreate', 'mode' => 'MultiSelect', 'popup_module' => $module_name),
    ),
    'where' => '',
    'list_fields' => array(
        'name'=>array(
            'vname' => 'LBL_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '30%',
        ),
        'group_member' => array (
            'type' => 'relate',
            'vname' => 'LBL_GROUP_MEMBER',
            'width' => '20%',
            'default' => true,
            'module' => 'Employees',
            'id' => 'LBL_GROUP_MEMBER_ID',
        ),
        'title' => array (
            'default' => true,
            'vname' => 'LBL_TITLE',
            'width' => '10%',
        ),
        'department' => array (
            'default' => true,
            'vname' => 'LBL_DEPARTMENT',
            'width' => '10%',
        ),
        'bfl_groups_bfl_list_groups_name' => array (
            'type' => 'relate',
            'vname' => 'LBL_BFL_GROUPS_FROM_BFL_LIST_GROUPS_TITLE',
            'width' => '20%',
            'default' => true,
            'module' => 'Employees',
            'id' => 'BFL_GROUPS_BFL_LIST_GROUPS_IDA',
        ),
        'edit_button'=>array(
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelEditButton',
            'module' => $module_name,
            'width' => '5%',
        ),
        'remove_button'=>array(
            'vname' => 'LBL_REMOVE',
            'widget_class' => 'SubPanelRemoveButton',
            'module' => $module_name,
            'width' => '5%',
        ),
    ),
);

?>