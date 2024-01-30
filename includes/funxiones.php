<?php

require 'app.php';

/**
 * Summary of incluirTemplate
 * @param string $nombre
 * @param bool $inicio
 * @return void
 */
function incluirTemplate( string  $nombre, bool $inicio = false ) {
  include TEMPLATES_URL . "/$nombre.php"; 
}

/**
 * Summary of estaAutenticado
 * @return bool
 */
function estaAutenticado() : bool {
  session_start();

  $auth = $_SESSION['login'];
  if($auth) {
      return true;
  }
  return false;
}