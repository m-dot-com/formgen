This script will help you to make HTML forms very fast.

How to use this script?

Choose method and write in action and enctype if you need it.
Write in other input fields and click the 'Add' button.
Click the 'Reset' button, repeat previous item or just change some of fields.
If you use Laravel click on csrf_field checkbox.

If you have any proposal for this script, or you can't understand my english - send me email klimovvm1@gmail.com. I'll try to help you:)  

How work this script?

----- JS part -----

- Label rule

If user use label - id must be filled. On string 18 we check it.

- Attributes

List of input attributes wich is necessary for certain 'type' assorted by swith case on line 64. Attributes 'class', 'id' and 'name' is default for all inputs.

- The add button

If we click on the "Add" and 'Label rule' is ok - we send all input data on FormGen.php through POST method by AJAX.

- Other

'method', 'action', 'enctype', 'csrf_field' prosesses only by JS. So, this values will be depicted on the page without click on the 'Add' button.

----- PHP part -----

1) All POST data fall into '__constract' method for $inputValues object. 
2) Call getValues method.
3) Method getValues sends one by one input valeus in method genAttributes through foreach cycle.
4) Method genAttrbutes identifies empty this input or not.
5) If input is empty - script delete first value from $attributes array wich value is equal name of attribute.
6) If input is not empty - script add input value in $result array and delete first value from $attributes array.
7) When $attributes array will be empty - script start result method.
8) Result method transform $result array in string and put it in input tag.
9) Send result string in js and js show the data.

