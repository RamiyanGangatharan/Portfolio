import java.util.Date;
public class Driver
{
    public static void main(String[] args)
    {

/*
                                     GENERAL INFORMATION
    =====================================================================================
    This Java program is essentially assignment 3 but with inheritance. Another difference
    between assignment 3 and assignment 4 is the different scenario that this program is
    in. While assignment 3 is dealing with vaccines, assignment 4 is dealing with groceries
    that have both perishable and non-perishable items in stock. This is the part of a Java
    program that is runnable and has the ability to customize the parameterized constructors
    in the Product class.
    =====================================================================================

*/

/*
    We will first showcase the initialization of the 'product_array' array with the size of 8.
    This array houses all of our Product objects and their parameters.
 */

        Product[] product_array = new Product[8];

/*
    After the initialization of the array, we will proceed with creating new objects of
    the class 'Product'. It was decided that I start with displaying the default constructor
    first. Then, I started creating the custom parameterized objects with full detail in each
    object. The first three objects are non-perishable items where they do not have an expiry
    date while the last three objects are perishable where they feature an expiry date from
    the Perishable class.
*/

        //non-perishable

        product_array[0] = new Product();

        product_array[1]= new Product
                (
                        "Canned Tuna",
                        2701,
                        "Clover Leaf",
                        2.27,
                        100,
                        250,
                        "KEEP SEALED"
                );

        product_array[2] = new Product
                (
                        "Rice Bag",
                        6197,
                        "Tilda",
                        18.47,
                        15,
                        30,
                        "WASH BEFORE USE"
                );

        product_array[3] = new Product
                (
                        "Canned Soup",
                        4671,
                        "Campbell",
                        11.65,
                        125,
                        345,
                        "COOK BEFORE CONSUMPTION"
                );

        Date bacon_expiration_date = new Date    (1837439999000L);
        Date icecream_expiration_date = new Date (1711209599000L);
        Date salmon_expiration_date = new Date   (1679587199000L);

        product_array[4] = new Perishable();

        product_array[5] = new Perishable
                (
                        "Bacon Strips",
                        5292,
                        "Applegate",
                        17.79,
                        12,
                        28,
                        "KEEP REFRIGERATED",
                        bacon_expiration_date
                );


        product_array[6] = new Perishable
                (
                        "Ice Cream",
                        1831,
                        "Kawartha",
                        8.49,
                        8,
                        32,
                        "KEEP FROZEN",
                        icecream_expiration_date
                );


        product_array[7] = new Perishable
                (
                        "Atlantic Salmon",
                        8146,
                        "Great Value",
                        19.24,
                        10,
                        24,
                        "KEEP WITHIN 3.3°C & 0°C",
                        salmon_expiration_date
                );

/*

    The way the Driver class displays all of this information is by the utilization of the
    Product class with the Display function. The first step is to call the default values
    object where it is a default constructor. Then, the Driver class has a for loop that
    calls all the parameterized objects from the parameterized constructor in the Product
    class.

          +---------------------------------------------------------------------------+
          | The way I have decided to print out the custom values onto the terminal:  |
          |                                                                           |
          |  1. The index position as a debug statement                               |
          |  2. The item being sold                                                   |
          |  3. The product identification number                                     |
          |  4. the brand name of the item being sold                                 |
          |  5. The price of the item being sold                                      |
          |  6. The stock level of each item being sold.                              |
          |  7. The special instructions of each item being sold                      |
          |  8. The expiration date for the perishable products                       |
          +---------------------------------------------------------------------------+

    NOTE: See the perishable.java for the explanation of the expiry dates in milliseconds.

*/

        for (int index = 0; index < 8; index++)
        {
            System.out.println("---------------------------------");
            System.out.println("Index Position: [" + index + "]");
            product_array[index].display();
        }
    }
    /*
    In conclusion, this Java program showcases the use of inheritance in creating a grocery store
    inventory management system that handles both perishable and non-perishable items. The program
    demonstrates the initialization of an array & variables, object creation with parameterized
    constructors, and the use of the Display function to print out custom values onto the terminal.
    The program's documentation provides clarity on the program's purpose and explains the dates
    used in the Perishable class. Overall, this program serves as an excellent example of how to
    apply inheritance in Java programming and highlights the importance of proper documentation
    to ensure the code's readability and maintenance.
     */
}
