const reverseNumberToBinary = (number) => {
    //validates the function argument to conform to only numbers
    if (isNaN(number)) {
        throw new "An error occured, please insert a valid number!";
    }
    // type cast the number to number format
    var num = (Number(number));
    num = num.toString(2);
    const reversed = num.split('').reverse().join('');
    return parseInt(reversed, 2);
}

module.exports = {
    reverseNumberToBinary
}