<?php  
    if(isset($_POST['genarate-btn'])){
        $name = $_POST['name'];
        $phone = $_POST['stn-phone'];
        $email = $_POST['stn-email'];
        $batch = $_POST['stn-batch'];
        $course = $_POST['stn-course'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identity Card | PHP</title>
    <link rel="stylesheet" href="sid.css">
</head>
<body>
    <section>
        <div class="sid">
            <h2 class="sid-h2">FromIT SID</h2>
        </div>
        <div >
            <div class="main-div">
                <img class="doctor" src="img/doctor-logo.png" alt="abdullah-pic">
                <div class="list">
                    <div class="list-first">
                        <b><?php if (isset($name)) {
                            echo $name;
                            echo '<br>';} ?></b>
                        <br>
                        <b>Course- <?php if (isset($course)) {
                            echo $course;echo '<br>';} ?></b>
                    
                    </div>
                    <div class="list-div">
                        <b>Phone- <?php if (isset($phone)) {
                        echo $phone;echo '<br>';} ?></b>
                        <b>Email- <?php if (isset($email)) {
                        echo $email;echo '<br>';} ?></b>
                        <b>Batch No- <?php if (isset($batch)) {
                        echo $batch;echo '<br>';} ?></b>
                    </div>
                </div>
            </div>

            
        </div>
                                                                                     
    </section>
</body>
</html>