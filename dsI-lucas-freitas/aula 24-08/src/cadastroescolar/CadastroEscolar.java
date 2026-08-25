/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package cadastroescolar;

/**
 *
 * @author Aluno CA
 */
public class CadastroEscolar {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        CadAluno aluno = new CadAluno();
        aluno.cadastrarAluno("João Matheus", "24/08/2026", 234516, "joao.matheus@gmail.com","11-96307-4646" );
        //aluno.exibirDados();
        aluno.excluirDados();
        aluno.exibirDados();
    }
    
}
