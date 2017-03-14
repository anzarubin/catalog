<?php

class ArticlesController
{
    public function actionAll()
    {
        $param = false;
        $cond = false;

        if ( isset($_REQUEST['author_name']) ) {
            $name = $_REQUEST['author_name'];
            $articles = Articles::getByAuthorName($name);

        } elseif ( isset($_REQUEST['name']) ){
            $name = $_REQUEST['name'];
            $articles = Articles::getByArticleName($name);
        } else {

            if ( isset($_REQUEST['author_id']) ) {
                $param = 'author';
                $cond = $_REQUEST['author_id'];
            }
            elseif ( isset($_REQUEST['rubric_id']) ) {
                $param = 'rubric';
                $cond = $_REQUEST['rubric_id'];
            }

            $articles = Articles::getAll($param, $cond);
        }

        $view = new View();
        if ($articles == false) {
            $view->display('errors', 'error.php');
        } else {
            $view->assign('articles', $articles);
            $view->display('articles', 'articlesAll.php');
        }

    }

    public function actionOne()
    {
        $id = $_REQUEST['id'];
        $article = Articles::getOne($id);
        $view = new View();
        if ($article == false) {
            $view->display('errors', 'error.php');
        } else {
            $view->assign('article', $article);
            $view->display('articles', 'articlesOne.php');
        }

    }
}