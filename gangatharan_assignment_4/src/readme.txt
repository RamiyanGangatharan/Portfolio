





                            ============================================
                            | THE DRIVEN, THE PRODUCED, & THE PERISHED |
                            |       by: Ramiyan Gangatharan            |
                            ============================================







===================================================================================================
                                      CHAPTER I: THE DRIVER
===================================================================================================

    This Java program is essentially assignment 3 but with inheritance. Another difference
    between assignment 3 and assignment 4 is the different scenario that this program is
    in. While assignment 3 is dealing with vaccines, assignment 4 is dealing with groceries
    that have both perishable and non-perishable items in stock. This is the part of a Java
    program that is runnable and has the ability to customize the parameterized constructors
    in the Product class.

    We will first showcase the initialization of the 'product_array' array with the size of 7.
    This array houses all of our Product objects and their parameters. The second thing I
    would like to show is the variable initialization part of my program.

    After the initialization of the array & variables, we will proceed with creating these
    new objects of the class 'Product'. It was decided that I start with displaying the
    default constructor first. Then, I started creating the custom parameterized objects
    with full detail in each object. The first three objects are non-perishable items where
    they do not have an expiry date while the last three objects are perishable where they
    feature an expiry date from the Perishable class.

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
          +---------------------------------------------------------------------------+

    NOTE: SEE DOCUMENTATION @ perishable.java FOR EXPLANATION OF THE DATES IN MILLISECONDS.

    In conclusion, this Java program showcases the use of inheritance in creating a grocery store
    inventory management system that handles both perishable and non-perishable items. The program
    demonstrates the initialization of an array & variables, object creation with parameterized
    constructors, and the use of the Display function to print out custom values onto the terminal.
    The program's documentation provides clarity on the program's purpose and explains the dates
    used in the Perishable class. Overall, this program serves as an excellent example of how to
    apply inheritance in Java programming and highlights the importance of proper documentation
    to ensure the code's readability and maintenance.



===================================================================================================
                                      CHAPTER II: THE PRODUCER
===================================================================================================

    This section of the program is essentially the 'back-end' or the 'backrooms' of the
    entire operation of the program where it initializes and creates the backbone of
    the Driver and Perishable classes. This code defines a class called "Product" that
    contains public variables, setters, getters, a default constructor, a parameterized
    constructor, and a display method. The setters and getters are used to set and get
    the values of these private variables. The default constructor initializes the public
    variables with default values while the parameterized constructor initializes them
    with specific values passed in as parameters. Finally, the display method prints out
    the values of the private variables for a given instance of the "Product" class.

    In the early stages of creating this file, I just took the initialization process of
    assignment 3 and just put it here, but then I realized that I needed to make them
    public for the inheritance to work because of the variable sharing that was going on.
    This set of variables end up getting used four times due to the assumption that the
    program being split into three files to is make this assignment work as intended.

    In this specific file, the setters & getters are the second item on the list to
    write about because of the positioning of the code, and the importance of these
    setters to the rest of the program (in which are used once or twice each).
    without these setters and getters, encapsulation would be more difficult to
    achieve in this program, and you would not be able to access this data from
    another class like Driver or Perishable (using inheritance).

    This default constructor is used for the non-perishable side of the program
    (explained in the Perishable.java and Driver.java files) where they are
    generic values used as placeholders to check if the program is running properly.
    Surprisingly, this constructor alone gets used fifteen different times. After the
    default constructor has been made, we create the parameterized constructor where
    you can are enabled to make custom objects. In this parameterized constructor,
    we initialize general variables that are going to be used for the entire program.

    The display method is a way to call for an output without cluttering the main running file.
    The display method basically uses getters from other files in the program to retrieve
    information from the variable it is held in. For example, if I wanted the ID number of the
    product in the Product class, I can just get the ID number from:

                       "System.out.println("Product ID: " + getProduct_id());"

    This gives you the ability to get IntelliJ to print out the value that you want in the terminal.
    The reason I still use the display function is because of the simplicity behind holding all of
    these individual values in a container whilst keeping the code relatively clean.

    In conclusion, this section of the program focuses on defining a class called "Product" that contains
    private variables, setters, getters, a default constructor, a parameterized constructor, and a display
    method. The setters and getters are used to set and get the values of public variables, while the
    constructors are used to initialize the variables with default or specific values. The display method
    is a way to call for an output without cluttering the main running file. This file also explains the
    variable initialization process, the importance of getters and setters for encapsulation and inheritance,
    and the use of constructors for both generic and custom objects. Overall, this section of the program plays
    a crucial role in setting up the backbone of the Driver and Perishable classes.



===================================================================================================
                                      CHAPTER III: THE PERISHABLE
===================================================================================================

    This is an inherited class that inherits from the class "Product". The Perishable class
    inherits the variables, methods, the  default constructor, the parameterized constructor,
    and adds an expiry date variable called "product_expiry" where Colin Bond helped me out
    with figuring out the date system in Java where you can put in Unix time which is shown in
    milliseconds since 1970 for some reason where you calculate that and put it into new date
    objects (located in the Driver class).

    We will start from the top where we initialize the Date variable. This date variable gets
    used three different times in the entire program where I have to set dates for three objects
    that I have chosen to be perishable items (Bacon, Ice-cream, and Salmon).

    After the initialization of the Date variable, we move on towards the default constructor for
    the Perishable class called "Perishable". This default constructor is similar to the default
    constructor for the Driver class but has the new addition of a date parameter.Once the default
    constructor has been made, we move on to the parameterized constructor where you can customize
    your object to your hearts desire. In this parameterized constructor, we initialize the variables
    that are going to be used for this part of the program.

    The getters and setters for this section are inherited from the Driver class where they are
    literally the same getters and setters used there. In addition to those getters and setters,
    I have implemented a new set of getters and setters for the expiry date section called
    "product_expiry".

    In this stage of the program, this class has been used twice and overridden once.
    The reason I override this class in conjunction to the 'super' keyword, is to add
    an expiry date to the output when the perishable class is called in Driver.java.
    the reason you use 'super' is to remove the confusion between superclasses and
    subclasses that have methods/functions with the same name.

    In conclusion, the Perishable class is a subclass of the Product class in Java and
    adds a variable called "product_expiry" to represent the expiry date of perishable
    products. The class includes a default constructor, a parameterized constructor,
    and getter & setter methods for the expiry date variable. Additionally, the
    overridden display method is used to display the expiry date along with other product
    details when the Perishable class is called in the Driver class. Overall, this
    implementation allows for better organization and management of perishable products
    in the program.
