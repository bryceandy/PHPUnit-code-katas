# PHPUnit code katas

### File navigation
Within the <code>src</code> directory, there are classes, whereby each performs a specific algorithm.

The <code>tests</code> directory has a PHP Unit test class for these algorithms.

### Installation

#### Requirements
- PHP 7
- Composer

Clone the repo,

```bash
git clone https://github.com/bryceandy/PHPUnit-code-katas.git && cd PHPUnit-code-katas
```

then install PHP dependencies

```bash
composer install
```

Proceed by running 

```bash
./vendor/bin/phpunit tests
``` 

to run all tests, or

```bash
./vendor/bin/phpunit tests/BinaryGapTest
``` 

to run a specific test class.


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

Given an array off N integers, where N is an odd number. Find the element in the array which has no match to another 
element in the array.

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

## 7. Tape Equilibrium

A non-empty array A consisting of N integers is given. Array A represents numbers on a tape.

Any integer P, such that 0 < P < N, splits this tape into two non-empty parts:
 A[0], A[1], ..., A[P − 1] and A[P], A[P + 1], ..., A[N − 1].

The difference between the two parts is the value of:
 |(A[0] + A[1] + ... + A[P − 1]) − (A[P] + A[P + 1] + ... + A[N − 1])|

In other words, it is the absolute difference between the sum of the first part and the sum of the second part.

For example, consider array A such that:

  A[0] = 3
  A[1] = 1
  A[2] = 2
  A[3] = 4
  A[4] = 3
We can split this tape in four places:

P = 1, difference = |3 − 10| = 7
P = 2, difference = |4 − 9| = 5
P = 3, difference = |6 − 7| = 1
P = 4, difference = |10 − 3| = 7

Write a function:

that, given a non-empty array A of N integers, returns the minimal difference that can be achieved.

For example, given:

  A[0] = 3
  A[1] = 1
  A[2] = 2
  A[3] = 4
  A[4] = 3
the function should return 1, as explained above.

Write an efficient algorithm for the following assumptions:

N is an integer within the range [2..100,000];
each element of array A is an integer within the range [−1,000..1,000].

## 8. Frog River Jump

A small frog wants to get to the other side of a river. The frog is initially located on one bank of the 
river (position 0) and wants to get to the opposite bank (position X+1). Leaves fall from a tree onto the surface
of the river.

You are given an array A consisting of N integers representing the falling leaves. A[K] represents the position 
where one leaf falls at time K, measured in seconds.

The goal is to find the earliest time when the frog can jump to the other side of the river. The frog can cross only
when leaves appear at every position across the river from 1 to X (that is, we want to find the earliest moment 
when all the positions from 1 to X are covered by leaves). You may assume that the speed of the current in the river
is negligibly small, i.e. the leaves do not change their positions once they fall in the river.

For example, you are given integer X = 5 and array A such that:

  A[0] = 1
  A[1] = 3
  A[2] = 1
  A[3] = 4
  A[4] = 2
  A[5] = 3
  A[6] = 5
  A[7] = 4
  
In second 6, a leaf falls into position 5. This is the earliest time when leaves appear in every position across
the river.

Write a function:

class Solution { public int solution(int X, int[] A); }

that, given a non-empty array A consisting of N integers and integer X, returns the earliest time when the frog can jump
to the other side of the river.

If the frog is never able to jump to the other side of the river, the function should return −1.

For example, given X = 5 and array A such that:

  A[0] = 1
  A[1] = 3
  A[2] = 1
  A[3] = 4
  A[4] = 2
  A[5] = 3
  A[6] = 5
  A[7] = 4
the function should return 6, as explained above.

Write an efficient algorithm for the following assumptions:

N and X are integers within the range [1..100,000];
each element of array A is an integer within the range [1..X].

## 9. Permutation Check

Given an array A of N integers, write a function to determine if A is a permutation.

A permutation consists of integers 1, 2, ..., N. If it isn't a permutation the result should be 0,
and 1 if the array is a permutation.

Examples:

Consider array X = [4, 1, 3, 2], the result should be 1.

But an array Y = [4, 1, 2] should result into 0.