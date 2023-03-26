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
                    <h4><?php if (isset($name)) {
                        echo $name;} ?></h4>
                    <h4>Course- $course</h4>
                    <li>Phone- $phone</li>
                    <li>Email- $email</li>
                    <li>Batch No- $batch</li>
                </div>
            </div>

            
        </div>
                                                                                     
    </section>
</body>
</html>