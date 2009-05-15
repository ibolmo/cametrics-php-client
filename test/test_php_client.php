<?php

require_once dirname(__FILE__).'/../Cametrics.class.php';

Cametrics::initialize('agljYW1ldHJpY3NyFAsSDm15YXBwX2NhbXBhaWduGAIM', array('url.host' => 'localhost'));

Cametrics::measure('test');
Cametrics::measure('namespace.value');
Cametrics::measure('namespace.column.number', 10, 'number');
Cametrics::measure('namespace.test', 12.125, 'number');
Cametrics::measure('namespace.column.string', 'string value', 'string');
Cametrics::measure('namespace.column.string', 'string+value', 'string');

Cametrics::measure('data.arrived', time(), 'timestamp');
Cametrics::measure('data.arrived', date(Cametrics::DATETIME_FORMAT), 'date');
Cametrics::measure('data.arrived', date(Cametrics::DATETIME_FORMAT), 'datetime');

assert(Cametrics::prepare('123.4,12', 'location') == '123.4,12');
assert(Cametrics::prepare(array('lat' => '1', 'longitude' => 0), 'location') == '0,1');
assert(Cametrics::prepare(array('latitude' => '1', 'lng' => 0), 'location') == '0,1');
assert(Cametrics::prepare(array('latitude' => '1', 'longitude' => 0), 'location') == '0,1');
assert(Cametrics::prepare(array('0','1'), 'location') == '0,1');
assert(Cametrics::prepare('0,1', 'coordinate') == '0,1');
assert(Cametrics::prepare(array(20,10), 'coordinate') == '20,10');
assert(Cametrics::prepare(array('x' => 10, 'y' => 10), 'coordinate') == '10,10');

Cametrics::measure('person.trace', array('latitude' => 32.413515
Cametrics::measure('mouse.position', array('x' => 10, 'y' => 10), 'coordinate');

Cametrics::measure(array(34.061343617877796, -118.45014810562134), 'location');
Cametrics::measure(array('latitude' => 34.06661858839023, 'longitude' => -118.45464885234833), 'location');
Cametrics::measure(array('lat' => 34.075910092379544, 'x' => -118.45564126968384), 'location');