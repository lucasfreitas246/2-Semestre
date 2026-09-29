/*Exercicio*/

public class EtecJava8
{
    public static void main(String[] args)
    {
        int i, num = 5, r = 1;   // r começa em 1 (explico abaixo)

        for (i = 1; i <= num; i++)   // i vai de 1 até 5
        {
            r = r * i;   // pega o resultado e multiplica pelo i da vez
        }

        System.out.println("Fatorial de " + num + " = " + r);
        System.exit(0);
    }
}
