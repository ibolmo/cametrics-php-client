<?php
define('WITH_CAMETRICS', isset($_REQUEST['use']));

if (WITH_CAMETRICS){
    require_once(isset($_REQUEST['bulk']) ? './lib/Cametrics.bulk.class.php' : './lib/Cametrics.class.php');
    Cametrics::initialize('ahBjYW1ldHJpY3Mtc3RyZXNzchULEg5teWFwcF9jYW1wYWlnbhjpBww', array('url.host' => 'cametrics-stress.appspot.com'));
}

function addGpsInfo(){
    usleep(2588);
}

// Initialize, and prepare the environment and APIs
usleep(270274); # empirically found

extract($_REQUEST);

// Prepare the data
usleep(13840); # empirically found

if (WITH_CAMETRICS){
    Cametrics::measure("$imei.contributions.type", $type, 'string');
    Cametrics::measure("$imei.contributions.time", $day.' '.$time, 'datetime');
    Cametrics::measure("contributions", $imei, 'string');             
    Cametrics::measure("contributions.type", $type, 'string');
    Cametrics::measure("contributions.time", "$day $time", 'datetime');
} else {
    syslog(LOG_DEBUG, "$imei.contributions.type = $type");
    syslog(LOG_DEBUG, "$imei.contributions.time = $day $time");
    syslog(LOG_DEBUG, "contributions = $imei");
    syslog(LOG_DEBUG, "contributions.type = $type");
    syslog(LOG_DEBUG, "contributions.time = $day $time");
}

if(($latitude != "") and ($longitude != "") and ($latitude != "NaN") and ($longitude != "NaN")) {
    addGpsInfo();
    if (WITH_CAMETRICS){
	    Cametrics::measure($imei.".contributions.location", "$longitude,$latitude", 'location');
        Cametrics::measure("contributions.location", "$longitude,$latitude", 'location');
    } else {
        syslog(LOG_DEBUG, "$imei.contributions.location = $longitude,$latitude");
        syslog(LOG_DEBUG, "contributions.location = $longitude,$latitude");
    }
}

echo 'SUCCESS';

?>
