<?php


if(isset($_POST['submit_tweet']))
{
    if(isset($_POST['content']) && !empty($_POST['content']))
    {
        $tweet = new tweet();
        $tweet->post_tweet();
        echo '<script>alert("Your tweet has been send !")</script>';
    }
    else {
        echo '<script>alert("Your tweet is empty !")</script>';
    }
}



?>