/*
 * Name: Ramiyan Gangatharan (100835223)
 * Date: 2023/03/17
 * Filename: Vaccine.java
 * Description: A program that displays vaccine information based on the set parameters in the specific object.
 */
public class Vaccine
{

    //Initializing the private variables for the class.
    private int id;
    private int quantity;
    private double cost;
    private String expiry;
    private String name;
    private String instructions;

    // Default constructor
    public Vaccine()
    {
        id = 999999999;
        name = " NULL_VALUE";
        cost = 999.98;
        quantity = 9999;
        expiry = "NULL_VALUE";
        instructions = "handle with care           ";
    }

    // Parameterized Constructor that is the structure of the custom vaccine values in the Driver class.
    public Vaccine(int new_id, String new_name, double new_cost, int new_quantity, String new_expiry, String new_instructions)
    {
        setId(new_id);
        setName(new_name);
        setCost(new_cost);
        setQuantity(new_quantity);
        setExpiry(new_expiry);
        setInstructions(new_instructions);
    }

    //getters for each parameter that returns the current values of each of the parameters.
    public int getId() {return id;}
    public String getName(){return name;}
    public double getCost(){return cost;}
    public int getQuantity(){return quantity;}
    public String getExpiry(){return expiry;}
    public String getInstructions(){return instructions;}

    //setters for each of the variables and sets the values of each variable to each provided argument
    public void setId(int new_id){id = new_id;}
    public void setName(String new_name){name = new_name;}
    public void setCost(double new_cost){cost = new_cost;}
    public void setQuantity(int new_quantity){quantity = new_quantity;}
    public void setExpiry(String new_expiry){expiry = new_expiry;}
    public void setInstructions(String new_instructions){instructions = new_instructions;}

    // This is a method to print out a header when needed in the Driver class
    public void header()
    {
        System.out.println("+-----------+---------------+-----------+----------+--------------+-----------------------------+");
        System.out.println("|    SKU    |     NAME      |   PRICE   | QUANTITY |    EXPIRY    |        INSTRUCTION          |");
        System.out.println("+-----------+---------------+-----------+----------+--------------+-----------------------------+");
    }

    // This is a method to print out a footer when needed in the Driver class
    public void footer()
    {
        System.out.println("|///////////////////////////////////////////////////////////////////////////////////////////////|");
    }

    /* This is a method to display a certain format of information about vaccines.
    *
    * 1) if the tableFormat flag is turned true, then it will print out a table.
    * 2) if the tableFormat flag is turned false, then it will print out a non-linear list.
    *
    * for both options, call the get methods for the purpose of displaying the parameters for each vaccine.
     */

    public void display(boolean tableFormat)
    {
        if (tableFormat)
        {
            System.out.print("| " + getId() + " | ");
            System.out.print(" " + getName() + "  | ");
            System.out.print("  " + getCost() + "  | ");
            System.out.print("  " + getQuantity() + "   | ");
            System.out.print(" " + getExpiry() + "  |");
            System.out.print(" " + getInstructions() + " |");
            System.out.println();
        }
        else
        {
            System.out.println("SKU: " + getId());
            System.out.println("Vaccine Name: " + getName());
            System.out.println("Unit Cost: $" + getCost());
            System.out.println("Quantity on hand: " + getQuantity());
            System.out.println("Expiry Date: " + getExpiry());
            System.out.println("Special Instructions: " + getInstructions());
        }

    }
}
