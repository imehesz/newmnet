<?php
class facewidget extends CWidget
{
    public $feed;

    public $limit;

    public function init()
    {
        $output = '<li><h4>About Me</h4>';
        $output .= '<ul>';

        $output .= '<li>Long time open source and PHP enthusiast. Started with PHP 3 and grew into the MVC world with <a href="http://cakephp.org" target="_blank">CakePHP</a>, <a href="http://zendframework.com" target="_blank">ZF</a> and now the <a href="http://yiiframework.com" target="_blank">Yii Framework</a>.</li>';

        $output .= '</ul></li>';
        echo $output;
    }
 
    public function run()
    {
        // this method is called by CController::endWidget()
    }
}
