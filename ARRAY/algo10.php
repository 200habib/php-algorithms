<?php
class BinarySearch
{
    // Method to perform binary search
    public function search(array $array, int $target): int
    {
        $left = 0; // Initialize the left pointer to the start of the array
        $right = count($array) - 1; // Initialize the right pointer to the end of the array

        // Continue searching while the left pointer is less than or equal to the right pointer
        while ($left <= $right) {
            $mid = $left + intval(($right - $left) / 2); // Calculate the middle index

            // Check if the middle element is the target
            if ($array[$mid] === $target) {
                return $mid; // Target found, return the index
            } elseif ($array[$mid] < $target) {
                $left = $mid + 1; // Target is in the right half, move the left pointer
            } else {
                $right = $mid - 1; // Target is in the left half, move the right pointer
            }
        }

        return -1; // Target not found, return -1
    }
}

// Example usage
$array = [1, 3, 5, 7, 9, 11, 13, 15]; // Sorted array
$target = 7; // Value to search for

$binarySearch = new BinarySearch(); // Create an instance of the BinarySearch class
$result = $binarySearch->search($array, $target); // Perform the search

// Display the result
if ($result !== -1) {
    echo "Value found at index: " . $result;
} else {
    echo "Value not found.";
}
?>
