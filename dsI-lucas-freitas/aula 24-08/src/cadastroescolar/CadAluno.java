package cadastroescolar;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Aluno CA
 */
public class CadAluno {
    String nome;
    String dataNascimento;
    int RA;
    String email;
    String telefone;
    
    public void cadastrarAluno(String nome, String dataNascimento, int RA, String email, String telefone){
        this.nome=nome;
        this.dataNascimento=dataNascimento;
        this.RA=RA;
        this.email=email;
        this.telefone=telefone;
    }
    
    public void exibirDados(){
        System.out.println(" Nome:  " + nome + "\n Nascimento:  " +
                dataNascimento + "\n RA:  " + RA + "\n E-mail:  " + email + 
                "\n Telefone:  " + telefone);
    }
    
    public void excluirDados(){
    this.nome="";
    this.dataNascimento="";
    this.RA= 0;
    this.email="";
    this.telefone="";
    }
    
    
}
