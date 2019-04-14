<!DOCTYPE html>
<html>
	<head>
	<title>PHP problem translations from javascript</title>
</head>
<body>
<?php 
/* PHP SOLUTIONS
Have the function CheckNums(num1,num2) take both parameters being passed 
and return the string true if num2 is greater than num1, 
otherwise return the string false. If the parameter values are equal to each other 
then return the string -1. 
*/
function check_nums($num_one,$num_two){
	if($num_two > $num_one){
		echo "true";
	} else if($num_one === $num_two){
		echo "-1";
	} else {
		echo "false";
	}
	//this echo only here so the answers are displayed on a new line on the page if I view it in my browser
	echo "<br>";
}
check_nums(122,3);

	/* 
	Have the function TimeConvert(num) take the num parameter being passed
	and return the number of hours and minutes the parameter converts to 
	(ie. if num = 63 then the output should be 1:3). 
	Separate the number of hours and minutes with a colon. 	
	*/
function time_converted($num){
	$hour = floor($num / 60);
	$minute = $num % 60;


	echo $hour . ":" . $minute;
	//return ($hour . ":" . $minute);
	//this echo only here so the answers are displayed on a new line on the page if I view it in my browser
	echo "<br>";
}
time_converted(45);

/* 
Have the function AlphabetSoup(str) take the str string parameter being passed
and return the string with the letters in alphabetical order 
(ie. hello becomes ehllo). Assume numbers and punctuation symbols will not be
included in the string.
*/
function AlphabetSoup($str){	
	//turns string to array
	$str = str_split($str);

	//sorts the array alphabetically
	sort($str);

	//turns the array back to a string
	$str = join($str);

	echo($str);
	return $str;
	//this echo only here so the answers are displayed on a new line on the page if I view it in my browser
	echo "<br>";
}
AlphabetSoup("coderbyte");
?>
			
</body>
<footer>	
</footer>
</html>
<script>
	
/* JAVASCRIPT SOLUTIONS */
/* 
Have the function CheckNums(num1,num2) take both parameters being passed 
and return the string true if num2 is greater than num1, 
otherwise return the string false. If the parameter values are equal to each other 
then return the string -1. 
*/
function CheckNums(num1,num2){
	if(num2 > num1){
		console.log(true);
		return "true";
	} else if(num1 === num2){
		console.log(-1);
		return "-1";
	} else {
		console.log(false);
		return "false";
	}
}
CheckNums(3,122);
	
/* 
Have the function TimeConvert(num) take the num parameter being passed
and return the number of hours and minutes the parameter converts to 
(ie. if num = 63 then the output should be 1:3). 
Separate the number of hours and minutes with a colon. 	
*/
function TimeConvert(num){
	//this gives me the total hours
	var hour = Math.floor(num / 60);
	//this gives me the remaining minutes
	var minute = num % 60;

	console.log(hour + ":" + minute);
	//return (hour + ":" + minute);
}
TimeConvert(45);

/* 
Have the function AlphabetSoup(str) take the str string parameter being passed
and return the string with the letters in alphabetical order 
(ie. hello becomes ehllo). Assume numbers and punctuation symbols will not be
included in the string. 
*/
	
function AlphabetSoup(str){
	//turns string to array
	str = str.split("");
	//sorts the array alphabetically
	str = str.sort();
	//turns the array back to a string
	str = str.join("").trim();
	
	console.log(str);
	return str;
}
AlphabetSoup("coderbyte");

/* C# SOLUTIONS 
//Have the function CheckNums(num1,num2) take both parameters being passed 
//and return the string true if num2 is greater than num1, 
//otherwise return the string false. If the parameter values are equal to each other 
//then return the string -1. 

namespace Code_Solutions_Csharp
{
    class Program
    {   
        static void Main(string[] args)
        {
          string result = checkNums(3,122);
          Console.Write(result);  
        }

        static string checkNums(int num1,int num2)
        {
            if(num2 > num1)
            {
                return "true";
            } 
            else if(num1 == num2)
            {
                return "-1";
            }
            else
            {
                return "false";
            }    
        }
      }    
    }
} */
</script>
