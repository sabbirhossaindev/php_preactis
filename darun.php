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
?>