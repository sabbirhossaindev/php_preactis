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

<?php 
    echo '<br>';
    $markes = 40;

    switch ($markes) {
        case ($markes >= 80 && $markes <= 100):
            echo 'WOW You Got A+';
            break;
        case ($markes >= 70 && $markes <= 79):
            echo 'WOW You Got A';
            break;
        case ($markes >= 60 && $markes <= 69):
            echo 'WOW You Got A-';
            break;
        case ($markes >= 50 && $markes <= 59):
            echo 'WOW You Got B';
            break;
        case ($markes >= 40 && $markes <= 49):
            echo 'WOW You Got C';
            break;
        case ($markes >= 33 && $markes <= 39):
            echo 'WOW You Got D';
            break;
        case ($markes >= 0 && $markes <= 32):
            echo 'WOW You Got F';
            break;
        default:
            echo "Invalid Number";
    }
?>

<!-- 1 to 1000 print korer program -->

<?php 
    for ($i=0; $i <= 100 ; $i++) { 
        echo $i.'<br>';
    }
?>

<!-- 1 to 100 odd number print korer program -->

<?php 
    for ($i=1; $i <= 100 ; $i++) { 
        if($i%2 && !0){
            echo $i.'<br>';
        }
    }
?>

<!-- 1 to 100 even number print korer program -->

<?php 
    for ($i=0; $i <= 100; $i++) { 
        if($i%2 == 0){
            echo $i.'<br>';
        }
    }
?> 

<?php
    echo '<br>'; 
    $t=time();
    echo date('t,n A');
    echo '<br>';
    echo date("l", $t);
    echo '<br>';
    echo(date("M d, Y",$t));
?>

<!-- d - The day of the month (from 01 to 31)
D - A textual representation of a day (three letters)
j - The day of the month without leading zeros (1 to 31)
l (lowercase 'L') - A full textual representation of a day
N - The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)
S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
w - A numeric representation of the day (0 for Sunday, 6 for Saturday)
z - The day of the year (from 0 through 365)
W - The ISO-8601 week number of year (weeks starting on Monday)
F - A full textual representation of a month (January through December)
m - A numeric representation of a month (from 01 to 12)
M - A short textual representation of a month (three letters)
n - A numeric representation of a month, without leading zeros (1 to 12)
t - The number of days in the given month
L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)
o - The ISO-8601 year number
Y - A four digit representation of a year
y - A two digit representation of a year
a - Lowercase am or pm
A - Uppercase AM or PM
B - Swatch Internet time (000 to 999)
g - 12-hour format of an hour (1 to 12)
G - 24-hour format of an hour (0 to 23)
h - 12-hour format of an hour (01 to 12)
H - 24-hour format of an hour (00 to 23)
i - Minutes with leading zeros (00 to 59)
s - Seconds, with leading zeros (00 to 59)
u - Microseconds (added in PHP 5.2.2)
e - The timezone identifier (Examples: UTC, GMT, Atlantic/Azores)
I (capital i) - Whether the date is in daylights savings time (1 if Daylight Savings Time, 0 otherwise)
O - Difference to Greenwich time (GMT) in hours (Example: +0100)
P - Difference to Greenwich time (GMT) in hours:minutes (added in PHP 5.1.3)
T - Timezone abbreviations (Examples: EST, MDT)
Z - Timezone offset in seconds. The offset for timezones west of UTC is negative (-43200 to 50400)
c - The ISO-8601 date (e.g. 2013-05-05T16:34:42+00:00)
r - The RFC 2822 formatted date (e.g. Fri, 12 Apr 2013 12:01:05 +0200)
U - The seconds since the Unix Epoch (January 1 1970 00:00:00 GMT) -->