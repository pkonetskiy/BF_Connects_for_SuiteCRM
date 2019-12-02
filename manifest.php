<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * "Powered by BizForce"
 * BFtool 1.1 2019.12.02
 *  
 ********************************************************************************/
$manifest = array (
    'readme' => '',
    'key' => 'BF',
    'author' => 'BizForce Inc.',
    'description' => 'This module add information about social network and messenger to the Connects module',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'BFtool',
    'published_date' => '2019-11-26 21:00:00',
    'type' => 'module',
    'version' => '1.0.0',
    'remove_tables' => 'prompt',
);
$installdefs = array (
    'id' => 'BFtool',
    'beans' => array (
        0 => array (
            'module' => 'BF_Connects',
            'class' => 'BF_Connects',
            'path' => 'modules/BF_Connects/BF_Connects.php',
            'tab' => true,
        ),
    ),
    'copy' => array (
        0 => array (
            'from' => '<basepath>/SugarModules/modules/BF_Connects',
            'to' => 'modules/BF_Connects',
        ),
        20 => array (
            'from' => '<basepath>/SugarModules/metadata/BF_TableDictionary.php',
            'to' => 'custom/Extension/application/Ext/TableDictionary/BF_TableDictionary.php',
        ),
        21 => array (
            'from' => '<basepath>/SugarModules/metadata/bf_connects_contacts_collectionMetaData.php',
            'to' => 'custom/metadata/bf_connects_contacts_collectionMetaData.php',
        ),
    ),
    'language' => array (
        0 => array (
            'from' => '<basepath>/SugarModules/language/application/ru_RU.lang.php',
            'to_module' => 'application',
            'language' => 'ru_RU',
        ),
        1 => array (
            'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
            'to_module' => 'application',
            'language' => 'en_us',
        ),
    ),
    'post_execute' => array(
        0 => '<basepath>/SugarModules/post_execute.php',
    ),
);
?>