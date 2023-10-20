namespace Invoice
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Initializing variables.
            decimal subTotal = 0;
            decimal discountPercent = 0;
            decimal discountAmount = 0;
            decimal invoiceTotal = 0;

            // Obtain subtotal WITH VALIDATION.
            if (Subtotal_Textbox.Text.Length > 0)
            {
                // If there is something inside the textbox, convert to decimal.
                subTotal = Convert.ToDecimal(Subtotal_Textbox.Text);

                // Determine discount percentage.
                if (subTotal >= 500)
                {
                    // "m" is an annotation to tell the compiler the level of precision required.
                    // [discount of 20%]
                    discountPercent = .2m;
                }
                else if (subTotal >= 250)
                {
                    discountPercent = .15m;
                }
                else if (subTotal >= 100)
                {
                    discountPercent = .1m;
                }

                // Calculate the discount.
                discountAmount = subTotal * discountPercent;
                invoiceTotal = subTotal - discountAmount;

                // Set the content for the text boxes.
                DiscountPercent_Textbox.Text = discountPercent.ToString();
                DiscountAmount_Textbox.Text = discountAmount.ToString();
                Total_Textbox.Text = invoiceTotal.ToString();
            }

        }

        private void FullTotal_Label_Click(object sender, EventArgs e)
        {

        }

        private void textBox3_TextChanged(object sender, EventArgs e)
        {

        }

        private void Total_Textbox_TextChanged(object sender, EventArgs e)
        {

        }

        private void button2_Click(object sender, EventArgs e)
        {
            Close();
        }
    }
}