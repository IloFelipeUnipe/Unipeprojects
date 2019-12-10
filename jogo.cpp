#include <stdio.h>
#include <conio.h>
#include <iostream>

int main(){
	
	system("color 3F");
	
	int opcao = 0;
	
	do{
		
	printf("	SEJA BEM VINDO A..... \n\n");
	printf("/////////////////////\n");
	printf("//CAVERNA  	   //\n");
	printf("//	DA	   //\n");
	printf("//        MANTICORA//\n");
	printf("/////////////////////\n");


	printf("1 -  Campanha\n");
	printf("2 -  Ranking de pontos\n");
	printf("3 -  Creditos\n");
	printf("4 -  Sair\n");
	
	scanf("%d", &opcao);
	char comple[10];
	char nome[10];
	
  if(opcao == 1){
  	
	printf("1 - Nova campanha\n");
  	printf("2 - Nova campanha+\n");
  	int numcam = 0;
	  scanf("%d",&numcam);
	
	if(numcam == 1){
		printf("Digite o nome do seu personagem!:");
		
		scanf("%s", nome);
	
			
	}if (numcam == 2){
		printf("Digite o nome do seu codigo de completude!:");
		
		scanf("%s", comple);
	
	}
	
}
	
}while(opcao != 4);
  return 0; //retornando o valor para main
}

