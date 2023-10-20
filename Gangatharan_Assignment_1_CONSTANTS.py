"""
Author:Ramiyan Gangatharan
Program: Gangatharan_Assignment_1_CONSTANTS.py
Date: September 7, 2022
Description: 
A program that:
    - Takes the diameter of a pizza as input 
    - Calculates the number of slices for that pizza
    - Calculates the area of the whole pizza and the area for each slice
    - Outputs the results in a proper format
"""

#DECLARATIONS
#Importing math and PI
from cmath import pi
import math

#VARIABLES
#Diameter of pizza
Diameter = 0.0

#Area of pizza
PizzaArea = 0.0

#Radius of pizza
PizzaRadius = 0.0

#CONSTANTS
#The minimum and maximum diameter parameters that is allowed from the user
MINIMUM_DIAMETER = 8
MAXIMUM_DIAMETER = 24

#Maximum diameter parameters for each sector/bracket.
EXTRA_SMALL_PIZZA_UPPER_LIMIT = 12 
SMALL_PIZZA_UPPER_LIMIT = 14
MEDIUM_PIZZA_UPPER_LIMIT = 16
LARGE_PIZZA_UPPER_LIMIT = 20

#Number of slices per size of pizza
EXTRA_SMALL_PIZZA_SLICES = 6
SMALL_PIZZA_SLICES = 8
MEDIUM_PIZZA_SLICES = 10
LARGE_PIZZA_SLICES = 12
EXTRA_LARGE_PIZZA_SLICES = 16

#A "try and except" block to excecute the code in order and to collect input from the user
try: 
    Diameter = float(input("\nPlease enter the diameter of your pizza: "))

# This if statement on line 55 acts like a filter to check for errors. 
# If the inputted number is over or under the required parameters (more than 8, less than 24):
# It will send an error message telling the user that you need to enter a number within those parameters (line 86)
# If you entered a string instead of a number, it will send you an error to let you enter a real number (line 88)

    if MINIMUM_DIAMETER <= Diameter <= MAXIMUM_DIAMETER:   

#this is the calculation for the area of a circle
            PizzaRadius = Diameter/2
            PizzaArea = pi * (PizzaRadius * PizzaRadius)
#These "if", "elif", and "else" statements will split up calculations within the number catagories to have thier own area calculations
            if Diameter < EXTRA_SMALL_PIZZA_UPPER_LIMIT:
                print(f"\nYour pizza will be cut into {EXTRA_SMALL_PIZZA_SLICES} slices.")
                print(f"\nThe area of each slice of pizza will be: {round(PizzaArea/EXTRA_SMALL_PIZZA_SLICES,2)} square inches.")

            elif Diameter < SMALL_PIZZA_UPPER_LIMIT:
                print(f"\nYour pizza will be cut into {SMALL_PIZZA_SLICES} slices.")
                print(f"\nThe area of each slice of pizza will be: {round(PizzaArea/SMALL_PIZZA_SLICES,2)} square inches.")

            elif Diameter < MEDIUM_PIZZA_UPPER_LIMIT:
                print(f"\nYour pizza will be cut into {MEDIUM_PIZZA_SLICES} slices.")
                print(f"\nThe area of each slice of pizza will be: {round(PizzaArea/MEDIUM_PIZZA_SLICES,2)} square inches.")

            elif Diameter < LARGE_PIZZA_UPPER_LIMIT:
                print(f"\nYour pizza will be cut into {LARGE_PIZZA_SLICES} slices.")
                print(f"\nThe area of each slice of pizza will be: {round(PizzaArea/LARGE_PIZZA_SLICES,2)} square inches.")

            else:                       
                print(f"\nYour pizza will be cut into {EXTRA_LARGE_PIZZA_SLICES} slices.") 
                print(f"\nThe area of each slice of pizza will be: {round(PizzaArea/EXTRA_LARGE_PIZZA_SLICES,2)} square inches.")

    #these are the error messages that will output onto the terminal when you break the rules of:
    # 1) inputting a number more than or equal to 8 or less than or equal to 24
    # 2) if you entered a string instead of a real number (1, 2, 3, 2.2, 3.14159 etc...)
        
    else:
        print(f"THE DIAMETER MUST BE BETWEEN EIGHT AND TWENTY-FOUR INCHES INCLUSIVE. YOU ENTERED: {Diameter}")  
except:
    print("YOU DID NOT ENTER A REAL NUMBER, PLEASE ENTER A REAL NUMBER")
input("\n\n...PRESS ENTER TO EXIT THE PROGRAM...")