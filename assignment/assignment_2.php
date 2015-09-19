<!DOCTYPE html>
<html>

<head>
    <title>Assignment 2: Pig Latin</title>
</head>

<body>
<u><center><h3>Assignment 2: Pig Latin Conversion Table</h3></center></u>
<h4> Name: Ambika Maheshwari </h4>
<h4> Student Id: 10395064 </h4>
<table border="1" style="width:80%">
<thead>
  <tr>
     <th>Index</th>
     <th>Original word</th>
	 <th>Translation</th>
  </tr>
 </thead>
    <?php
        function make_pig_latin ($string)
        {
            /*
             * see: https://en.wikipedia.org/wiki/Pig_Latin
             * If a word begins with a consonant, take all consonants until the first vowel and place them at the end of the word
             *  and then add "ay" at the end.
             *    ie: Trash -> ashtray
             * If a word begins with a vowel, add "yay" to the end.
             */
			
			$letter = str_split($string);
			$vowel = str_split("aeiouAEIOU");
			$piglatin = "";
			$arrlength_vowel = count($vowel);
			for($x=1;$x<(count($letter));$x++)
			{
				for($y=0;$y<(count($vowel));$y++)
				{
				if($letter[0] == $vowel[$y])
				{
					$piglatin .=$string."yay";
					return strtolower($piglatin);
					
				}
				else if($letter[$x] == $vowel[$y])
				{
					$piglatin .=substr($string,$x).substr($string,0,$x)."ay";
					return strtolower($piglatin);
				}
				
				}
			}

        }
		 /*
         * Create an array from the following strings:
         *   Banana, Cranberry, Pistachio, Marshmallow, Almond, Mozzarella, Gouda, Avocado
         * Iterate through the array and print a table that has the index of the element in the first column,
         * the original word in the second column, and the Pig Latin translation in the third column.
         */
		$food = array("Banana", "Cranberry", "Pistachio", "Marshmallow", "Almond", "Mozzarella", "Gouda", "Avocado");
		$arr_length = count($food);
		
		/* printing results here! */
		for($i=0;$i<$arr_length;$i++)
		{
			echo "<tr><td>".($i+1)."</td><td>".$food[$i]."</td><td>".make_pig_latin($food[$i])."</td></tr>";
			
		}

    ?>
</table>
</body>
</html>
