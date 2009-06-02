<?php

require_once dirname(__FILE__).'/fixtures/cametrics.helper.php';

assert( is_array(Cametrics::getOptions()) );
assert( Cametrics::getSecretKey() != '' );
assert( Cametrics::getURL() == 'http://localhost/measure/'.Cametrics::getSecretKey().'/' );