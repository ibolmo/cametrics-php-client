Experiments
===========
These experiments are used to find the limits, quirks, and liabilities of using Cametrics.

Use Cases
---------
The following are designed to simulate the "typical" use case scenario for "campaigns" (see: [Urban Sensing](http://urban.cens.ucla.edu/ "CENS' Urban Sensing Group)), but will easily be applicable to other projects and scenarios.

You're encouraged to create, modify, and/or submit your use cases. Be it a complete source code of the running tests, or description of what you'd like to test the system against. Send a [pull request](

### Use Case 1 (UC1)
In this case, devices (typically phones) are asynchornously, and/or periodically, send collected data to a *server* **script**. Without **Cametrics** the script could potentially log/measure important metrics into **syslog** or equivalent logging systems. With **Cametrics**, the system lines of code used to log would be replaced with equivalent `measure` method calls. For visualizing, *representing* the data, the developer/script would read the log file(s) and *extract/aggragate/calculate* summaries from the raw measurements. Alternatively, these calculations are done *on-the-fly* by Cametrics. 

### Test Setup
Read the `README.md` in the `uc1` folder.