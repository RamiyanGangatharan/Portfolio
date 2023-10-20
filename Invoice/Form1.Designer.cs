namespace Invoice
{
    partial class Form1
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
            Subtotal_Label = new Label();
            DiscountPercent_Label = new Label();
            DiscountAmount_Label = new Label();
            FullTotal_Label = new Label();
            Subtotal_Textbox = new TextBox();
            DiscountPercent_Textbox = new TextBox();
            DiscountAmount_Textbox = new TextBox();
            Total_Textbox = new TextBox();
            Calculate_Button = new Button();
            button2 = new Button();
            toolTip1 = new ToolTip(components);
            SuspendLayout();
            // 
            // Subtotal_Label
            // 
            Subtotal_Label.AutoSize = true;
            Subtotal_Label.Location = new Point(12, 9);
            Subtotal_Label.Name = "Subtotal_Label";
            Subtotal_Label.Size = new Size(51, 15);
            Subtotal_Label.TabIndex = 0;
            Subtotal_Label.Text = "Subtotal";
            Subtotal_Label.Click += label1_Click;
            // 
            // DiscountPercent_Label
            // 
            DiscountPercent_Label.AutoSize = true;
            DiscountPercent_Label.Location = new Point(12, 38);
            DiscountPercent_Label.Name = "DiscountPercent_Label";
            DiscountPercent_Label.Size = new Size(97, 15);
            DiscountPercent_Label.TabIndex = 1;
            DiscountPercent_Label.Text = "Discount Percent";
            // 
            // DiscountAmount_Label
            // 
            DiscountAmount_Label.AutoSize = true;
            DiscountAmount_Label.Location = new Point(12, 67);
            DiscountAmount_Label.Name = "DiscountAmount_Label";
            DiscountAmount_Label.Size = new Size(101, 15);
            DiscountAmount_Label.TabIndex = 2;
            DiscountAmount_Label.Text = "Discount Amount";
            // 
            // FullTotal_Label
            // 
            FullTotal_Label.AutoSize = true;
            FullTotal_Label.Location = new Point(12, 96);
            FullTotal_Label.Name = "FullTotal_Label";
            FullTotal_Label.Size = new Size(32, 15);
            FullTotal_Label.TabIndex = 3;
            FullTotal_Label.Text = "Total";
            FullTotal_Label.Click += FullTotal_Label_Click;
            // 
            // Subtotal_Textbox
            // 
            Subtotal_Textbox.Location = new Point(119, 6);
            Subtotal_Textbox.Name = "Subtotal_Textbox";
            Subtotal_Textbox.PlaceholderText = "Enter Subtotal Amount   ($)";
            Subtotal_Textbox.Size = new Size(155, 23);
            Subtotal_Textbox.TabIndex = 4;
            toolTip1.SetToolTip(Subtotal_Textbox, "Input your subtotal amount");
            // 
            // DiscountPercent_Textbox
            // 
            DiscountPercent_Textbox.Location = new Point(119, 35);
            DiscountPercent_Textbox.Name = "DiscountPercent_Textbox";
            DiscountPercent_Textbox.PlaceholderText = "Discount in Percent         (%)";
            DiscountPercent_Textbox.ReadOnly = true;
            DiscountPercent_Textbox.Size = new Size(155, 23);
            DiscountPercent_Textbox.TabIndex = 5;
            DiscountPercent_Textbox.TabStop = false;
            toolTip1.SetToolTip(DiscountPercent_Textbox, "Discount in percentage");
            // 
            // DiscountAmount_Textbox
            // 
            DiscountAmount_Textbox.Location = new Point(119, 64);
            DiscountAmount_Textbox.Name = "DiscountAmount_Textbox";
            DiscountAmount_Textbox.PlaceholderText = "Discount Amount            ($)";
            DiscountAmount_Textbox.ReadOnly = true;
            DiscountAmount_Textbox.Size = new Size(155, 23);
            DiscountAmount_Textbox.TabIndex = 6;
            DiscountAmount_Textbox.TabStop = false;
            toolTip1.SetToolTip(DiscountAmount_Textbox, "The discount amount in dollars");
            DiscountAmount_Textbox.TextChanged += textBox3_TextChanged;
            // 
            // Total_Textbox
            // 
            Total_Textbox.Location = new Point(119, 93);
            Total_Textbox.Name = "Total_Textbox";
            Total_Textbox.PlaceholderText = "Total                                   ($)";
            Total_Textbox.ReadOnly = true;
            Total_Textbox.Size = new Size(155, 23);
            Total_Textbox.TabIndex = 7;
            Total_Textbox.TabStop = false;
            toolTip1.SetToolTip(Total_Textbox, "Total in dollars");
            Total_Textbox.TextChanged += Total_Textbox_TextChanged;
            // 
            // Calculate_Button
            // 
            Calculate_Button.Location = new Point(119, 122);
            Calculate_Button.Name = "Calculate_Button";
            Calculate_Button.Size = new Size(75, 23);
            Calculate_Button.TabIndex = 8;
            Calculate_Button.Text = "&Calculate";
            toolTip1.SetToolTip(Calculate_Button, "Button to calculate your total");
            Calculate_Button.UseVisualStyleBackColor = true;
            Calculate_Button.Click += button1_Click;
            // 
            // button2
            // 
            button2.Location = new Point(200, 122);
            button2.Name = "button2";
            button2.Size = new Size(75, 23);
            button2.TabIndex = 9;
            button2.Text = "E&xit";
            toolTip1.SetToolTip(button2, "Button to exit the application");
            button2.UseVisualStyleBackColor = true;
            button2.Click += button2_Click;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            BackColor = SystemColors.GradientActiveCaption;
            ClientSize = new Size(281, 148);
            Controls.Add(button2);
            Controls.Add(Calculate_Button);
            Controls.Add(Total_Textbox);
            Controls.Add(DiscountAmount_Textbox);
            Controls.Add(DiscountPercent_Textbox);
            Controls.Add(Subtotal_Textbox);
            Controls.Add(FullTotal_Label);
            Controls.Add(DiscountAmount_Label);
            Controls.Add(DiscountPercent_Label);
            Controls.Add(Subtotal_Label);
            Name = "Form1";
            Text = "Invoice";
            Load += Form1_Load;
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label Subtotal_Label;
        private Label DiscountPercent_Label;
        private Label DiscountAmount_Label;
        private Label FullTotal_Label;
        private TextBox Subtotal_Textbox;
        private TextBox DiscountPercent_Textbox;
        private TextBox DiscountAmount_Textbox;
        private TextBox Total_Textbox;
        private Button Calculate_Button;
        private Button button2;
        private ToolTip toolTip1;
    }
}