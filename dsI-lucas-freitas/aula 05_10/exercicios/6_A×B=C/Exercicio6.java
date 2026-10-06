import javax.swing.JOptionPane;
public class Exercicio6
{ public static void main (String[]args)
  { int A[] = new int [5];
    int B[] = new int [5];
    int C[] = new int [5];
    String st, resultado = "";
    for (int i = 0; i < 5; i++)
    { st = JOptionPane.showInputDialog(null, "Vetor A - digite o valor " + (i+1) + ":");
      A[i] = Integer.parseInt(st);
    }
    for (int i = 0; i < 5; i++)
    { st = JOptionPane.showInputDialog(null, "Vetor B - digite o valor " + (i+1) + ":");
      B[i] = Integer.parseInt(st);
    }
    for (int i = 0; i < 5; i++)
    { C[i] = A[i] * B[i];
      resultado = resultado + C[i] + " ";
    }
    JOptionPane.showMessageDialog(null, "Vetor C: " + resultado);
    System.exit(0);
  }
}