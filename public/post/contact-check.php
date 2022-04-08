<?php

if(isset($_POST['submit']))
{
    if(!empty($_POST) && ($_POST['verification'] === "13"))
    {
    require '../../app/class/contact_manager.php';
    $contactForm = new ContactManager();
    $contactId = $contactForm->insert($_POST['email'],$_POST['telephone'],$_POST['contact_reason'],$_POST['verification']);
    
        if($contactId)
        {
            header('Location: /thanks.php');die;
        }
    }
    else
    {
        header('Location: /sorry.php');
    }
}
