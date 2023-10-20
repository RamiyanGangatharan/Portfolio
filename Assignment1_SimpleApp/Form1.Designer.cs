namespace Assignment1_SimpleApp
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
            components = new System.ComponentModel.Container();
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Window));
            CopyrightLabel = new Label();
            videoGameSales = new Label();
            dayCounterLabel = new Label();
            salesLog = new RichTextBox();
            videoGameSales_RTB = new RichTextBox();
            EnterButton = new Button();
            ResetButton = new Button();
            ExitButton = new Button();
            averageAmount_RTB = new RichTextBox();
            toolTip1 = new ToolTip(components);
            SuspendLayout();
            // 
            // CopyrightLabel
            // 
            CopyrightLabel.AutoSize = true;
            CopyrightLabel.Font = new Font("Segoe UI", 8.25F, FontStyle.Italic, GraphicsUnit.Point);
            CopyrightLabel.Location = new Point(125, 535);
            CopyrightLabel.Margin = new Padding(1, 0, 1, 0);
            CopyrightLabel.Name = "CopyrightLabel";
            CopyrightLabel.Size = new Size(233, 13);
            CopyrightLabel.TabIndex = 0;
            CopyrightLabel.Text = "Copyright © Ramiyan Gangatharan - DC 2023 ";
            CopyrightLabel.Click += CopyrightLabel_Click;
            // 
            // videoGameSales
            // 
            videoGameSales.AutoSize = true;
            videoGameSales.Location = new Point(23, 27);
            videoGameSales.Margin = new Padding(1, 0, 1, 0);
            videoGameSales.Name = "videoGameSales";
            videoGameSales.Size = new Size(158, 21);
            videoGameSales.TabIndex = 1;
            videoGameSales.Text = "Video Game Sales ($)";
            videoGameSales.Click += VideoGameSales_Click;
            // 
            // dayCounterLabel
            // 
            dayCounterLabel.AutoSize = true;
            dayCounterLabel.Location = new Point(405, 27);
            dayCounterLabel.Margin = new Padding(1, 0, 1, 0);
            dayCounterLabel.Name = "dayCounterLabel";
            dayCounterLabel.Size = new Size(53, 21);
            dayCounterLabel.TabIndex = 3;
            dayCounterLabel.Text = "Day: 1";
            dayCounterLabel.Click += DayCounterLabel_Click;
            // 
            // salesLog
            // 
            salesLog.BackColor = Color.LightGray;
            salesLog.Cursor = Cursors.No;
            salesLog.Font = new Font("Segoe UI", 29F, FontStyle.Regular, GraphicsUnit.Point);
            salesLog.Location = new Point(23, 68);
            salesLog.Margin = new Padding(1, 2, 1, 2);
            salesLog.Name = "salesLog";
            salesLog.ReadOnly = true;
            salesLog.ScrollBars = RichTextBoxScrollBars.None;
            salesLog.Size = new Size(435, 371);
            salesLog.TabIndex = 4;
            salesLog.TabStop = false;
            salesLog.Text = "";
            toolTip1.SetToolTip(salesLog, "This is where you will see your numbers");
            salesLog.TextChanged += SalesLog_TextChanged;
            // 
            // videoGameSales_RTB
            // 
            videoGameSales_RTB.Cursor = Cursors.IBeam;
            videoGameSales_RTB.Location = new Point(183, 27);
            videoGameSales_RTB.Margin = new Padding(1, 2, 1, 2);
            videoGameSales_RTB.Name = "videoGameSales_RTB";
            videoGameSales_RTB.ScrollBars = RichTextBoxScrollBars.None;
            videoGameSales_RTB.Size = new Size(175, 27);
            videoGameSales_RTB.TabIndex = 2;
            videoGameSales_RTB.Text = "";
            toolTip1.SetToolTip(videoGameSales_RTB, "Enter your video game sales for the day");
            videoGameSales_RTB.TextChanged += VideoGameSales_RTB_TextChanged;
            // 
            // EnterButton
            // 
            EnterButton.Location = new Point(23, 495);
            EnterButton.Margin = new Padding(1, 2, 1, 2);
            EnterButton.Name = "EnterButton";
            EnterButton.Size = new Size(127, 31);
            EnterButton.TabIndex = 6;
            EnterButton.Text = "&Enter";
            toolTip1.SetToolTip(EnterButton, "Press to load your input into memory");
            EnterButton.UseVisualStyleBackColor = true;
            EnterButton.Click += EnterButton_Click;
            // 
            // ResetButton
            // 
            ResetButton.Location = new Point(178, 495);
            ResetButton.Margin = new Padding(1, 2, 1, 2);
            ResetButton.Name = "ResetButton";
            ResetButton.Size = new Size(127, 31);
            ResetButton.TabIndex = 7;
            ResetButton.Text = "&Reset";
            toolTip1.SetToolTip(ResetButton, "Press this to reset all operations");
            ResetButton.UseVisualStyleBackColor = true;
            ResetButton.Click += ResetButton_Click;
            // 
            // ExitButton
            // 
            ExitButton.Location = new Point(331, 495);
            ExitButton.Margin = new Padding(1, 2, 1, 2);
            ExitButton.Name = "ExitButton";
            ExitButton.Size = new Size(127, 31);
            ExitButton.TabIndex = 8;
            ExitButton.Text = "E&xit";
            toolTip1.SetToolTip(ExitButton, "Press to exit application");
            ExitButton.UseVisualStyleBackColor = true;
            ExitButton.Click += ExitButton_Click;
            // 
            // averageAmount_RTB
            // 
            averageAmount_RTB.BackColor = Color.LightGray;
            averageAmount_RTB.Cursor = Cursors.No;
            averageAmount_RTB.Location = new Point(23, 454);
            averageAmount_RTB.Margin = new Padding(1, 2, 1, 2);
            averageAmount_RTB.Name = "averageAmount_RTB";
            averageAmount_RTB.ReadOnly = true;
            averageAmount_RTB.ScrollBars = RichTextBoxScrollBars.None;
            averageAmount_RTB.Size = new Size(435, 26);
            averageAmount_RTB.TabIndex = 5;
            averageAmount_RTB.TabStop = false;
            averageAmount_RTB.Text = "";
            toolTip1.SetToolTip(averageAmount_RTB, "This is where you will see your output value");
            averageAmount_RTB.TextChanged += AverageAmount_RTB_TextChanged;
            // 
            // Window
            // 
            AcceptButton = EnterButton;
            AutoScaleDimensions = new SizeF(9F, 21F);
            AutoScaleMode = AutoScaleMode.Font;
            BackColor = Color.Silver;
            CancelButton = ResetButton;
            ClientSize = new Size(480, 557);
            Controls.Add(averageAmount_RTB);
            Controls.Add(ExitButton);
            Controls.Add(ResetButton);
            Controls.Add(EnterButton);
            Controls.Add(videoGameSales_RTB);
            Controls.Add(salesLog);
            Controls.Add(dayCounterLabel);
            Controls.Add(videoGameSales);
            Controls.Add(CopyrightLabel);
            Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point);
            FormBorderStyle = FormBorderStyle.Fixed3D;
            Icon = (Icon)resources.GetObject("$this.Icon");
            Margin = new Padding(1, 2, 1, 2);
            MaximizeBox = false;
            MaximumSize = new Size(640, 684);
            MinimizeBox = false;
            MinimumSize = new Size(417, 591);
            Name = "Window";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Average Weekly Video Game Sales";
            Load += Window_Load;
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label CopyrightLabel;
        private Label videoGameSales;
        private Label dayCounterLabel;
        private RichTextBox salesLog;
        private RichTextBox videoGameSales_RTB;
        private Button EnterButton;
        private Button ResetButton;
        private Button ExitButton;
        private RichTextBox averageAmount_RTB;
        private ToolTip toolTip1;
    }
}