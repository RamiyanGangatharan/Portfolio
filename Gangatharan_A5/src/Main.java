import javax.swing.*;

import java.awt.*;
import java.awt.event.WindowAdapter;
import java.awt.event.WindowEvent;

import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;

public class Main
{
    public static void main(String[] args)
    {

        /*
            Name: Ramiyan Gangatharan - 100835223
            Filename: Main.java
            Date: 4/20/2023
            Course Code: COSC 1200 - 03
            Description: This is a basic mathematical calculator with a graphical user interface.
         */
        //==============================GRAPHICAL USER INTERFACE=====================================//

        //----------------------------------------WINDOW-------------------------------------------- //

        /*
            This section of the code initializes and displays the window that the program is housed
            in. The program first creates a new JFrame called 'frame' then creates a title to it.
            After the window creation, it sets the window size of 300x230 pixels. Then it declares
            that the program will stop running once the user closes the window. After all of that
            is done, it finally sets the layout to null (manual component placement by pixels) and
            sets the window to visible in which makes it display onto your screen.
         */

        JFrame frame = new JFrame("Assignment 5");
        frame.setSize(300, 230);
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setLayout(null);
        frame.setVisible(true);


        //----------------------------------------INPUT-------------------------------------------- //
        /*
            This section creates the components into the window we have set up in the code above.
            We first start with the 'header' in which is the internal secondary heading of the
            program (stated in the code below). Keep in mind I have set the parameters of each
            component manually because I became frustrated with the grid or flow layouts in Java.
         */

        JLabel header = new JLabel("Welcome to Rami's Calculator!");
        header.setBounds(65,10,174,10);
        frame.add(header);

        /*
            This component is a JPanel called 'input'. I used these panels like they are 'div'
            tags like in HTML and PHP to break up the window into sections. This first section
            is the panel that houses the labels and text fields. (parameters are stated below)
         */

        JPanel input = new JPanel();
        input.setLayout(null);
        input.setBounds(10, 30, 290, 60);

        /*
            These components are the labels and text fields for the input for the whole program.
            This is the section that houses the GUI for the main functionality of the program.
         */

        JLabel first_number = new JLabel("Number 1: ");
        first_number.setBounds(5, 10, 100, 20);
        input.add(first_number);

        JTextField text_1 = new JTextField(20);
        text_1.setBounds(70, 10, 180, 20);
        input.add(text_1);

        JLabel second_number = new JLabel("Number 2: ");
        second_number.setBounds(5, 40, 100, 20);
        input.add(second_number);

        JTextField text_2 = new JTextField(20);
        text_2.setBounds(70, 40, 180, 20);
        input.add(text_2);


        //----------------------------------------BUTTONS-------------------------------------------- //

        /*
            This section is dedicated for the bottom section of the window that houses the buttons and
            output (I will not change the panel name). What I have done is create a new JPanel called
            'buttons' where I house five buttons and a readonly text field. The buttons contain the
            functionality of basic math (add, subtract, multiply & divide) and a clear button to reset
            all fields in the program. After that we add all components to the JPanel then add the JPanel
            to the frame itself (the window). The buttons are all the same size but are in different
            coordinate positions, and they all have the same background colour (white).
         */

        JPanel buttons = new JPanel();
        buttons.setLayout(null);
        buttons.setBounds(10,70,250,150);

        JButton addition = new JButton("+");
        addition.setBackground(Color.WHITE);
        addition.setBounds(25,30,45,15);
        buttons.add(addition);

        JButton subtraction = new JButton("-");
        subtraction.setBounds(85,30,45,15);
        subtraction.setBackground(Color.WHITE);
        buttons.add(subtraction);

        JButton multiplication = new JButton("×");
        multiplication.setBounds(145,30,45,15);
        multiplication.setBackground(Color.WHITE);
        buttons.add(multiplication);

        JButton division = new JButton("÷");
        division.setBounds(205,30,45,15);
        division.setBackground(Color.WHITE);
        buttons.add(division);

        JLabel result = new JLabel("Result: ");
        result.setBounds(5, 60, 50, 20);
        buttons.add(result);

        JTextField text_3 = new JTextField();
        text_3.setBounds(70, 60, 180, 20);
        text_3.setEditable(false);
        buttons.add(text_3);

        JButton clearButton = new JButton("Clear");
        clearButton.setBounds(95, 95, 100, 20);
        buttons.add(clearButton);

        frame.add(input);
        frame.add(buttons);


        //==============================FUNCTIONALITY=====================================//

        /*
            This section makes the GUI functional where it is essentially a copy-paste where
            the four mathematical buttons provide similar functions. The difference is the
            calculation each button performs.
         */

        //This is a clear button that clears all fields in the program and sets background to white
        clearButton.addActionListener(e ->
        {
            text_1.setText("");
            text_2.setText("");
            text_3.setText("");
            text_3.setBackground(Color.WHITE);
        });

        // ActionListener for the add button
        addition.addActionListener(e ->
        {
            try
            {
                // Get the input from the text fields
                double num1 = Double.parseDouble(text_1.getText());
                double num2 = Double.parseDouble(text_2.getText());

                // Perform the calculation
                double result_add = num1 + num2;

                // Display the result in green in the result label
                text_3.setBackground(Color.GREEN);
                text_3.setForeground(Color.black);
                text_3.setText(String.valueOf(result_add));

                // Reset the color of the button to white
                addition.setBackground(Color.WHITE);

                // Open the file for writing and write the user input
                FileWriter adder = new FileWriter("input.txt", true);
                String user_add = text_1.getText() + " + " + text_2.getText() + " = " + result_add + "\n";
                adder.write(user_add);
                adder.close();
            }
            catch (NumberFormatException ex)
            {
                // Display an error message in red in the result label
                text_3.setBackground(Color.RED);
                text_3.setForeground(Color.WHITE);
                text_3.setText("Number must be numeric");

                // Reset the color of the button to white
                addition.setBackground(Color.WHITE);
            }
            catch (IOException ex)
            {
                ex.printStackTrace();
            }
        });

        // ActionListener for the subtract button
        subtraction.addActionListener
        (e ->
            {
                try
                {
                    // Get the input from the text fields
                    double num1 = Double.parseDouble(text_1.getText());
                    double num2 = Double.parseDouble(text_2.getText());

                    // Perform the calculation
                    double result_sub = num1 - num2;

                    // Display the result in green in the result label
                    text_3.setBackground(Color.GREEN);
                    text_3.setForeground(Color.black);
                    text_3.setText(String.valueOf(result_sub));

                    // Reset the color of the button to white
                    subtraction.setBackground(Color.WHITE);

                    // Open the file for writing and write the user input
                    FileWriter subtract = new FileWriter("input.txt", true);
                    String user_sub = text_1.getText() + " - " + text_2.getText() + " = " + result_sub + "\n";
                    subtract.write(user_sub);
                    subtract.close();

                }

                catch (NumberFormatException ex)
                {
                    // Display an error message in red in the result label
                    text_3.setBackground(Color.RED);
                    text_3.setForeground(Color.WHITE);
                    text_3.setText("Number must be numeric");

                    // Reset the color of the button to white
                    subtraction.setBackground(Color.WHITE);
                }

                catch (IOException ex)
                {
                    ex.printStackTrace();
                }
            }
        );

        // ActionListener for the multiplication button
        multiplication.addActionListener
        (e ->
            {
                try
                {
                    // Get the input from the text fields
                    double num1 = Double.parseDouble(text_1.getText());
                    double num2 = Double.parseDouble(text_2.getText());

                    // Perform the calculation
                    double result_multi = num1 * num2;

                    // Display the result in green in the result label
                    text_3.setBackground(Color.GREEN);
                    text_3.setForeground(Color.black);
                    text_3.setText(String.valueOf(result_multi));

                    // Reset the color of the button to white
                    multiplication.setBackground(Color.WHITE);

                    // Open the file for writing and write the user input
                    FileWriter multiplier = new FileWriter("input.txt", true);
                    String user_multi = text_1.getText() + " * " + text_2.getText() + " = " + result_multi + "\n";
                    multiplier.write(user_multi);
                    multiplier.close();

                }

                catch (NumberFormatException ex)
                {
                    // Display an error message in red in the result label
                    text_3.setBackground(Color.RED);
                    text_3.setForeground(Color.WHITE);
                    text_3.setText("Number must be numeric");

                    // Reset the color of the button to white
                    subtraction.setBackground(Color.WHITE);
                }

                catch (IOException ex)
                {
                    ex.printStackTrace();
                }
            }
        );

        // ActionListener for the division button
        division.addActionListener
        (e ->
            {
                try
                {
                    // Get the input from the text fields
                    double num1 = Double.parseDouble(text_1.getText());
                    double num2 = Double.parseDouble(text_2.getText());

                    // Perform the calculation
                    double result_div = num1 / num2;

                    // Display the result in green in the result label
                    text_3.setBackground(Color.GREEN);
                    text_3.setForeground(Color.black);
                    text_3.setText(String.valueOf(result_div));

                    // Reset the color of the button to white
                    division.setBackground(Color.WHITE);

                    // Open the file for writing and write the user input
                    FileWriter divisor = new FileWriter("input.txt", true);
                    String user_div = text_1.getText() + " / " + text_2.getText() + " = " + result_div + "\n";
                    divisor.write(user_div);
                    divisor.close();
                }
                catch (NumberFormatException ex)
                {
                    // Display an error message in red in the result label
                    text_3.setBackground(Color.RED);
                    text_3.setForeground(Color.WHITE);
                    text_3.setText("Number must be numeric");

                    // Reset the color of the button to white
                    division.setBackground(Color.WHITE);
                }

                catch (IOException ex)
                {
                    ex.printStackTrace();
                }
            });

        /*
            This section in a for the writing of information into a text file.
            Once the window closes, it updates and writes into a predetermined
            text file called 'input.txt'. Using WindowListener, this is possible
            by monitoring the state of the window if it is closed or open.
         */

            frame.addWindowListener(new WindowAdapter()
                {
                    public void windowClose(WindowEvent e)
                    {
                        try(PrintWriter writer = new PrintWriter(new FileWriter("input.txt", true)))
                        {
                            writer.println();
                        }
                        catch (IOException ex)
                        {
                            ex.printStackTrace();
                        }
                        System.exit(0);
                    }
                }
            );
        frame.setVisible(true);
    }
}
