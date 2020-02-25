<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

<form action="index.php" method="post">
    <br>
    <br>
    <label for="first_name"><b>First Name: </b></label>
    <input type="text" name="first_name">
    <br>
    <br>
    <label for="last_name"><b>Last Name: </b></label>
    <input type="text" name="last_name">
    <br>
    <br>
    <label for="username"><b>Username: </b></label>
    <input type="text" name="username">
    <br>
    <br>
    <label for="linkedin"><b>LinkedIn: </b></label>
    <input type="url" placeholder="URL of your LinkedIn" name="linkedin">
    <br>
    <br>
    <label for="github"><b>Github: </b></label>
    <input type="url" placeholder="URL of your Github profile" name="github">
    <br>
    <br>
    <label for="email"><b>Email: </b></label>
    <input type="email" name="email">
    <br>
    <br>
    <label for="preferred_language"><b>Preferred language: </b></label>
    <select name="preferred_language">
        <option value="en">en</option>
        <option value="fr">fr</option>
        <option value="be">nl</option>
        <option value="de">de</option>
    </select>
    <br>
    <br>
    <label for="avatar"><b>Avatar: </b></label>
    <input type="text" placeholder="URL of the picture" name="avatar">
    <br>
    <br>
    <label for="video"><b>Video: </b></label>
    <input type="URL" placeholder="YouTube link to a music video you like" name="video">
    <br>
    <br>
    <label for="quote"><b>Quote: </b></label>
    <input type="text" placeholder="Quote you like" name="quote">
    <br>
    <br>
    <label for="quote_author"><b>Quote author: </b></label>
    <input type="text" placeholder="Person who made the quote" name="quote_author">
    <input type="submit">Submit</input>

</form>
<br>
</body>
</html>