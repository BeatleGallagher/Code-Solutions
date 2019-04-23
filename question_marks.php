<!DOCTYPE html>
<html>
	<head>
	<title>PHP problem translations from javascript</title>
	</head>
		<body>
<?php
/* PHP SOLUTION */
    /* 16 April 2018 - EASY/MEDIUM - failed 2 test cases  "9???1???9??1???9" and "5??aaaaaaaaaaaaaaaaaaa?5?5"
    Have the function QuestionsMarks(str) take the str string parameter,
    which will contain single digit numbers, letters, and question marks, 
    and check if there are exactly 3 question marks between every pair of two numbers 
    that add up to 10. If so, then your program should return the string true, 
    otherwise it should return the string false. If there aren't any two numbers that add up to 10
    in the string, then your program should return false as well. 
    
    For example: if str is "arrb6???4xxbl5???eee5" then your program should return true 
    because there are exactly 3 question marks between 6 and 4, and 3 question marks between 5 and 5
    at the end of the string. 
    hint - It may help to first find all the pairs of numbers 
    that add up to 10, and then check what's between them.
    */
    function question_marks($str){
    
        //this finds all the numbers and question marks in the string and removes the rest of string
        $numbers_and_question_marks;
        preg_match_all("/[0-9\?0-9]/",$str,$numbers_and_question_marks);
        
        //this turns the numbersAndQuestionMarks array into a string 	
        $numbers_and_question_marks = implode($numbers_and_question_marks[0]);
        //echo $numbers_and_question_marks;
    
        //this searches the string for exact match and returns it
        $exact_matches;
        preg_match_all("/[0-9]\?{3}[0-9]/",$numbers_and_question_marks,$exact_matches);
        
        
        if(sizeof($exact_matches[0]) === 0){
            echo "false";
            return "false";
        } else {
            for($i = 0;$i <= sizeof($exact_matches[0]);$i++){
                if($exact_matches[0][0][0] + $exact_matches[0][0][4] === 10){
                    echo "true";
                    return "true";
                } else {	
                    array_shift($exact_matches[0]);
                }
            }
            echo "false";
            return "false"; 
        }
    }
    question_marks("9??1?3???7??16??4");
 ?>
            
<script>
    /* JAVASCRIPT SOLUTION  */
function QuestionsMarks(str){
	//this finds all the numbers and question marks in the string and removes the rest of string
	var numbersAndQuestionMarks = str.match(/[0-9\?0-9]/g);

	//this turns the numbersAndQuestionMarks array into a string 
    var numAndQuesToString = numbersAndQuestionMarks.join('');
	console.log(numAndQuesToString);

	//this searches the string for exact match and returns it
	var matches = numAndQuesToString.match(/[0-9]\?{3}[0-9]/g);
	console.log(matches);

	if(matches === null){
		console.log('noting found return false');
		return "false";
	} else {
		for(var i = 0;i <= matches.length;i++){
            if((+matches[0][0] + (+matches[0][4]) == 10)){
					console.log("yes true");
					return "true";
		    } else {
					matches.shift();	
		    }
		}
		console.log("false outside");
		return "false"; 
    }  
}
QuestionsMarks("arrb6???4xxbl5???eee5");


/*  SOLUTION IN  C#  * /
namespace Code_Solutions_Csharp
{
    class Program
    {
        static void Main(string[] args)
        {
            string result = QuestionMarks("arrb6??ghxxbl5??eee5");
            Console.WriteLine(result);
        }

        static string QuestionMarks(string str) 
        {
            //this removes the characters from the string that are not numbers or question marks
            string pattern1 = @"[a-z]+";
            string matches1 = Regex.Replace(str,pattern1,"");
            Console.WriteLine(matches1);
            
            
            //this searches the string for exact match of 1 number then 3 question marks then 1 number
            string pattern2 = @"[0-9]\?{3}[0-9]";
            MatchCollection matches2 = Regex.Matches(matches1, pattern2);
            

            if(matches2.Count == 0)
            {
                Console.WriteLine("No matches found");
                return "false";
            }
            else
            {
                //this gets me the string substring value then I need to convert it to integer cause I want to add the values
                string number1 = Convert.ToString(matches2[0].Value[0]);
                string number2 = Convert.ToString( matches2[0].Value[4]);
                int NumTotalToCheck = 10;

                Console.WriteLine(Convert.ToInt32(number1) + " " + Convert.ToInt32(number2));
                              
                for (int i = 0; i < matches2.Count; i++)
                {
                    if (Convert.ToInt32(number1) + Convert.ToInt32(number2) == NumTotalToCheck)
                    {
                        return "true";
                    }
                    else
                    {
                        return "false";
                    }
                }
                return "false";
            }    
        }
    }
} */
</script>
 </body>
<footer>
		
</footer>
</html>
