#include <stdio.h>
#include <math.h>

int main () {
	int opcao = 0;
	int media = 0;
	do {
		
	printf("Digite uma  opcao: \n 1:se um numero e par ou impar");
	printf("\n 2:Calculo de potencia");
	printf("\n 3:Calculo de raiz");
	printf("\n 4:Calculo de ano bissexto");
	printf("\n 5:Calculo de media ponderada");
	printf("\n 6:Calculo de media entre 0 e 10");
	printf("\n 7:Calculo de fatorial");
	printf("\n 8");
	printf("\n 9");
	printf("\n 10:Meu nome e matricula \n");
	scanf("%d", &opcao);
	if(opcao >= 11){
		printf("nao ha esse numero!	\n");
	}
	if(opcao == 1){
		int numero1;
		printf("Diga um numero para saber se e par \n");
		scanf("%d", &numero1);
		if(numero1 % 2 == 0){
			printf("Esse numero e par! \n");
		}if(numero1 % 2 !=0){
			printf("Esse numero nao par! \n");
		}
	}
	if(opcao ==2){
		float base1;
		int expo1;
		float potenciado;
		printf("digite um numero para a base \n");
		scanf("%f", &base1);
		printf("digite um numero para o exponente \n");
		scanf("%d",&expo1);
		potenciado = pow(base1,expo1);
		printf("Resultado: %.4e \n",potenciado);
		
	}
	if(opcao == 3){
		float base2;
		int expo2;
		float raiz;
		printf("digite um numero para a base \n");
		scanf("%f", &base2);
		printf("digite um numero para o exponente \n");
		scanf("%d",&expo2);
		raiz = pow(base2,1.0/expo2);
		printf("Resultado: %.4e \n",raiz);
	}
	if(opcao == 4){
		int numero2;
		printf("Diga um ano para saber se e bissexto\n");
		scanf("%d", &numero2);
		if(numero2 % 4 == 0){
			printf("Esse ano e bissexto! \n");
		}if(numero2 % 4 !=0){
			printf("Esse ano nao e bissexto! \n");
	}
  }
	if(opcao == 5){
		int nota1 = 0;
		int nota2 = 0;
		int nota3 = 0;
		printf("Diga sua primeira nota\n");
		scanf("%d", &nota1);
		printf("Diga sua segunda nota\n");
		scanf("%d", &nota2);
		printf("Diga sua terceira nota\n");
		scanf("%d", &nota3);
		nota3 = nota3*2;
		media = (nota1+nota2+nota3)/4;
		if(media < 60){
			printf("voce foi reprovado!! \n");
		}if(media >= 60){
			printf("voce esta aprovado!! \n");
		}
 	 }
	 if(opcao == 6){
		float nota4 = 0;
		float nota5 = 0;
    		float media2 = 0;
		printf("Diga sua primeira nota\n");
		scanf("%f", &nota4);
		printf("Diga sua segunda nota\n");
		scanf("%f", &nota5);
    		media2 = (nota4 + nota5)/2;
		if(nota4 < 0.0 || nota4 > 10.0){
			printf("Nota invalida!\n");
      				break;
		}if(nota5 < 0.0 || nota5 > 10.0){
			  printf("Nota invalida!\n");
        			break;
    		}
    		printf("sua nota é: %f", media2);
 	 }
    	if(opcao == 7){
     		 int contador = 1;
     		 int numero3;
     		 int k;
     		 int fin = 1;
     	 	printf("Diga um numero: \n");
      		scanf("%d", &numero3);
     	 	for(k=1; k <= numero3; k++){
      		    contador = k;
      		    fin = fin*contador;
    		  }
   		 printf("o fatorial de %d \n", fin);
   	 }
   	 	if(opcao == 8){
   	 		int primo;
   	 		printf("diga um valor!\n");
   	 		scanf("%d", &primo);
   	 		if(primo % 2 == 0 || primo % 3 == 0){
   	 			printf("Esse numero nao e primo....\n");
				} else{
					printf("esse numero e primo!\n");
				}
			
			}
    
   	 if(opcao == 10){
    	 	int matricula;
     		matricula = 1920027007;
     		printf("Aluno:Ilo Felipe Ferreira Camara Cavalcante\n Matricula:%x\n", matricula );
   	 }
	} while ( opcao != 0 );
	
	printf("	Adeus!	");
	return 0;	
}
