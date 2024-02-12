### Complexity:
- Time: <i>O(n)</i>
- Space: <i>O(n)</i>

### Solution
1. First we need to loop through the array of numbers
2. Then, we try to substract the $target with each of the elements


### Example
$nums = [2, 4, 8] and $target = 10

- Iteration 1
  1. 10 - 2 = 8
  2. 8 is not stored yet in the storage, so we store it first as an array key, and its index as the value
- Iteration 2
  1. 10 - 4 = 6
  2. 6 is not stored yet in the storage, so we store it first as an array key, and its index as the value
- Iteration 3
  1. 8 is already stored in the storage, so we can just return the current index with the stored index