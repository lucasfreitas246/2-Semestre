import javax.swing.JOptionPane;

public class Eleicao2 {
    public static void main(String[] args) {
        int cand1=0, cand2=0, cand3=0, cand4=0, brancos=0, nulos=0, codigo;
        for (;;) {
            codigo = Integer.parseInt(JOptionPane.showInputDialog("Código do voto (0 p/ finalizar):"));
            if (codigo == 0) break;
            if (codigo == 1) cand1++;
            else if (codigo == 2) cand2++;
            else if (codigo == 3) cand3++;
            else if (codigo == 4) cand4++;
            else if (codigo == 5) brancos++;
            else nulos++;
        }
        JOptionPane.showMessageDialog(null, "Cand1: "+cand1+"\nCand2: "+cand2+"\nCand3: "+cand3+"\nCand4: "+cand4+"\nBrancos: "+brancos+"\nNulos: "+nulos);
        System.exit(0);
    }
}