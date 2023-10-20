namespace Assignment2_UserInterfaceDesign
{
    partial class Window
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Window));
            course1 = new Label();
            courseOneWriteRTB = new RichTextBox();
            courseOneReadOnlyRTB = new RichTextBox();
            courseTwoReadOnlyRTB = new RichTextBox();
            courseTwoWriteRTB = new RichTextBox();
            course2 = new Label();
            courseFourReadOnlyRTB = new RichTextBox();
            courseFourWriteRTB = new RichTextBox();
            course4 = new Label();
            courseThreeReadOnlyRTB = new RichTextBox();
            courseThreeWriteRTB = new RichTextBox();
            course3 = new Label();
            semesterRTB_2 = new RichTextBox();
            semesterRTB_1 = new RichTextBox();
            semesterLabel = new Label();
            courseSevenReadOnlyRTB = new RichTextBox();
            courseSevenWriteRTB = new RichTextBox();
            course7 = new Label();
            courseSixReadOnlyRTB = new RichTextBox();
            courseSixWriteRTB = new RichTextBox();
            course6 = new Label();
            courseFiveReadOnlyRTB = new RichTextBox();
            courseFiveWriteRTB = new RichTextBox();
            course5 = new Label();
            debugRTB = new RichTextBox();
            calculateButton = new Button();
            resetButton = new Button();
            exitButton = new Button();
            CopyrightLabel = new Label();
            comboBoxCourseOne = new ComboBox();
            comboBoxCourseTwo = new ComboBox();
            comboBoxCourseFour = new ComboBox();
            comboBoxCourseThree = new ComboBox();
            comboBoxCourseSeven = new ComboBox();
            comboBoxCourseSix = new ComboBox();
            comboBoxCourseFive = new ComboBox();
            label1 = new Label();
            label2 = new Label();
            label3 = new Label();
            SuspendLayout();
            // 
            // course1
            // 
            course1.AutoSize = true;
            course1.Location = new Point(10, 36);
            course1.Name = "course1";
            course1.Size = new Size(56, 15);
            course1.TabIndex = 0;
            course1.Text = "Course 1:";
            // 
            // courseOneWriteRTB
            // 
            courseOneWriteRTB.Location = new Point(184, 33);
            courseOneWriteRTB.Multiline = false;
            courseOneWriteRTB.Name = "courseOneWriteRTB";
            courseOneWriteRTB.Size = new Size(100, 23);
            courseOneWriteRTB.TabIndex = 1;
            courseOneWriteRTB.Text = "";
            courseOneWriteRTB.TextChanged += courseOneWriteRTB_TextChanged;
            // 
            // courseOneReadOnlyRTB
            // 
            courseOneReadOnlyRTB.BackColor = Color.LightGray;
            courseOneReadOnlyRTB.Enabled = false;
            courseOneReadOnlyRTB.Location = new Point(290, 33);
            courseOneReadOnlyRTB.Multiline = false;
            courseOneReadOnlyRTB.Name = "courseOneReadOnlyRTB";
            courseOneReadOnlyRTB.ReadOnly = true;
            courseOneReadOnlyRTB.Size = new Size(100, 23);
            courseOneReadOnlyRTB.TabIndex = 2;
            courseOneReadOnlyRTB.Text = "";
            // 
            // courseTwoReadOnlyRTB
            // 
            courseTwoReadOnlyRTB.BackColor = Color.LightGray;
            courseTwoReadOnlyRTB.Enabled = false;
            courseTwoReadOnlyRTB.Location = new Point(290, 62);
            courseTwoReadOnlyRTB.Multiline = false;
            courseTwoReadOnlyRTB.Name = "courseTwoReadOnlyRTB";
            courseTwoReadOnlyRTB.ReadOnly = true;
            courseTwoReadOnlyRTB.Size = new Size(100, 23);
            courseTwoReadOnlyRTB.TabIndex = 5;
            courseTwoReadOnlyRTB.Text = "";
            // 
            // courseTwoWriteRTB
            // 
            courseTwoWriteRTB.Location = new Point(184, 62);
            courseTwoWriteRTB.Multiline = false;
            courseTwoWriteRTB.Name = "courseTwoWriteRTB";
            courseTwoWriteRTB.Size = new Size(100, 23);
            courseTwoWriteRTB.TabIndex = 4;
            courseTwoWriteRTB.Text = "";
            courseTwoWriteRTB.TextChanged += courseTwoWriteRTB_TextChanged;
            // 
            // course2
            // 
            course2.AutoSize = true;
            course2.Location = new Point(10, 65);
            course2.Name = "course2";
            course2.Size = new Size(56, 15);
            course2.TabIndex = 3;
            course2.Text = "Course 2:";
            // 
            // courseFourReadOnlyRTB
            // 
            courseFourReadOnlyRTB.BackColor = Color.LightGray;
            courseFourReadOnlyRTB.Enabled = false;
            courseFourReadOnlyRTB.Location = new Point(290, 120);
            courseFourReadOnlyRTB.Multiline = false;
            courseFourReadOnlyRTB.Name = "courseFourReadOnlyRTB";
            courseFourReadOnlyRTB.ReadOnly = true;
            courseFourReadOnlyRTB.Size = new Size(100, 23);
            courseFourReadOnlyRTB.TabIndex = 11;
            courseFourReadOnlyRTB.Text = "";
            // 
            // courseFourWriteRTB
            // 
            courseFourWriteRTB.Location = new Point(184, 120);
            courseFourWriteRTB.Multiline = false;
            courseFourWriteRTB.Name = "courseFourWriteRTB";
            courseFourWriteRTB.Size = new Size(100, 23);
            courseFourWriteRTB.TabIndex = 10;
            courseFourWriteRTB.Text = "";
            courseFourWriteRTB.TextChanged += courseFourWriteRTB_TextChanged;
            // 
            // course4
            // 
            course4.AutoSize = true;
            course4.Location = new Point(10, 123);
            course4.Name = "course4";
            course4.Size = new Size(56, 15);
            course4.TabIndex = 9;
            course4.Text = "Course 4:";
            // 
            // courseThreeReadOnlyRTB
            // 
            courseThreeReadOnlyRTB.BackColor = Color.LightGray;
            courseThreeReadOnlyRTB.Enabled = false;
            courseThreeReadOnlyRTB.Location = new Point(290, 91);
            courseThreeReadOnlyRTB.Multiline = false;
            courseThreeReadOnlyRTB.Name = "courseThreeReadOnlyRTB";
            courseThreeReadOnlyRTB.ReadOnly = true;
            courseThreeReadOnlyRTB.Size = new Size(100, 23);
            courseThreeReadOnlyRTB.TabIndex = 8;
            courseThreeReadOnlyRTB.Text = "";
            // 
            // courseThreeWriteRTB
            // 
            courseThreeWriteRTB.Location = new Point(184, 91);
            courseThreeWriteRTB.Multiline = false;
            courseThreeWriteRTB.Name = "courseThreeWriteRTB";
            courseThreeWriteRTB.Size = new Size(100, 23);
            courseThreeWriteRTB.TabIndex = 7;
            courseThreeWriteRTB.Text = "";
            courseThreeWriteRTB.TextChanged += courseThreeWriteRTB_TextChanged;
            // 
            // course3
            // 
            course3.AutoSize = true;
            course3.Location = new Point(10, 94);
            course3.Name = "course3";
            course3.Size = new Size(56, 15);
            course3.TabIndex = 6;
            course3.Text = "Course 3:";
            // 
            // semesterRTB_2
            // 
            semesterRTB_2.BackColor = Color.LightGray;
            semesterRTB_2.Enabled = false;
            semesterRTB_2.Location = new Point(240, 236);
            semesterRTB_2.Multiline = false;
            semesterRTB_2.Name = "semesterRTB_2";
            semesterRTB_2.ReadOnly = true;
            semesterRTB_2.Size = new Size(150, 23);
            semesterRTB_2.TabIndex = 23;
            semesterRTB_2.Text = "";
            // 
            // semesterRTB_1
            // 
            semesterRTB_1.BackColor = Color.LightGray;
            semesterRTB_1.Enabled = false;
            semesterRTB_1.Location = new Point(77, 236);
            semesterRTB_1.Multiline = false;
            semesterRTB_1.Name = "semesterRTB_1";
            semesterRTB_1.ReadOnly = true;
            semesterRTB_1.Size = new Size(150, 23);
            semesterRTB_1.TabIndex = 22;
            semesterRTB_1.Text = "";
            // 
            // semesterLabel
            // 
            semesterLabel.AutoSize = true;
            semesterLabel.Location = new Point(10, 239);
            semesterLabel.Name = "semesterLabel";
            semesterLabel.Size = new Size(58, 15);
            semesterLabel.TabIndex = 21;
            semesterLabel.Text = "Semester:";
            // 
            // courseSevenReadOnlyRTB
            // 
            courseSevenReadOnlyRTB.BackColor = Color.LightGray;
            courseSevenReadOnlyRTB.Enabled = false;
            courseSevenReadOnlyRTB.Location = new Point(290, 207);
            courseSevenReadOnlyRTB.Multiline = false;
            courseSevenReadOnlyRTB.Name = "courseSevenReadOnlyRTB";
            courseSevenReadOnlyRTB.ReadOnly = true;
            courseSevenReadOnlyRTB.Size = new Size(100, 23);
            courseSevenReadOnlyRTB.TabIndex = 20;
            courseSevenReadOnlyRTB.Text = "";
            // 
            // courseSevenWriteRTB
            // 
            courseSevenWriteRTB.Location = new Point(184, 207);
            courseSevenWriteRTB.Multiline = false;
            courseSevenWriteRTB.Name = "courseSevenWriteRTB";
            courseSevenWriteRTB.Size = new Size(100, 23);
            courseSevenWriteRTB.TabIndex = 19;
            courseSevenWriteRTB.Text = "";
            courseSevenWriteRTB.TextChanged += courseSevenWriteRTB_TextChanged;
            // 
            // course7
            // 
            course7.AutoSize = true;
            course7.Location = new Point(10, 210);
            course7.Name = "course7";
            course7.Size = new Size(56, 15);
            course7.TabIndex = 18;
            course7.Text = "Course 7:";
            // 
            // courseSixReadOnlyRTB
            // 
            courseSixReadOnlyRTB.BackColor = Color.LightGray;
            courseSixReadOnlyRTB.Enabled = false;
            courseSixReadOnlyRTB.Location = new Point(290, 178);
            courseSixReadOnlyRTB.Multiline = false;
            courseSixReadOnlyRTB.Name = "courseSixReadOnlyRTB";
            courseSixReadOnlyRTB.ReadOnly = true;
            courseSixReadOnlyRTB.Size = new Size(100, 23);
            courseSixReadOnlyRTB.TabIndex = 17;
            courseSixReadOnlyRTB.Text = "";
            // 
            // courseSixWriteRTB
            // 
            courseSixWriteRTB.Location = new Point(184, 178);
            courseSixWriteRTB.Multiline = false;
            courseSixWriteRTB.Name = "courseSixWriteRTB";
            courseSixWriteRTB.Size = new Size(100, 23);
            courseSixWriteRTB.TabIndex = 16;
            courseSixWriteRTB.Text = "";
            courseSixWriteRTB.TextChanged += courseSixWriteRTB_TextChanged;
            // 
            // course6
            // 
            course6.AutoSize = true;
            course6.Location = new Point(10, 181);
            course6.Name = "course6";
            course6.Size = new Size(56, 15);
            course6.TabIndex = 15;
            course6.Text = "Course 6:";
            // 
            // courseFiveReadOnlyRTB
            // 
            courseFiveReadOnlyRTB.BackColor = Color.LightGray;
            courseFiveReadOnlyRTB.Enabled = false;
            courseFiveReadOnlyRTB.Location = new Point(290, 149);
            courseFiveReadOnlyRTB.Multiline = false;
            courseFiveReadOnlyRTB.Name = "courseFiveReadOnlyRTB";
            courseFiveReadOnlyRTB.ReadOnly = true;
            courseFiveReadOnlyRTB.Size = new Size(100, 23);
            courseFiveReadOnlyRTB.TabIndex = 14;
            courseFiveReadOnlyRTB.Text = "";
            // 
            // courseFiveWriteRTB
            // 
            courseFiveWriteRTB.Location = new Point(184, 149);
            courseFiveWriteRTB.Multiline = false;
            courseFiveWriteRTB.Name = "courseFiveWriteRTB";
            courseFiveWriteRTB.Size = new Size(100, 23);
            courseFiveWriteRTB.TabIndex = 13;
            courseFiveWriteRTB.Text = "";
            courseFiveWriteRTB.TextChanged += courseFiveWriteRTB_TextChanged;
            // 
            // course5
            // 
            course5.AutoSize = true;
            course5.Location = new Point(10, 152);
            course5.Name = "course5";
            course5.Size = new Size(56, 15);
            course5.TabIndex = 12;
            course5.Text = "Course 5:";
            // 
            // debugRTB
            // 
            debugRTB.BackColor = Color.LightGray;
            debugRTB.Enabled = false;
            debugRTB.Location = new Point(77, 265);
            debugRTB.Name = "debugRTB";
            debugRTB.ReadOnly = true;
            debugRTB.Size = new Size(313, 74);
            debugRTB.TabIndex = 24;
            debugRTB.Text = "";
            // 
            // calculateButton
            // 
            calculateButton.Location = new Point(77, 345);
            calculateButton.Name = "calculateButton";
            calculateButton.Size = new Size(100, 30);
            calculateButton.TabIndex = 25;
            calculateButton.Text = "Calculate";
            calculateButton.UseVisualStyleBackColor = true;
            calculateButton.Click += calculateButton_Click;
            // 
            // resetButton
            // 
            resetButton.Location = new Point(183, 345);
            resetButton.Name = "resetButton";
            resetButton.Size = new Size(100, 30);
            resetButton.TabIndex = 26;
            resetButton.Text = "Reset";
            resetButton.UseVisualStyleBackColor = true;
            resetButton.Click += resetButton_Click;
            // 
            // exitButton
            // 
            exitButton.Location = new Point(290, 345);
            exitButton.Name = "exitButton";
            exitButton.Size = new Size(100, 30);
            exitButton.TabIndex = 27;
            exitButton.Text = "Exit";
            exitButton.UseVisualStyleBackColor = true;
            exitButton.Click += exitButton_Click;
            // 
            // CopyrightLabel
            // 
            CopyrightLabel.AutoSize = true;
            CopyrightLabel.Font = new Font("Segoe UI", 8.25F, FontStyle.Italic, GraphicsUnit.Point);
            CopyrightLabel.Location = new Point(112, 377);
            CopyrightLabel.Margin = new Padding(1, 0, 1, 0);
            CopyrightLabel.Name = "CopyrightLabel";
            CopyrightLabel.Size = new Size(233, 13);
            CopyrightLabel.TabIndex = 28;
            CopyrightLabel.Text = "Copyright © Ramiyan Gangatharan - DC 2023 ";
            // 
            // comboBoxCourseOne
            // 
            comboBoxCourseOne.FormattingEnabled = true;
            comboBoxCourseOne.Location = new Point(78, 33);
            comboBoxCourseOne.Name = "comboBoxCourseOne";
            comboBoxCourseOne.Size = new Size(100, 23);
            comboBoxCourseOne.TabIndex = 29;
            comboBoxCourseOne.SelectedIndexChanged += comboBoxCourseOne_SelectedIndexChanged;
            // 
            // comboBoxCourseTwo
            // 
            comboBoxCourseTwo.FormattingEnabled = true;
            comboBoxCourseTwo.Items.AddRange(new object[] { "COSC 2100 - 05", "MGMT 2107 - 05", "INFT 2101 - 05", "COMM 2109 - 11", "GNED - 1140 - AAA" });
            comboBoxCourseTwo.Location = new Point(78, 62);
            comboBoxCourseTwo.Name = "comboBoxCourseTwo";
            comboBoxCourseTwo.Size = new Size(100, 23);
            comboBoxCourseTwo.TabIndex = 30;
            comboBoxCourseTwo.SelectedIndexChanged += comboBoxCourseTwo_SelectedIndexChanged;
            // 
            // comboBoxCourseFour
            // 
            comboBoxCourseFour.FormattingEnabled = true;
            comboBoxCourseFour.Items.AddRange(new object[] { "COSC 2100 - 05", "MGMT 2107 - 05", "INFT 2101 - 05", "COMM 2109 - 11", "GNED - 1140 - AAA" });
            comboBoxCourseFour.Location = new Point(78, 120);
            comboBoxCourseFour.Name = "comboBoxCourseFour";
            comboBoxCourseFour.Size = new Size(100, 23);
            comboBoxCourseFour.TabIndex = 31;
            comboBoxCourseFour.SelectedIndexChanged += comboBoxCourseFour_SelectedIndexChanged;
            // 
            // comboBoxCourseThree
            // 
            comboBoxCourseThree.FormattingEnabled = true;
            comboBoxCourseThree.Items.AddRange(new object[] { "COSC 2100 - 05", "MGMT 2107 - 05", "INFT 2101 - 05", "COMM 2109 - 11", "GNED - 1140 - AAA" });
            comboBoxCourseThree.Location = new Point(78, 91);
            comboBoxCourseThree.Name = "comboBoxCourseThree";
            comboBoxCourseThree.Size = new Size(100, 23);
            comboBoxCourseThree.TabIndex = 32;
            comboBoxCourseThree.SelectedIndexChanged += comboBoxCourseThree_SelectedIndexChanged;
            // 
            // comboBoxCourseSeven
            // 
            comboBoxCourseSeven.FormattingEnabled = true;
            comboBoxCourseSeven.Items.AddRange(new object[] { "COSC 2100 - 05", "MGMT 2107 - 05", "INFT 2101 - 05", "COMM 2109 - 11", "GNED - 1140 - AAA" });
            comboBoxCourseSeven.Location = new Point(78, 207);
            comboBoxCourseSeven.Name = "comboBoxCourseSeven";
            comboBoxCourseSeven.Size = new Size(100, 23);
            comboBoxCourseSeven.TabIndex = 33;
            comboBoxCourseSeven.SelectedIndexChanged += comboBoxCourseSeven_SelectedIndexChanged;
            // 
            // comboBoxCourseSix
            // 
            comboBoxCourseSix.FormattingEnabled = true;
            comboBoxCourseSix.Items.AddRange(new object[] { "COSC 2100 - 05", "MGMT 2107 - 05", "INFT 2101 - 05", "COMM 2109 - 11", "GNED - 1140 - AAA" });
            comboBoxCourseSix.Location = new Point(78, 178);
            comboBoxCourseSix.Name = "comboBoxCourseSix";
            comboBoxCourseSix.Size = new Size(100, 23);
            comboBoxCourseSix.TabIndex = 34;
            comboBoxCourseSix.SelectedIndexChanged += comboBoxCourseSix_SelectedIndexChanged;
            // 
            // comboBoxCourseFive
            // 
            comboBoxCourseFive.FormattingEnabled = true;
            comboBoxCourseFive.Items.AddRange(new object[] { "COSC 2100 - 05", "MGMT 2107 - 05", "INFT 2101 - 05", "COMM 2109 - 11", "GNED - 1140 - AAA" });
            comboBoxCourseFive.Location = new Point(78, 149);
            comboBoxCourseFive.Name = "comboBoxCourseFive";
            comboBoxCourseFive.Size = new Size(100, 23);
            comboBoxCourseFive.TabIndex = 35;
            comboBoxCourseFive.SelectedIndexChanged += comboBoxCourseFive_SelectedIndexChanged;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(80, 12);
            label1.Name = "label1";
            label1.Size = new Size(95, 15);
            label1.TabIndex = 36;
            label1.Text = "Course Selection";
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(191, 12);
            label2.Name = "label2";
            label2.Size = new Size(81, 15);
            label2.TabIndex = 37;
            label2.Text = "Percent Grade";
            // 
            // label3
            // 
            label3.AutoSize = true;
            label3.Location = new Point(306, 12);
            label3.Name = "label3";
            label3.Size = new Size(71, 15);
            label3.TabIndex = 38;
            label3.Text = "Letter Grade";
            // 
            // Window
            // 
            AcceptButton = calculateButton;
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            BackColor = Color.Silver;
            CancelButton = resetButton;
            ClientSize = new Size(400, 395);
            Controls.Add(label3);
            Controls.Add(label2);
            Controls.Add(label1);
            Controls.Add(comboBoxCourseFive);
            Controls.Add(comboBoxCourseSix);
            Controls.Add(comboBoxCourseSeven);
            Controls.Add(comboBoxCourseThree);
            Controls.Add(comboBoxCourseFour);
            Controls.Add(comboBoxCourseTwo);
            Controls.Add(comboBoxCourseOne);
            Controls.Add(CopyrightLabel);
            Controls.Add(exitButton);
            Controls.Add(resetButton);
            Controls.Add(calculateButton);
            Controls.Add(debugRTB);
            Controls.Add(semesterRTB_2);
            Controls.Add(semesterRTB_1);
            Controls.Add(semesterLabel);
            Controls.Add(courseSevenReadOnlyRTB);
            Controls.Add(courseSevenWriteRTB);
            Controls.Add(course7);
            Controls.Add(courseSixReadOnlyRTB);
            Controls.Add(courseSixWriteRTB);
            Controls.Add(course6);
            Controls.Add(courseFiveReadOnlyRTB);
            Controls.Add(courseFiveWriteRTB);
            Controls.Add(course5);
            Controls.Add(courseFourReadOnlyRTB);
            Controls.Add(courseFourWriteRTB);
            Controls.Add(course4);
            Controls.Add(courseThreeReadOnlyRTB);
            Controls.Add(courseThreeWriteRTB);
            Controls.Add(course3);
            Controls.Add(courseTwoReadOnlyRTB);
            Controls.Add(courseTwoWriteRTB);
            Controls.Add(course2);
            Controls.Add(courseOneReadOnlyRTB);
            Controls.Add(courseOneWriteRTB);
            Controls.Add(course1);
            Icon = (Icon)resources.GetObject("$this.Icon");
            MaximizeBox = false;
            MinimizeBox = false;
            Name = "Window";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Grade Calculator";
            Load += Window_Load;
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label course1;
        private RichTextBox courseOneWriteRTB;
        private RichTextBox courseOneReadOnlyRTB;
        private RichTextBox courseTwoReadOnlyRTB;
        private RichTextBox courseTwoWriteRTB;
        private Label course2;
        private RichTextBox courseFourReadOnlyRTB;
        private RichTextBox courseFourWriteRTB;
        private Label course4;
        private RichTextBox courseThreeReadOnlyRTB;
        private RichTextBox courseThreeWriteRTB;
        private Label course3;
        private RichTextBox semesterRTB_2;
        private RichTextBox semesterRTB_1;
        private Label semesterLabel;
        private RichTextBox courseSevenReadOnlyRTB;
        private RichTextBox courseSevenWriteRTB;
        private Label course7;
        private RichTextBox courseSixReadOnlyRTB;
        private RichTextBox courseSixWriteRTB;
        private Label course6;
        private RichTextBox courseFiveReadOnlyRTB;
        private RichTextBox courseFiveWriteRTB;
        private Label course5;
        private RichTextBox debugRTB;
        private Button calculateButton;
        private Button resetButton;
        private Button exitButton;
        private Label CopyrightLabel;
        private ComboBox comboBoxCourseOne;
        private ComboBox comboBoxCourseTwo;
        private ComboBox comboBoxCourseFour;
        private ComboBox comboBoxCourseThree;
        private ComboBox comboBoxCourseSeven;
        private ComboBox comboBoxCourseSix;
        private ComboBox comboBoxCourseFive;
        private Label label1;
        private Label label2;
        private Label label3;
    }
}