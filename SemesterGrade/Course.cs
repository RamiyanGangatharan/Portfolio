namespace SemesterGrade
{
    /*
     * Name: Ramiyan Gangatharan
     * Date: October 19 2023
     * Desc: This is a class used for the calculator, not needed but for academic reasons.
     */
    internal class Course
    {
        private string name;
        private int courseCode;
        private int gradePercentage;

        // This is a constructor
        public Course()
        {
            // These are the default parameters in case the other ones don't work.
            name = "Default";
            gradePercentage = 0;
            courseCode = 0;
        }

        private int gradeValidation(int gradePercentage)
        {
            // Grade Validation
            if (gradePercentage < 0)
            {
                gradePercentage = -gradePercentage;
            }
            if (gradePercentage > 110)
            {
                gradePercentage = 100;
            }
            this.gradePercentage = gradePercentage;
            return gradePercentage;
        }

        public Course(string name, int gradePercentage)
        {
            this.name = name;
            courseCode = 0;
            this.gradePercentage = gradeValidation(gradePercentage);
        }

        // Grade validation within another class.
        public string GetLetterGrade()
        {
            string currentLetterGrade;
            string[] LetterGrade =
            {        "N/A", "F",
                "D-", "D", "D+",
                "C-", "C", "C+",
                "B-", "B", "B+",
                "A-", "A", "A+"
            };

            if       (gradePercentage < 50) currentLetterGrade = LetterGrade[1];
            else if (gradePercentage <= 52) currentLetterGrade = LetterGrade[2];
            else if (gradePercentage <= 56) currentLetterGrade = LetterGrade[3];
            else if (gradePercentage <= 59) currentLetterGrade = LetterGrade[4];
            else if (gradePercentage <= 62) currentLetterGrade = LetterGrade[5];
            else if (gradePercentage <= 66) currentLetterGrade = LetterGrade[6];
            else if (gradePercentage <= 69) currentLetterGrade = LetterGrade[7];
            else if (gradePercentage <= 72) currentLetterGrade = LetterGrade[8];
            else if (gradePercentage <= 76) currentLetterGrade = LetterGrade[9];
            else if (gradePercentage <= 79) currentLetterGrade = LetterGrade[10];
            else if (gradePercentage <= 84) currentLetterGrade = LetterGrade[11];
            else if (gradePercentage <= 89) currentLetterGrade = LetterGrade[12];
            else currentLetterGrade = LetterGrade[13];
            return currentLetterGrade;
        }
    }
}
