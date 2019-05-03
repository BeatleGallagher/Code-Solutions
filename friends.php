<html>
	<head>
	    <title>PHP problem translations from javascript</title>
	</head>
<body>
<?php
/*
SOLUTION IN PHP
Make a program that filters a list of strings and returns a list with only your friends name in it.
If a name has exactly 4 letters in it, you can be sure that it has to be a friend of yours! Otherwise, you can be sure he's not...
Ex: Input = ["Ryan", "Kieran", "Jason", "Yous"], Output = ["Ryan", "Yous"]
Note: keep the original order of the names in the output.
*/
function friend($friends){
		$four_letter_friends = [];

		for($index = 0;$index < count($friends);$index++){
			if((is_numeric($friends[$index]) === FALSE)  &&  (strlen($friends[$index]) === 4)){
				array_push($four_letter_friends,$friends[$index]);
			}	
		}
		return print_r($four_letter_friends);
}
friend(["Ryan", "Kieran", "1234",1234,"Mark"]);
?>
<script>
    // SOLUTION IN JAVASCRIPT
function friend(friends){
    var fourLetterFriends = [];
    for(var i = 0;i < friends.length;i++){
      if(isNaN(friends[i]) && friends[i].length === 4){
        fourLetterFriends.push(friends[i]);  
      } 
	}
	console.log(fourLetterFriends);
}
friend(["Ryan", "Kieran", "1234","Mark"]);

/* SOLUTION IN C#
class Program
    {
        static void Main(string[] args)
        {
            
            string[] names = { "Ryan", "1234","Karl", "Jason", "Yous" };
            List<string> people = new List< string>(names);
            var nameList = Friends(people);
            Console.WriteLine(nameList);
        }

        static string Friends(List<string> friends)
        {
            List<string> FourLetterFriends = new List<string>();
            int number;
            for (int i = 0; i < friends.Count;i++ )
            {   
                if(friends[i].Length == 4 && Int32.TryParse(friends[i],out number) == false)
                {
                    FourLetterFriends.Add(friends[i]);
                }
            }
            var names = String.Join(" ", FourLetterFriends.ToArray());
            return names;
        }
    }
*/
</script>
</body>
</html>
