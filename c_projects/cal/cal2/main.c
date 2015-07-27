#include<stdio.h>
main(){
	int l=1;
	while("l==1"){
	char op;
	int num1,num2,num3;
	printf("op");
	scanf("%c",&op);
	printf("num1");
	scanf("%d",&num1);
	printf("num2");
	scanf("%d",&num2);
	switch(op){
		case '1':
		case '+':
			printf(" %d + %d = %d",num1,num2,num2+num1);
			break;	
		case '2':
		case '-':
			printf(" %d - %d = %d",num1,num2,num1-num2);
			break;
		case '3':
		case '*':
			printf(" %d * %d = %d",num1,num2,num1*num2);
			break;
		case '4':
		case '/':
			printf(" %d / %d = %d",num1,num2,num1/num2);
			break;
		default:
			printf("error");
			break;

		}
	printf("%d\n",num3);
	scanf("%d",&l);
	}
}
