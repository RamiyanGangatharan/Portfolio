namespace Notepad
{
    public partial class Notepad : Form
    {
        System.Data.DataTable notes = new System.Data.DataTable();
        bool isEditing = false;

        public Notepad()
        {
            InitializeComponent();
        }

        // The purpose of this function is to add columns to the table.
        private void Form1_Load(object sender, EventArgs e)
        {
            notes.Columns.Add("Title");
            notes.Columns.Add("Note");
            previousNotes.DataSource = notes;
        }

        // This function retrieves data from the textbox.
        private void dataGridView1_CellContentClick(object sender, DataGridViewCellEventArgs e)
        {
            previousNotes.DataSource = notes;
        }

        /* 
            This function is to delete items saved in your notes. It also has a try and catch mechanism where it can try to
            run something and catch an error without the application crashing. While this is happening, we thow an error 
            message in the console or window when appropriate.
         */
        private void DeleteButton_Click(object sender, EventArgs e)
        {
            try
            {
                notes.Rows[previousNotes.CurrentCell.RowIndex].Delete();
            }
            catch (Exception ex)
            {
                Console.WriteLine("Not a valid note");
            }
        }

        /*
            This function is used to load previous pre-existing notes
            to the textbox to be viewed and modified.
         */
        private void LoadButton_Click(object sender, EventArgs e)
        {
            Title_Textbox.Text = notes.Rows[previousNotes.CurrentCell.RowIndex].ItemArray[0].ToString();
            DataTextbox.Text = notes.Rows[previousNotes.CurrentCell.RowIndex].ItemArray[1].ToString();
            isEditing = true;
        }

        /*
            This function is used to create new notes. The way this
            works is that it clears all contents of the textbox for
            you to be able to create new notes and save each of them.
         */
        private void NewButton_Click(object sender, EventArgs e)
        {
            Title_Textbox.Text = "";
            DataTextbox.Text = "";
        }

        /*
            This function is used to save new or pre-existing notes
            where it stores it into the data table on the left. This 
            makes it to where you can access the file later in the 
            runtime, but not after you close the application (RAM).
         */
        private void SaveButton_Click(object sender, EventArgs e)
        {
            if (isEditing)
            {
                notes.Rows[previousNotes.CurrentCell.RowIndex]["Title"] = Title_Textbox.Text;
                notes.Rows[previousNotes.CurrentCell.RowIndex]["Note"] = DataTextbox.Text;
            }
            else
            {
                notes.Rows.Add(Title_Textbox.Text, DataTextbox.Text);
            }
            Title_Textbox.Text = "";
            DataTextbox.Text = "";
            isEditing = false;
        }

        /*
            This function is used for when you double click a saved 
            note in the data table to access & edit the file selected.
         */
        private void previousNotes_DoublClick(object sender, DataGridViewCellMouseEventArgs e)
        {
            Title_Textbox.Text = notes.Rows[previousNotes.CurrentCell.RowIndex].ItemArray[0].ToString();
            DataTextbox.Text = notes.Rows[previousNotes.CurrentCell.RowIndex].ItemArray[1].ToString();
            isEditing = true;
        }


        //------------------------------------------------------------------------------------------------------------------
        private void TitleLabel_Click(object sender, EventArgs e)
        {

        }

        private void Title_Textbox_TextChanged(object sender, EventArgs e)
        {

        }

        private void DataTextbox_TextChanged(object sender, EventArgs e)
        {

        }

        private void Note_Label_Click(object sender, EventArgs e)
        {

        }


    }
}