/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package calculadora;

/**
 *
 * @author Aluno CA
 */
public class Operacao {
    
   int total; 
   int Total;
   int tOtal;
   float toTal;
   
    public int soma(int a, int b){
    total = a + b;
    return total;
    }  
    public void imprimir(){
        System.out.println("Valor da soma: " + total);
    }
    
    public int subtracao(int c, int d){
    Total = c - d;
    return Total;
    }
    public void Imprimir() {
        System.out.println("Valor da subtração: " + Total );
    }
    
    public int multiplicacao(int e, int f){
    tOtal = e * f;
    return tOtal;
    }
    public void iMprimir() {
        System.out.println("Valor da multiplicacao: " + tOtal );
    }
    
    public float divisao(int g, int h) {
    toTal = g / h;
    return toTal;
    }
    public void imPrimir() {
        System.out.println("Valor da divisao: " + toTal );
    }
    }

