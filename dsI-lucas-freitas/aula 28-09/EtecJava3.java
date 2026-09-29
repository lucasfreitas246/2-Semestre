/*Array Unidimensional: VETOR Buscar dados*/

import javax.swing.JOptionPane;
public class EtecJava3
{ public static void main (String[]args)
  {int v[] = new int [2];
  int n;
  String st = "Digite o número para buscar: ";
  st = JOptionPane.showInputDialog(null, st);
  n = Integer.parseInt(st);
  for(int i=0; i<2;i++)
  {if(v[i]==n)
  {st = "Valor Encontrado";
  JOptionPane.showMessageDialog(null, st);}
  System.exit(0);}
  }}
