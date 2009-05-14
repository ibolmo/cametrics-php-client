Getting Started
---------------

 1. Download from Github: http://github.com/ibolmo/cametrics-php-client/zipball/master
 2. Unzip and move to a folder in the project
 3. `require_once 'path/to/Cametrics.class.php'`
 4. `Cametrics::initialize('your_secret_key') # visit: http://cametrics.appspot.com/, register, and create a campaign/project` 
 5. Insert in your code:
    `Cametrics::measure('your namespace', 'value', 'type of value')`
    
Notes
-----
### DateTime Format
Usage:
  `Cametrics::measure('visistor.arrived', date(Cametrics::DATETIME_FORMAT), 'datetime');`
    
Plans
-----
### Error/Log Handler
A very low level HTTP calls for logging errors and notices created by the client, by using `set_error_handler`

### Client should validate calls before they occur, to reduce usage
DateTime, as an example, requires a certain format.