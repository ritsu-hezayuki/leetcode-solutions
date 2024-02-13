### Complexity:
- Time: <i>O(n)</i>
- Space: <i>O(n)</i>

### Solution
1. First we need to loop through the array
2. Then, we try to check whether the array element is a palindromic string or not
3. To check it, we can simply just compare the string and its reversed string
4. Or we can perform loop in every character to and check it manually


### Example
$words = ["abc", "ohio", "ada", "cool"]

- Iteration 1
  1. $word = "abc"
  2. because first word is a, and last word is c, we can just skip this word
- Iteration 2
  1. $word = "ohio"
  2. the first word and the last word is the same word (o)
  3. the 2nd word and the 2nd last word is not the same, so we can just skip this word
- Iteration 3
  1. $word = "ohio"
  2. the first word and the last word is the same word (a), so we can continue
  3. the 2nd word and the 2nd last word is the same, so we can continue
  4. because there's no more word left, we can return this word as the answer