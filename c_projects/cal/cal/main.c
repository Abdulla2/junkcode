#include<stdio.h>
#include<conio.h>
int main(){
	int w=1;
	char op;
	long num1,num2,num3;

	while (w==1){
	printf("Hi this progrm is cal made by Abdulla \n");
	printf(" 1.+\n 2.-\n 3.*\n 4./\n type the number or the operator:  \n    ");

	op=getch();


	if (op=='1' || op=='+'){
        printf("type num1\n");
	scanf("%d",&num1);
	printf("type num2\n");
	scanf("%d",&num2);
		num3=num1+num2;
		printf("%d + %d =",num1,num2);
	}
	else if (op=='2' || op=='-'){
	    printf("type num1\n");
	scanf("%d",&num1);
	printf("type num2\n");
	scanf("%d",&num2);
		num3=num1-num2;
		printf("%d - %d =",num1,num2);
	}

	else if (op=='3' || op=='*'){
            printf("type num1\n");
	scanf("%d",&num1);
	printf("type num2\n");
	scanf("%d",&num2);
		num3=num1*num2;
		printf("%d * %d =",num1,num2);
	}
	else if (op=='4' || op=='/'){
	    printf("type num1\n");
	scanf("%d",&num1);
	printf("type num2\n");
	scanf("%d",&num2);
		num3=num1/num2;
		printf("%d / %d =",num1,num2);
	}
	else {
		printf("you intered a wrong operator");
		num3=0;
	}
	printf(" %d \n",num3);
	printf("if you yo replay press 1 press any other key to exit \n");
	scanf("%d",&w);
	}

	printf("exiting.... \n");


}
