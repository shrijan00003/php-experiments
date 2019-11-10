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









