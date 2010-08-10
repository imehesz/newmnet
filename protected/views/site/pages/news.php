<?php
$this->pageTitle=Yii::app()->name . ' - News';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>News</h1>

<?php
    $feeds = Feed::model()->findAll();
    if( sizeof( $feeds ) )
    {
        Yii::import( 'ext.simplepie.simplepie' );
        $realfeed = new simplepie();

        foreach( $feeds as $feed )
        {                
            // okay, now let's load some feeds for real ...
            $realfeed->set_feed_url( $feed->url );
            $realfeed->init();
            foreach( $realfeed->get_items() as $item )
            {
                $title  = $item->get_title();
                $url    = $item->get_permalink();
                $content= $item->get_description( true );
                break;
            }
            if ( $title != '' ): ?>
                <div style="float:right;font-style:italic;"><?php echo $feed->name; ?></div>
                <div style="margin-bottom:10px;paddin-bottom:5px;border-bottom:3px solid #aaa;">
                    <div style="font-size:22px;"><a href="<?php echo $url; ?>" target="_blank"><?php echo $title; ?></a></div>
                    <div><?php echo $content; ?></div>
                </div>
            <?php endif;
        }
    }
?>
