<?php

    require_once dirname(__DIR__) . "/tools/includes.php";

    $mode = iif( (isset($_GET["mode"]) ), $_GET["mode"], "");
    
    
    $parse = array();
    $parse['navbar_login'] = Page::construirePagePartielle('navbar_login', $parse);
    //$parse['body_login'] = Page::construirePagePartielle('', $parse);
    
    Page::construirePageFinale('login_body_page', $parse, "Uniguerre");
?>