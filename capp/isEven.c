#include "isEven.h"
#include <stdio.h>

int isEven(int num)
{
    if (num % 2 == 0) {
        printf("%d is even.\n", num);
        return 1;  // Return 1 for true (is even)
    }
    return 0;      // Return 0 for false (is not even)
}
