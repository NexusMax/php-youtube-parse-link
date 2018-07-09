<?php


$regex_url = '^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$';

$parsed_str = '';
$parsed_url = parse_url($ico['video']);

parse_str($parsed_url['query'], $parsed_str);
if(empty($parsed_url['query']))
	$ico['video'] = $parsed_url['path'];
else
	$ico['video'] = $parsed_str['v']; 
