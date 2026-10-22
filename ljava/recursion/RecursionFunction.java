package ljava.recursion;

public class RecursionFunction {
    public static void main(String[] args) {
        // Loop Normal
        for (int i = 0; i < 5; i++) {
            System.out.println(i);
        }

        System.out.println("\nChegou base: " + metodoRecursivo(5));

        System.out.println("\nSoma dos números: " + somaNumeros(5, 0));
    }

    // Função recursiva
    public static int metodoRecursivo(int x) {
        if (x < 0) {
            System.out.println("Caiu no if, retorna x: " + x);
            return x;
        }
        System.out.println("Antes do x - 1: " + x);
        metodoRecursivo(x - 1);
        System.out.println("Depois do x + 1: " + x);
        return x;
    }

    // Somar todos os números de x até o 0 e retornar a soma do mesmo
    public static int somaNumeros(int x, int cumulativo) {
        if (x < 0) {
            System.out.println("Caiu no if, retorna cumulativo: " + cumulativo);
            return cumulativo;
        }
        System.out.println("Antes de retornar somaNumeros(x - 1, cumulativo + x),x: " + x+ " cumulativo: " + cumulativo);
        return somaNumeros(x - 1, cumulativo + x);
    }
}
