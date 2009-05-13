<?php

require_once dirname(__FILE__).'/../Cametrics.class.php';

Cametrics::initialize('agljYW1ldHJpY3NyFQsSDm15YXBwX2NhbXBhaWduGKEfDA');

Cametrics::measure('test');
Cametrics::measure('namespace.value');
Cametrics::measure('namespace.column.number', 10, 'number');
Cametrics::measure('namespace.test', 12.125, 'number');
Cametrics::measure('namespace.column.string', 'string value', 'string');
Cametrics::measure('namespace.column.string', 'string+value', 'string');

