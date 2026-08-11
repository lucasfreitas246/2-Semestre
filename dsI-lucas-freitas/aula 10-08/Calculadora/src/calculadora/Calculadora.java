/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package calculadora;

/**
 *
 * @author Aluno CA
 */
public class Calculadora {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        Operacao op = new Operacao();
        op.soma(5, 3);
        op.imprimir();
        
        op.subtracao(5, 3);
        op.Imprimir();
        
        op.multiplicacao(5, 3);
        op.iMprimir();
        
        op.divisao(6, 3);
        op.imPrimir();
    }
    
}
