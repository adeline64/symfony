<?php

require __DIR__ . "/vendor/autoload.php";

use Symfony\Component\HttpFoundation\Session\Session;

//démarrage de la session
$session = new Session();
$session->start();

// ajout des flash messages
$session->getFlashBag()->add(
    'warning',
    'Your config file is writable, it should be set read-only'
);
$session->getFlashBag()->add('error', 'Failed to update name');
$session->getFlashBag()->add('error', 'Another error');
$session->getFlashBag()->add('notice', "OK c'est cool !");