<?php

require "connection.php";
$connection = openConnection();

if ($connection){
    echo 'Successfully Connected!';
}
?>
<body>

<form action="">
    <br>
    <br>
    <label for="id"><b>Id: </b></label>
        <input type="text"  name="id" >
         <br>
         <br>
    <label for="firstname"><b>First Name: </b></label>
        <input type="text" name="firstname">
    <br>
    <br>
         <label for="lastname"><b>Last Name: </b></label>
        <input type="text" name="lastname">
    <br>
    <br>
        <label for="username"><b>Username: </b></label>
        <input type="text" name="username">
    <br>
    <br>
         <label for="linkedin"><b>LinkedIn: </b></label>
        <input type="url" placeholder="URL of your LinkedIn" linkedin">
    <br>
    <br>
        <label for="github"><b>Github: </b></label>
        <input type="url" placeholder= "URL of your Github profile"  name="github">
    <br>
    <br>
        <label for="email"><b>Email: </b></label>
        <input type="email" name="email">
    <br>
    <br>
        <label for="language"><b>Preferred language: </b></label>
        <input type="text" name="language">
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
        <input type="text" placeholder="Quote you like" "quote">
    <br>
    <br>
        <label for="quote_author"><b>Quote author: </b></label>
        <input type="text" placeholder="Person who made the quote" name="quote_author">

</form>