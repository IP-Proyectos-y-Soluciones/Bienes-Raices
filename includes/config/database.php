<?php 

/**
 * Summary of conectarDB
 * @return mysqli
 */
function conectarDB() : mysqli {
  $db = mysqli_connect(
    'localhost', 
    'root', 
    'Satanas2023*+', 
    'bienesraices_crud'
  );

  if(!$db) {
    echo "Error no se pudo conectar";
    exit;
  } 

  return $db;
    
}