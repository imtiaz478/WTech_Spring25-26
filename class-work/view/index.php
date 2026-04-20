<?php 
include "../controller/indexValidation.php";    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
   
</head>
<body>
<p class="required-note">* required field</p>
<form method="post" action="">
        <table>
        <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" id="name" name="name"></td>
                <td><span class="star">*</span> <?php echo isset($name) ? $name : ''; ?></td>
            </tr>

           
        </table>
    </form>

   
</body>
</html>

