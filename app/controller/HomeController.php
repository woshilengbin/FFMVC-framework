<?php

/**
 * Created by PhpStorm.
 * User: PeterLeng
 * Date: 2018/5/18
 * Time: 18:37
 */
class HomeController extends BaseController
{
    public function home()
    {
        $this->view = view::make('home')
            ->with('article', Article::first())
            ->withTitle('MFFC :-D')
            ->withFuckMe('ok');
    }

    function mail()
    {
        $this->mail = mail::to(['ooxx@gmail.com', 'ooxx@qq.com'])
            ->from('MotherFucker <ooxx@163.com>')
            ->title('Fuck Me!')
            ->content('<h1>Hello~~</h1>');
    }

    function articleAll(){
        echo 'all';
        $article = Article::all();
        var_dump($article);
    }
    function articleSave()
    {

        echo 'save';
        $article = new Article;
        $article->article = '任命的命运图';
        $result = $article->save();
        if($result) echo '插入成功！';
        else echo 'error';
    }
    function articleUpdate(){
        $article = Article::find(2);
        $article->article = '我他喵的什么都没说';
        $result = $article->save();
        if($result) echo '修改成功！';
        else echo 'error';
    }
    function articleDelete(){
        $result = Article::destroy(1);
        if($result) echo '删除成功！';
        else echo 'error';
    }
}