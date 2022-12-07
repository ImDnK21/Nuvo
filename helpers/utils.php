<?php
class Utils {
  public static function isAuth() {
    if (!isset($_SESSION['logged'])) {
      header('Location: ' . APP_URL . 'account/login');
    } else {
      return true;
    }
  }

  public static function isAdmin() {
    if (!isset($_SESSION['admin'])) {
      header('Location:' . APP_URL);
    } else {
      return true;
    }
  }

  public static function showError() {
    $error = new errorController();
    $error->index();
  }
  public static function title($title) {
    echo '<script>document.title = "' . $title . ' | ' . APP_NAME .'"</script>';
  }
// Interpreta los roles de permisos según los valores de la base de datos
public static function getRole($role) {
  $value = '';
  switch ($role) {
    case 'admin': $value = 'Administrador'; break;
    case 'client': $value = 'client'; break;
  }
  return $value;
}

public static function old($field) {
  if (isset($_POST[$field])) {
    return $_POST[$field];
  }
}
public static function deleteSession($name){
  if(isset($_SESSION[$name])){
    $_SESSION[$name] = null;
    unset($_SESSION[$name]);
  }
  
  return $name;
}

public static function sanitize($string) {
  $string = trim($string);
  $string = strip_tags($string);
  $string = htmlspecialchars($string, ENT_QUOTES);
  return $string;
}

// Limpiar string de caracteres extraños
public static function clearString($string) {
  $remove = ["'","!",";","•",",","\\","}","{","[","]"];
  $replace_with = [];
  return str_replace($remove, $replace_with, $string);
}

// Ejecutar una consulta SQL pasándole una tabla, columna y filtro y valor opcionales
public static function query($table, $column, $filter = '', $value = '') {
  $db = Database::connect();
  $query = "SELECT $column FROM $table WHERE $filter = $value";
  $result = $db->query($query)->fetch_object()->$column;
  return $result;
}
  
}
