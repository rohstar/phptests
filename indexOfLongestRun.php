<?php
class Run
{
    public static function indexOfLongestRun($str)
    {
       
        $run = 0;
		$max_run = -1;
		$max_in = -1;
		$index = -1;
		//echo $str . '<br />';		
		$str_arr = str_split($str);
		
		for($i = 0; $i < count($str_arr); $i++){
			if($i < count($str_arr)-1){
				//echo 'Im at ' . $str_arr[$i];
				if($str_arr[$i] == $str_arr[$i+1]){
					$index = $i;
					//echo ', MATCH, at index: ' . $index . ' ';
					$run++;
				} else {
					//echo ', No match, the run was: ' . $run . ' ';
					if($run > $max_run){
						$max_run = $run;
						$max_in = $i - ($run-1);
					}
					$run = 0;
				}
			} //echo '<br />';
			//echo ' '. $max_in . ' ';
		}
		
		return $max_in;
        
    }
}

// For testing purposes (do not submit uncommented):

echo Run::indexOfLongestRun('abbcccddddcccbba');

?>