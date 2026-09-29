/*Array Bidimensional: MATRIZ Cadastrar dados*/

import javax.swing.JOptionPane;
public class EtecJava5
{ public static void main (String[]args)
  {int v[][]=new int[2][2];
  String st="Digite 4 números: ";
  for ( int i = 0; i<2 ; i++)
   { for ( int j = 0; j<2; j++)
    { st=JOptionPane.showInputDialog(null, st);
    v[i][i]=Integer.parseInt(st);}}
    System.exit(0);
    }
    }