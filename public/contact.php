<?php

include '../app/data/data.php'; 

function getName()
{
    echo $GLOBALS['myCV']['lastName'] . ' ' . $GLOBALS['myCV']['firstName'];
}

// if(isset($_POST['submit']))
// {
//     if(!empty($_POST))
//     {
//     require '../app/class/contact_manager..php';
//     $contactForm = new ContactManager();
//     $contactId = $contactForm->insert($_POST['email'],$_POST['telephone'],$_POST['contact_reason'],$_POST['verification']);
    
//         if($contactId)
//         {
//             header('Location: /index.php');die;
//         }
//         else
//         {
//             echo 'Error';
//         }
//     }
// }

include 'template/contact.tpl.php'; 