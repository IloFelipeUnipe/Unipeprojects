#include <stdio.h>
 
int main()
{
    char array[100];
  	int i = 0;
	int contador; 
	
    printf("digite caracteres! \n");
    scanf("%s", array);
    
    for(i=0; array[i] != '\0';i++){
    	contador++;	
	}
 
    printf("caracteres digitados : %d\n", contador);
    return 0;
}



