## Convert JSON to HTML using JavaScript

Given an PHP document containing JSON data and the task is to convert JSON data into a HTML table.

Approach:

- Take the JSON Object in a variable.
- Call a function which first adds the column names to the < table > element.(It is looking for the all columns, which is UNION of the column names).
- Traverse the JSON data and match key with the column name. Put the value of that key in the respective column.
Leave the column empty if there is no value of that key - (see snapshot).


## Instructions

1. Download jsondatatohtml.zip from this page and open it on your machine.
2. You will find the files needed for this index.php by writing code that fulfills the requirements above. You do not need to edit the other files.
