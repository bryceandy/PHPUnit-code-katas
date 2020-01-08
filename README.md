# PHPUnit code katas

### File navigation
Within the <code>src</code> directory, there are classes, whereby each performs a specific algorithm.

The <code>tests</code> directory has a PHP Unit test class for these algorithms.

### Installation

#### Requirements
- PHP 7
- Composer

Clone the repo,

```
  git clone https://github.com/bryceandy/PHPUnit-code-katas.git && cd PHPUnit-code-katas
```

then install PHP dependencies

```
  composer install
```

Proceed by running <code>phpunit</code> or <code>.vendor/bin/phpunit</code> to run all tests

### Algorithm Description

## 1. Binary Gap

A binary gap within a positive integer N is any maximal sequence of consecutive zeros that is surrounded by ones at both
ends in the binary representation of N. 
For example:
The number 9 has binary representation 1001 and contains a binary gap of length 2. 

The number 529 has binary representation 1000010001 and contains two binary gaps: one of length 4 and one
of length 3. 

The number 20 has binary representation 10100 and contains one binary gap of length 1.

## 2. Prime Factors

The prime factors for a given number is the list of prime numbers such that their product results into the given number.

For example:

6 ➡️ 3 x 2 

20 ➡️ 5 x 2 x 2

7 ➡️ 7

Create a function that receives a positive number and returns its prime factors in an array.

## 3. Roman Numerals

Create a function that receives a number from 1 to 3999 and outputs its roman numeral.

## 4. Right Rotation

Complete the function rotRight. It should return the resulting array of integers.
rotRight has the following parameter(s):

1. An array of integers a.
2. An integer d, the number of rotations.

#### Output:

Print a single line of n space-separated integers denoting the final state of the array after performing d right rotations.

Sample Input:

[1, 2, 3, 4, 5]
4

Sample Output:

[2, 3, 4, 5, 1]

## 5. The odd one out

Given an array off N integers, where N is an odd number. Find the element in the array which has no match to another element
in the array.

For example:
[1, 4, 3, 4, 7, 7, 1] 

Should result into 3. Because 3 has no match in this array
