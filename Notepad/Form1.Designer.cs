namespace Notepad
{
    partial class Notepad
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Notepad));
            Title_Textbox = new TextBox();
            DataTextbox = new TextBox();
            TitleLabel = new Label();
            Note_Label = new Label();
            previousNotes = new DataGridView();
            LoadButton = new Button();
            DeleteButton = new Button();
            SaveButton = new Button();
            NewButton = new Button();
            printPreviewDialog1 = new PrintPreviewDialog();
            toolTip1 = new ToolTip(components);
            ((System.ComponentModel.ISupportInitialize)previousNotes).BeginInit();
            SuspendLayout();
            // 
            // Title_Textbox
            // 
            Title_Textbox.Location = new Point(300, 27);
            Title_Textbox.Name = "Title_Textbox";
            Title_Textbox.Size = new Size(272, 21);
            Title_Textbox.TabIndex = 0;
            toolTip1.SetToolTip(Title_Textbox, "Enter the title of your note");
            Title_Textbox.TextChanged += Title_Textbox_TextChanged;
            // 
            // DataTextbox
            // 
            DataTextbox.BackColor = Color.White;
            DataTextbox.ForeColor = SystemColors.WindowText;
            DataTextbox.Location = new Point(300, 73);
            DataTextbox.Multiline = true;
            DataTextbox.Name = "DataTextbox";
            DataTextbox.ScrollBars = ScrollBars.Vertical;
            DataTextbox.Size = new Size(272, 276);
            DataTextbox.TabIndex = 1;
            toolTip1.SetToolTip(DataTextbox, "Enter the contents of your note here");
            DataTextbox.TextChanged += DataTextbox_TextChanged;
            // 
            // TitleLabel
            // 
            TitleLabel.AutoSize = true;
            TitleLabel.Font = new Font("Segoe UI", 9F, FontStyle.Regular, GraphicsUnit.Point);
            TitleLabel.Location = new Point(300, 9);
            TitleLabel.Name = "TitleLabel";
            TitleLabel.Size = new Size(32, 15);
            TitleLabel.TabIndex = 2;
            TitleLabel.Text = "Title:";
            TitleLabel.Click += TitleLabel_Click;
            // 
            // Note_Label
            // 
            Note_Label.AutoSize = true;
            Note_Label.Font = new Font("Segoe UI", 9F, FontStyle.Regular, GraphicsUnit.Point);
            Note_Label.Location = new Point(300, 53);
            Note_Label.Name = "Note_Label";
            Note_Label.Size = new Size(36, 15);
            Note_Label.TabIndex = 3;
            Note_Label.Text = "Note:";
            Note_Label.Click += Note_Label_Click;
            // 
            // previousNotes
            // 
            previousNotes.AutoSizeColumnsMode = DataGridViewAutoSizeColumnsMode.Fill;
            previousNotes.BackgroundColor = SystemColors.ScrollBar;
            previousNotes.ColumnHeadersHeightSizeMode = DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            previousNotes.Location = new Point(12, 12);
            previousNotes.Name = "previousNotes";
            previousNotes.RightToLeft = RightToLeft.Yes;
            previousNotes.RowTemplate.Height = 25;
            previousNotes.Size = new Size(254, 286);
            previousNotes.TabIndex = 4;
            toolTip1.SetToolTip(previousNotes, "Select one of your notes here");
            previousNotes.CellContentClick += dataGridView1_CellContentClick;
            previousNotes.CellMouseDoubleClick += previousNotes_DoublClick;
            // 
            // LoadButton
            // 
            LoadButton.BackColor = SystemColors.GradientInactiveCaption;
            LoadButton.Font = new Font("Segoe UI", 9F, FontStyle.Regular, GraphicsUnit.Point);
            LoadButton.Location = new Point(12, 304);
            LoadButton.Name = "LoadButton";
            LoadButton.Size = new Size(120, 23);
            LoadButton.TabIndex = 5;
            LoadButton.Text = "Load";
            toolTip1.SetToolTip(LoadButton, "Press to load an existing note");
            LoadButton.UseVisualStyleBackColor = false;
            LoadButton.Click += LoadButton_Click;
            // 
            // DeleteButton
            // 
            DeleteButton.BackColor = SystemColors.GradientInactiveCaption;
            DeleteButton.Font = new Font("Segoe UI", 9F, FontStyle.Regular, GraphicsUnit.Point);
            DeleteButton.Location = new Point(146, 304);
            DeleteButton.Name = "DeleteButton";
            DeleteButton.Size = new Size(120, 23);
            DeleteButton.TabIndex = 6;
            DeleteButton.Text = "Delete";
            toolTip1.SetToolTip(DeleteButton, "Press to delete an existing note");
            DeleteButton.UseVisualStyleBackColor = false;
            DeleteButton.Click += DeleteButton_Click;
            // 
            // SaveButton
            // 
            SaveButton.BackColor = SystemColors.GradientInactiveCaption;
            SaveButton.Font = new Font("Segoe UI", 9F, FontStyle.Regular, GraphicsUnit.Point);
            SaveButton.Location = new Point(146, 329);
            SaveButton.Name = "SaveButton";
            SaveButton.Size = new Size(120, 23);
            SaveButton.TabIndex = 7;
            SaveButton.Text = "Save";
            toolTip1.SetToolTip(SaveButton, "Press to save note");
            SaveButton.UseVisualStyleBackColor = false;
            SaveButton.Click += SaveButton_Click;
            // 
            // NewButton
            // 
            NewButton.BackColor = SystemColors.GradientInactiveCaption;
            NewButton.Font = new Font("Segoe UI", 9F, FontStyle.Regular, GraphicsUnit.Point);
            NewButton.Location = new Point(12, 329);
            NewButton.Name = "NewButton";
            NewButton.Size = new Size(120, 23);
            NewButton.TabIndex = 8;
            NewButton.Text = "New";
            toolTip1.SetToolTip(NewButton, "Press to create a new note");
            NewButton.UseVisualStyleBackColor = false;
            NewButton.Click += NewButton_Click;
            // 
            // printPreviewDialog1
            // 
            printPreviewDialog1.AutoScrollMargin = new Size(0, 0);
            printPreviewDialog1.AutoScrollMinSize = new Size(0, 0);
            printPreviewDialog1.ClientSize = new Size(400, 300);
            printPreviewDialog1.Enabled = true;
            printPreviewDialog1.Icon = (Icon)resources.GetObject("printPreviewDialog1.Icon");
            printPreviewDialog1.Name = "printPreviewDialog1";
            printPreviewDialog1.Visible = false;
            // 
            // Notepad
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            BackColor = SystemColors.ActiveCaption;
            ClientSize = new Size(584, 361);
            Controls.Add(NewButton);
            Controls.Add(SaveButton);
            Controls.Add(DeleteButton);
            Controls.Add(LoadButton);
            Controls.Add(previousNotes);
            Controls.Add(Note_Label);
            Controls.Add(TitleLabel);
            Controls.Add(DataTextbox);
            Controls.Add(Title_Textbox);
            Font = new Font("Times New Roman", 9F, FontStyle.Regular, GraphicsUnit.Point);
            Name = "Notepad";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Notepad";
            Load += Form1_Load;
            ((System.ComponentModel.ISupportInitialize)previousNotes).EndInit();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private TextBox Title_Textbox;
        private TextBox DataTextbox;
        private Label TitleLabel;
        private Label Note_Label;
        private DataGridView previousNotes;
        private Button LoadButton;
        private Button DeleteButton;
        private Button SaveButton;
        private Button NewButton;
        private PrintPreviewDialog printPreviewDialog1;
        private ToolTip toolTip1;
    }
}