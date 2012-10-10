<?php

if (empty($lang) || !is_array($lang))
{
    $lang = array();
}

$lang = array_merge($lang, array(
    'FOOBAR' => 'Foo Bar %d',
    'WELCOME_TO_FOOBAR' => 'Hello!',
    'WELCOME_MESSAGE'	=> 'Hi, %s! The bar() method was called from the main example controller.',
));
