<?php
/**/?><!--
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>

<form action="../index.php" method="post">
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
    <br>
    <input type="submit"></input>

</form>
<br>
</body>
</html>-->



<!DOCTYPE html>
<html lang="en">
<body>

<br>
<form action="" method="post">

    <section>
        <label for="first_name">First Name: </label>
        <input id="first_name" name="first_name" required>
    </section>
    <br>
    <section>
        <label for="last_name">Last Name:</label>
        <input id="last_name" name="last_name" required>
    </section>
    <br>
    <section>
        <label for="username">Username:</label>
        <input id="username" name="username" required>
    </section>
    <br>
    <section>
        <label for="linkedin">Linked URL:</label>
        <input id="linkedin" name="linkedin" required>
    </section>
    <br>
    <section>
        <label for="github">Github URL:</label>
        <input id="github" name="github" required>
    </section>
    <br>
    <section>
        <label for="email">Email:</label>
        <input id="email" name="email" required>
    </section>
    <br>
    <label for="preferred_language"> Preferred language:</label>
    <select name="preferred_language">
        <option value="be">nl</option>
        <option value="de">de</option>
        <option value="en">en</option>
        <option value="fr">fr</option>
    </select>
    <br><br>
    <section>
        <label for="avatar">Avatar URL:</label>
        <input id="avatar" name="avatar" placeholder="Insert your avatar URL" required>
    </section>
    <br>
    <section>
        <label for="video">YouTube URL:</label>
        <input id="video" name="video" placeholder="Your favourite video" required>
    </section>
    <br>

    <section>
        <label for="quote">Quote:</label>
        <input id="quote" name="quote" required>
    </section>
    <br>
    <section>
        <label for="quote_author">Quote author:</label>
        <input id="quote_author" name="quote_author" required>
    </section>
    <br>
    <input type="submit" name="submitButton">
</form>
</body>
</html>