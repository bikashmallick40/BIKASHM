using System;

namespace ConsoleApp7
{
    class Program
    {

        public static void Main(string[] args)
        {


            int score;
            int attemptone = 0;
            int attempttwo = 0;
            int attemptthree = 0;
            int attemptfour = 0;
            int attemptfive = 0;

            int attempt = 0;
            int attempt1 = 0;
            int attempt2 = 0;
            int attempt3 = 0;
            int attempt4 = 0;

            Console.Title = "Quiz Program Coded By Bikash";

            Console.WriteLine("---------------------------------------------");
            Console.WriteLine("Welcome to the _____ QUIZ! Coded by Bikash");
            Console.WriteLine("---------------------------------------------");
            Console.WriteLine("\nEnter Your First Name ==> ");
            string name = Console.ReadLine();
            Console.WriteLine("\nEnter Your Last Name ==> ");
            string name1 = Console.ReadLine();
        one:
            Console.Clear();
            int i = 0;
            int i1;




            Console.WriteLine("\nQuestion 1. Multiple Choice");
            Console.WriteLine("Blah blah blah, I am a difficult question...");
            Console.WriteLine("\nA. Option here....");
            Console.WriteLine("B. Option here....");
            Console.WriteLine("C. Option here....");
            Console.WriteLine("D. Option here....");

            Console.WriteLine("\n");
            Console.WriteLine("Please input A, B, C, or D.");

            string answer1 = Console.ReadLine();



            if (answer1.ToUpper() == "A")
            {
                if (attemptone == 0)
                {
                    i = i + 20;
                    i1 = i;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Congratulation you have Scored 20 Marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
                else if (attemptone == 1)
                {
                    i = i + 10;
                    i1 = i;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Congratulation you have Scored 10 marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
                else
                {
                    i1 = 0;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Sorry you have Scored 0 Marks (3 Or additional attempt 0 marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }

            }
            else
            {
                

                attempt = attempt + 1;
                attemptone = attempt;
                Console.WriteLine("------ Opps You Choose a Wrong Answer!------");
                Console.WriteLine("press any key to continue");
                Console.ReadLine();
                goto one;
            }
        two:
            Console.Clear();
            int j = 0;
            int j1;


            Console.WriteLine("\nQuestion 2. True or False:");
            Console.WriteLine("Blah blah blah, I am another difficult question...");
            Console.WriteLine("\n Please input T for true, or F for False");
            Console.WriteLine("\n");
            string answer2 = Console.ReadLine();

            if (answer2.ToUpper() == "T")
            {
                if (attempttwo == 0)
                {
                    j = j + 20;
                    j1 = j;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Congratulation you have Scored 20 Marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
                else if (attempttwo == 1)
                {
                    j = j + 10;
                    j1 = j;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Congratulation you have Scored 10 Marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
                else
                {
                    j1 = 0;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Sorry you have Scored 0 Marks (3 Or additional attempt 0 marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
            }
            else
            {
               

                attempt1 = attempt1 + 1;
                attempttwo = attempt1;
                Console.WriteLine("------ Opps You Choose a Wrong Answer!------");
                Console.WriteLine("press any key to continue");
                Console.ReadLine();
                goto two;
            }





        three:
            Console.Clear();
            int k = 0;
            int k1;


            Console.WriteLine("\nQuestion 3. True or False:");
            Console.WriteLine("Blah blah blah, I am another difficult question...");
            Console.WriteLine("\n Please input T for true, or F for False");
            Console.WriteLine("\n");
            string answer3 = Console.ReadLine();

            if (answer3.ToUpper() == "T")
            {
                if (attemptthree == 0)
                {
                    k = k + 20;
                    k1 = k;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Congratulation you have Scored 20 Marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
                else if (attemptthree == 1)
                {
                    k = k + 10;
                    k1 = k;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Congratulation you have Scored 10 Marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
                else
                {
                    k1 = 0;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Sorry you have Scored 0 Marks (3 Or additional attempt 0 marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
            }
            else
            {
            

                attempt2 = attempt2 + 1;
                attemptthree = attempt2;
                Console.WriteLine("------ Opps You Choose a Wrong Answer!------");
                Console.WriteLine("press any key to continue");
                Console.ReadLine();
                goto three;
            }






        four:
            Console.Clear();
            int l = 0;
            int l1;


            Console.WriteLine("\nQuestion 4. True or False:");
            Console.WriteLine("Blah blah blah, I am another difficult question...");
            Console.WriteLine("\n Please input T for true, or F for False");
            Console.WriteLine("\n");
            string answer4 = Console.ReadLine();

            if (answer4.ToUpper() == "T")
            {
                if (attemptfour == 0)
                {
                    l = l + 20;
                    l1 = l;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Congratulation you have Scored 20 Marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
                else if (attemptfour == 1)
                {
                    l = l + 10;
                    l1 = l;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Congratulation you have Scored 10 Marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
                else
                {
                    l1 = 0;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Sorry you have Scored 0 Marks (3 Or additional attempt 0 marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
            }
            else
            {
                

                attempt3 = attempt3 + 1;
                attemptfour = attempt3;
                Console.WriteLine("------ Opps You Choose a Wrong Answer!------");
                Console.WriteLine("press any key to continue");
                Console.ReadLine();
                goto four;
            }




        five:
            Console.Clear();
            int m = 0;
            int m1;


            Console.WriteLine("\nQuestion 5. True or False:");
            Console.WriteLine("Blah blah blah, I am another difficult question...");
            Console.WriteLine("\n Please input T for true, or F for False");
            Console.WriteLine("\n");
            string answer5 = Console.ReadLine();

            if (answer5.ToUpper() == "T")
            {
                if (attemptfive == 0)
                {
                    m = m + 20;
                    m1 = m;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Congratulation you have Scored 20 Marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
                else if (attemptfive == 1)
                {
                    m = m + 10;
                    m1 = m;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Congratulation you have Scored 10 Marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
                else
                {
                    m1 = 0;
                    Console.WriteLine("------Correct!------");
                    Console.WriteLine("\n Sorry you have Scored 0 Marks (3 Or additional attempt 0 marks");
                    Console.WriteLine("press any key to continue");
                    Console.ReadLine();
                }
            }
            else
            {
                

                attempt4 = attempt4 + 1;
                attemptfive = attempt4;
                Console.WriteLine("------ Opps You Choose a Wrong Answer!------");
                Console.WriteLine("press any key to continue");
                Console.ReadLine();
                goto five;
            }
            Console.Clear();

            int result1 = attemptone + 1;
            int result2 = attempttwo + 1;
            int result3 = attemptthree + 1;
            int result4 = attemptfour + 1;
            int result5 = attemptfive + 1;
            double per;
            int total = 100;

            Console.Write("Current Date and Time is : ");
            DateTime now = DateTime.Now;
            Console.WriteLine(now + "\n");


            Console.WriteLine("Name ==> " + name+" "+name1);
            Console.WriteLine("\n\n");
            Console.WriteLine("MARKS! & Attempt");
            Console.WriteLine("----------------------------------------------------------");
            Console.WriteLine("Question 1st " + i1 + " marks with " + result1 + " attempt");
            Console.WriteLine("----------------------------------------------------------");
            Console.WriteLine("Question 2nd " + j1 + " marks with " + result2 + " attempt");
            Console.WriteLine("----------------------------------------------------------");
            Console.WriteLine("Question 3rd " + k1 + " marks with " + result3 + " attempt");
            Console.WriteLine("----------------------------------------------------------");
            Console.WriteLine("Question 4th " + l1 + " marks with " + result4 + " attempt");
            Console.WriteLine("----------------------------------------------------------");
            Console.WriteLine("Question 5th " + m1 + " marks with " + result5 + " attempt");
            Console.WriteLine("----------------------------------------------------------");
            Console.WriteLine("                        ");
            score = i1 + j1 + k1 + l1 + m1;
            Console.WriteLine("Congratulation you have Scored " + score+" Marks");
            per = (score * 100) / total;

            Console.WriteLine("\n\nPercentage ==> " + per + "%");






            Console.ReadKey();

        }
    }
}
