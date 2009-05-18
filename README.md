Getting Started
---------------

 1. Download from Github: http://github.com/ibolmo/cametrics-php-client/zipball/master
 2. Unzip and move to a folder in the project
 3. `require_once 'path/to/Cametrics.class.php'`
 4. `Cametrics::initialize('your_secret_key') # visit: http://cametrics.appspot.com/, register, and create a campaign/project` 
 5. Insert in your code:
    `Cametrics::measure('your namespace', 'value', 'type of value')`

Usage
-----
The first argument (the namespace), or "key," is anything that **you** want. Cametrics system is a schemaless system. The system *depends* highly on **your** concept of way things should be related/organized. This reduces the complexity on the system, and leaves all the power (and responsibility) to **you** to make an educated hiearchy of your logging.

The following is an example of how to structure your namespaces:

    L1: Cametrics::measure('visitor')
    L2: Cametrics::measure('visitor.actions', visitor_actuated, 'string')

### Explanation
Every time that your code executes `L1`, the system records that you have a visitor. Since I did not include a second and third argument to the function, it defaults to 1 and `'number'` respectively for each of the arguments. Because the `type` of the input is a `number` and since the value defaults to `1`, the visitor becomes symbolic of a `counter`.

For `L2` I'd like to understand what kind of `actions`, or features, of the system they use. If I log every function/feature/action name, I will be able to get a **histogram** of the user's usage of the system. 

#### Note
The **histogram** would have in the x-axis all the unique `visitor_actuated` values, and the y-axis would represent the total number of instances for the that `visitor_actuated` value that was logged. 

    
Notes
-----
### DateTime Format
Usage:

    Cametrics::measure('visistor.arrived', date(Cametrics::DATETIME_FORMAT), 'datetime');

### Location/Coordinate/GPS
The difference between a location and coordinate is the naming convention for the axes. For location, the typical axes are: `longitude` and `latitude`. For coordinates, `x` and `y`. 

The client can accept 5 different ways to input the location.

1. Using a string with the following *strict* format: 
    `'longitude,latitude'` or `'x,y'`
2. Using an array with x, or longitude, as the first item and y, or latitude, as the second item:
    `array('x', 'y')` or `array('longitude', 'latitude')`
3. Using an indexed array with defined `longitude`, or `x`, and `latitude`, or `y`, keys:
    `array('longitude' => 102.2, 'latitude' => 34)` or `array('x' => 10, 'y' => 20)`
4. Using an indexed array with a short syntax for `longitude` as `long`, or `latitude` as `lat`, keys:
    `array('long' => 102.2, 'lat' => 34)`
5. Using an indexed array with any combination of **3** and **4**.
    `array('long' => 102.2, 'y' => 23)` or `array('x' => 102.3, 'latitude' => 34.2)`
    
#### Usage
    Cametrics::measure('campaign.trace', '102.455,13.3', 'location');
        #or
    Cametrics::measure('campaign.trace', array(102.455, 13.3), 'location');
        #or
    Cametrics::measure('mouse.trace', array('x' => 102, 'y' => 13), 'coordinate');

#### Note
The output returned from Cametrics will return longitude/latitude or x/y, depending on datum type.

Plans
-----
### Error/Log Handler
A very low level HTTP calls for logging errors and notices created by the client, by using `set_error_handler`

### Client should validate calls before they occur, to reduce usage
DateTime, as an example, requires a certain format.