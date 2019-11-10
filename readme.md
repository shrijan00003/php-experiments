## php basics

# server side programming basics

> what is server side scripting?

- A script is a set of programming instructions that is interpreted at runtime.
- A scripting language is a language that interprets scripts at runtime. Scripts are usually embedded into other software environments.

It is the program that runs on server dealing with the generation of content of web page.
1) Querying the database
2) Operations over databases
3) Access/Write a file on server.
4) Interact with other servers.
5) Structure web applications.
6) Process user input. For example if user input is a text in search box, run a search algorithm on data stored on server and send the results.

Examples :
The Programming languages for server-side programming are :
1) PHP
2) C++
3) Java and JSP
4) Python
5) Ruby on Rails

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
- Floating point number – decimal numbers e.g. 3.14. they are also known as double or real numbers.  The maximum value of a float is platform-dependent. Floating point numbers are larger than integers.
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

- All variable names must start with the dollar sign e.g. ` $myVar `
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
|----------|----------------|----------------------------------|--------------------------|--------------|
| +        | Addition       | Summation of x and y             | 1 + 1;                   | 2            |
| -        | Subtraction    | Difference between x and y       | 1 – 1;                   | 0            |
| *        | Multiplication | Multiplies x and y               | 3 * 7;                   | 21           |
| /        | Division       | Quotient of x and y              | 45 / 5;                  | 9            |
| %        | Php Modulus    | Gives reminder of diving x and y | 10 % 3;                  | 1            |
| -n       | Negation       | Turns n into a negative number   | -(-5);                   | 5            |
| x . y    | Concatenation  | Puts together x and y            | "PHP" . " ROCKS";10 . 3; | PHP ROCKS103 |



| Operator       | Name                  | Description                                                                  | Example    | Output                                           |
|----------------|-----------------------|------------------------------------------------------------------------------|------------|--------------------------------------------------|
| X == y         | Equal                 | Compares x and y then returns  true if they are equal                        | 1 == "1";  | True or 1                                        |
| X === y        | identical             | Compares both values and data  types.                                        | 1 === "1"; | False or 0. Since 1 is integer and “1” is string |
| X != y, x <> y | PHP Not equal         | Compares values of x and y. returns  true if the values are not equal        | 2 != 1;    | True or 1                                        |
| X > y          | Greater than          | Compares values of x and y. returns  true if x is greater than y             | 3 > 1;     | True or 1                                        |
| X < y          | Less than             | Compares values of x and y. returns  true if x is less than y                | 2 < 1;     | False or 0                                       |
| X >= y         | Greater than or equal | Compares values of x and y. returns true  if x is greater than or equal to y | 1 >=1      | True or 1                                        |
| X <= y         | Less than or equal    | Compares values of x and y. returns true  if x is greater than or equal to y | 8 <= 6     | False or 0                                       |










