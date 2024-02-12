<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $storage = [];

        foreach($nums as $index => $num){
            if(array_key_exists($num, $storage)){
                return [$storage[$num], $index];
            }

            $storage[$target - $num] = $index;
        }
    }
}