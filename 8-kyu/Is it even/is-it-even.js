/*Title:
    Is it even?

Instruction:
    In this Kata we are passing a number (n) into a function.
    Your code will determine if the number passed is even (or not).
    The function needs to return either a true or false.
    Numbers may be positive or negative, integers or floats.
    Floats with decimal part non equal to zero are considered UNeven for this kata.

Kata Link:
    https://www.codewars.com/kata/555a67db74814aa4ee0001b5

Discuss Link:
    https://www.codewars.com/kata/555a67db74814aa4ee0001b5/discuss

Solution Link:
    https://www.codewars.com/kata/555a67db74814aa4ee0001b5/solutions
*/
// Long Solution
function testEven(n) {
    if (n % 2 == 0) {
        return true;
    }
    return false;
}

// Short Solution: I used ternary operator here
function testEven(n) {
    return n % 2 == 0 ? true : false;
}
