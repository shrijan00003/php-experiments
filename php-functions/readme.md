## What is a Function?

A function is a reusable piece or block of code that performs a specific action.

- Functions can either return values when called or can simply perform an operation without returning any value.
- PHP has over 700 functions built in that perform different tasks.
  
**Why use Functions?**

- Better code organization – functions allow us to group blocks of related code that perform a specific task together.
- Reusability – once defined, a function can be called by a number of scripts in our PHP files. This saves us time of reinventing the wheel when we want to perform some routine tasks such as connecting to the database
- Easy maintenance- updates to the system only need to be made in one place.
  
**Built in Functions**
- Built in functions are functions that exist in PHP installation package.
- These built in functions are what make PHP a very efficient and productive scripting language.
- The built in functions can be classified into many categories. Below is the list of the categories.

**String functions**

PHP string functions are used to manipulate string values.

| Function   | Description                                                                                                                    | Example                                                                                       | Output                                                                          |
| ---------- | ------------------------------------------------------------------------------------------------------------------------------ | --------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------- |
| strtolower | Used to convert all string characters to lower case letters                                                                    | echo strtolower( 'Benjamin');                                                                 | outputs benjamin                                                                |
| strtoupper | Used to convert all string characters to upper case letters                                                                    | echo strtoupper('george w bush');                                                             | outputs GEORGE W BUSH                                                           |
| strlen     | The string length function is used to count the number of character in a string. Spaces in between characters are also counted | echo strlen('united states of america');                                                      | 24                                                                              |
| explode    | Used to convert strings into an array variable                                                                                 | $settings = explode(';', "host=localhost; db=sales; uid=root; pwd=demo"); print_r($settings); | Array ( [0] => host=localhost [1] => db=sales [2] => uid=root [3] => pwd=demo ) |