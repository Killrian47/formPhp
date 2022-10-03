<p>
    Merci <?php 
        echo $_POST['user_name'] . ' '; 
    ?> 
    de nous avoir contacté à propos de “<?php
        echo $_POST['thema'];
    ?>”.

    Un de nos conseiller vous contactera soit à l’adresse <?php
        echo $_POST['user_email'] . ' ';
    ?> ou par téléphone au <?php
        echo $_POST['tel'] . ' ';
    ?> dans les plus brefs délais pour traiter votre demande : <?php
        echo $_POST['user_message']
    ?>
</p>