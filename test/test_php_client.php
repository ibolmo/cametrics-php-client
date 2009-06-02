<?php

require_once dirname(__FILE__).'/fixtures/cametrics.helper.php';

#Cametrics::initialize('agljYW1ldHJpY3NyEAsSCENhbXBhaWduGLv1AQw');

#foreach (range(0, 5) as $i){
#  Cametrics::measure('test');
#  Cametrics::measure('random', rand());
#}
#Cametrics::measure('namespace.value');
#Cametrics::measure('namespace.column.number', 10, 'number');
#Cametrics::measure('namespace.test', 12.125, 'number');

$plants = array(
  'PoisonHemlock',
  'YellowStarthistle',
  'UnknownPlant',
  'TerracinaSpurge',
  'TerracinaSpurge',
  'TerracinaSpurge',
  'PerennialPepperweed',
  'PerennialPepperweed',
  'HardingGrass',
  'HardingGrass',
  'PhotoError'
);
foreach ($plants as $value){
    Cametrics::measure('plant', $value, 'string');
}
#Cametrics::measure('namespace.column.string', 'string value', 'string');
#Cametrics::measure('namespace.column.string', 'string+value', 'string');
#Cametrics::measure('namespace.column.string', 1309509, 'string');
#Cametrics::measure('namespace.column.string', '', 'string');
#Cametrics::measure('namespace.column.string', null, 'string');
#Cametrics::measure('namespace.column.string', 356996016212614, 'string');
#Cametrics::measure('namespace.column.string', '356996016212614'."\n", 'string');

#Cametrics::measure('data.arrived', time(), 'timestamp');
#Cametrics::measure('data.arrived', date(Cametrics::DATETIME_FORMAT), 'date');
#Cametrics::measure('data.arrived', date(Cametrics::DATETIME_FORMAT), 'datetime');
#foreach (range(0,12) as $i){
#  Cametrics::measure('time', mktime(rand(0, 23), rand(0, 59), rand(0, 59), rand(0,12), rand(0,31), 2009), 'timestamp');
#}

#assert(Cametrics::prepare('123.4,12', 'location') == '123.4,12');
#assert(Cametrics::prepare(array('lat' => '1', 'longitude' => 0), 'location') == '0,1');
#assert(Cametrics::prepare(array('latitude' => '1', 'lng' => 0), 'location') == '0,1');
#assert(Cametrics::prepare(array('latitude' => '1', 'longitude' => 0), 'location') == '0,1');
#assert(Cametrics::prepare(array('0','1'), 'location') == '0,1');
#assert(Cametrics::prepare('0,1', 'coordinate') == '0,1');
#assert(Cametrics::prepare(array(20,10), 'coordinate') == '20,10');
#assert(Cametrics::prepare(array('x' => 10, 'y' => 10), 'coordinate') == '10,10');

#Cametrics::measure('person.trace.test', '0,0', 'location');
#Cametrics::measure('person.trace.test', '1,1', 'location');
#Cametrics::measure('person.trace.test', '-1,-1', 'location');
#Cametrics::measure('person.trace.test', '-118.45014810562134,34.061343617877796', 'location');
#Cametrics::measure('person.trace.test', '-118.45014810562134, 34.061343617877796', 'location');
#Cametrics::measure('person.trace', array(-118.45014810562134, 34.061343617877796), 'location');
#Cametrics::measure('person.trace', array('latitude' => 34.06661858839023, 'longitude' => -118.45464885234833), 'location');
#Cametrics::measure('person.trace', array('lat' => 34.075910092379544, 'x' => -118.45564126968384), 'location');

#$json = dirname(__FILE__).'/fixtures/gps_trace.json';
#$coordinates = json_decode(file_get_contents($json), true);
#foreach ($coordinates as $coordinate){
#    Cametrics::measure('test/trace', array('latitude' => $coordinate['latitude'], 'longitude' => $coordinate['longitude']), 'location');
#}

#Cametrics::measure('mouse.position', array('x' => 10, 'y' => 10), 'coordinate');

# Failing Tests
#Cametrics::measure('data.arrived', '2009-05-20 17:23:54 RANDOM', 'date');
