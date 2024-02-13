<?php

class Solution {

    /**
     * @param String[] $words
     * @return String
     */
    function firstPalindrome($words) {
        foreach($words as $word){
            $chars = str_split($word);
            $palindrome = true;

            for($x = 0; $x < count($chars); $x++){
                if($chars[$x] != array_pop($chars)){
                    $palindrome = false;
                    break;
                }
            }

            if($palindrome) return $word;
        }

        return "";
    }
}