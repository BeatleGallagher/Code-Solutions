<!DOCTYPE html>


<html>
	<head>
	<title>PHP problem translations from javascript</title>

	</head>
		<body>
<?php 
	function letter_changes($str){
		$vowels = ['a','e','i','o','u'];
		$index;
		$char_code_array = [];
		$char_letter_array = [];
		$str_length = strlen($str);
		
		//determines the characters code value then adds 1 to the value and pushes it into array
 		//does one check to see if the character is a z value then has to store the character code value for letter a
		for($index = 0;$index < $str_length;$index++){

		}

  		//uses the character value to determine the character then push it into the charLetterArr array
		for($index = 0;$index < $str_length;$index++){

		}

  		//joins the array values back to a string


		//loops throught the new string and if it finds a vowel it makes it uppercase

	//returns string
	echo $str;
  	//return str;
}
letter_changes('hello');

?>
	</body>
	<footer>
		
	</footer>
</html>
<script>
	function breakStringUp(str){
		console.log(str);
		var productPrice = [];
		var productName = [];

	//how to find how many times a character appears in a string
	//then use that for how many times you loop should run

	for(var i = 0;i < 3;i++){
		//this gets me the ammount of money the item costs
		str.search('R');
		str.search(';');
		str.slice(str.search('R') + 1,str.search(';'));
		productPrice.push(str.slice(str.search('R') + 1,str.search(';')));
		console.log(productPrice);

		productName.push(str.slice(0,str.search('R') - 1));
		console.log(productName);

		//this removes the first product from the string
		var str = str.replace(str.slice(0,str.search(';') + 1),'');
		
	}
		



		
		/*for(var i = 0;i < str.length;i++){
		  console.log(str.search('R'));
	   	  console.log(str.search(';'));
		  console.log(str.slice(str.search('R')+1,str.search(';')));
		} 

		var incomingString = str.split(' ');
		//console.log(incomingString);

		//console.log(incomingString.indexOf(';'));

		var productsArray = [];
		var prodPriceArr = [];
		var pricesTotal = 0;

		for(var i = 0;i < incomingString.length;i++){
			if(incomingString[i] == ';'){ 
				productsArray.push(incomingString.splice(0,i + 1));
				i = 0;
			}
		}

		incomingString = incomingString.join('');
		for(var i = 0;i < productsArray.length;i++){
		  for(var j = 0;j < productsArray[i].length;j++){
		    if(isNaN(productsArray[i][j]) == false){
		      prodPriceArr.push(productsArray[i][j]);
		    }
		  }
		}
		prodPriceArr = prodPriceArr.join(' ');
		prodPriceArr = prodPriceArr.split('  ');
		//console.log(prodPriceArr[3].length);
		//console.log(productsArray);*/
	}
	breakStringUp('full cream milk R30;free range large eggs R24;kaka pooper R120;R20-R20-R20');
</script>