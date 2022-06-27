#include <stdio.h>
#include <stdlib.h>
int main(){
	int n1=0, n2=1, soma, num;
	printf("Digite um numero:");
	scanf("%d", &num);
	printf("%d", n1);
	printf("-""%d", n2);
	soma=n1+n2;
	while(soma<num){
		n1=soma;
		n2=soma-n2;
		soma=n1+n2;
		printf("-""%d", soma);
	}
	if(soma==num){
			printf("\n O numero digitado PERTENCE a sequencia de Fibonacci.");
	}
	else{
		printf("\n O numero NAO pertence a sequencia de Fibonacci.");
	}
	system("pause");
	return 0;
	
}