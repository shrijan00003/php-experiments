## control structure

# What is a control structure?
Code execution can be grouped into categories as shown below
- **Sequential** – this one involves executing all the codes in the order in which they have been written.
- **Decision** – this one involves making a choice given a number of options. The code executed depends on the value of the condition.
  
**A control structure** is a block of code that decides the execution path of a program depending on the value of the set condition.

Let’s now look at some of the control structures that PHP supports.

## PHP IF Else
If… then... else is the simplest control structure. It evaluates the conditions using Boolean logic
**When to use if… then… else**
- You have a block of code that should be executed only if a certain condition is true
- You have two options, and you have to select one.
- If… then… else if… is used when you have to select more than two options and you have to select one or more
Syntax.

 The syntax for if… then… else is;
```php
<?php
if (condition is true) {

block one

else

block two

}
?>
```

- “if (condition is true)” is the control structure
- “block one” is the code to be executed if the condition is true
- {…else…} is the fallback if the condition is false
- “block two” is the block of code executed if the condition is false

> WAP to check the greatest number among three numbers :D :) 

## PHP Switch Case
Switch… case is similar to the if then… else control structure.
It only executes a single block of code depending on the value of the condition.

If no condition has been met then the default block of code is executed.

It has the following basic syntax.

```php
<?php
switch(condition){

case value:


break;

case value2:


break;

default:


break;

}
?>

```

> Exercise: Draw a flow chart for switch case statement :) 

> WAP: Take a number and decide the day of week , should return sunday, monday ... etc

## PHP array
**What is a PHP Array?**
A PHP array is a variable that stores more than one piece of related data in a single variable.

*Numeric Arrays*
Numeric arrays use number as access keys.

An access key is a reference to a memory slot in an array variable.

The access key is used whenever we want to read or assign a new value an array element.

Below is the syntax for creating numeric array in php. Array Example

```php
<?php
$variable_name[n] = value;
?>
```
Or

```php
<?php
$variable_name = array(n => value, …);
?>
```
HERE,

- “$variable_name…” is the name of the variable
- “[n]” is the access index number of the element
- “value” is the value assigned to the array element.
  
Let’s now look at an example of a numeric array.

Suppose we have 5 movies that we want to store in array variables.
We can use the example shown below to do that.
<?php
$movie[0] = 'Shaolin Monk';
$movie[1] = 'Drunken Master';
$movie[2] = 'American Ninja';
$movie[3] = 'Once upon a time in China';
$movie[4] = 'Replacement Killers';

?>


```php

<?php
$movie[0]="Shaolin Monk";
$movie[1]="Drunken Master";
$movie[2]="American Ninja";
$movie[3]="Once upon a time in China";
$movie[4]="Replacement Killers";
echo $movie[3];
$movie[3] = " Eastern Condors";
echo $movie[3];
?>
```

Alternatively, the above array variables can also be created using the following code.

```php 
<?php
$movie = array(0 => "Shaolin Monk",
               1 => "Drunken Master",
               2 => "American Ninja",
               3 => "Once upon a time in China",
               4 =>"Replacement Killers" );
echo $movie[4];
?>
```

## PHP Associative Array

*Associative array* differ from numeric array in the sense that associative arrays use descriptive names for id keys.
Below is the syntax for creating associative array in php.

```php
<?php
$variable_name['key_name'] = value;

$variable_name = array('keyname' => value);
?>
```
HERE,

- “$variable_name…” is the name of the variable
- “['key_name']” is the access index number of the element
- “value” is the value assigned to the array element.
  Let’s suppose that we have a group of persons, and we want to assign the gender of each person against their names.

We can use an associative array to do that.The code below helps us to do that.

```php
<?php
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
print_r($persons); 
echo ""; 
echo "Mary is a " . $persons["Mary"];
?>
```
## PHP Multi-dimensional arrays
These are arrays that contain other nested arrays.
The advantage of multidimensional arrays is that they allow us to group related data together.

```php
<?php
$movies =array(
"comedy" => array("Pink Panther", "John English", "See no evil hear no evil"),
"action" => array("Die Hard", "Expendables"),
"epic" => array("The Lord of the rings"),
"Romance" => array("Romeo and Juliet")
);
print_r($movies);
?>
```

Another way of define array is as follows:

```php

<?php
$film=array(

                "comedy" => array(

                                0 => "Pink Panther",

                                1 => "john English",

                                2 => "See no evil hear no evil"

                                ),

                "action" => array (

                                0 => "Die Hard",

                                1 => "Expendables"

                                ),

                "epic" => array (

                                0 => "The Lord of the rings"

                                ),

                "Romance" => array

                                (

                                0 => "Romeo and Juliet"

                                )

);
echo $film["comedy"][0];
?>
```


## PHP Array Functions
**Count** function
The count function is used to count the number of elements that an php array contains. The code below shows the implementation.

```php
<?php
$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
echo count($lecturers);
?>
```
Output: 3
**is_array** function
The is_array function is used to determine if a variable is an array or not. Let’s now look at an example that implements the is_array functions.

```php
<?php
$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
echo is_array($lecturers);
?>
```
Output: 1

**Sort**
This function is used to sort arrays by the values.
If the values are alphanumeric, it sorts them in alphabetical order.
If the values are numeric, it sorts them in ascending order.
It removes the existing access keys and add new numeric keys.
The output of this function is a numeric array
```php
<?php
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

sort($persons);

print_r($persons);
?>
```
Output:
```
Array ( [0] => Female [1] => Female [2] => Male )
```
**ksort**
This function is used to sort the array using the key. The following example illustrates its usage.
```php
<?php
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

ksort($persons);

print_r($persons);
?>
```
Output:
```Array ( [John] => Male [Mary] => Female [Mirriam] => Female )```
**asort**
This function is used to sort the array using the values. The following example illustrates its usage.

```php
<?php

$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

asort($persons);

print_r($persons);

?>
```

```
Array ( [Mary] => Female [Mirriam] => Female [John] => Male )
```