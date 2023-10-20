// Author: Ramiyan Gangatharan
// Filename: Main.Java
// Desc: A program that calculates horizontal trajectories of a projectile without wind resistance

import java.util.Scanner;
import java.text.DecimalFormat;
public class Main
{
    public static void main(String[] args)
    {
        //figured out how to limit the decimal count to three numbers after the decimal point
        //Credit: https://www.tutorialcup.com/java/how-to-limit-decimal-places-in-java.htm
        DecimalFormat obj = new DecimalFormat("#.###");

        //Constants to create modularity in the software

        //messages for the start and end of the program
        String WELCOME = "\nWelcome to Rami's Horizontal Projectile Trajectory Calculator\n";
        String GOODBYE = "Thank you for using Rami's Horizontal Projectile Trajectory Calculator";

        //Different time formats because I felt odd about the output being 'non-standard' looking
        String LONG_TIME = "00:0";
        String SHORT_TIME = "00:";

        //Input questions as constants because they do not change throughout the program
        String ANGLE_INITIAL_INPUT = "What is the initial angle of your projectile (degrees): ";
        String VELOCITY_INITIAL_INPUT = "How fast is your projectile going in meters per second?: ";
        String TIME_INITIAL_INPUT = "How many seconds will it take for your projectile to reach it's destination?: ";

        //Debug statements, cannot decide if I want to keep them or not so here they are
        String DEBUG_ANGLE = "\nThe initial angle of your projectile is: ";
        String DEBUG_VELOCITY = "The initial velocity of your projectile is: ";
        String DEBUG_TIME = "Projectile timeframe: ";

        //More constants for units
        String DEGREES_SIGN = "º";
        String METERS_PER_SECOND = " m/s";
        String TIME_UNIT = " seconds\n";

        String SCALE = "time / (x,y) / STATUS";

        //ACTUAL CODE STARTS HERE

        System.out.println (WELCOME);

        //input
        Scanner input = new Scanner(System.in);
        System.out.print(ANGLE_INITIAL_INPUT);

        //IT TURNS OUT THE 'MATH' CLASS TAKES RADIAN, NOT DEGREES
        double degrees = input.nextDouble();

        System.out.print(VELOCITY_INITIAL_INPUT);
        double velocity = input.nextDouble();

        System.out.print(TIME_INITIAL_INPUT);
        double time = input.nextDouble();

        //closes the scanner (I have heard that this is a good practice)
        input.close();

        //This section of code formats the debug constants
        //into an understandable and readable format
        System.out.println(DEBUG_ANGLE + degrees + DEGREES_SIGN);
        System.out.println(DEBUG_VELOCITY + velocity + METERS_PER_SECOND);
        System.out.println(DEBUG_TIME + time + TIME_UNIT);
        System.out.println(SCALE);

        //Constant for gravity
        double GRAVITY = 9.81;

            //this for loop starts the seconds counter at 1,
            //then goes up by one each time until a specified amount by the user input
            for (int counter = 1; counter < time; counter++)
            {
                //ALL THE CALCULATIONS REQUIRED FOR THE PROGRAM
                //https://www.geeksforgeeks.org/degrees-to-radians/
                double radian = degrees * (Math.PI/180);
                double length_equation = velocity * Math.cos(radian) * counter;

                //had to divide this equation into 3 because I could not wrap my mind around how this would work
                //together in a program as code.
                double height_1 = velocity * Math.sin(radian) * counter;
                double height_2 = 0.5 * GRAVITY * Math.pow(counter,2);

                //this variable combines both of the vertical coordinate
                //calculations into one to simplify the if statements below.
                double full_height_equation = height_1 - height_2;

                //if statements for the different time formats
                    //if the seconds are less than 10, use double zeros before the colon and a single zero after the colon
                    //if the seconds are more than or equal to 10, use double zeros before the colon but not after the colon
                if (counter < 10)
                    System.out.print("\n" + LONG_TIME + counter + " -- (" + obj.format(Math.abs(length_equation)) + ", " + obj.format(full_height_equation)+ ")");

                if (counter >= 10)
                    System.out.print("\n" + SHORT_TIME + counter + " -- (" + obj.format(Math.abs(length_equation)) + ", " + obj.format(full_height_equation) + ")");


                //if statements to dictate whether the projectile(s) are above ground or are in the ground
                //I was treating this as artillery or a missile at the time of programming
                if (full_height_equation >= 0)
                    {System.out.print(" ---- (PROJECTILE ABOVE GROUND)");}

                if (full_height_equation <= 0)
                {System.out.print(" ---- (PROJECTILE BELOW GROUND)");}

                //This if statement prints a closing statement,
                //then stops the program as soon as the Y coordinate value goes below zero
                if (full_height_equation <= 0)
                {
                    System.out.println('\n' + GOODBYE);
                    break;
                }
            }
    }
}