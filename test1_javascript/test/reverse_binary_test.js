const { expect } = require("chai");
const { describe } = require("mocha");
const { reverseNumberToBinary } = require("../reverse_binary.js");

describe('Reverse Binary Test', () => {
    it('should return 11 when the number to reverse binary is 13', () => {
        expect(reverseNumberToBinary(13)).to.equal(11)
    })

    it('should return 1 when the number to reverse binary is 1', () => {
        expect(reverseNumberToBinary(18)).to.equal(9)
    })
})
