<?php

// Let's consider the universal set:
// U={1,2,3,4,5,6,7,8,9,10}
// U={1,2,3,4,5,6,7,8,9,10}

// And the following subsets:

//     A={2,4,6,8,10}A={2,4,6,8,10} (even numbers)
//     B={1,2,3,4,5}B={1,2,3,4,5} (numbers less than or equal to 5)

// We can define the following operations:

// Step 1: Compute A∪BA∪B (Union)
// A∪B={1,2,3,4,5,6,8,10}
// A∪B={1,2,3,4,5,6,8,10}

// Step 2: Compute A∩BA∩B (Intersection)
// A∩B={2,4}
// A∩B={2,4}

// Step 3: Compute A' (Complement)
// A'={1,3,5,7,9}
// A'={1,3,5,7,9}

// Step 4: Compute B' (Complement)
// B'={6,7,8,9,10}
// B'={6,7,8,9,10}

// Step 5: Compute A−BA−B (Difference)
// A−B={1,3,5}
// A−B={1,3,5}

// Step 6: Compute B−AB−A (Difference)
// B−A={1,3,5,7,9}
// B−A={1,3,5,7,9}

// Step 7: Compute A⊕B (Symmetric Difference)
// A⊕B={1,3,5,7,9,6,8,10}
// A⊕B={1,3,5,7,9,6,8,10}

// Step 8: Compute P(A) (Power Set)
// P(A)={{},{1},{2},{3},{4},{5},{6},{7},{8},{9},{10},{1,3},{1,5},{1,7},{1,9},{2,4},{2,6},{2,8},{2,10},{3,5},{3,7},{3,9},{4,6},{4,8},{4,10},{5,7},{5,9},{6,8},{6,10},{7,9},{8,10},{1,3,5},{1,3,7},{1,3,9},{1,5,7},{1,5,9},{1,7,9},{2,4,6},{2,4,8},{2,4,10},{2,6,8},{2,6,10},{2,8,10},{3,5,7},{3,5,9},{3,7,9},{4,6,8},{4,6,10},{4,8,10},{5,7,9},{6,8,10},{1,3,5,7},{1,3,5,9},{1,3,7,9},{1,5,7,9},{2,4,6,8},{2,4,6,10},{2,4,8,10},{2,6,8,10},{3,5,7,9},{4,6,8,10},{1,3,5,7,9},{2,4,6,8,10}}

// Opérations ensemblistes supplémentaires:

// Loi de De Morgan:
// (A ∪ B)' = A' ∩ B'
// (A ∩ B)' = A' ∪ B'

// Propriétés distributives:
// A ∪ (B ∩ C) = (A ∪ B) ∩ (A ∪ C)
// A ∩ (B ∪ C) = (A ∩ B) ∪ (A ∩ C)

// Lois d'absorption:
// A ∪ (A ∩ B) = A
// A ∩ (A ∪ B) = A

// Lois de l'idempotence:
// A ∪ A = A
// A ∩ A = A

// Double complémentation:
// (A')' = A

// Propriétés avec l'ensemble universel U et l'ensemble vide ∅:
// A ∪ U = U
// A ∩ U = A
// A ∪ ∅ = A
// A ∩ ∅ = ∅




 
