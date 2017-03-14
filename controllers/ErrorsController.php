<?php

class ErrorsController
{
    public function actionErrorCtrl()
    {
        $view = new View();
        $view->display('errors', 'errorCtrl.php');
    }

    public function actionError()
    {
        $view = new View();
        $view->display('errors', 'error.php');
    }
}