<!--  darunit problem one solved. -->
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

<?php 
    $pass = '0808';

    if($pass == '0807'){
        echo "Unlock";
    }else{
        echo "please try again";
    }
?>