var Calculate = /** @class */ (function () {
    function Calculate(a, b) {
        this.a = a;
        this.b = b;
    }
    Calculate.prototype.add = function () {
        return this.a + this.b;
    };
    Calculate.prototype.subract = function () {
        return this.a - this.b;
    };
    Calculate.prototype.multiply = function () {
        return this.a * this.b;
    };
    Calculate.prototype.divide = function () {
        return this.a / this.b;
    };
    return Calculate;
}());
var Operation = new Calculate(4, 3);
var Result = Operation.add();
console.log(Result);
console.log(Operation.add());
console.log(Operation.subract());
console.log(Operation.multiply());
console.log(Operation.divide());
