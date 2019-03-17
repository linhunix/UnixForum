<?php
//REMOVE THE HEADER IF NEED TO WORK ONLI AS A WEB PAGE 
//$lnxmcp_phar is an array can be used here to set the init config 
//$scopePdo = array(
//);
$lnxmcp_phar = array(
    "app.menu.InitCommon" => array(
        //"pdo" => array("module" => "Pdo", "type" => "serviceCommon", "input" => $scopePdo),
        "mail" => array ("module" => "Mail", "type" => "serviceCommon") // use zend mail 
    ),
);
require __DIR__ . "/../lnxmcp/mcp/Head.php";
#require __DIR__ . "/dist/lnxmcp.phar";
//error_log(print_r(lnxmcp(),1));
lnxmcp()->Block("home",array(),"UecForum");