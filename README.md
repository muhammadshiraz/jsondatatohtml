## Convert JSON to HTML using JavaScript

Given an PHP document containing JSON data and the task is to convert JSON data into a HTML table.

Approach:

Take the JSON Object in a variable.
Call a function which first adds the column names to the < table > element.(It is looking for the all columns, which is UNION of the column names).
Traverse the JSON data and match key with the column name. Put the value of that key in the respective column.
Leave the column empty if there is no value of that key.

This code below is an improvement to my ad-hoc JavaScript solution I created a few weeks ago for a ASP.NET project, link below. As you will see below, it’s pretty easy to render a HTML table from a object array using plain JavaScript. Since most results are in a Table or Detail layout, I created 1 functions to return the data in either format. I also added some optional parameters that you can set to control formatting. The Details View was designed to show a single row/object, the headers will display on the left and the data will display on the right (see snapshot).


## Instructions

1. Download test.zip from this page and open it on your machine.
2. You will find the files needed for this test. Edit js/app.js by writing code that fulfills the requirements above. You do not need to edit the other files.
3. Once you are finished, compress all of the code (including js/app.js) into a zip file and upload it from the form below. Please note that you will be unable to upload files once time has run out.
