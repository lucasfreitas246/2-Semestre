import javax.swing.JOptionPane;

public class Idades1 {
    public static void main(String[] args) {
        int idade, menor=0, maior=0, soma=0, cont=1;
        do {
            idade = Integer.parseInt(JOptionPane.showInputDialog("Idade do aluno "+cont+":"));
            if (cont == 1) { menor = idade; maior = idade; }
            else {
                if (idade < menor) menor = idade;
                if (idade > maior) maior = idade;
            }
            soma += idade;
            cont++;
        } while (cont <= 20);
        double media = soma / 20.0;
        JOptionPane.showMessageDialog(null, "Menor: "+menor+"\nMaior: "+maior+"\nMédia: "+media);
        System.exit(0);
    }
}