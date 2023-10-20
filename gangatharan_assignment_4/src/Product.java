public class Product
{
/*
                                 GENERAL INFORMATION
    =====================================================================================
    This section of the program is essentially the 'back-end' or the 'backrooms' of the
    entire operation of the program where it initializes and creates the backbone of
    the Driver and Perishable classes.

    This code defines a class called "Product" that contains private variables, setters,
    getters, a default constructor, a parameterized constructor, and a display method.
    The setters and getters are used to set and get the values of these public variables.
    The default constructor initializes the public variables with default values while the
    parameterized constructor initializes them with specific values passed in as parameters.
    Finally, the display method prints out the values of the private variables for a given
    instance of the "Product" class.
    =====================================================================================
 */

/*
    In the early stages of creating this file, I just took the initialization process of
    assignment 3 and just put it here, but then I realized that I needed to make them
    public for the inheritance to work because of the variable sharing that was going on.
    This set of variables end up getting used four times due to the assumption that the
    program being split into three files to is make this assignment work as intended.
*/
    //Declaration of public variables for the use of all constructors.
    public String item;
    public int product_id;
    public String product_name;
    public double product_cost;
    public int current_quantity;
    public int required_quantity;
    public String instruction;


/*
    In this specific file, the setters & getters are the second item on the list to
    write about because of the positioning of the code, and the importance of these
    setters to the rest of the program (in which are used once or twice each).
    without these setters and getters, encapsulation would be more difficult to
    achieve in this program, and you would not be able to access this data from
    another class like Driver or Perishable (using inheritance).
*/

    // Setters and Getters for each variable
    public void setItem(String new_item){item = new_item;}
    public void setProduct_id(int new_product_id){product_id = new_product_id;}
    public void setProduct_name(String new_product_name){product_name = new_product_name;}

    public void setProduct_cost(double new_product_cost)
    {
        if (new_product_cost > 0)
        {
            product_cost = new_product_cost;
        }
    }

    public void setRequired_quantity(int new_required_quantity) {required_quantity = new_required_quantity;}

    public void setCurrent_quantity(int new_current_quantity)
    {
        if (new_current_quantity > 0)
        {
            current_quantity = new_current_quantity;
        }
    }

    public void setInstruction(String new_instruction){instruction = new_instruction;}

    public String getItem(){return item;}
    public int getProduct_id(){return product_id;}
    public String getProduct_name(){return product_name;}
    public double getProduct_cost(){return product_cost;}
    public int getCurrent_quantity(){return current_quantity;}
    public int getRequired_quantity(){return required_quantity;}
    public String getInstruction(){return instruction;}


/*
    This default constructor is used for the non-perishable side of the program
    (explained in the Perishable.java and Driver.java files) where they are
    generic values used as placeholders to check if the program is running properly.
    Surprisingly, this constructor alone gets used fifteen different times.
*/
    //Default Constructor
    public Product()
    {
        item = "no_item";
        product_id = 1008;
        product_name = "DEFAULT";
        product_cost = 99.99;
        current_quantity = 999;
        required_quantity = 999;
        instruction = "HAZARDOUS MATERIAL, USE EXTREME CAUTION";
    }


/*
    After the default constructor has been made, we create the parameterized constructor where
    you can are enabled to make custom objects. In this parameterized constructor, we initialize
    general variables that are going to be used for the entire program.
*/
    //Parameterized Constructor
    public Product
    (
            String new_item,
            int new_product_id,
            String new_product_name,
            double new_product_cost,
            int new_current_quantity,
            int new_required_quantity,
            String new_instruction
    )

    {
        setItem(new_item);
        setProduct_id(new_product_id);
        setProduct_name(new_product_name);
        setProduct_cost(new_product_cost);
        setCurrent_quantity(new_current_quantity);
        setRequired_quantity(new_required_quantity);
        setInstruction(new_instruction);
    }

/*
    display method is a way to call for an output without cluttering the main running file.
    The display method basically uses getters from other files in the program to retrieve
    information from the variable it is held in. For example, if I wanted the ID number of the
    product in the Product class, I can just get the ID number from:

                        "System.out.println("Product ID: " + getProduct_id());"

    This gives you the ability to get IntelliJ to print out the value that you want in the terminal.
    The reason I still use the display function is because of the simplicity behind holding all of
    these individual values in a container whilst keeping the code relatively clean.
     a method to display the information with the provided constructor information
*/
    public void display()
    {
        System.out.println("Item: " + getItem());
        System.out.println("Product ID: " + getProduct_id());
        System.out.println("Brand: " + getProduct_name());
        System.out.println("Price: $" + getProduct_cost());
        System.out.println("Stock: " + getCurrent_quantity() + "/" + getRequired_quantity());
        System.out.println("Instruction: " + getInstruction());
    }

/*
     In conclusion, this section of the program focuses on defining a class called "Product" that contains
     private variables, setters, getters, default constructor, a parameterized constructor, and a display
     method. The setters and getters are used to set and get the values of public variables, while the
     constructors are used to initialize the variables with default or specific values. The display method
     is a way to call  for an output without cluttering the main running file. This file also explains the
     variable initialization process, the importance of getters and setters for encapsulation and inheritance,
     and the use of constructors for both generic and custom objects. Overall, this section of the program plays
     a crucial role in setting up the backbone of the Driver and Perishable classes.
*/
}
