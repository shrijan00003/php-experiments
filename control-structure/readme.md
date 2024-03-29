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

> **WAP** to check the greatest number among three numbers :D :)

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

_Numeric Arrays_
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

- “\$variable_name…” is the name of the variable
- “[n]” is the access index number of the element
- “value” is the value assigned to the array element.

Let’s now look at an example of a numeric array.

Suppose we have 5 movies that we want to store in array variables.
We can use the example shown below to do that.

````php
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

echo $movie[3]; //=>

$movie[3] = " Eastern Condors";

echo $movie[3]; //=>
?>
````

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

_Associative array_ differ from numeric array in the sense that associative arrays use descriptive names for id keys.
Below is the syntax for creating associative array in php.

```php
<?php
$variable_name['key_name'] = value;

$variable_name = array('keyname' => value);
?>
```

HERE,

- “\$variable_name…” is the name of the variable
- “['key_name']” is the access index number of the element
- “value” is the value assigned to the array element.
  Let’s suppose that we have a group of persons, and we want to assign the gender of each person against their names.

We can use an associative array to do that.The code below helps us to do that.

```php

<?php
$persons = array(
    "Mary" => "Female",
    "John" => "Male",
     "Mirriam" => "Female"
    );

print_r($persons);
var_dump($persons);

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
    "comedy" => array(
        "Pink Panther",
        "John English",
        "See no evil hear no evil"
        ),
    "action" => array(
        "Die Hard",
         "Expendables"
         ),
    "epic" => array(
        "The Lord of the rings"
        ),
    "Romance" => array(
        "Romeo and Juliet"
        )
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
echo $film["comedy"][0]; // Pink Panther
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
This function is used to sort arrays by the **values**.
If the values are **alphanumeric**, it sorts them in alphabetical order.
If the values are numeric, it sorts them in ascending order.
It removes the _existing access keys and add new numeric keys_.
The output of this function is a numeric array

```php
<?php
$persons = array(
    "Mary" => "Female",
     "John" => "Male",
     "Mirriam" => "Female"
     );

sort($persons);

print_r($persons);
?>
```

Output:

```
Array ( [0] => Female [1] => Female [2] => Male )
```

**ksort**
This function is used to sort the array using **the key**. The following example illustrates its usage.

```php
<?php
$persons = array(
    "Mary" => "Female",
    "John" => "Male",
     "Mirriam" => "Female"
     );

ksort($persons);

print_r($persons);
?>
```

Output:
`Array ( [John] => Male [Mary] => Female [Mirriam] => Female )`

**asort**

This function is used to sort the array using the **values**. The following example illustrates its usage.

```php
<?php

$persons = array(
    "Mary" => "Female",
     "John" => "Male",
      "Mirriam" => "Female"
      );

asort($persons);

print_r($persons);

?>
```

```
Array ( [Mary] => Female [Mirriam] => Female [John] => Male )
```

## PHP loops

A Loop is an Iterative Control Structure that involves executing the same number of code a number of times until a certain condition is met.

**For loop**

```php
<?php
    for (initialize; condition; increment){
    //code to be executed
    }
?>
```

- “for…{…}” is the loop block
- “initialize” usually an integer; it is used to set the counter’s initial value.
- “condition” the condition that is evaluated for each php execution. If it evaluates to true then execution of the for... loop is terminated. If it evaluates to false, the execution of the for... loop continues.
- “increment” is used to increment the initial value of counter integer.

![php-for-loop](https://www.guru99.com/images/2013/04/loop.png)

example:

```php
<?php

for ($i = 0; $i < 10; $i++){

$product = 10 * $i;

echo "The product of 10 * $i is $product <br/>";
}

?>
```

**PHP For Each loop**

The php foreach loop is used to iterate through array values. It has the following basic syntax

```php
<?php
foreach($array_name  as $array_value){

 // block of code to be executed

}
?>

```

- “foreach(…){…}” is the foreach php loop block code
- “\$array_data” is the array variable to be looped through
- “\$array_value “ is the temporary variable that holds the current array item values.
- “block of code…” is the piece of code that operates on the array values

![php-for-each](https://www.guru99.com/images/2013/04/for_loop_flowchart.png)

example

```php
<?php

$animals = array("Lion","Wolf","Dog","Leopard","Tiger");

foreach($animals as $animal){

echo $animal . "<br>";

}

?>

```

Let’s look at another example that loops through an a**ssociative array**.

An associative array uses alphanumeric words for access keys.

```php
<?php

$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

foreach($persons as $key => $person){

    echo "$key is $person"."<br>";

}

?>

```

Output

```html
Mary is Female John is Male Mirriam is Female
```

**While Loop**

They are used to execute a block of code a repeatedly until the set condition gets satisfied

**When to use while loops**

- While loops are used to execute a block of code until a certain condition becomes true.
- You can use a while loop to read records returned from a database query.

**Types of while loops**

- **Do… while** - executes the block of code at least once before evaluating the condition
- **While** - checks the condition first. If it evaluates to true, the block of code is executed as long as the condition is true. If it evaluates to false, the execution of the while loop is terminated.

syntax

```php
<?php
while (condition){

//block of code to be executed;

}
?>
```

- “while(…){…}” is the while loop block code
- “condition” is the condition to be evaluated by the while loop
- “block of code…” is the code to be executed if the condition gets satisfied

> Draw a flowchart for while loop

```php
<?php

$i = 0;

while ($i < 5){

echo $i + 1 . "<br>";

$i++;

}

?>
```

**PHP Do While**

The difference between While… loop and Do… while loop is do… while is executed at-least once before the condition is evaluated.

syntax

```php
<?php
do{

// block of code to be executed

}while(condition);
?>
```

- “do{…} while(…)” is the do… while loop block code
- “condition” is the condition to be evaluated by the while loop
- “block of code…” is the code that is executed at least once by the do… while loop

> Draw a flow chart for Do while loop

---

example

```php

<?php

$i = 9;

do{

    echo "$i is"." <br>";

}

while($i < 9);

?>

```
