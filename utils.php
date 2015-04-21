<?php
 
/**
* Use it to access to variables which may be defined or not,
* if the variable is not defined or is null it will return
* a fallback which defaults to null.
*
* No E_NOTICE will be raised if you use it with not defined
* variables.
*/
function nvl(&$variable=null, $fallback=null)
{
return isset($variable) ? $variable : $fallback;
}
 
/**
* Shorthand for:
*
* echo nvl($somethingToPrint, "default value if variable not defined");
*
* just use:
*
* puts($gender, "Male");
*/
function puts(&$whatever, $default="")
{
echo nvl($whatever, $default);
}