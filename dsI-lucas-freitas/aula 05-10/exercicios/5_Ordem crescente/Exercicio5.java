import javax.swing.JOptionPane;
public class Exercicio5
{ public static void main (String[]args)
  { int a[] = new int [10];
    int b[] = new int [10];
    int troca;
    String st, ordem = "";
    for (int i = 0; i < 10; i++)
    { st = JOptionPane.showInputDialog(null, "Digite o valor " + (i+1) + ":");
      a[i] = Integer.parseInt(st);
      b[i] = a[i];
    }
    for (int i = 0; i < 10; i++)
    { for (int j = i + 1; j < 10; j++)
      { if (b[i] > b[j])
        { troca = b[i];
          b[i] = b[j];
          b[j] = troca;
        }
      }
    }
    for (int i = 0; i < 10; i++)
    { ordem = ordem + b[i] + " ";
    }
    JOptionPane.showMessageDialog(null, "Em ordem crescente: " + ordem);
    System.exit(0);
  }
}