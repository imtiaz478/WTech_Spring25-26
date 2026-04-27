
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        .required-note {
            color: red;
            margin-bottom: 10px;
        }

        textarea {
            border: 1px solid #999;
            padding: 2px 4px;
            font-size: 13px;
            width: 200px;
        }

        textarea {
            width: 320px;
            height: 80px;
            resize: vertical;
        }
        .star {
            color: red;
            font-size: 13px;
        }
        .error-msg {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>
<p class="required-note">* required field</p>
<form method="post" action="../controller/registrationValidation.php">
        <table>
        <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" id="name" name="name"></td>
                <td><span class="star">*</span> </td>
            </tr>
            <tr>
                <td><label for="email">E-mail:</label></td>
                <td><input type="email" id="email" name="email"></td>
                <td><span class="star">*</span> </td>
            </tr>
            <tr>
                <td><label for="password">Password:</label></td>
                <td><input type="password" id="password" name="password"></td>
                <td><span class="star">*</span> </td>
            </tr>
            <tr>
                <td><label for="website">Website:</label></td>
                <td><input type="url" id="website" name="website"></td>
                <td></td>
            </tr>
            <tr>
                <td style="vertical-align: top; padding-top: 6px;"><label for="comment">Comment:</label></td>
                <td colspan="2"><textarea id="comment" name="comment"></textarea></td>
            </tr>

            <tr>
            <td><label>Gender:</label></td>
            <td>
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                        <input type="radio" id="other" name="gender" value="other">
                        <label for="other">Other</label>
                    </td>
            </tr>

            <tr>
                    <td><input type = "submit" id = "submit" name = "submit" value="Submit"> </td>
                </tr>








           
        </table>
    </form>

   
</body>
</html>

