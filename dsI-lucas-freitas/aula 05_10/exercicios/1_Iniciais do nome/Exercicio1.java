import javax.swing.JOptionPane;
public class Exercicio1
{ public static void main (String[]args)
  { String st;
    String iniciais = "";
    st = JOptionPane.showInputDialog(null, "Digite seu nome completo:");
    char v[] = st.toCharArray();
    for (int i = 0; i < v.length; i++)
    { if (v[i] != ' ' && (i == 0 || v[i-1] == ' '))
      { iniciais = iniciais + v[i] + " ";
      }
    }
    JOptionPane.showMessageDialog(null, "Iniciais: " + iniciais);
    System.exit(0);
  }
}