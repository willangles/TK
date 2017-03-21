<?php 
    $text = get_field('related_videos', false, false); 
    $videos = explode("\n", $text);
    $videos = array_filter($videos, 'trim'); // remove any extra \r characters left behind

    foreach ($videos as $index => $video_id) {
        $re = '/[^=]+$/';
        preg_match($re, $videos[$index], $video_id);
        $id = "yt-" . $index;
        $video_embed = "https://www.youtube.com/embed/" . $video_id[0] ."?autoplay=0&origin=http://192.168.33.10";
        echo '<div class="wc-product-video video-container"><iframe id="'. $id .'" type="text/html" width="100%" height="auto" src="' . $video_embed . '" frameborder=0></iframe></div>';
    } 
?>


