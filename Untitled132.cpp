#include <stdio.h>

int main () {
	int candA = 0;
	int candB = 0;
	int candD = 0;
	int nulo = 0;
	int branco = 0;
	int contador = 0;
	
	do {

	printf("Digite uma  op�ao: \n 1. Candidato A \n 2. Candidato B \n 3. Candidato D \n 4. Nulo \n 5. Branco \n");
	scanf("%d", &contador);
	switch(contador){
		case 1: candA++;
		break;
		case 2: candB++;
		break;
		case 3: candD++;
		break;
		case 4: nulo++;
		break;
		case 5: branco++;
		break;
		default:
			break;
	}
	
	
	} while ( contador != 0 );
	
	printf("total de votos: \n Candidato A : %d  \n Candidato B: %d \n Candidato D: %d \n Nulo : %d \n Branco :%d \n", candA , candB , candD , nulo , branco);
	
	return 0;	
}
