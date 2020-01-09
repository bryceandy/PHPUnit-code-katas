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

A binary gap for a positive integer N is the maximum sequence of consecutive zeros that is surrounded by ones at both
ends in the binary representation of N. 

For example:
The number 9 has binary representation 1001 and contains a binary gap of length 2. 

The number 529 has binary representation 1000010001 and contains a binary gap of 4

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

Complete the function generate. It should return the resulting array of integers.
generate has the following parameter(s):

1. An array of integers a.
2. An integer d, the number of rotations.

#### Output:

The final state of the array after performing d right rotations.

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

Should result into 3. Because 3 has no match in this array.

## 6. Missing Permutation Element

Given an array consisting of N different integers. The array contains integers in the range [1..(N + 1)], which means
that exactly one element is missing.

Your goal is to find that missing element.

For example, given array A such that:

[2, 3, 1, 5]

the function should return 4, as it is the missing element.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [0..100,000];
the elements of A are all distinct;
each element of array A is an integer within the range [1..(N + 1)].
