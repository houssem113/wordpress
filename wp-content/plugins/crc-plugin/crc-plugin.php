<?php
/*
Plugin Name: crc Plugin
Plugin URI: URL de votre plugin (facultatif)
Description: Description de votre plugin
Version: 1.0
Author: Votre nom
Author URI: Votre URL (facultatif)
*/

// Fonction d'affichage du message "Hello World"
function mon_plugin_hello_world() {
  echo 'Hello World';
}

// Action pour afficher le message "Hello World"
add_action('admin_notices', 'mon_plugin_hello_world');