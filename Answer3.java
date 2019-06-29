package arkademy;

/**
 *
 * @author Rezki Tanjung
 */
public class Answer3 {
    public static void main(String[] args) {
        int n = 11; //value
	printPattern(n); 
    }
    static void printPattern(int n){ 
	int i, j; 
	for (i = 1; i <= n; i++) { 
	// Print spaces 
            for (j = 1; j < i; j++) { 
		System.out.print(" "); 
            } 
	
        // Print hollow inverted pyramid 
            for (j = 1; j <= (n * 2 - (2 * i - 1));j++) { 
		if (i == 1 || j == 1 || j == (n * 2 - (2 * i - 1))) { 
                    System.out.print("*"); 
                } else { 
                    System.out.print(" "); 
		} 
            } 
	
        // next line 
	System.out.println(); 
	} 
    } 
    
}
