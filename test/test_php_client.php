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