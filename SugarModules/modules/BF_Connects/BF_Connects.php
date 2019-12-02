<?php
/*********************************************************************************
 * "Powered by BizForce"
 * BFtool  1.0 2019.12.02
 * Module: BF_Connects
 ********************************************************************************/

/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/BF_Connects/BF_Connects_sugar.php');
class BF_Connects extends BF_Connects_sugar {
    public function __construct() {
        parent::__construct();
    }
    public function BF_Connects(){
        $deprecatedMessage = 'PHP4 Style Constructors are deprecated and will be remove in 7.8, please update your code';
        if(isset($GLOBALS['log'])) {
            $GLOBALS['log']->deprecated($deprecatedMessage);
        }
        else {
            trigger_error($deprecatedMessage, E_USER_DEPRECATED);
        }
        self::__construct();
    }
}
?>