import javax.swing.JOptionPane;

public class Idades {
    public static void main(String[] args) {
        int idade, menor, maior, soma, cont=1;
        idade = Integer.parseInt(JOptionPane.showInputDialog("Idade do aluno 1:"));
        menor = idade; maior = idade; soma = idade;
        cont++;
        while (cont <= 20) {
            idade = Integer.parseInt(JOptionPane.showInputDialog("Idade do aluno "+cont+":"));
            if (idade < menor) menor = idade;
            if (idade > maior) maior = idade;
            soma += idade;
            cont++;
        }
        double media = soma / 20.0;
        JOptionPane.showMessageDialog(null, "Menor: "+menor+"\nMaior: "+maior+"\nMédia: "+media);
        System.exit(0);
    }
}