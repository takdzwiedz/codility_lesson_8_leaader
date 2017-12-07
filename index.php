<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 07.12.2017
 * Time: 10:02
 * A non-empty zero-indexed array A consisting of N integers is given. The leader of this array is the value that occurs in more than half of the elements of A.
 * Write a function
 * function arrLeader($A);
 * that, given a non-empty zero-indexed array A consisting of N integers, returns the leader of array A. The function should return -1 if array A does not contain a leader.
 * Assume that:
 *  N is an integer within the range [1..1,000,000];
 *  each element of array A is an integer within the range [0..2147483647].
 * For example, given array A consisting of ten elements such that:
 * A[0] = 4 A[1] = 2 A[2] = 2
 * A[3] = 3 A[4] = 2 A[5] = 4
 * A[6] = 2 A[7] = 2 A[8] = 6
 * A[9] = 4
 * the function should return -1, because the value that occurs most frequently in the array, 2,
 * occurs 5 times, and 5 is not more than half of 10.
 * Given array A consisting of five elements such that:
 * A[0] = 100 A[1] = 1 A[2] = 1
 * A[3] = 50 A[4] = 1
 * the function should return 1.
 * Complexity:
 *  expected worst-case time complexity is O(N);
 *  expected worst-case space complexity is O(1), beyond input storage (not counting the
 * storage required for input arguments).
 * Elements of input arrays can be modified.
 */

$A1 = array (4, 2, 2, 3, 2, 4, 2, 2, 6, 4 );
$A2 = array(100, 1, 1, 50, 1);

function arrLeader($A) {

    $total = count($A);
    $repeated = array_count_values($A);
    $totalRepeated = count($repeated);
    $highestFreqOfArray = max($repeated);
    $valueOfMostFrequent = array_search($highestFreqOfArray, $repeated);


    echo'Array: <b>[';
    foreach ($A as $key => $value){
        echo $value.',';
    };
    echo ']</b><br>';
    echo 'Total number of elements in array: <b>'.$total.'</b><br>';
    echo'Array of repeated elements (value=>frequency): <b>[ ';
    foreach ($repeated as $key => $value){
        echo $key.' => '.$value.', ';
    };
    echo ']</b><br>';
    echo 'Number of repated elements in array: <b>'.$totalRepeated.'</b><br>';
    echo 'Highest frequency of repeated value: <b>'.$highestFreqOfArray.'</b><br>';
    echo 'Value of most frequent element in array: <b>'.$valueOfMostFrequent.'</b><br><br>';


    echo '<b>The answer is: ';
    if ($highestFreqOfArray > $total/2) {
        echo '-1</b>';
    } else {
        echo '1</b>';
    }
}
echo '<b>LEADER</b><br><br>';

arrLeader($A2);

//$array = array(12,43,66,21,56,43,43,78,78,100,43,43,43,21);
//$vals = array_count_values($array);
//echo 'No. of NON Duplicate Items: '.count($vals).'<br><br>';
//print_r($vals);