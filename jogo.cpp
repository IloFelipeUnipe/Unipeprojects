#include <stdio.h>
#include <conio.h>
#include <iostream>
#include <stdlib.h>
#include <time.h>

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

	printf("Escolha uma opcao:\n");
	printf("1 -  Campanha\n");
	printf("2 -  Ranking de pontos\n");
	printf("3 -  Creditos\n");
	printf("4 -  Sair\n");
	
	scanf("%d", &opcao);
	char comple[10];
	char nome[10];
	char classe[15];
	
  if(opcao == 1){

		printf("Digite o seu nome!:");
		
		scanf("%s", nome);
		
		printf("Qual a sua classe ?\n");
		printf("Sugestoes:: Guerreiro , Cavaleiro , Mago , Clerigo , Sacerdote \n");
		scanf("%s",classe);
		
		int forca,defesa,inteligencia,espirito;
		int hp = 20 + (rand() % 10);
		int item;
		do{
		
		printf("e o seus atributos? some no maximo 45 pontos\n");
		printf("1º Forca : dano fisico");
		scanf("%d",&forca);
		printf("2º defesa : dano recebido");
		scanf("%d",&defesa);
		printf("3º inteligencia : dano magico");
		scanf("%d",&inteligencia);
		printf("4º espirito : cura");
		scanf("%d",&espirito);
		srand(time(NULL));
		
		if(forca+defesa+inteligencia+espirito > 45){
			printf("atributos alem do limite! , tente novamente");
		}
		}while(forca+defesa+inteligencia+espirito > 45);
		
		printf("Sua aventura esta pronta para comecar!.....\n\n\n");
		printf("Voce veio ao vilarejo de Yuniep para acabar com Poderosa Manticora que assola o lugar com seus lacaios\n");
		printf("A manticora e uma Criatura com corpo de leao , asas de morcego e cauda de Escorpiao. além de um potencial magico enorme\n");
		printf("Antes de sair a procura, voce deve escolher uma arma e roupa:\n Arma:1 - Espada\n 2 - ");
		
}

	
}while(opcao != 4);
  return 0; //retornando o valor para main
}
