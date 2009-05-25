Test Setup
----------
Using two computers:
 - **client**, a (separate) computer that acts as multiple users sending multiple `POST`s to the *server*
 - **server**, a (separate) computer that receives the *data* from the *users/clients* and will `syslog` and `Cametrics::measure`

Client Setup
------------
The client is on a **separate** network than the sever and is using the [FunkLoad functional and load web tester](http://funkload.nuxeo.org/ "FunkLoad") tool to simulate the user/device.

Server Setup
------------
The server is dedicated to the tests and *not* running/hosting any other project. At this time the server is `habwatch.cens.ucla.edu`, a Virtual Machine with the following (virtual) specifications:
{{ specs }}

The server also has the [FunkLoad Monitor Server](http://funkload.nuxeo.org/#monitor-server "Monitor Server") to monitor the health of the server to understand the different load the system has with and without the use of Cametrics.