#include <stdio.h>

int main() {
    char s [20];
    
    int i;
    int contador = 0;
    
    printf("Diga uma palavra \n");
    gets(s);
    
    for(i=0; s[i]!= '\0'  && i < sizeof(s) ;i++){
    	if(s[i] == 'a'){
    	contador++;
    	}if(s[i] == 'A'){
    	contador++;
    	}if(s[i] == 'e'){
    	contador++;
    	}if(s[i] == 'E'){
    	contador++;
    	}if(s[i] == 'i'){
    	contador++;
    	}if(s[i] == 'I'){
    	contador++;
    	}if(s[i] == 'o'){
    	contador++;
    	}if(s[i] == 'O'){
    	contador++;
    	}if(s[i] == 'u'){
    	contador++;
    	}if(s[i] == 'U'){
    	contador++;
    	}
	}
    printf("palavra:  %d \n", i);
    printf("vogais: %d", contador);

	return 0;
}
