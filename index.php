<!DOCTYPE html>
<html>
<body>

<?php



$offsets = array( 5,-14,31,-9,3);

//$str = 'fdŹ`752…ihj_€`o3Z”!st^g';
//$str =  mb_convert_encoding($str,'Windows-1252');
//echo implode(unpack("H*", $str));
$index = 0;


/*
foreach (str_split($str) as $char) {
    
    $char_byte = ord($char);
    if($char_byte == 10){
        continue;
    }
    //$final_char = chr(($char_byte - $offsets[$index]));
    //echo "char is $char , byte is $char_byte ,final char is $final_char , offset is $index | ";
    
    echo $char_byte;
    echo "
    ";
    //echo chr(($char_byte - $offsets[$index]));
    //echo ($char_byte - $offsets[$index]);
    
    

//    echo "index is $index , offset is ";
//    echo  $offsets[$index];
    $index += 1;
    if($index == count($offsets)){
        $index =0;
    }
}
*/

$handle = fopen("password.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        $div_text = array();
        $index = 0;
        foreach (str_split($line) as $char) {
    
            $char_byte = ord($char);
            if($char_byte == 10){
                continue;
            }
            $final_char = chr(($char_byte - $offsets[$index]));
            array_push($div_text,$final_char);
            //array_push($div_text,"$char_byte");
            
            $index += 1;
            if($index == count($offsets)){
                $index =0;
            }
        }

        echo "<div>"; 
        foreach($div_text as $element ){
            echo "$element ";
        }
        echo "</div>";
    }

    fclose($handle);
}


?>

</body>
</html>