import javax.swing.JOptionPane;
public class Exercicio2
{ public static void main (String[]args)
  { int v[] = new int [5];
    int total = 0;
    String st;
    for (int i = 0; i < 5; i++)
    { st = JOptionPane.showInputDialog(null, "Digite o valor " + (i+1) + ":");
      v[i] = Integer.parseInt(st);
      total = total + v[i];
    }
    JOptionPane.showMessageDialog(null, "Valor total: " + total);
    System.exit(0);
  }
}