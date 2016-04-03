<?php

/**
 * sanitise the data user enter into the form to prevent injections ect.
 * @param  $formEntry What user enter into the form
 * @return santitise data
 */
function validateFormData($formEntry) {
    $formEntry = trim(stripslashes(htmlspecialchars(strip_tags(str_replace(array(
    '(',')'), $formEntry)), ENT_QUOTES )));
    
    return $formEntry;
}

