
<?php 
$First_array = array(200,3,576,1,7,328,22,0,1,8,2);
$a = 'i';
for ($i=0; $i<count($First_array); $i++){
    $len = count($First_array);
    if (strrpos($First_array[$i], "2") !== false) {
        $len++;
        for ($j = $len-1; $j > $i; $j--){
            $First_array[$j] = $First_array[$j-1];
        }
        $i++;
        $First_array[$i] = $a;
    } 
}
print_r($First_array);
?>