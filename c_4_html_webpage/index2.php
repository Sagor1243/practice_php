<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

<style>
    body{
        margin-top :30px;
    }
</style>
</head>


<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Your First Name</h1>
                <h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit, minima!</h2>

                <p> 

                <?php 
                $fname = '';
                $lname = '';
                ?>
                    <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) { 
                    $fname = $_POST['fname'];
             } ?>
            
               <?php if(isset ($_REQUEST['lname']) && !empty ($_REQUEST['lname'])) { 

                $lname = $_REQUEST['lname'];
            } ?>

               </p>

               <!-- <p>
                First Name:<?php echo $fname?>;
                Last Name : <?php echo $lname ?>;
               </p> -->
            </div>
        </div>

        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $fname?>">

                    <label for="lname"></label>
                    <input type="text" name="lname" id="lname" value="<?php echo $lname?>">


                    <input type="submit">
                </form>
            </div>
        </div>
   
    </div>
</body>
</html>