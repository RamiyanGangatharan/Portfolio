       identification division.
       program-id. A2START.
       date-written. date.
       author. name.
      *Description:
      *
       environment division.
       configuration section.
      *
       input-output section.
      *
       file-control.
      * input-file declaration
           select input-file
               assign to ??????
               organization is sequential.
      *
      * output-file declaration
           select output-file
               assign to ??????
               organization is sequential.
      *
       data division.
       file section.
      *
       fd input-file
           recording mode is F
           data record is input-line
           record contains 29 characters.
      *
       01 input-line.
           05 ????
           05 ????
      *
       fd output-file
           recording mode is F
           data record is output-line
           record contains ??? characters.
      *
       01 output-line                       PIC X(???).
      *
       working-storage section.
      *
       procedure division.
       000-main.
      *
           goback.
      *
       end program A2START.