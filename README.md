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
ends in the binary representation of N. For example, number 9 has binary representation 1001 and contains a binary gap
of length 2. The number 529 has binary representation 1000010001 and contains two binary gaps: one of length 4 and one
of length 3. The number 20 has binary representation 10100 and contains one binary gap of length 1. The number 15 has
binary representation 1111 and has no binary gaps. The number 32 has binary representation 100000 and has no binary gaps.

Write a function:

function findGap($N);

that, given a positive integer N, returns the length of its longest binary gap. The function should return 0 if N
 doesn't contain a binary gap.

For example, given N = 1041 the function should return 5, because N has binary representation 10000010001 and so its
longest binary gap is of length 5. Given N = 32 the function should return 0, because N has binary representation
'100000' and thus no binary gaps.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [1...2,147,483,647].

## 2. Prime Factors

The prime factors for a given number is the list of prime numbers such that their product results into the given number.

For example:

6 ➡️ 3 x 2 

20 ➡️ 5 x 2 x 2

7 ➡️ 7

Create a function that receives a positive number and returns its prime factors in an array.

## 3. Roman Numerals

Create a function that receives a number from 1 to 3999 and outputs its roman numeral