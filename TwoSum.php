class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $indexes = [];
        for($i = 0; $i < count($nums); $i++) {
          for ($j = $i + 1; $j < count($nums); $j++) {
            if (($nums[$i] + $nums[$j]) === $target) {
              $indexes = [$i, $j];
            }
          }
        }
        return $indexes;
    }
}
