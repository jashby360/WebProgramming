function fibonacci(){
	var i;
	var n = prompt('Enter the n amount: ');
	var fib = [];

	fib[0] = 0;
	fib[1] = 1;
	document.write(fib[0] + '<br/>');
	document.write(fib[1] + '<br/>');
	for (i = 2; i < n; i++) {
	
	fib[i] = fib[i - 2] + fib[i - 1];
	document.write(fib[i] + '<br/>');
	}
}

function generatePyramid() {
    var totalNumberofRows = prompt("Enter number of rows:");
    var output = '';
    for (var i = 1; i <= totalNumberofRows; i++) {
        for (var j = 1; j <= i; j++) {
            output +=' $ ';
        }
        document.write(output + '<br/>');
        output = '';
    }
}

function isPalindrome(s) {
    return s == s.split("").reverse().join("");
}


