"""
Author: Ramiyan Gangatharan
Date: October 21, 2022
Program: Gangatharan_Programming_Assignment_2.py
Description: A program that records the diameter of a pizza
"""

import cmath
from cmath import pi

# initializing the diameter variable
Diameter = 0

# parameters for error checking
MAXIMUM = 24
MINIMUM = 8

# the upper limit of each pizza diameter for the if statements
EXTRA_SMALL_LIMIT = 12
SMALL_LIMIT = 14
MEDIUM_LIMIT = 16
LARGE_LIMIT = 20
EXTRA_LARGE_LIMIT = 24

# error messages
ERROR_1 = "Please enter a whole number more than or equal to eight and please enter a whole number less than or equal to twenty four."
ERROR_2 = "Please enter a real number"
INPUT_QUESTION = "\nWhat is the diameter of your pizza? (...Press (0) to exit the program...): "

# A function for the for loop and print statement
def OutputTextLoop():
    for Slice in Pizza_List:
        print(f"Your pizza will be cut into {Slice} slices and will result in an area of {round(PizzaArea/Slice,2)} square inches.")

continue_input = True

#while the loop still runs, it asks for input
while continue_input:

    # toggle need valid input flag to true
    need_valid_input = True

    # while the user input is not validated
    while need_valid_input:

        # a try/except block to control what the user does within the program
        try:
            Diameter = float(input(f"\n{INPUT_QUESTION}"))
            print("\n")
            
            # this if statement controls if the program exits or not.
            if Diameter == 0:
                continue_input = False
                need_valid_input = False

            # if the diameter is within the min and max parameters, excecute the nested if, elif, and else statements below.
            elif MINIMUM <= Diameter <= MAXIMUM:

                # calc for area of circle
                PizzaRadius = Diameter/2
                PizzaArea = pi * (pow(PizzaRadius, 2))

                # using if, elif, and else statements, 
                # this implements the slice amount values (list) 
                # and uses it within the OutputTextLoop() function to do 
                # the final calculation which is: the area of each slice/number of slices.
                
                if Diameter < EXTRA_SMALL_LIMIT:
                    Pizza_List = [6]

                elif Diameter < SMALL_LIMIT:
                    Pizza_List = [6, 8]

                elif Diameter < MEDIUM_LIMIT:
                    Pizza_List = [6, 8, 10]

                elif Diameter < LARGE_LIMIT:
                    Pizza_List = [6, 8, 10, 12]
                    
                else:
                    Pizza_List = [6, 8, 10, 12, 16]
                    
                #calling this function 
                print(f'The diameter of your pizza: {Diameter}"')
                OutputTextLoop()
            # error messages as constants
            else:
                print(ERROR_1)  
        except:
            print(ERROR_2)