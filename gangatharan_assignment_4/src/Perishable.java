import java.util.Date;
public class Perishable extends Product
{
        /*
                                 GENERAL INFORMATION
    =====================================================================================
    This is an inherited class that inherits from the class "Product". The Perishable class
    inherits the variables, methods, the  default constructor, the parameterized constructor,
    and adds an expiry date variable called "product_expiry" where Colin Bond helped me out
    with figuring out the date system in Java where you can put in Unix time which is shown in
    milliseconds since 1970 for some reason where you calculate that and put it into new date
    objects (located in the Driver class).
    =====================================================================================




         */

/*
    We will start from the top where we initialize the Date variable. This date variable gets
    used three different times in the entire program where I have to set dates for three objects
    that I have chosen to be perishable items (Bacon, Ice-cream, and Salmon).
*/
    private Date product_expiry;

/*
    After the initialization of the Date variable, we move on towards the default constructor for
    the Perishable class called "Perishable". This default constructor is similar to the default
    constructor for the Driver class but has the new addition of a date parameter.
 */
    public Perishable()
    {
        item = "no_item";
        product_id = 1008;
        product_name = "DEFAULT";
        product_cost = 99.99;
        current_quantity = 999;
        required_quantity = 999;
        instruction = "HAZARDOUS MATERIAL, USE EXTREME CAUTION";
        product_expiry = new Date();
    }
/*
    Once the default constructor has been made, we move on to the parameterized constructor where
    you can customize your object to your hearts desire. In this parameterized constructor, we
    initialize the variables that are going to be used for this part of the program.
 */
    public Perishable
            (
                String new_item,
                int new_product_id,
                String new_product_name,
                double new_product_cost,
                int new_current_quantity,
                int new_required_quantity,
                String new_instruction,
                Date new_expiry
            )
    {
        setItem(new_item);
        setProduct_id(new_product_id);
        setProduct_name(new_product_name);
        setProduct_cost(new_product_cost);
        setCurrent_quantity(new_current_quantity);
        setRequired_quantity(new_required_quantity);
        setInstruction(new_instruction);
        setExpiry(new_expiry);
    }



/*
    The getters and setters for this section are inherited from the Driver class where they are
    literally the same getters and setters used there. In addition to those getters and setters,
    I have implemented a new set of getters and setters for the expiry date section called
    "product_expiry".
*/
    public void setExpiry(Date new_expiry)
    {
        product_expiry = new_expiry;
    }

    public Date getExpiry()
    {
        return product_expiry;
    }

/*
    In this stage of the program, this class has been used twice and overridden once.
    The reason I override this class in conjunction to the 'super' keyword, is to add
    an expiry date to the output when the perishable class is called in Driver.java.
    the reason you use 'super' is to remove the confusion between superclasses and
    subclasses that have methods/functions with the same name.
 */
    public void display()
    {
        super.display();
        System.out.println("Expiration Date: " + getExpiry());
    }

/*
    In conclusion, the Perishable class is a subclass of the Product class in Java and
    adds a variable called "product_expiry" to represent the expiry date of perishable
    products. The class includes a default constructor, a parameterized constructor,
    and getter & setter methods for the expiry date variable. Additionally, the
    overridden display method is used to display the expiry date along with other product
    details when the Perishable class is called in the Driver class. Overall, this
    implementation allows for better organization and management of perishable products
    in the program.
*/
}
