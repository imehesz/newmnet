<?php
class NewsBlockWidget extends CWidget
{
    public $feed;

    public $limit;

    public function init()
    {
        // this method is called by CController::beginWidget()
        // let's load some feeds ...
        // $feeds = Feed::model()->findAllByAttributes( array( 'deleted' => 0 ) );
        $feeds = Feed::model()->findAll();
        if( sizeof( $feeds ) )
        {
            Yii::import( 'ext.simplepie.simplepie' );
            $realfeed = new simplepie();

            $output = '<li><h4>News</h4>';
            $output .= '<ul>';

            foreach( $feeds as $feed )
            {                
                // okay, now let's load some feeds for real ...
                $realfeed->set_feed_url( $feed->url );
                $realfeed->init();
                foreach( $realfeed->get_items() as $item )
                {
                    $title  = $item->get_title();
                    $url    = $item->get_permalink();
                    // we skip after the first one right away ...
                    break;
                }   

                $output .= <<<OUT
                <li><i>{$feed->name}</i><br /><a href="{$url}" target="_blank">{$title}</a></li>
OUT;
            }
            $output .= '</ul></li>';
        }
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
