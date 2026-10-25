public class EtecJava
{ public static void main (String[]args)
  { int i, r=0, num=5;
    System.out.println ("Tabuada do nº: "+num);
    for (i =0; i<=10;i++)
    { r = num * i;                                  // CORRIGIDO: era "cont", que não existe. O contador é o "i"
      System.out.println(num+" X "+i+" = "+r);      // CORRIGIDO: era "cont" e vírgula depois do num. Tem que ser "+"
    }
    System.exit(0);                                 // CORRIGIDO: movido pra FORA do for (dentro, fechava na 1ª volta)
  }                                                 // CORRIGIDO: faltava esta chave (fecha o main)
}