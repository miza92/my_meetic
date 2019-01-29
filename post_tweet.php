<?php

if(isset($_POST['submit_tweet']))
{
    if(isset($_POST['tweet']) && !empty($_POST['tweet']))
    {
        $tweet = new tweet();
        $tweet->post_tweet();
        echo "LOOOOOOOOOOOOOOOOOOOL";
    }
}

?>