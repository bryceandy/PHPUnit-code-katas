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

- N is an integer within the range [0..100,000];
- The elements of A are all distinct;
- Each element of array A is an integer within the range [1..(N + 1)].

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

- N is an integer within the range [2..100,000];
- Each element of array A is an integer within the range [−1,000..1,000].

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

- N and X are integers within the range [1..100,000];
- each element of array A is an integer within the range [1..X].

## 9. Permutation Check

Given an array A of N integers, write a function to determine if A is a permutation.

A permutation consists of integers 1, 2, ..., N. If it isn't a permutation the result should be 0,
and 1 if the array is a permutation.

Examples:

Consider array X = [4, 1, 3, 2], the result should be 1.

But an array Y = [4, 1, 2] should result into 0.

## 10. Missing Minimum Positive Integer

Given an array A of N integers, write a function that,  returns the smallest positive integer (greater than 0) that does
not occur in A.

For example, given A = [1, 3, 6, 4, 1, 2], the function should return 5.

Given A = [1, 2, 3], the function should return 4.

Given A = [−1, −3], the function should return 1.

Write an efficient algorithm for the following assumptions:

- N is an integer within the range [1..100,000];
- each element of array A is an integer within the range [−1,000,000..1,000,000].

## 11. Max Counters

You are given N counters, initially set to 0, and you have two possible operations on them:
 
 1. increase(X) − counter X is increased by 1,
 2. max counter − all counters are set to the maximum value of any counter.
 A non-empty array A of M integers is given. This array represents consecutive operations:
 
 if A[K] = X, such that 1 ≤ X ≤ N, then operation K is increase(X),
 
 if A[K] = N + 1 then operation K is max counter.
 For example, given integer N = 5 and array A such that:
 
     A[0] = 3
     A[1] = 4
     A[2] = 4
     A[3] = 6
     A[4] = 1
     A[5] = 4
     A[6] = 4
     
 the values of the counters after each consecutive operation will be:
 
     (0, 0, 1, 0, 0)
     (0, 0, 1, 1, 0)
     (0, 0, 1, 2, 0)
     (2, 2, 2, 2, 2)
     (3, 2, 2, 2, 2)
     (3, 2, 2, 3, 2)
     (3, 2, 2, 4, 2)
     
 The goal is to calculate the value of every counter after all operations.
 
 Write a function:
 
 function solution($N, $A);
 
 that, given an integer N and a non-empty array A consisting of M integers, returns a sequence of integers representing
 the values of the counters.
 
 Result array should be returned as an array of integers.
 
 For example, given:
 
     A[0] = 3
     A[1] = 4
     A[2] = 4
     A[3] = 6
     A[4] = 1
     A[5] = 4
     A[6] = 4
     
 the function should return [3, 2, 2, 4, 2], as explained above.
 
 Write an efficient algorithm for the following assumptions:
 
 - N and M are integers within the range [1..100,000];
 - Each element of array A is an integer within the range [1..N + 1]. 
 
## 12. Minimum Coin Turns

There are N coins, each showing either heads or tails. We would like all the coins to form a sequence of alternating
heads and tails. What is the minimum number of coins that must be reversed to achieve this? 
 
Write a function:
  
def solution(A) 

that, given an array A consisting of N integers representing the coins, returns the minimum number of coins that must be
reversed.
 
Consecutive elements of array A represent consecutive coins and contain either a 0 (heads) or a 1 (tails).

Examples: 

1. Given array A = [1, 0, 1, 0, 1, 1], the function should return 1.
After reversing the sixth coin, we achieve an alternating sequence of coins [1, 0, 1, 0, 1, 0].
 
2. Given array A = [1, 1, 0, 1, 1], the function should return 2. 
After reversing the first and fifth coins, we achieve an alternating sequence [0, 1, 0, 1, 0]. 

3. Given array A = [0, 1, 0], the function should return 0, Because the coins are already alternating.

4. Given array A = [0, 1, 1, 0], the function should return 2.
After reversing the first and second coin, we achieve an alternating sequence of coins [1, 0, 1, 0].

Or, After reversing the third and fourth coin, we achieve an alternating sequence of coins [0, 1, 0, 1].

Performance is not a requirement for this problem, focus on the code correctness.

## 13. Consecutive Integers Product In Range

Write a function solution that given two integers A and B, returns the number of integers from the range [A..B]
(ends are included) which can be expressed as the product of two consecutive integers, that is X*(X+1), for some integer
X.

Examples:

Given A =6 and B=20, the function should return 3. These integers are 6=2*3, 12=3*4 and 20=4*5.

Given A=21 and B=29, the function should return 0. There are no integers of the form X*(X+1) in this interval.

Write an efficient algorithm for the following assumptions:

- A and B are integers within the range [1..1,000,000,000]

- A<=B

## 14. Palindrome

Given the string, check if it is a palindrome.

Example:

For inputString = "aabaa", the output should be  true

For inputString = "abac", the output should be  false

For inputString = "a", the output should be  true.

true if inputString is a palindrome, false otherwise.

## 15. Largest product

Given an array of integers, find the pair of adjacent elements that has the largest product and return that product.

Example

For inputArray = [3, 6, -2, -5, 7, 3], the output should be 21.

7 and 3 produce the largest product.