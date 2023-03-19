<!--simple upey a 3 ti sonka modda brigest number ber korsr number -->

<?php
    $numberOne = 5;
    $numberTwo = 10;
    $numberThree = 15;

    If($numberOne > $numberTwo){
        echo 'Number One is a Larger number';
    }if ($numberTwo > $numberThree) {
        echo 'Number Two is a Larger number';
    } else {
        echo 'Number Three is a Larger number';
    }
    echo '<br>';
?>

<!-- hard upey a 3 ti sonka modda brigest number ber korsr number -->

<?php 
    $a = 30;
    $b = 20;
    $c = 10;

    if($a > $b && $a > $c){
        echo 'A is a larger number';
    }
    elseif ($b > $a && $b > $c) {
        echo 'B is a larger number';
    }
    else{
        echo 'C is a larger number';
    }
    echo '<br>';
?>


<?php 
    $pas = '0808';

    if($pas == '0808'){
        echo "Unlock";
    }else{
        echo "please try again";
    }
    echo '<br>';
?>

 <!-- GPA Marks chart -->
 
<?php 
    $markes = 82;

    if($markes >= 80 && $markes <= 100) {
        echo 'WOW You Got A+';
    }
    elseif($markes >= 70 && $markes <= 79) {
        echo 'WOW You Got A';
    }
    elseif($markes >= 60 && $markes <= 69) {
        echo 'WOW You Got A-';
    }
    elseif($markes >= 50 && $markes <= 59) {
        echo 'WOW You Got B';
    }
    elseif($markes >= 40 && $markes <= 49) {
        echo 'WOW You Got C';
    }
    elseif($markes >= 33 && $markes <= 39) {
        echo 'WOW You Got D';
    }
    elseif($markes >= 0 && $markes <= 32) {
        echo 'WOW You Got F Alhamdullah';
    }
    else{
        echo 'Invalide Number';
    }
?>