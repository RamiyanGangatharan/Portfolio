
import tkinter.font as font
from tkinter import * 
from tkinter import ttk
from idlelib.tooltip import Hovertip
Window = Tk()
Window.title("C/F Converter")
Window.geometry("625x300")
Window.configure(background = '#BCCBDE')

#--------------------------------------------------------------------------------------------#
#                                       CONSTANTS                                            #
#--------------------------------------------------------------------------------------------#
# Error messages for both terminal (1) and (2)

ERROR_1 = "Enter a real number"
TEMP_ERROR = "MIN TEMP LIMIT"
PASS = "PASS"
FAIL = "FAIL"
CELCIUS_SYMBOL =     "°C"
FAHRENHEIT_SYMBOL =  "°F"
KELVIN_SYMBOL =      "°K"
RADIO_ONE =   1
RADIO_TWO  =  2
RADIO_THREE = 3
RADIO_FOUR =  4
RADIO_FIVE =  5
RADIO_SIX =   6

Minimum_Celcius =    -273.15
Minimum_Fahrenheit = -459.67
Minimum_Kelvin =        0.0

def Minimum_Celcius_Error():
    Terminal_Entry.configure(text = FAIL)
    Terminal_Entry_2.configure(text = TEMP_ERROR)
    
def Minimum_Fahrenheit_Error():
    Terminal_Entry.configure(text = FAIL)
    Terminal_Entry_2.configure(text = TEMP_ERROR)

def Minimum_Kelvin_Error():
    Terminal_Entry.configure(text = FAIL)
    Terminal_Entry_2.configure(text = TEMP_ERROR)

def General_Error():
    Terminal_Entry.configure(text = FAIL)
    Terminal_Entry_2.configure(text = ERROR_1)
    
def Program (event = Window.bind):
    
    try:    
            User = float(Input_Entry.get())
            
            if var.get() == RADIO_ONE:
                if User >= Minimum_Celcius:
                    Total_C = (User * 9/5) + 32
                    Output_Entry.configure(text = "{:,.2f}".format(Total_C) + FAHRENHEIT_SYMBOL)
                    Terminal_Entry.configure(text = PASS)
                else:
                    Minimum_Celcius_Error()
        
            elif var.get() == RADIO_TWO:
                if User >= Minimum_Fahrenheit:
                    Total_F = (User - 32) * 5/9 
                    Output_Entry.configure(text = "{:,.2f}".format(Total_F) + CELCIUS_SYMBOL)
                    Terminal_Entry.configure(text = PASS)
                else:
                    Minimum_Fahrenheit_Error() 
    except:
        General_Error() 
    try:
        if var.get() == RADIO_THREE:
            if User >= Minimum_Kelvin:
                Total_KC = User + 273.15
                Output_Entry.configure(text = "{:,.2f}".format(Total_KC) + KELVIN_SYMBOL)
                Terminal_Entry.configure(text = PASS)
        elif var.get() == RADIO_FOUR:
            if User >= Minimum_Kelvin:
                Total_CK = User - 273.15
                Output_Entry.configure(text = "{:,.2f}".format(Total_CK) + CELCIUS_SYMBOL)
                Terminal_Entry.configure(text = PASS)
                
        elif var.get() == RADIO_FIVE:
            if User >= Minimum_Kelvin:
                Total_FK = (User - 32) * 5/9 + 273.15
                Output_Entry.configure(text = "{:,.2f}".format(Total_FK) + KELVIN_SYMBOL)
                Terminal_Entry.configure(text = PASS)
                
        elif var.get() == RADIO_SIX:
            if User >= Minimum_Kelvin:
                Total_KF = (User - 273.15) * 9/5 + 32
                Output_Entry.configure(text = "{:,.2f}".format(Total_KF) + FAHRENHEIT_SYMBOL)
                Terminal_Entry.configure(text = PASS)
    except:
        Minimum_Kelvin_Error()
        
def Clear(event = Window.bind):
    Input_Entry.delete(0, END)
    Output_Entry.config(text = "")
    Terminal_Entry.config(text= "")
    Terminal_Entry_2.config(text= "")
    
# Function to exit the progran 
def EXIT():
    Window.destroy
    
var = IntVar(None,1)
# Radial buttons with a background colour and appropriate coordinates
# FORMAT =                 TEXT                   VARIABLE            BACKGROUND COLOUR: LIGHT BLUE      COORDINATES
Radiobutton(text = 'Celcius to Fahrenheit', variable = var, value = 1, background = '#BCCBDE').place (x = 150, y = 75)
Radiobutton(text = "Fahrenheit to Celcius", variable = var, value = 2, background = '#BCCBDE').place (x = 300, y = 75)
Radiobutton(text = "Celcius to Kelvin",     variable = var, value = 3, background = '#BCCBDE').place (x = 150, y = 95)
Radiobutton(text = "Kelvin to Celcius",     variable = var, value = 4, background = '#BCCBDE').place (x = 300, y = 95)
Radiobutton(text = "Fahrenheit to Kelvin",  variable = var, value = 5, background = '#BCCBDE').place (x = 150, y = 115)
Radiobutton(text = "Kelvin to Fahrenheit",  variable = var, value = 6, background = '#BCCBDE').place (x = 300, y = 115)

#--------------------------------------------------------------------------------------------#
#                                         STYLING                                            #
#--------------------------------------------------------------------------------------------#

#                                          FONTS

#Different font sizes for the selected font with underlines for some of it
FGM_1 = font.Font(family='Franklin Gothic Medium', size = 14)
FGM_2 = font.Font(family='Franklin Gothic Medium', size = 22, underline = 1)
FGM_3 = font.Font(family='Franklin Gothic Medium', size = 8, underline = 1)

#                                         LABELS

Title_Label =       Label(text = "Ramiyan's Temperature Converter") 
Radial_Options =    Label(text = "Choose an option in the menu below")

Input_Label =       Label(text = "Input: ")
Output_Label =      Label(text = "Output: ")
Terminal_Label =    Label(text = "Debug: ")

#                       Font and colour configuration for labels

# FORMAT =                   BACKGROUND = LIGHT BLUE    FONT

#Configuration for the title at the top of the page
Title_Label.configure       (background = '#BCCBDE', font = FGM_2)

#Configuration for the radial buttons in the centre of the page
Radial_Options.configure    (background = '#BCCBDE', font = FGM_3)

#Configuration for the input label or the text "INPUT" at the left side of the page
Input_Label.configure       (background = '#BCCBDE', font = FGM_1)

#Configuration for the output or the text "OUTPUT" at the left side of the page
Output_Label.configure      (background = '#BCCBDE', font = FGM_1)

#Configuration for the terminal label or the text "TERMINAL" at the left side of the page
Terminal_Label.configure    (background = '#BCCBDE', font = FGM_1)

# Entry creation section setting size parameters, colours, and depth configuration

#COMMON COMPONENTS FOR EACH ENTRY:
    # 5 units of internal padding
    # the relief setting to SUNKEN to "sink" the textbox into the window
    # justify the box to the centre of the screen
    # set the background to LIGHT GREY

Input_Entry =       Entry(width = 70, bd = 5, relief = SUNKEN, justify = CENTER, background = '#C2DDE6')
    # width of 70 units

Output_Entry =      Label(width = 60, bd = 5, relief = SUNKEN, justify = CENTER, background = '#C2DDE6')
    # width of 60 units

Terminal_Entry =    Label(width = 5,  bd = 5, relief = SUNKEN, justify = CENTER, background = '#C2DDE6')
    # width of 5 units

Terminal_Entry_2 =  Label(width = 15, bd = 5, relief = SUNKEN, justify = CENTER, background = '#C2DDE6')
    # width of 15 units

#                                           BUTTONS 
#                           #Buttons, thier functions, and their colours

#This button is the calculate button
#This calls the "Program" function and has a background colour of LIGHT BLUE
Calculate_Button =  Button(text = "CALCULATE", command = Program,                background = '#C2DDE6')

#This button is the clear button
#This calls the "Clear" function and has a background colour of LIGHT BLUE
Clear_Button =      Button(text = "  CLEAR  ", command = Clear,                  background = '#C2DDE6')

#This button is the exit button
#This calls the command "Window.destroy" and has a background colour of LIGHT BLUE
Exit_Button =       Button(text = "  EXIT  ",  command = Window.destroy,         background = "#C2DDE6")

#            KEYBINDS

#This binds the ENTER key to the calculate button
Window.bind('<Return>', Program)

#This binds the BACKSPACE key to the clear button
Window.bind('<BackSpace>', Clear)

#      PLACEMENT COORDINATES

#THE COORDINATES FOR LABELS
Title_Label.place       (x = 100,  y = 10 )
Radial_Options.place    (x = 205,  y = 50 )
Input_Label.place       (x = 10,   y = 150)
Output_Label.place      (x = 10,   y = 200)
Terminal_Label.place    (x = 10,   y = 250)

#THE COORDINATES FOR ENTRIES
Output_Entry.place      (x = 100,  y = 200)
Input_Entry.place       (x = 100,  y = 150)
Terminal_Entry.place    (x = 100,  y = 250)
Terminal_Entry_2.place  (x = 150,  y = 250)

#THE COORDINATES FOR BUTTONS
Exit_Button.place       (x = 488,  y = 250) 
Calculate_Button.place  (x = 385,  y = 250)
Clear_Button.place      (x = 300,  y = 250) 

Window.mainloop()