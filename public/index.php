<?php 

include '../app/data/data.php'; 

    function getName()
    {
        echo $GLOBALS['myCV']['lastName'] . ' ' . $GLOBALS['myCV']['firstName'];
    }




include 'template/index.tpl.php'; 