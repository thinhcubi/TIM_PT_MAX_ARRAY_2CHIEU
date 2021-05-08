<?php
function checkMax($arr){
    $max=$arr[0][0];
    for($i=0;$i<count($arr);$i++){
        for($j=1;$j<count($arr[$i]);$j++){
            if($arr[$i][$j]>$max){
                $max = $arr[$i][$j];
            }
        }
    } echo $max;
}
$arr=[
    [16,34,10,45,32,76,54,74],
    [14,25,66,67,47,48,90]
    ];
checkMax($arr);
