<?php

class AuthorsController
{
    public function actionAll()
    {
        if ( isset($_REQUEST['name']) ) {
            $name = $_REQUEST['name'];
            $authors = Authors::getByAuthorName($name);
        } else {
            $authors = Authors::getAll();
        }

        $view = new View();
        if ($authors == false) {
            $view->display('errors', 'error.php');
        } else {
            $view->assign('authors', $authors);
            $view->display('authors','authorsAll.php');
        }
    }

    public function actionOne()
    {
        $id = $_REQUEST['id'];
        $author = Authors::getOne($id);
        $view = new View();
        if ($author == false) {
            $view->display('errors', 'error.php');
        } else {
            $view->assign('author', $author);
            $view->display('authors', 'authorsOne.php');
        }
    }
}