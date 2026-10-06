import javax.swing.JOptionPane;
public class Exercicio3
{ public static void main (String[]args)
  { int v[] = new int [10];
    String pares = "";
    String st;
    for (int i = 0; i < 10; i++)
    { st = JOptionPane.showInputDialog(null, "Digite o valor " + (i+1) + ":");
      v[i] = Integer.parseInt(st);
    }
    for (int i = 0; i < 10; i++)
    { if (v[i] % 2 == 0)
      { pares = pares + v[i] + " ";
      }
    }
    if (pares.equals(""))
    { pares = "Nenhum valor par";
    }
    JOptionPane.showMessageDialog(null, "Valores pares: " + pares);
    System.exit(0);
  }
}