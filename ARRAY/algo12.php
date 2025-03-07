function maxSubarrayWithPenalty($arr) {
    if (empty($arr)) {
        return [];
    }

    $maxSum = PHP_INT_MIN; // Initialize the maximum sum
    $currentSum = 0;       // Current sum of the subarray
    $start = $end = $tempStart = 0; // Pointers for the maximum subarray

    for ($i = 0; $i < count($arr); $i++) {
        $num = $arr[$i];

        // Calculate the current sum with the penalty for negative numbers
        if ($num < 0) {
            $currentSum += $num - 2 * abs($num); // Apply the penalty
        } else {
            $currentSum += $num;
        }

        // If the current sum is greater than the maximum sum, update
        if ($currentSum > $maxSum) {
            $maxSum = $currentSum;
            $start = $tempStart;
            $end = $i;
        }

        // If the current sum becomes negative, reset
        if ($currentSum < 0) {
            $currentSum = 0;
            $tempStart = $i + 1;
        }
    }

    // Extract the resulting subarray
    $result = array_slice($arr, $start, $end - $start + 1);
    return [
        'subarray' => $result,
        'sum' => $maxSum
    ];
}

// Example usage
$arr = [1, -2, 3, 5, -1, 2];
$result = maxSubarrayWithPenalty($arr);

echo "Subarray with maximum sum: " . implode(", ", $result['subarray']) . "\n";
echo "Maximum sum: " . $result['sum'] . "\n";
