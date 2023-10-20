using SemesterGrade;
namespace Assignment2_UserInterfaceDesign
{
    public partial class Window : Form
    {
        /*
         * Name: Ramiyan Gangatharan
         * Date: October 19 2023
         * Desc: This is a program that is used for calculating your grade in both percentage and letter grade.
         */

        #region "Initialization"
        bool errorDisplayed = false;
        int numberGrade;

        /*
         * This is a default constructor used for the 'Window' class where it creates an instance of a class.
         * Inside this constructor, there is a method call for 'InitializeComponent()' where it sets up the GUI.
         * After all of that, here is where I initialize and populate an array for rich text boxes as well as a
         * for loop for the array to traverse, in which centers the text within each of those rich text boxes.
         */
        public Window()
        {
            InitializeComponent();
            RichTextBox[] clearArray =
                {
                    courseOneReadOnlyRTB,  courseTwoReadOnlyRTB, courseThreeReadOnlyRTB, courseFourReadOnlyRTB,
                    courseFiveReadOnlyRTB, courseSixReadOnlyRTB, courseSevenReadOnlyRTB, semesterRTB_2,
                    courseOneWriteRTB,     courseTwoWriteRTB,    courseThreeWriteRTB,    courseFourWriteRTB,
                    courseFiveWriteRTB,    courseSixWriteRTB,    courseSevenWriteRTB,    semesterRTB_1
                };

            for (int i = 0; i < clearArray.Length; i++)
            {
                clearArray[i].SelectionAlignment = HorizontalAlignment.Center;
            }
        }

        /*
         * This is a method in which is an event handler created by Visual Studio 2022 where it loads the 
         * window itself using the parameters it has. Inside this method, it is recommended to put code
         * that will have to execute first before all other code. In this case, I have initialized two arrays
         * within this method called 'courses' and 'courseNames'.
         */
        private void Window_Load(object sender, EventArgs e)
        {
            ComboBox[] courses =
               {
                    comboBoxCourseOne,
                    comboBoxCourseTwo,
                    comboBoxCourseThree,
                    comboBoxCourseFour,
                    comboBoxCourseFive,
                    comboBoxCourseSix,
                    comboBoxCourseSeven
                };

            for (int i = 0; i < courses.Length; i++)
            {
                PopulateComboBox(courseNames, courses[i]);
            }
        }
        string[] courseNames =
            {    "COSC 2100", "MGMT 2107", "INFT 2101",
                 "COMM 2109", "GNED 1140", "INFT 1200",
                 "COSC 1205", "INFT 1206", "MGMT 1224"
            };

        ComboBox[] courses = new ComboBox[7];
        #endregion

        #region "Validation"
        /*
         * This method is used for user input validation where it takes in the input, and verifies the information
         * within each rich text box. As long as the grade is a whole number within 0 and 100, it lets it through.
         */
        public void gradeValidation(string inputText, RichTextBox readOnlyRTB)
        {
            // Check if the input is not empty
            if (!string.IsNullOrEmpty(inputText))
            {
                // Try parsing the input text as an integer
                if (int.TryParse(inputText, out numberGrade))
                {
                    // Check if grade is within valid range
                    if (numberGrade >= 0 && numberGrade <= 100)
                    {
                        // Clear the content of the read-only textbox
                        readOnlyRTB.Clear();
                        Course course = new Course("name", numberGrade);
                        readOnlyRTB.AppendText(course.GetLetterGrade());
                        errorDisplayed = false;
                    }
                    else
                    {
                        // Handle the case where the input is not within the valid range
                        if (!errorDisplayed)
                        {
                            // Clear the content
                            readOnlyRTB.Clear();
                            debugRTB.AppendText("Invalid input\t");
                            // Set the error flag to true
                            errorDisplayed = true;
                        }
                    }
                }
                else
                {
                    // Handle the case where the input is not a valid integer.
                    if (!errorDisplayed)
                    {
                        // Clear the content
                        readOnlyRTB.Clear();
                        debugRTB.AppendText("Invalid input\t");
                        // Set the error flag to true
                        errorDisplayed = true;
                    }
                }
            }
            else
            {
                // Handle the case where the input is empty.
                readOnlyRTB.Clear();
                // Reset the error flag.
                errorDisplayed = false; 

            }
        }
        #endregion

        #region "Writers"

        //These methods record the input created by the user and validate it using the validation function.
        private void courseOneWriteRTB_TextChanged(object sender, EventArgs e)
        {
            string inputText = courseOneWriteRTB.Text;
            gradeValidation(inputText, courseOneReadOnlyRTB);
        }

        private void courseTwoWriteRTB_TextChanged(object sender, EventArgs e)
        {
            string inputText = courseTwoWriteRTB.Text;
            gradeValidation(inputText, courseTwoReadOnlyRTB);
        }

        private void courseThreeWriteRTB_TextChanged(object sender, EventArgs e)
        {
            string inputText = courseThreeWriteRTB.Text;
            gradeValidation(inputText, courseThreeReadOnlyRTB);
        }

        private void courseFourWriteRTB_TextChanged(object sender, EventArgs e)
        {
            string inputText = courseFourWriteRTB.Text;
            gradeValidation(inputText, courseFourReadOnlyRTB);
        }

        private void courseFiveWriteRTB_TextChanged(object sender, EventArgs e)
        {
            string inputText = courseFiveWriteRTB.Text;
            gradeValidation(inputText, courseFiveReadOnlyRTB);
        }

        private void courseSixWriteRTB_TextChanged(object sender, EventArgs e)
        {
            string inputText = courseSixWriteRTB.Text;
            gradeValidation(inputText, courseSixReadOnlyRTB);
        }

        private void courseSevenWriteRTB_TextChanged(object sender, EventArgs e)
        {
            string inputText = courseSevenWriteRTB.Text;
            gradeValidation(inputText, courseSevenReadOnlyRTB);
        }
        #endregion

        #region "Buttons"
        /*
         * This method is used to house the calculate button where it calculates the average grade with the 
         * validated input provided by the user and grade validation method. This first creates an array
         * of rich text boxes, then using a loop to write in each of the textboxes. After that, it makes
         * sure that the amount of inputs are more than 2 so it can effectively calculate an average grade.
         */
        private void calculateButton_Click(object sender, EventArgs e)
        {
            // Initialize the total sum of grades and number of grades
            int totalGrades = 0;
            int numberOfGrades = 0;

            // Create an array of the textboxes
            RichTextBox[] writeTextBoxes = new RichTextBox[]
            {
                courseOneWriteRTB, courseTwoWriteRTB, courseThreeWriteRTB, courseFourWriteRTB,
                courseFiveWriteRTB, courseSixWriteRTB, courseSevenWriteRTB
            };

            // Iterate through the textboxes
            for (int i = 0; i < writeTextBoxes.Length; i++)
            {
                string inputText = writeTextBoxes[i].Text;
                gradeValidation(inputText, writeTextBoxes[i]);

                if (int.TryParse(inputText, out int grade))
                {
                    // Add the grade to the total sum
                    totalGrades += grade;
                    // Increment the count of grades
                    numberOfGrades++;
                }
            }

            if (numberOfGrades > 0)
            {
                if (numberOfGrades >= 2)
                {
                    calculateButton.Enabled = true;
                    // Calculate the average
                    double average = totalGrades / numberOfGrades;

                    // Display the average in semesterRTB_1
                    semesterRTB_1.AppendText(average.ToString());
                    string inputText = semesterRTB_1.Text;
                    gradeValidation(inputText, semesterRTB_2);
                }
                else
                {
                    debugRTB.AppendText("Please enter more values.\t");
                }
            }
            else
            {
                // Handle the case where there are no valid grades entered
                semesterRTB_1.Text = "No valid grades entered.\t";
            }
        }

        //This method clears all textboxes using a for loop.
        private void clearAll()
        {
            RichTextBox[] clearArray =
                {
                    courseOneReadOnlyRTB,  courseTwoReadOnlyRTB,  courseThreeReadOnlyRTB, courseFourReadOnlyRTB,
                    courseFiveReadOnlyRTB, courseSixReadOnlyRTB,  courseSevenReadOnlyRTB, semesterRTB_2,
                    courseOneWriteRTB,     courseTwoWriteRTB,     courseThreeWriteRTB,    courseFourWriteRTB,
                    courseFiveWriteRTB,    courseSixWriteRTB,     courseSevenWriteRTB,    semesterRTB_1
                };

            for (int index = 0; index < clearArray.Length; index++)
            {
                clearArray[index].Text = string.Empty;
            }
        }

        // This method resets all inputs and clears all textboxes, then focuses on the first textbox.
        private void resetButton_Click(object sender, EventArgs e)
        {
            clearAll();
            courseOneWriteRTB.Focus();

            ComboBox[] comboBoxArray =
                {
                    comboBoxCourseOne,  comboBoxCourseTwo, comboBoxCourseThree, comboBoxCourseFour,
                    comboBoxCourseFive, comboBoxCourseSix, comboBoxCourseSeven
                };

            for (int i = 0; i < comboBoxArray.Length; i++)
            {
                comboBoxArray[i].SelectedIndex = -1;
            }

            // Re-populate the ComboBoxes
            for (int i = 0; i < courses.Length; i++)
            {
                PopulateComboBox(courseNames, courses[i]);
            }
        }

        // This method exits the application
        private void exitButton_Click(object sender, EventArgs e) { Close(); }
        #endregion

        #region "Combo"
        /*
         * This method is used to add courses to the comboBox whenever the page is loaded.
         * This is done by clearing all items in the comboBox, then adding courses to the
         * container using a for loop in which adds courses one by one.
         */
        private void PopulateComboBox(string[] courseNames, ComboBox combo)
        {
            combo.Items.Clear();
            for (int i = 0; i < courseNames.Length; i++)
            {
                combo.Items.Add(courseNames[i]);
            }
        }

        /*
         * This method is used to remove items from a comboBox once it has been selected by the user. 
         * Using a loop, it checks if the item has been selected by the user or not.
         */
        private void ComboBox_SelectedIndexChanged(object sender, EventArgs e)
        {
            ComboBox currentComboBox = sender as ComboBox;
            if (currentComboBox.SelectedItem != null)
            {
                string selectedItem = currentComboBox.SelectedItem.ToString();

                // Loop through all other ComboBoxes
                for (int i = 0; i < this.Controls.Count; i++)
                {
                    Control control = this.Controls[i];

                    if (control is ComboBox otherComboBox && otherComboBox != currentComboBox)
                    {
                        // Check if the item is present in the other ComboBox and remove it
                        if (otherComboBox.Items.Contains(selectedItem))
                        {
                            otherComboBox.Items.Remove(selectedItem);
                        }
                    }
                }

                // Add the selected item back to the current ComboBox
                currentComboBox.Items.Add(selectedItem);
            }
        }
        // This series of event handlers call the method above for each comboBox
        private void comboBoxCourseOne_SelectedIndexChanged(object sender, EventArgs e)
        {
            ComboBox_SelectedIndexChanged(sender, e);
        }

        private void comboBoxCourseTwo_SelectedIndexChanged(object sender, EventArgs e)
        {
            ComboBox_SelectedIndexChanged(sender, e);
        }

        private void comboBoxCourseThree_SelectedIndexChanged(object sender, EventArgs e)
        {
            ComboBox_SelectedIndexChanged(sender, e);
        }

        private void comboBoxCourseFour_SelectedIndexChanged(object sender, EventArgs e)
        {
            ComboBox_SelectedIndexChanged(sender, e);
        }

        private void comboBoxCourseFive_SelectedIndexChanged(object sender, EventArgs e)
        {
            ComboBox_SelectedIndexChanged(sender, e);
        }

        private void comboBoxCourseSix_SelectedIndexChanged(object sender, EventArgs e)
        {
            ComboBox_SelectedIndexChanged(sender, e);
        }

        private void comboBoxCourseSeven_SelectedIndexChanged(object sender, EventArgs e)
        {
            ComboBox_SelectedIndexChanged(sender, e);
        }
        #endregion
    }
}