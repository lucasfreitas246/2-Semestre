import javax.swing.JOptionPane;                     // CORRIGIDO: "import" minúsculo e sem ".*" no final
public class EtecJava
{ public static void main (String[]args)
  { int v[][] = new int [2][2];                     // CORRIGIDO: matriz tem 2 pares de colchetes (era [2] só, de vetor)
    v[0][0] = 1; v[0][1] = 2; v[1][0] = 3; v[1][1] = 4; // ADICIONADO: guarda 4 valores na matriz (senão só tem 0)
    boolean achou = false;                          // ADICIONADO: vira true se achar o número
    int n;
    String st = "Digite o número para excluir: ";
    st = JOptionPane.showInputDialog(null, st);
    n = Integer.parseInt(st);
    for ( int i = 0; i<2; i++)
    { for ( int j = 0; j<2; j++)
      { if (v[i][j] == n)
        { st = "Valor encontrado";
          JOptionPane.showMessageDialog (null, st);
          v[i][j] = 0;                              // CORRIGIDO: era "" (texto). Matriz int só aceita número, então 0 = vazio
          achou = true; }                           // ADICIONADO: avisa que achou
      }                                             // CORRIGIDO: o "else" saiu dos for (ver abaixo)
    }
    if (achou == false)                             // CORRIGIDO: "não encontrado" só aparece depois de olhar tudo
    { st = "Valor não encontrado";
      JOptionPane.showMessageDialog (null, st); }
    System.exit(0);                                 // CORRIGIDO: movido pra FORA dos for
  }                                                 // CORRIGIDO: faltava esta chave (fecha o main)
}