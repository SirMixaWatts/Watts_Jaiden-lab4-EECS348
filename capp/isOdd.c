#include "isOdd.h"
#include <stdio.h>

int isOdd(int num)
{
    if (num % 2 != 0) {
        printf("%d is odd.\n", num);
        return 1;  // Return 1 for true (is odd)
    }
    return 0;      // Return 0 for false (is not odd)
}