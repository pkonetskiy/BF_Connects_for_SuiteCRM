<?php
$list_files = array (
    0 => array (
        'name_in' => 'BF_TableDictionary.php',
        'name_out' => 'tabledictionary.ext.php',
        'dir_in' => 'custom/Extension/application/Ext/TableDictionary/',
        'dir_out' => 'custom/application/Ext/TableDictionary/',
        'delete_in' => false,
    ),
);
foreach ($list_files as $name_file) {
    install_system_files($name_file['name_in'], $name_file['name_out'], $name_file['dir_in'], $name_file['dir_out'], $name_file['delete_in']);
}
function install_system_files($name_in, $name_out, $extpath, $custompath, $delete_in=false){
    $GLOBALS['log']->debug("Pos_execute copy files for $name_out");
    $extension = "<?php \n //WARNING: The contents of this file are auto-generated\n";
    if(!file_exists("$custompath/$name_out")){
        $file = file_get_contents($custompath . '/' . $name_out);
        $extension .= "\n". str_replace(array('<?php', '?>', '<?PHP', '<?'), array('','', '' ,'') , $file);
    }
    if(is_file($extpath.'/'.$name_in)  && strtolower(substr($name_in, -4)) == ".php"){
        $file = file_get_contents($extpath . '/' . $name_in);
        $extension .= "\n". str_replace(array('<?php', '?>', '<?PHP', '<?'), array('','', '' ,'') , $file);
    }
    $extension .= "\n?>";
    $out = fopen("$custompath/$name_out", 'w');
    fwrite($out,$extension);
    fclose($out);
    if(file_exists($extpath.$name_in && $delete_in)){
        unlink($extpath.$name_in);
    }
}
?>
