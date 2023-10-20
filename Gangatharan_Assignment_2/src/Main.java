/*
 * Author: Ramiyan Gangatharan (100835223)
 * Filename: Main.java
 * Date: 2023/02/13
 * Description: This is a program that records temperature data, then calculates the average temperature.
 */

// imports for arrays, input scanners, and decimal formatting

import java.util.Arrays;
import java.util.Scanner;
import java.text.DecimalFormat;

public class Main
{
    public static void main(String[] args)
    {
        //this object makes a new variable called "decimal_formatter" that makes the decimal format as #.##
        DecimalFormat decimal_formatter = new DecimalFormat("#.##");

        //INITIALIZATION

        //make a new scanner object to make inputs possible
        Scanner user = new Scanner(System.in);

        //create arrays
        double [] high_temperature_array;
        double [] low_temperature_array;

        // variables for the lowest and highest temperatures of the entire array set
        double lowest_temperature;
        double highest_temperature;

        //DECLARATION

        //VARIABLES
        int array_1; // a variable to store the values of an array to use for an array merge and for debug purposes
        int array_2; // a variable to store the values of an array to use for an array merge and for debug purposes
        int array_size_limiter; // a variable that sets a user defined value as a limiter of iterations in the for loops in the program


        //CONSTANTS
        //values
        final int YEAR_VALUE = 365; // a constant for the maximum days of the year and is used as a parameter
        final int MIN_DAY_VALUE = 1; // a constant for the minimum days of the year and is used as a parameter
        final int MINIMUM_TEMPERATURE_VALUE = -45; // a constant for the minimum possible value of temperature for this program
        final int MAXIMUM_TEMPERATURE_VALUE = 45;  // a constant for the maximum possible value of temperature for this program
        final String TEMP_UNIT = "C°";

        //headings
        final String LOW_TITLE = "\nLow Temperatures"; // a constant for a heading called "Low Temperatures"
        final String HIGH_TITLE = "\nHigh Temperatures"; // a constant for a heading called "High Temperatures"
        final String DEBUG_TITLE = "\n-----\nDEBUG\n-----"; // a constant for a heading called "DEBUG"

        //questions
        final String DAY_LIMITER_QUESTION = "How many days would you like to input?: "; // a constant for the user defined day limit of the program
        final String LOW_TEMP_QUESTION = "What is today's lowest temperature?: "; // a constant for one of the input questions
        final String HIGH_TEMP_QUESTION = "What is today's highest temperature?: "; // a constant for one of the input questions

        //error messages

        // a constant for an error if the user enters a temperature that are out of bounds from the temperature limit
        final String ERR_TEMP = "ERR_TEMP::PLEASE ENTER A VALUE ABOVE -45 AND BELOW 45";

        // a constant for an error if the user enters an amount of days that are out of bounds from the day number limits (1-365)
        final String ERR_DAY_VALUE = "ERR_DAY_VALUE::PLEASE ENTER A SET OF DAYS THAT IS ABOVE 1 AND BELOW 365";

        //initialization of a flag for validation called "valid_flag".
        boolean valid_flag = true;

        //STEP 1: While the flag is true, it will ask the input question and append it to a variable to use as a limit
        while (valid_flag)
        {
            System.out.print(DAY_LIMITER_QUESTION);
            array_size_limiter = user.nextInt();

            //STEP 2: IF the limiter is less than the maximum amount of days the user can possibly input (365) AND the
            //limiter is more than the minimum day value (1), execute the code in it

            if (array_size_limiter <= YEAR_VALUE && (array_size_limiter >= MIN_DAY_VALUE))
            {
                //STEP 3: Initialize the array with the array size of the specified array limiter specified by the user
                high_temperature_array = new double[array_size_limiter];
                low_temperature_array = new double[array_size_limiter];

                //STEP 4: switch the flag to false
                valid_flag = false;

                //STEP 5: Initialize array_1 and array_2 then make it equal the length of the existing arrays
                //(high_temperature_array and low_temperature_array)
                array_1 = high_temperature_array.length;
                array_2 = low_temperature_array.length;

                System.out.println(HIGH_TITLE);
                //STEP 6: make a for loop to ask the input questions for temperatures for high and/or low
                for (int i = 0; i < high_temperature_array.length; i++)
                {
                    //initialization of a flag for validation called "high_temperature_flag".
                    boolean high_temperature_flag = true;
                    while (high_temperature_flag)
                    {
                        System.out.print("(DAY " + (i + 1) + ") ");

                        System.out.print(HIGH_TEMP_QUESTION);
                        high_temperature_array[i] = user.nextInt();

                        //STEP 7: VALIDATE WITH CORRECT PARAMETERS
                        if (high_temperature_array[i] >= MINIMUM_TEMPERATURE_VALUE && high_temperature_array[i] <= MAXIMUM_TEMPERATURE_VALUE)
                        {
                            //STEP 8: SET THE FLAG TO FALSE IF IT IS VALID
                            high_temperature_flag = false;
                        }

                        else
                        {
                            System.out.println(ERR_TEMP);
                        }
                    }
                }

                //STEPS 1 THROUGH 9 ARE THE SAME FOR THIS FOR LOOP TOO

                System.out.println(LOW_TITLE);
                for (int java = 0; java < low_temperature_array.length; java++)
                {
                    //initialization of a flag for validation called "low_temperature_flag".
                    boolean low_temperature_flag = true;
                    while (low_temperature_flag)
                    {
                        System.out.print("(DAY " + (java + 1) + ") ");
                        System.out.print(LOW_TEMP_QUESTION);
                        low_temperature_array[java] = user.nextInt();

                        //explanation:
                        //if the low temp array at index position [java] is more than or equal
                        //to the minimum temperature value (-45) AND if the low temp array is less than or equal
                        //to the maximum temperature value (45) AND if the low temp array has lower values than
                        //the high temp array, EXECUTE THE CODE
                        if (low_temperature_array[java] >= MINIMUM_TEMPERATURE_VALUE && low_temperature_array[java] <= MAXIMUM_TEMPERATURE_VALUE
                           && low_temperature_array[java] < high_temperature_array[java])
                        {
                            // if all goes well, turn the flag off
                            low_temperature_flag = false;
                        }

                        else
                        {
                            //print an out-of-bounds error if the input does not fit the parameters.
                            System.out.println(ERR_TEMP);
                        }
                    }
                }

                /*
                *
                * how I calculated the average temperature was:
                * 1) make a for loop that limits the range to the array limiter value
                * 2) make a variable to calculate the average
                * 3) in that variable, make a formula
                *
                * EXPLANATION OF FORMULA:
                *   - find the first array's index position of "k", and at the second array's index position of "k"
                *   - add the two array index position values together, then divide by two.
                *   - print out the day counter and the average temperature for each day in °C using decimal formatter
                *     using the import java.text.DecimalFormat
                */
                    System.out.println("\nAverage Temperatures ");
                    for (int k = 0; k < array_size_limiter; k++)
                    {
                        double daily_avg = ((high_temperature_array[k] + low_temperature_array[k]) / 2);
                        System.out.println("DAY " + (k + 1) + ": " + decimal_formatter.format(daily_avg) + TEMP_UNIT);
                    }

                    /*
                     *
                     * HOW TO MERGE TWO ARRAYS INTO ONE NEW ARRAY
                     * https://www.javatpoint.com/how-to-merge-two-arrays-in-java
                     *
                     * 1) first initialize the new array to the lengths of both arrays (14 in this case)
                     * 2) using arraycopy, get the first array at index position 0, then put it in the new array at
                     *    index position 0 from the first array
                     * 3) using arraycopy, get the second array at index position 0 then move it into the new array
                     * 4) make a for loop described below to iterate through all the numbers in both lists
                     */

                    double [] result = new double[array_1 + array_2];
                    System.arraycopy(high_temperature_array, 0, result, 0, array_1);
                    System.arraycopy(low_temperature_array, 0, result, array_1, array_2);

                    int length = result.length;
                    float sum = 0;

                /*
                    this for loop was recommended by IntelliJ.
                    to my understanding, it is a loop called an enhanced for loop.
                    which is a for-in loop that gets the local variable 'j' and the regular variable 'result'.
                    (The variable 'result' gets iterated over 'j')

                    Inside the loop, 'j' is added to 'sum' (a variable that holds the current value of the loop)
                    in which is done with the '+=' operator that adds the value of 'j' to the current value of 'sum'
                    then assigns the result of the operation 'sum += j' back to 'sum'
                */

                    for (double j : result) {sum += j;}

                /*
                 * LOWEST AND HIGHEST TEMP CALC
                 *
                 * EXPLANATION:
                 * 1) you first initialize the array, and it's local variable at index 0
                 * 2) then you make in if statement that states if the length of the array is less than 1, execute.
                 * 3) then you make a for loop that says that as long as [i] is less than the array limit, and execute the
                 *    if statement nested inside the for loop
                 * 4) the if statement states that if the temperature array at index [i] is less than the lowest temp,
                 *    then add 1 to the array
                 */


                lowest_temperature = low_temperature_array[0];

                int minimum_daily_value = 0;

                if (low_temperature_array.length > 1)
                {
                    for (int i = 0; i < array_size_limiter; i++)
                    {
                        if (low_temperature_array[i] < lowest_temperature)
                        {
                            lowest_temperature = low_temperature_array[i];
                            minimum_daily_value = i + 1;
                        }
                    }
                }

                highest_temperature = high_temperature_array[0];

                int maximum_daily_value = 1;

                if (high_temperature_array.length > 1)
                {
                    for (int min_max = 0; min_max < array_size_limiter; min_max++) {
                        if (high_temperature_array[min_max] > highest_temperature)
                        {
                            highest_temperature = high_temperature_array[min_max];
                            maximum_daily_value = min_max + 1;
                        }
                    }
                }

                //this is a variable that holds the calculation for average or mean
                    double average = sum / length;
                    //print out the average of all the days inputted
                    System.out.println("\nOVERALL AVERAGE: " + decimal_formatter.format(average) + TEMP_UNIT);

                    highest_temperature = Double.parseDouble(decimal_formatter.format(highest_temperature));
                    System.out.println("THE WARMEST DAY OF THE SET: (DAY " +  maximum_daily_value + ") @ " + highest_temperature + TEMP_UNIT);

                    lowest_temperature = Double.parseDouble(decimal_formatter.format(lowest_temperature));
                    System.out.println("THE COLDEST DAY OF THE SET: (DAY " +  (minimum_daily_value + 1) + ") @ " + lowest_temperature + TEMP_UNIT);

                    //debug outputs that read the physical arrays
                    System.out.println(DEBUG_TITLE);
                    System.out.println("HIGH TEMP: " + Arrays.toString(high_temperature_array));
                    System.out.println("LOW TEMP: " + Arrays.toString(low_temperature_array));
                    System.out.println("ALL DATA: " + Arrays.toString(result));
            }

            else
            {
                //an error message about the number of days the user has inputted.
                System.out.println(ERR_DAY_VALUE);
            }
        }
    }
}
