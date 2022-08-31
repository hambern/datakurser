# What is PHP?

- PHP is an acronym for "PHP: Hypertext Preprocessor"
- PHP is a widely-used, open source scripting language
- PHP scripts are executed on the server
- PHP is free to download and use 
 
> **PHP is an amazing and popular language!**
> 
> It is powerful enough to be at the core of the biggest blogging system on the web (WordPress)!
It is deep enough to run large social networks!
It is also easy enough to be a beginner's first server side language!

---

## What is a PHP File?

1. PHP files can contain text, HTML, CSS, JavaScript, and PHP code
2. PHP code is executed on the server, and the result is returned to the browser as plain HTML
3. PHP files have extension ".php"

## This is how it looks

~~~php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
~~~

---

## PHP Arithmetic Operators

The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.

| Operator | Name           | Example  | Result                                  |
|----------|----------------|----------|-----------------------------------------|
| +        | Addition       | $x + $y  | Sum of $x and $y                        |
| -        | Subtraction    | $x - $y  | Difference of $x and $y                 |
| *        | Multiplication | $x * $y  | Product of $x and $y                    |
| /        | Division       | $x / $y  | Quotient of $x and $y                   |
| %        | Modulus        | $x % $y  | Remainder of $x divided by $y           |
| **       | Exponentiation | $x ** $y | Result of raising $x to the $y'th power |
