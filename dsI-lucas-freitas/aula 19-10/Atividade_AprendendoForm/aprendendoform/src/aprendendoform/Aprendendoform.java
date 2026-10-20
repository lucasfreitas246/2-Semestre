/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package aprendendoform;

import formularios.Calculo;

/**
 * Aula de Programação de Computadores Professor Thiago
 * Projeto AprendendoForm
 * @author Aluno CA
 */
public class Aprendendoform {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        /* Set the Nimbus look and feel */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (Exception ex) {
            // Em caso de falha no Look and Feel, continua com o padrão
        }

        /* Inicia e exibe o formulário de Cálculo */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Calculo().setVisible(true);
            }
        });
    }
}
