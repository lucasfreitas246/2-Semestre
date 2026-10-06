import javax.swing.JOptionPane;
public class Exercicio4
{ public static void main (String[]args)
  { double v[] = new double [4];
    double soma = 0, media;
    String st, resultado = "";
    for (int i = 0; i < 4; i++)
    { st = JOptionPane.showInputDialog(null, "Digite a nota do " + (i+1) + "º bimestre:");
      v[i] = Double.parseDouble(st);
      soma = soma + v[i];
    }
    media = soma / 4;
    if (media >= 7)
    { resultado = "Aprovado";
    }
    if (media >= 5 && media < 7)
    { resultado = "Recuperação";
    }
    if (media < 5)
    { resultado = "Reprovado";
    }
    JOptionPane.showMessageDialog(null, "Média: " + media + "\nSituação: " + resultado);
    System.exit(0);
  }
}