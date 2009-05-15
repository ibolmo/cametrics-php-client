<?php

require_once dirname(__FILE__).'/../Cametrics.class.php';

Cametrics::initialize('agljYW1ldHJpY3NyFAsSDm15YXBwX2NhbXBhaWduGAIM', array('url.host' => 'localhost'));

#Cametrics::measure('test');
#Cametrics::measure('namespace.value');
#Cametrics::measure('namespace.column.number', 10, 'number');
#Cametrics::measure('namespace.test', 12.125, 'number');
#Cametrics::measure('namespace.column.string', 'string value', 'string');
#Cametrics::measure('namespace.column.string', 'string+value', 'string');
#
#Cametrics::measure('data.arrived', time(), 'timestamp');
#Cametrics::measure('data.arrived', date(Cametrics::DATETIME_FORMAT), 'date');
#Cametrics::measure('data.arrived', date(Cametrics::DATETIME_FORMAT), 'datetime');

assert(Cametrics::prepare('123.4,12', 'location') == '123.4,12');
assert(Cametrics::prepare(array('lat' => '1', 'longitude' => 0), 'location') == '0,1');
assert(Cametrics::prepare(array('latitude' => '1', 'lng' => 0), 'location') == '0,1');
assert(Cametrics::prepare(array('latitude' => '1', 'longitude' => 0), 'location') == '0,1');
assert(Cametrics::prepare(array('0','1'), 'location') == '0,1');

