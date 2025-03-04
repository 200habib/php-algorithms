import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class ClickCounterConsole {
    private int count = 0; // Contatore

    public ClickCounterConsole() {
        // Creazione della finestra
        JFrame frame = new JFrame("Incrementa +1");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setSize(300, 200);
        frame.setLayout(new FlowLayout());

        // Creazione del pulsante
        JButton button = new JButton("Incrementa: " + count);
        button.setFont(new Font("Arial", Font.BOLD, 16)); // Font più grande
        button.setForeground(Color.WHITE); // Testo bianco
        button.setBackground(new Color(0, 122, 255)); // Colore blu
        button.setFocusPainted(false); 
        
        button.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent e) {
                count++;
                button.setText("Incrementa: " + count);
                System.out.println("Contatore: " + count); 
            }
        });

        
        frame.add(button);
        frame.setVisible(true);
    }

    public static void main(String[] args) {
        new ClickCounterConsole();
    }
}
