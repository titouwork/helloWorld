<?php

$data = array_map('trim',$_POST);
$data = array_map('htmlentities', $data);


echo 'Merci '.$data['user_name']. 'de nous avoir contacté à propos de '.$data['theme'].' 
Un de nos conseillers vous contactera soit à l’adresse '.$data['user_email']. 'ou par téléphone au '.$data['phone_number'].'dans les plus brefs délais pour traiter votre demande :'.$data['user_message']; 

?>