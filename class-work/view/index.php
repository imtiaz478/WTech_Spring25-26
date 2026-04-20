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
            <tr>
                <td><label for="email">E-mail:</label></td>
                <td><input type="email" id="email" name="email"></td>
                <td><span class="star">*</span> <?php echo isset($email) ? $email : ''; ?></td>
            </tr>
            <tr>
                <td><label for="website">Website:</label></td>
                <td><input type="url" id="website" name="website"></td>
                <td><?php echo isset($website) ? $website : ''; ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top; padding-top: 6px;"><label for="comment">Comment:</label></td>
                <td colspan="2"><textarea id="comment" name="comment"></textarea></td>
            </tr>




           
        </table>
    </form>

   
</body>
</html>

