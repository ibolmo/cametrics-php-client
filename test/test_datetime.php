<?php

require_once dirname(__FILE__).'/../Cametrics.class.php';

Cametrics::initialize('agljYW1ldHJpY3NyFAsSDm15YXBwX2NhbXBhaWduGAIM', array('url.host' => 'localhost'));

$logs = explode("\n", file_get_contents('fixtures/access.log'));

$max = 100;
for ($i = 1, $l = count($logs), $step = floor($l / $max); $i <= $l; $i += $step){
    $line = $logs[$i];
    preg_match("/\[([^\]]+)\] \"/", $line, $matches);
    if (!isset($matches[1])) continue;
       
    $datetime = date(Cametrics::DATETIME_FORMAT, strtotime(preg_replace("/[\/:]/", ' ', substr($matches[1], 0, -6), 3)));
    Cametrics::measure('log.access', $datetime, 'datetime');
}