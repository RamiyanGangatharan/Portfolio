/*
 * Name: Ramiyan Gangatharan (100835223)
 * Date: 2023/03/17
 * Filename: Driver.java
 * Description: A program that displays vaccine information based on the set parameters in the specific object.
 */
public class Driver
    // I basically made Driver as a main and did not put anything in my actual main for some reason.
{
    public static void main(String[] args)
    {
        //array initialization for an array called "vaccine_array" with an array size of 5
        Vaccine[] vaccine_array = new Vaccine[5];

        //vaccine_array at the index position of zero is a default constructor.
        vaccine_array[0] = new Vaccine();

        //
        /*
            vaccine_array at index positions 1 - 4 are parameterized constructors that are using custom parameters.
            vaccine_array consists of:
            1) ID NUMBER
            2) VACCINE NAME
            3) VACCINE COST
            4) VACCINE EXPIRY DATE
            5) INSTRUCTIONS FOR VACCINATION
         */

        vaccine_array[1] = new Vaccine
                (
                    657595199,
                    "  Pfizer   ",
                    971.67,
                    7289,
                    "2006/07/05",
                    "SHAKE WELL BEFORE USE      "
                );

        vaccine_array[2]= new Vaccine
                (
                    455121490,
                    "  Moderna  ",
                    543.71,
                    6947,
                    "2003/11/26",
                    "STORE @ -2 DEGREES CELSIUS "
                );

        vaccine_array[3] = new Vaccine
                (
                    292917862,
                    "AstraZeneca",
                    527.04,
                    2790,
                    "1972/07/21",
                    "STORE @ -12 DEGREES CELSIUS"
                );

        vaccine_array[4] = new Vaccine
                (
                685193629,
                " Ibuprofen ",
                328.48,
                1223,
                "1967/11/21",
                "STORE AT ROOM TEMPERATURE  "
                );


        //   NOTE: I do not know if I have to describe both loops. But to be safe, I will do so.

        /*
        * I originally intended to implement a for loop but IntelliJ
        * was recommending an "enhanced for loop" and so I started
        * looking at the meaning behind this loop and how it works.
        *
        * After further research, It looks like it is a for-each loop
        * where it is used to iterate over the elements of an array
        * or collection without using an index variable.
        *
        * EXAMPLE:
        *
        * (regular FOR loop)
        * int[] numbers  = {0, 1, 2, 3, 4}
        *
        * for( int i = 0; 1 < numbers.length; i++)
        * {
        *   System.out.println(numbers[i])
        * }
        *
        *               OR
        *
        * (Enhanced FOR loop or a FOR-EACH loop)
        * for (int number : numbers)
        * {
        *   System.out.println(number);
        * }
        *
        * In this specific case in the program, the loop is iterating over
        * an array of Vaccine objects called 'vaccine_array'. For each
        * iteration of the loop, a Vaccine object is assigned to the variable
        * 'vaccine'. Then the 'Display' method of the Vaccine object is called
        * with the boolean argument of 'false'. After all of that, a new line is
        * printed with 'System.out.println()'.
        *
        * I chose to use the for-each loop because it looked cleaner on the screen.
        */

        for (Vaccine vaccine : vaccine_array)
        {
            vaccine.display(false);
            System.out.println();
        }

        // Display the values of the Vaccine in a linear format
        //https://linuxhint.com/call-invoke-method-from-another-class-java/

        /*
        * This creates a new vaccine object called header.
        * the header() method is a method defined within
        * the Vaccine class. In this case it is calling
        * the header method to display a header in the
        * console when the program is executed.
        */

        Vaccine header = new Vaccine();
        header.header();

        //I chose to use the for-each loop because it looked cleaner on the screen.
        for (Vaccine vaccine : vaccine_array)
        {
            vaccine.display(true);
        }

        //same as the previous description but for the footer.
        Vaccine footer = new Vaccine();
        footer.footer();
    }
}
