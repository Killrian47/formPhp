<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form  action="thanks.php"  method="post">
        <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name">
        </div>
        <div>
        <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
            <label for="thema">Your thema</label>
            <select name="thema" >
                <option value="">--Please choose an thema--</option>
                <option value="Pets">Pets</option>
                <option value="Sports">Sports</option>
                <option value="Video Games">Video Games</option>
                <option value="Films">Films</option>
            </select>
        </div>
        <div>
            <label for="tel">Phone number</label>
            <input type="tel" name="tel" id="tel">
        </div>
        <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
        <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
    <?php
        var_dump($_GET);
        echo  $_GET['user_name'];
    ?>


</body>
</html>
    