#include<stdio.h>
#include<stdlib.h>
#include<conio.h>
#include"max_min.h"
main(){
	char l='r';
	while(l=='r')
	{
		system("cls");
		cprintf("***This  was made by Abdulla***");
		long a,b;
		cprintf("\nnum1:");
		scanf("%d",&a);
		cprintf("\nnum2:");
		scanf("%d",&b);
		cprintf("The qassem is %d\n",qassem(a,b));
		cprintf("if you want to replay inter r\n");
		l=getch();
		if(l=='q'){exit(1);}
	}
}
