<?php

$parsed_str = '';
$parsed_url = parse_url($ico['video']);

parse_str($parsed_url['query'], $parsed_str);
if(empty($parsed_url['query']))
	$ico['video'] = $parsed_url['path'];
else
	$ico['video'] = $parsed_str['v']; 