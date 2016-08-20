var quote = ["True wisdom comes not from knowledge, but from understanding.",
"Our greatest weakness lies in giving up. The most certain way to succeed is always to try just one more time.",
"The greatest gift of life is friendship, and I have received it.",
"To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment.",
"The way a team plays as a whole determines its success. You may have the greatest bunch of individual stars in the world, but if they donot play together, the club won't be worth a dime.",                                                                                                             
 "It's one of the greatest gifts you can give yourself, to forgive. Forgive everybody."];

var containerTAG, quoteBox, convertTo_TAG, quoteParagraph, quoteLength, quoteIndex, form_TAG, input_TAG, convertTo_TAG, result_TAG, result,inputSeries_TAG, max_TAG, min_TAG, sum_TAG, avg_TAG, rev_TAG;

var btn_clearIt, btn_capitalize, btn_sort, btn_reverse, btn_stripBlank, btn_addNumbers, btn_shuffle, textarea_magic;




quoteLength = quote.length;
quoteIndex = Math.round(Math.random()*(quoteLength-1));

function showQuote() {

	quoteParagraph = document.getElementById("text");
	quoteParagraph.innerHTML = quote[quoteIndex];
	
}
//----window on load function-----//
window.onload = function() {
	showQuote();
	quoteBox = document.getElementById("quote-box");
	quoteParagraph = document.getElementById("text");
	form_TAG = document.getElementById("hero-form");
	input_TAG = document.getElementById("input-form");
	convertTo_TAG = document.getElementById("convert-to-options");
	result_TAG = document.getElementById("converted-result");
	inputSeries_TAG = document.getElementById("input-series");
	max_TAG = document.getElementById("max-result");
	min_TAG = document.getElementById("min-result");
	sum_TAG = document.getElementById("sum-result");
	avg_TAG = document.getElementById("avg-result");
	rev_TAG = document.getElementById("rev-result");
	containerTAG = document.getElementById("container");

	btn_clearIt = document.getElementById("clearIt-btn");
	btn_capitalize = document.getElementById("capitalize-btn");
	btn_sort = document.getElementById("sort-btn");
	btn_reverse = document.getElementById("reverse-btn");
	btn_stripBlank = document.getElementById("stripBlank-btn");
	btn_addNumbers = document.getElementById("addNumbers-btn");
	btn_shuffle = document.getElementById("shuffle-btn");
	textarea_magic = document.getElementById("magic-text");




}


/*-----changing colors in the html file------
----four color changing functions-----
*/

function changeToBlack() {

	quoteBox.style.backgroundColor = 'blue';
	quoteParagraph.style.color = '#f6dbc4';
	quoteBox.style.borderColor = '#808080';
	

}

function changeToYellow() {
	
	quoteBox.style.backgroundColor = '#f6dbc4';
	quoteParagraph.style.color = '#808080';
	quoteBox.style.borderColor = '#b4d0a9';

}

function changeToGrey() {
	
	quoteBox.style.backgroundColor = '#808080';
	quoteParagraph.style.color = '#b4d0a9';
	quoteBox.style.borderColor = 'blue';


}

function changeToBlue() {
	
	quoteBox.style.backgroundColor = '#b4d0a9';
	quoteParagraph.style.color = 'blue';
	quoteBox.style.borderColor = '#f6dbc4';


}

/*----Hero Converter----*/

function convert() {

	var input_value = input_TAG.value;
	var convertTo = convertTo_TAG.options[convertTo_TAG.selectedIndex].value;
	if(convertTo == ("lb-to-kg")) {
		result = input_value * 0.4536;
		//alert(result + " kilograms");
		result_TAG.innerHTML = result + " kilograms";
		
	} else {
		result = input_value * 2.2046;
		//alert(result + "pounds");
		result_TAG.innerHTML = result + " pounds";
	}
	
	
	

}

function series() {

	var seriesInput = inputSeries_TAG.value;
	var inputSeries = seriesInput.split(",");
	var sum = sumValue(inputSeries);
	max_TAG.innerHTML = maxValue(inputSeries);
	min_TAG.innerHTML = minValue(inputSeries);
	sum_TAG.innerHTML = sum;
	avg_TAG.innerHTML = avgValue(inputSeries, sum);
	rev_TAG.innerHTML = reverseValue(inputSeries);
	

	
}

function maxValue(value) {

	var temp = value[0];

	if(value.length > 1) {
		for(i=1; i<value.length; i++) {
			temp = Math.max(temp,value[i]);
		}
	}
	return temp;
}

function minValue(value) {

	var temp = value[0];

	if(value.length > 1) {
		for(i=1; i<value.length; i++) {
			temp = Math.min(temp,value[i]);
		}
	}
	return temp;
}

function sumValue(value) {

	var sum = 0;
	for(x in value) {
		var integerValue = parseInt(value[x]);
		sum = sum + integerValue;
	}
	return sum;
}

function avgValue(value, sum) {
	return sum/value.length;
}

function reverseValue(value) {
	return value.reverse();
}

function clearAll() {
	textarea_magic.value = "";
}

function capitalize() {
	var string = textarea_magic.value.toUpperCase();
	textarea_magic.value = string;
}

function sort() {

	var stringArray = textarea_magic.value.split("\n");
	
	var tempArray = stringArray.slice(0);
	var sortArray = tempArray.sort();
	var flag = false;
	var n = sortArray.length;
	
	for(i=0; i<n; i++) {
		if(!(sortArray[i] == stringArray[i])) {
			flag = true;
			
			break;
		}
	}
	
	if(flag) {
		var string = "";
		for(x in sortArray) {
			if(sortArray[x] == "") {
			} else {
				string = string + sortArray[x] + "\n";
			}
		}

		textarea_magic.value = string;
	}

	//ignoreSpace(string);

}

function reverseText() {
	var stringArray = textarea_magic.value.split("\n");

	var reverseStringArray = stringArray.reverse();

	var string = "";
	for(x in reverseStringArray) {
		if(stringArray[x] == "") {
		} else {
			string = string + reverseStringArray[x] + "\n";
		}
	}

	textarea_magic.value = string;

}

function stripBlank() {
	var stringArray = textarea_magic.value.split("\n");
	var string = "";
	for(x in stringArray) {
		if(stringArray[x] == "") {
		} else {
			string = string + stringArray[x] + "\n";
		}
	}
	textarea_magic.value = string;

}

function addNumber() {
	var stringArray = textarea_magic.value.split("\n");
	var string = "";
	var count = 1;
	for(x in stringArray) {
		if(stringArray[x] == "") {
		} else {
			string = string + count +". " + stringArray[x] + "\n";
			count++;

		}
		
	}
	textarea_magic.value = string;

}

function shuffle() {
	var stringArray = textarea_magic.value.split("\n");
	

	for (var i = stringArray.length - 1; i > 0; i--) {
        var j = Math.floor(Math.random() * (i + 1));
        var temp = stringArray[i];
        stringArray[i] = stringArray[j];
        stringArray[j] = temp;
    }

    var string = "";
	for (i in stringArray) {
		if(stringArray[i] == "") {
		} else {
			string = string + stringArray[i] + "\n";
		}
	}
	textarea_magic.value = string;

}

function printMagicText(array) {
	for(x in array) {
		textarea_magic.value = array[x] + "\n";
	}
}

function ignoreSpace(stringArray) {

	var string = "";
	for(x in stringArray) {
		if(stringArray[x] == "") {
		} else {
			string = string + stringArray[x] + "\n";
		}
	}
	textarea_magic.value = string;
}




