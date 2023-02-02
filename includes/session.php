<?php
// Start a Session, You might start this somewhere else already.
@session_start();

// What languages do we support
$available_langs = array('en','tr');


if(isset($_GET['lang']) && $_GET['lang'] != ''){
    // check if the language is one we support
    if(in_array($_GET['lang'], $available_langs))
    {
        $_SESSION['lang'] = $_GET['lang']; // Set session
    }
}



// Set our default language session ONLY if we've got nothing
// if ($_SESSION['lang']== '') {
//     $_SESSION['lang'] = 'tr';

// }


$language = 'en';

// set the language if in session
if (isset($_SESSION["language"])) {
    $language = $_SESSION["language"];
}

// Set language if in url (and store it in session)
if (isset($_GET["language"])) {
    $language = $_GET["language"];
    $_SESSION["language"] = $_GET["language"];
}

// Include active language
require ('languages/'.$_SESSION['lang'].'/lang.'.$_SESSION['lang'].'.php');


//URL tag for all page
?>