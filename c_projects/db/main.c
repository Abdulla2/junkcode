#include <stdio.h>
#include <stdlib.h>
#include"db.h"

int main()
{

    char run='r';
    while(run=='r'){
		system("cls");
		    printf("***This program was created by Abdulla***\n if you don't know how to use the program inter 'h'\n");
       run=gets();
    if(run=='h'){
system("cls");
		    printf("***This program was created by Abdulla***\n if you don't know how to use the program inter 'h'\n");
        printf("\nHELP MENU:\n a: add data\np: print all data\nh: shows this page\nq: to exit the program\n");
         run=getch();


    }
     if(run=='a'){
system("cls");
		    printf("***This program was created by Abdulla***\n if you don't know how to use the program inter 'h'\n");
		    char name[255];
		    printf("Type the name you want to save in the data:   ");
		    scanf("%s",name);
       adb(name,"db.db");
        run=getch();
    }
     if(run=='p'){
system("cls");
		    printf("***This program was created by Abdulla***\n if you don't know how to use the program inter 'h'\n");

printdb("db.db",255);
		    }
               run=getch();
     }
     if(run=='q'){exit(1);}

  /** if(run=='s'){
               int x1=0,x2=0,x3=0,x4=0;
               FILE *fptr;
   fptr=fopen('db.db',"r");
   char fs[200];
   char ss[50]='Abd';
fscanf(fptr,"%s",&fs[]);
char nat1[100],nat2[100],nat3[100];
    while(fs[x1]!=EOF){
        while(ss[x2]!='\0'){
            if(ss[x2]==fs[x1]){
                nat1[x3]=fs[x1];
                x1++;
                x2++;
                x3++;

            }
            else{
                x2=0;
                x3=0;
                x1++;
            }
        }


    }
    getch(run);
    }
**/

  return 0;
    }








