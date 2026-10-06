import javax.swing.JOptionPane;                     // CORRIGIDO: "import" minúsculo e sem ".*" no final
public class EtecJava
{ public static void main (String[]args)
  { int v[] = new int [2];
    v[0] = 10; v[1] = 20;                           // ADICIONADO: guarda 2 valores no vetor (senão só tem 0 e 0)
    boolean achou = false;                          // ADICIONADO: vira true se achar o número
    int n;
    String st = "Digite o número para excluir: ";
    st = JOptionPane.showInputDialog(null, st);
    n = Integer.parseInt(st);
    for ( int i = 0; i<2; i++)
    { if (v[i] == n)
      { st = "Valor encontrado";
        JOptionPane.showMessageDialog (null, st);
        v[i] = 0;                                   // CORRIGIDO: era "" (texto). Vetor int só aceita número, então 0 = vazio
        achou = true; }                             // ADICIONADO: avisa que achou
    }                                               // CORRIGIDO: o "else" saiu do for (ver abaixo)
    if (achou == false)                             // CORRIGIDO: "não encontrado" só aparece depois de olhar as 2 posições
    { st = "Valor não encontrado";
      JOptionPane.showMessageDialog (null, st); }
    System.exit(0);                                 // CORRIGIDO: movido pra FORA do for
  }                                                 // CORRIGIDO: faltava esta chave (fecha o main)
}