<?php

use Timber\Timber;


$context = Timber::context();
//$context = Timber::get_post();

//$context['username'] = 'houssem';
//var_dump($context);
Timber::render('pages/index.twig', $context);
