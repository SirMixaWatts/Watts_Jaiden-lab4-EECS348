#include "isEven.h"
#include "isOdd.h"
#include <stdio.h>

int main() {
    int num;
    printf("Enter an integer: ");
    scanf("%d", &num);
    
    
    if (!isEven(num)) {  // If NOT even
        isOdd(num);      // Then it must be odd
    }
    
    return 0;
}
