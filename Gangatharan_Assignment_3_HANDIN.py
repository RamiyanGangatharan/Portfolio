#..............................................................#
"""
Program Name: Gangatharan_Assignment_3.py
Author: Ramiyan Gangatharan
Date: 11/14/2022
Description: A program that takes an input from a user and encodes it to make a secret code like an enigma.

"""

#                    DECLARATIONS:                             #
#--------------------------------------------------------------#
#==============================================================#
#                     CONSTANTS                                #
#==============================================================#

# These three constants: "OPTION_1", "OPTION_2", and "OPTION_3" 
# are used in the if statements in the "MainMenu()" function
# to validate that the user enters the right input

OPTION_1 = 1
OPTION_2 = 2
OPTION_3 = 3

# These two constants "MIN", and "MAX", are used to further validate that the user enters valid values
# In this case, more than and equal to one, and less than and equal to three

MIN = 1
MAX = 3

# This is a constant that sets the amount of times a letter 
# in the alphabet gets shifted when encryption occurs

SHIFT_AMOUNT = 4

# These two constants produce the appropriate error message for each situation
# ERROR_1/ERROR #1988 will be enabled when the user does not enter the numbers one through three
# ERROR_2/ERROR #1337 will be enabled when the user enters a string instead of an integer
# when first choosing the input in the main menu (1 == encode, 2 == decode, 3 == end program)

ERROR_1 = "ERROR #1988: Please enter an input according to the options above."
ERROR_2 = "ERROR #1337: Please enter a valid input"

# The "OPENING" constant prints out a message at the very top of the terminal when the (below the file information of course)

# The "CLOSING" constant prints out a message at the very bottom of the terminal after the user inputs "3" in the main menu 
#   resulting in the program ending and this print statement activating to print this message at the bottom of the terminal

OPENING = "Welcome to Rami's Encoding Machine!"
CLOSING = "Thank you for using Rami's Encoding Machine."

#==============================================================#
#                      VARIABLES                               #
#==============================================================#

# These two variables just serve the purpose to underline text 
# in the for loop in the "Open()", and "Close()" functions

dash_string = ""
dash_string_2 = ""

#==============================================================#
#                      FUNCTIONS                               #
#==============================================================#

# The "Asterisk()" function just produces a line of asterisks (lol completely unnecessary)

def Asterisk():
    print("\n***************************************************************")
    
#==============================================================#

# The "Open()" function produces: 
# 1) the output text 
# 2) the underline with dashes via "for" loop

def Open():
    print(f"{dash_string}\n{OPENING}\n{dash_string}")
for dash in range(len(OPENING)):
        dash_string += "-"
        
#==============================================================#

# the "MainMenu()" function is the central "hub" of the program where it deals with:

# 1) the order in which processes are completed 

# 2) calls the following functions:
#   2a) "Encode()"
#   2b) "Decode()"

# 3) uses a while loop called "running_app" which dictates if the program:
#   3a) executes the program
#   3b) does not execute the program
#   3c) end the program

# 4) Validation

def MainMenu():
    running_app = True
    while running_app:
        
    #UI means user input 
    #   4a) The "Try/Except" block validates if the input is an integer 
        try:
            UI = int(input(f"\nHello there, Which function would you like to perform today?: \n\n(1) To encode text \n(2) To decode text \n(3) To exit program\n\nUI: "))
            
    #       4b) The first "if" statement validates that the input is within the given parameters of one and three
            if MIN <= UI <= MAX:
                
    #           4c) The second "if" statement validates if the user input is "1"
                if UI == OPTION_1:
                    Encode()
                    
    #           4d) The first "elif" statement validates if the user input is "2"
                elif UI == OPTION_2: 
                    Decode()
                    
    #           4e) The second "elif" statement validates if the user input is "3"
                elif UI == OPTION_3:
                    running_app = False
            else:
                print(ERROR_1)
        except:
            print(ERROR_2)
            
#==============================================================#      
#Brody helped me understand the math process behind this section

# The functions of "Encode" and "Decode" the text and does the following:
# 1) Requests input from user via "word"
# 2) declares the local variable "empty_string"
# 3) Initializing a for loop to enumerate the input

# 4) inside the for loop the following occurs
#   4a) defines "ord_letter" as "ord(value) + SHIFT_AMOUNT" 
# (SHIFT_AMOUNT is the number of times a letter gets moved forward or backwards in the alphabet) 
#   4b) scrambles the initial string input with "ord" and "chr"
#   4c) Outputs the encrypted text

def Encode():   
    
    word = input("Please type in the message you would like to encode: ")
    empty_string = ''

    for letter, value in enumerate (word):
        
        ord_letter = ord(value) + SHIFT_AMOUNT
        
        ord_letter_into_new_letter = chr(ord_letter)
        
        empty_string += ord_letter_into_new_letter

    print(f"\nYour encrypted text is: {empty_string}")

#==============================================================#       
#the function "Decode" decodes the text 

def Decode():
    
    word = input("Please type in the message you would like to decode: ")
    empty_string = ''

    for letter, value in enumerate (word):
        
        ord_letter = ord(value) - SHIFT_AMOUNT
        
        ord_letter_into_new_letter = chr(ord_letter)
        
        empty_string += ord_letter_into_new_letter

    print(f"\nYour decrypted text is: {empty_string}")

#==============================================================#

# The "Close()" function produces: 
# 1) an output text 
# 2) the underline with dashes via "for" loop

def Close():
    print(f"\n{dash_string_2}\n{CLOSING}\n{dash_string_2}")
for dash in range(len(CLOSING)):
        dash_string_2 += "-"

#==============================================================#
#This function calls other functions in order

def Program():
    Asterisk()
    Open()
    MainMenu()
    Close()
    Asterisk()
    
#==============================================================#
#this thing calls the program function in order for the whole program to run
Program()

#..............................................................#