package learningjava.recursion;

public class RecursionFunction {
    public static void main(String[] args) {
        // Loop Normal
        for (int i = 0; i < 5; i++) {
            System.out.println(i);
        }

        System.out.println("\nChegou base " + metodoRecursivo(5));

        System.out.println("Soma dos números: " + somaNumeros(5));
    }

    // Função recursiva
    public static int metodoRecursivo(int x) {
        if (x < 0) {
            System.out.println("Caiu no if");
            return -1;
        }
        System.out.println("Antes: " + x);
        metodoRecursivo(x - 1);
        System.out.println("Depois: " + x);
        return x;
    }

    // Somar todos os números de x
    public static int somaNumeros(int x) {
        return 0;
    }
}
