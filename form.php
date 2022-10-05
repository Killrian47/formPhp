<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<form action="thanks.php" method="post">
<div> 
    
    <label for="nom"> Lastname : </label>
    <input type="text" id="nom" name="u_lastname"  >
</div>
<div> 
    
    <label for="prenom"> Firstname : </label>
    <input type="text" id="prenom" name="u_name" >
</div>
<div>
    <label for="courriel"> Email :</label>
    <input type="email" id="courriel" name="u_email"  >
</div>
<div>
   
    <label for="phone">Phone number</label>
    <input type="tel" name="u_phone" id="phone"  >
</div>
<div>
    <label for="theme">Please choose a theme : </label>
    <select name="theme" required >
        <option value="sports">Sports</option> 
        <option value="video-games">Videos games</option> 
        <option value="pets">Pets</option> 
        <option value="animals">Animals</option> 
    </select>
    
</div>
<div>
    <label for="message">Message :</label>
    <textarea name="u_message" id="message"  ></textarea>
</div>
<div class="button">
    <button type="submit">Envoyer votre message</button>
</div>
</form>

</body>
</html>
    