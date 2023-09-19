<?php 

/*Task 1: Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also*/

//Print even number from 1 to 20 using for loop
function even($number){
    for($i=1; $i<=$number;$i++){

        if($i % 2 == 0){
            echo $i."<br>";
        }

    }
}
even(20);


//Print even number from 1 to 20 using while loop
function even_with_while($number){
    while($number <= 20){

        if($number % 2 == 0){

          echo $number."<br>";

            }
        $number++;

    }
}

even_with_while(1);

//Print even number from 1 to 20 using do_while loop
function even_with_do_while($number){
    
    do{
        if($number % 2 == 0){
        echo $number."<br>";

        }

        $number++;
    } while($number<=20);

}

even_with_do_while(1);
