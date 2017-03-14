<?php

require_once __DIR__ . '/autoload.php';

$type = $_REQUEST['type'];
if ( empty($type) ){
    header("Location: readme.html");
}

if ($type == 'Articles' || $type == 'Authors' || $type == 'Rubrics') {
    $ctrl = $type;
    if ( isset($_REQUEST['id']) ) {
        if ($_REQUEST['id'] == '*') {
            if ($type == 'Articles') {
                $ctrl = 'Errors';
                $act = 'Error';
            } else {
                $act = 'All';
            }
        } else {
            $act = 'One';
        }
    } elseif ( isset($_REQUEST['author_id']) ){
        $act = 'All';
    } elseif ( isset($_REQUEST['rubric_id']) ) {
        $act = 'All';
    } elseif ( isset($_REQUEST['author_name']) ) {
        $act = 'All';
    } elseif ( isset($_REQUEST['name']) ) {
        $act = 'All';
    } else {
        $ctrl = 'Errors';
        $act = 'Error';
    }
} else {
    $ctrl = 'Errors';
    $act = 'ErrorCtrl';
}

$controllerClassName = $ctrl . 'Controller';
$controller = new $controllerClassName;
$method = 'action' . $act;
$controller->$method();