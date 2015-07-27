#include<stdio.h>
#include<stdlib.h>
#include<conio.h>
#include"max_min.h"
#include"tazyeen.h"
#include<windows.h>


main(){
	char l='r';
	while(l=='r')
	{
		clrscr();
		printf("***This program was made by Abdulla***");
		long a,b;
		printf("\nnum1:");
		scanf("%d",&a);
		printf("\nnum2:");
		scanf("%d",&b);
		printf("The qassem is %d\n",qassem(a,b));
		printf("if you want to replay inter r\n");
		l=getch();
		if(l=='q'){exit(1);}
	}
}


