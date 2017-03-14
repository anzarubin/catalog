<?php

class RubricsController
{
    public function actionAll()
    {
        if ( isset($_REQUEST['name']) ) {
            $name = $_REQUEST['name'];
            $rubrics = Rubrics::getByRubricName($name);
        } else {
            $rubrics = Rubrics::getAll();
        }

        $view = new View();
        if ($rubrics == false) {
            $view->display('errors', 'error.php');
        } else {
            $view->assign('rubrics', $rubrics);
            $view->display('rubrics','rubricsAll.php');
        }
    }

    public function actionOne()
    {
        $id = $_REQUEST['id'];
        $rubric = Rubrics::getOne($id);
        $view = new View();
        if ($rubric == false) {
            $view->display('errors', 'error.php');
        } else {
            $view->assign('rubric', $rubric);
            $view->display('rubrics', 'rubricsOne.php');
        }
    }
}