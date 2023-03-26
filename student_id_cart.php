<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Id Cart</title>
    <link rel="stylesheet" type="text/css" href="id.css">
</head>
<body>
    <section class="student-id-section">
        <h3 class="discription">Create Your Virtual ID Card</h3>
        <form action="sid.php" method="post">
            Name <i class="start">*</i>   <input type="text" name="name" required placeholder="Name"><br> <br>
            E-mail<i class="start">*</i>  <input type="text" name="stn-email" required placeholder="email@gmail.com"><br> <br>
            Phone<i class="start">*</i>   <input type="text" name="stn-phone" required placeholder="Phone"><br> <br>
            Course<i class="start">*</i>  <input type="text" name="stn-course" required placeholder="Course"><br> <br> 
            Batch No<i class="start">*</i>  <input type="text" name="stn-batch" required placeholder="Batch"><br> <br>
            <!-- submit btn -->
            <div class="btn-div">
                <button name="genarate-btn" class="btn" type="submit">Genarate ID</button>
            </div>
        </form>
    </section>
    
</body>
</html>