<?php
class FeedWidget extends CWidget
{
    public $feed;

    public $limit;

    public function init()
    {
        // this method is called by CController::beginWidget()
        $output = '<li><h4>' .  $this->feed . '</h4>';
        $output .= '<ul><li>here</li></ul>';
        $output .= '</li>';
        echo $output;
    }
 
    public function run()
    {
        // this method is called by CController::endWidget()
    }

    public function getName()
    {
        return $this->feed;
    }
}
