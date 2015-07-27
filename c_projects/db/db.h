#include<stdio.h>
void adb(const char* str,char fn[255])
{
    FILE *fptr;
    fptr=fopen(fn,"a");
    fputs(str,fptr);
    fputs(";",fptr);
    fclose(fptr);
}
void printdb(char fn[255],long h){
FILE *fptr;

   fptr=fopen(fn,"r");
    long i=0;

    char* arr[h];

    i=0;
    while(arr[i]!=EOF){

             arr[i]=fgetc(fptr);
        if(';'!=arr[i]){

            printf("%c",arr[i]);
                    }
       else{
        printf("\n");
       }

         i++;
    }
    fclose(fptr);
    }
