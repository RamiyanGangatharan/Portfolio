namespace Assignment1_SimpleApp
{
    #region "Header"
    /*
        Filename: Assignment1_SimpleApp.csproj
        Author: Ramiyan Gangatharan
        Date: September 15 2023
        Description: This is a program that calculates the average 
                     video game sales per week with a running total.
     */
    #endregion
    public partial class Window : Form
    {
        // This may seem like much but my goal was to make it as modular as I could with the programming I know.
        #region "Variable Declaration"
        // Initialization
        double runningTotal;
        double currentValue;
        int dayCount = 2;
        const int maximumSalesInput = 8;
        #endregion

        #region "Miscellaneous Functions"
        /*
         * This function initializes all the components of the application. 
         * Looking into the backend code, it looks like it creates new objects
         * when introduced into the design section by the framework.
         */
        public Window()
        {
            InitializeComponent();
        }

        /*
         * This function calculates the running total of the valid inputs 
         * given by the user and the day count increases by 1 per iteration.
         */
        private void RunningTotal()
        {
            // Add the entered value to the runningTotal.
            runningTotal += currentValue;
            dayCounterLabel.Text = "Day: " + dayCount++;
        }
        #endregion

        #region "Enabler Functions"
        /*
         * This function is used to disable all control surfaces
         * once the user has entered 7 valid inputs (deeper code).
         */
        private void FreezeProgram()
        {
            // Freeze all interactable controls (except reset) once the output is displayed.
            EnterButton.Enabled = false;
            videoGameSales_RTB.Enabled = false;
            ColorGray();
            videoGameSales_RTB.Focus();
        }

        /*
         * This function is used to disable all control surfaces
         * once the user has pressed the reset button (deeper code).
         */
        private void ReleaseProgram()
        {
            // Resets and releases all controllable components in the window.
            EnterButton.Enabled = true;
            videoGameSales_RTB.Enabled = true;
            ColorLightGray();
            videoGameSales_RTB.Focus();
        }
        #endregion

        #region "Calculation Functions"
        /*
         * This function performs the calculation for the 
         * average video game sales as long as the input 
         * has gone through the validation function.
         */
        private void AverageCalculation()
        {
            // Initialize the sum and count variables.
            double sum = 0.0;
            int count = 0;

            // Check if there are 7 items and display the running total
            if (salesLog.Lines.Length == maximumSalesInput)
            {
                MessageBox.Show("Your running total is: $" + runningTotal);

                // Loop through each line in salesLog.Lines and calculate the sum and count
                for (int index = 0; index < salesLog.Lines.Length; index++)
                {
                    if (int.TryParse(salesLog.Lines[index], out int value))
                    {
                        sum += value;
                        count++;
                    }
                }

                // Average Calculation Formula
                double average = sum / count;

                if (count > 0)
                {
                    // Display the average in the averageAmount_RTB & reset the runningTotal to zero
                    averageAmount_RTB.Text = "Average Video Game Sales ($): " + average.ToString("0.00");
                    runningTotal = 0.0;
                    FreezeProgram();
                }
                videoGameSales_RTB.Focus();
            }
        }
        #endregion

        #region "Validation Functions"

        /*
         * This function is used to make sure that the user input meets the input specification. 
         * The required input specification:
         *      - A whole number [Integer]
         *      - Is not a letter, symbol or special character 
         *      - Greater than or equal to zero [0]
         */
        private void Validation()
        {
            // Attempt to parse the entered value as a double
            if (double.TryParse(videoGameSales_RTB.Text, out currentValue))
            {
                RunningTotal();
            }

            // Check if the entered value is a valid integer and is more than or equal to zero.
            if (int.TryParse(videoGameSales_RTB.Text, out int enteredValue) && enteredValue >= 0)
            {
                // Append the entered value to the salesLog & clear the textbox
                salesLog.AppendText(enteredValue.ToString() + "\n");
                videoGameSales_RTB.Text = "";
                AverageCalculation();
            }

            // If the input is not a whole number, a letter, or ANY symbol, then do this.
            else
            {
                ErrorSequence();
            }
        }

        //This is a function that outputs an error message, then clears the textboxes required.
        private void ErrorSequence()
        {
            MessageBox.Show("Invalid input:\nPlease enter a non-negative whole number.");
            averageAmount_RTB.Clear();
            videoGameSales_RTB.Clear();
            ReleaseProgram();
        }

        private void ClearFields()
        {
            salesLog.Clear();
            videoGameSales_RTB.Clear();
            averageAmount_RTB.Clear();
        }

        #endregion

        #region "Colour Transformer"
        private void ColorGray()
        {
            salesLog.BackColor = Color.Gray;
            videoGameSales_RTB.BackColor = Color.Gray;
        }

        private void ColorLightGray()
        {
            salesLog.BackColor = Color.LightGray;
            videoGameSales_RTB.BackColor = Color.LightGray;
        }
        #endregion

        #region "Button Functions"
        /*
         * This is the function for the enter key. The enter button is the accept key in the program. 
         * Once the enter key has been pressed, it executes this chunk of the program where it takes 
         * the input from the user in the textbox, and it appends it into a variable to be added into 
         * a running total to be averaged out once there are seven numbers in the sales log.
         * 
         * As soon as there are seven numbers in the log, it will calculate the average sales value of 
         * the set of numbers. While this is happening there is a counter activated to where it counts 
         * the number of days that it has recorded then is used to aid the calculation of the average 
         * including the running total. Once the average has been calculated, the program is designed 
         * to freeze all control surfaces except for the reset button to where the user must press the 
         * reset to do another set of calculations.
         */
        private void EnterButton_Click(object sender, EventArgs e)
        {
            Validation();
            videoGameSales_RTB.Focus();
        }

        /*
        * This function is used to control the reset button where it clears all fields, 
        * resets the day counter and enables all control surfaces (whenever applicable). 
        * After this happens, it will refocus your cursor onto the textbox on the top of 
        * the the program to be re-run. I have made two functions in which disables and 
        * enables the control surfaces called 'freezeProgram()' & 'releaseProgram()' 
        * increase modularity, encapsulation, and overall debugging/readability purposes. 
        */
        private void ResetButton_Click(object sender, EventArgs e)
        {
            ClearFields();
            ReleaseProgram();
            videoGameSales_RTB.Focus();
            dayCount = 2;
        }

        // This function closes the program using the 'Close()' function via button.
        private void ExitButton_Click(object sender, EventArgs e)
        {
            Close();
        }
        #endregion

        #region "Junk Functions"
        // This function's purpose to display a label with copyright information attached to it.
        private void CopyrightLabel_Click(object sender, EventArgs e)
        {

        }

        private void VideoGameSales_Click(object sender, EventArgs e)
        {

        }

        private void VideoGameSales_RTB_TextChanged(object sender, EventArgs e)
        {

        }

        private void DayCounterLabel_Click(object sender, EventArgs e)
        {

        }

        private void SalesLog_TextChanged(object sender, EventArgs e)
        {

        }

        private void AverageAmount_RTB_TextChanged(object sender, EventArgs e)
        {

        }

        // This function loads and opens the window of the application.
        private void Window_Load(object sender, EventArgs e)
        {

        }
        #endregion
    }
}