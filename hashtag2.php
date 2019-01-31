<?php

$tweet = "this has a #hashtag a  #badhash-tag and a #goodhash_tag";

preg_match_all("/(#\w+)/", $tweet, $matches);

$hash = $matches[0];

foreach ($hash as $key => $value) {
	echo $value . PHP_EOL;
}