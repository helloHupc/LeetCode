<?php
/*
 * @Autor: hupc
 * @Date: 2021-01-08 17:10:21
 */

 // 189.旋转数组
/**
 * @param Integer[] $nums
 * @param int $k
 * @return NULL
 */
function rotate(&$nums, $k) {
    if($k == count($nums)){
        return $nums;
    }
    if($k > count($nums)){
        $k = $k%count($nums);
    }
    $newKey = 0;
    foreach($nums as $key=>$value){
        if(count($nums) - $key - 1 < $k){
            $nums[$newKey] = $value;
            $newKey++;
        }else{
            $nums[$key+$k] = $value;
        }
    }
    return $nums;
}

//测试用例
$nums = [1,2,3,4,5,6,7];
$k = 3;
$res = rotate($nums,$k);
print_r($res);