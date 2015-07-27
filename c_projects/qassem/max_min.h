#include<stdlib.h>
long maxe(const long a,const long b){
	if(a>b){
		return a;
	} 
	else if(b>a){
		return b;
	}
	else if(b==a){
		return a;
	}
}
long max(const long a,const long b){
	if(a>b){
		return a;
	} 
	else if(b>a){
		return b;
	}
	else if(b==a){
		return 0;
	}
}
long mine(const long a,const long b){
	if(a>b){
		return b;
	} 
	else if(b>a){
		return a;
	}
	else if(b==a){
		return a;
	}
}
long min(const long a,const long b){
	if(a>b){
		return b;
	} 
	else if(b>a){
		return a;
	}
	else if(b==a){
		return 0;
	}
}
long qassem(long a,long b){
	long c;
	if(a==0 && b==0){exit(1);c=0;}
	else{
		c=labs(a);
		a=labs(maxe(a,b));
		b=labs(mine(b,c));
		c=a%b;
		while(c!=0){
			a=b;
			b=c;
			c=a%b;
		}
		c=b;
	}
	return c;
	}
long os(long a,long b){
	long i=1;
	while(i!=b){
		a=a*a;
		i++;
	}
	return a;
}
long sum(long n,long z)
{
	long x,sum;
	sum=0;
	for(x=n;x<=z;x++){
		sum=sum+x;}
return sum;
}
long ab(long value){
	if(0>value){
		value=-value;
	}
	return value;
}



