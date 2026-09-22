import javax.swing.JOptionPane;

public class Grupo {
    public static void main(String[] args) {
        int cont=0;
        String continuar = "S";
        while (continuar.equalsIgnoreCase("S")) {
            String sexo = JOptionPane.showInputDialog("Sexo (F/M):");
            int idade = Integer.parseInt(JOptionPane.showInputDialog("Idade:"));
            String estadoCivil = JOptionPane.showInputDialog("Estado civil (S/C):");
            if (sexo.equalsIgnoreCase("F") && idade < 21 && estadoCivil.equalsIgnoreCase("S")) cont++;
            continuar = JOptionPane.showInputDialog("Continuar? (S/N)");
        }
        JOptionPane.showMessageDialog(null, "Total que atendem os requisitos: "+cont);
        System.exit(0);
    }
}