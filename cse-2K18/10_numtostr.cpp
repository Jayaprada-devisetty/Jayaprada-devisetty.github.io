#include<stdio.h>
#include<conio.h>
void main() {
   char str[20];    //create an empty string to store number
   float number;
   printf("Enter a number: ");
   scanf("%f", &number);
   sprintf(str, "%f", number);   //make the number into string using sprintf function
   printf("\nYou have entered: %s", str);
}
