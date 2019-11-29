# PHP basics

# server side programming basics

> what is server side scripting?

- A script is a set of programming instructions that is interpreted at runtime.
- A scripting language is a language that interprets scripts at runtime. Scripts are usually embedded into other software environments.

It is the program that runs on server dealing with the generation of content of web page.

1. Querying the database
2. Operations over databases
3. Access/Write a file on server.
4. Interact with other servers.
5. Structure web applications.
6. Process user input. For example if user input is a text in search box, run a search algorithm on data stored on server and send the results.

Examples :
The Programming languages for server-side programming are :

1. PHP
2. C++
3. Java and JSP
4. Python
5. Ruby on Rails

![php-flow](https://www.guru99.com/images/2013/04/php_app_flowchart.jpg)

## PHP basics

## PHP data types

A Data type is the classification of data into a category according to its attributes;

- Alphanumeric characters are classified as strings
- Whole numbers are classified integers
- Numbers with decimal points are classified as floating points.
- True or false values are classified as Boolean.

PHP is a loosely typed language; it does not have explicit defined data types. PHP determines the data types by analyzing the attributes of data supplied. PHP implicitly supports the following data types

- Integer – whole numbers e.g. -3, 0, 69. The maximum value of an integer is platform-dependent. On a 32 bit machine, it’s usually around 2 billion. 64 bit machines usually have larger values. The constant PHP_INT_MAX is used to determine the maximum value.
- Floating point number – decimal numbers e.g. 3.14. they are also known as double or real numbers. The maximum value of a float is platform-dependent. Floating point numbers are larger than integers.
- Character string – e.g. Hello World
- Boolean – e.g. True or false.

```php
<?php
echo PHP_INT_MAX;
?>
```

## PHP Variable

A variable is a name given to a memory location that stores data at runtime.

The scope of a variable determines its visibility.

A Php global variable is accessible to all the scripts in an application.

A local variable is only accessible to the script that it was defined in.

Think of a variable as a glass containing water. You can add water into the glass, drink all of it, refill it again etc.

The same applies for variables. Variables are used to store data and provide stored data when needed. Just like in other programming languages, PHP supports variables too. Let’s now look at the rules followed when creating variables in PHP.

- All variable names must start with the dollar sign e.g. `$myVar`
- Variable names are case sensitive; this means $my_var is different from $MY_VAR
- All variables names must start with a letter follow other characters e.g. $my_var1. $1my_var is not a legal variable name.
- Variable names must not contain any spaces, “$first name” is not a legal variable name. You can instead use an underscore in place of the space e.g. $first_name. You cant use characters such as the dollar or minus sign to separate variable names.

## PHP Constant

Define constant- A constant is a variable whose value cannot be changed at runtime.

Suppose we are developing a program that uses the value of PI 3.14, we can use a constant to store its value.

Let’s now look at an example that defines a constant. define('PI',3.14); //creates a constant with a value of 3.14 Once you define PI as 3.14 , writing a code like below will generate an error PI = 4; //PI has been defined as a constant therefore assigning a value is not permissible.

## PHP Operators

- Arithmetic operators

Arithmetic operators are used to perform arithmetic operations on numeric data. The concatenate operator works on strings values too. PHP supports the following operators.

| Operator | Name           | Description                      | Example                  | Output       |
| -------- | -------------- | -------------------------------- | ------------------------ | ------------ |
| +        | Addition       | Summation of x and y             | 1 + 1;                   | 2            |
| -        | Subtraction    | Difference between x and y       | 1 – 1;                   | 0            |
| \*       | Multiplication | Multiplies x and y               | 3 \* 7;                  | 21           |
| /        | Division       | Quotient of x and y              | 45 / 5;                  | 9            |
| %        | Php Modulus    | Gives reminder of diving x and y | 10 % 3;                  | 1            |
| -n       | Negation       | Turns n into a negative number   | -(-5);                   | 5            |
| x . y    | Concatenation  | Puts together x and y            | "PHP" . " ROCKS";10 . 3; | PHP ROCKS103 |

- Comparison operator
  Comparison operators are used to compare values and data types.

| Operator       | Name                  | Description                                                                 | Example    | Output                                           |
| -------------- | --------------------- | --------------------------------------------------------------------------- | ---------- | ------------------------------------------------ |
| X == y         | Equal                 | Compares x and y then returns true if they are equal                        | 1 == "1";  | True or 1                                        |
| X === y        | identical             | Compares both values and data types.                                        | 1 === "1"; | False or 0. Since 1 is integer and “1” is string |
| X != y, x <> y | PHP Not equal         | Compares values of x and y. returns true if the values are not equal        | 2 != 1;    | True or 1                                        |
| X > y          | Greater than          | Compares values of x and y. returns true if x is greater than y             | 3 > 1;     | True or 1                                        |
| X < y          | Less than             | Compares values of x and y. returns true if x is less than y                | 2 < 1;     | False or 0                                       |
| X >= y         | Greater than or equal | Compares values of x and y. returns true if x is greater than or equal to y | 1 >=1      | True or 1                                        |
| X <= y         | Less than or equal    | Compares values of x and y. returns true if x is greater than or equal to y | 8 <= 6     | False or 0                                       |

- Assingment operator
  Assignment operators are used to assign values to variables. They can also be used together with arithmetic operators.

| Operator | Name           | Description                       | Example                          | Output       |
| -------- | -------------- | --------------------------------- | -------------------------------- | ------------ |
| x = ?    | assignment     | Assigns the value of x to ?       | \$x = 5;                         | 5            |
| x += ?   | addition       | Increments the value of x by ?    | $x = 2;$x += 1;                  | 3            |
| X -= ?   | subtraction    | Subtracts ? from the value of x   | $x = 3;$x -= 2;                  | 1            |
| X \*=?   | multiplication | Multiplies the value of x ? times | $x = 0;$x \*=9;                  | 0            |
| X /=?    | division       | Quotient of x and ?               | $x = 6;$x /=3;                   | 2            |
| X %=?    | modulus        | The reminder of dividing x by?    | $x = 3;$x %= 2;                  | 1            |
| X .=?    | concatenate    | Puts together items               | " $x = ‘Pretty’;$x .= ‘ Cool!’;" | Pretty Cool! |

- Logical operator
  When working with logical operators, any number greater than or less than zero (0) evaluates to true. Zero (0) evaluates to false.

| Operator        | Name              | Description                                       | Example                          | Output                                |
| --------------- | ----------------- | ------------------------------------------------- | -------------------------------- | ------------------------------------- |
| X and y, x && y | And               | Returns true if both x and y are equal            | 1 and 4;True&& False;            | True or 1False or 0                   |
| X or y, x       |                   | y                                                 | Or                               | Returns true if either x or y is true | 6 or 9;0 |  | 0; | True or 1False or 0 |
| X xor y         | Exclusive or, xor | Returns true if only x is true or only y is true  | 1 xor 1;1 xor 0;                 | False or 0True or 1                   |
| !x              | Not               | Returns true if x is false and false if x is true | !0;                              | True or 1                             |
| X /=?           | division          | Quotient of x and ?                               | $x = 6;$x /=3;                   | 2                                     |
| X %=?           | modulus           | The reminder of dividing x by?                    | $x = 3;$x %= 2;                  | 1                                     |
| X .=?           | concatenate       | Puts together items                               | " $x = ‘Pretty’;$x .= ‘ Cool!’;" | Pretty Cool!                          |

## PHP COMMENTS

- Comments help us to understand the code
- Comments are explanations that we include in our source code. These comments are for human understanding.
- Single line comments start with double forward slashes // and they end in the same line
- multiline comments

```php

<?php
/**
 * @access public
 * @param $amount
 * @return $taxAmount
 */
    echo "hello world !!"
?>

```

## PHP embedding script

- php code can be embedded directly in html like

  ```php
   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php echo "Hello world !!!" ?>
    </body>
    </html>

  ```

  This style is always available and is recommended .

  - we can also embedded PHP with <script> tag

  ```html
    <script language="php">
        echo "I am inside script tag"
    <script>
  ```

  - another way to embedded betweed <% and %> tag, this is disabled by default

  ```php
  <% echo "inside another tag" %>
  ```

  It is legal to switch back and forth between HTML and PHP at any time.

  ```php
    <?php
     for($i=0; $i<10; $i++){   
        ?>
          <h1>hello world</h1>
    <?php 
    } 
    ?>

  ```

  > Of course, using the **str_repeat()** functions here would make more sense.

  ## PHP Includes & PHP Include_once

  The “include” php statement is used to include other files into a PHP file.

  It has two variations, include and include_once. Include_once is ignored by the PHP interpreter if the file to be included.

```php
<?php
  include 'file_name';
?>

<?php
include_once 'file_name';
?>
```

read more on http://extrimity.in/content/difference-between-include-vs-includeonce-php

## PHP Require & PHP require_once

The require statement has two variations, require and require_once.

The require/require_once statement is used to include file.

Require_once is ignored if the required file has already been added by any of the **four** include statements.

It has the following syntax

```php
<?php
require 'file_name';
?>
<?php
require_once 'file_name';
?>
```

HERE,

“require/require_once” is the statement that includes file
“'file_name'” is the name of the file to be included.

## Php include vs require

The difference between include / require

Include

- Issues a warning when an error occurs
- Execution of the script continues when an error occurs

Require

- Does not issue a warning
- Execution of the script stops when an error occurs.

  Generally, it’s recommended using the include statement so that when an error occurs, execution of the script continues to display the webmaster email address or the contact us page.

The require statement should be used if the entire script cannot run without the requested file.

The “include” and “require” statements can be used at any line in the source codes where you want the code to appear.
