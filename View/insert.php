<?php
/**/?>

<!DOCTYPE html>
<html lang="en">
<body>
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
    <label>
        <select name="preferred_language">
            <option value="belgium">nl</option>
            <option value="germany">de</option>
            <option value="uk">en</option>
            <option value="france">fr</option>
        </select>
    </label>
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


<table border="1">
    <?php
    $newConnection = new Connection();
    $newConnection = $newConnection->openConnection();
    $query = new Query();
    $query->createUserArray();
    foreach (($query->getUserArray()) as $user):

      /*  var_dump($user);*/
        ?>
        <tr>
            <td>
                <?php echo $user['first_name'] ?>
            </td>


            <td>
                <?php echo $user['last_name'] ?>
            </td>


            <td>
                <?php echo $user['email'] ?>
            </td>

            <td>
                <img src="<?php echo 'Images/' . $user['preferred_language'] . '.png' ?>" alt="flag">
            </td>

            <td><a href="?user=<?php echo $user['id'] ?>">Profile</a></td>

        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
