<?php
function Users(){
  $db= new Conexion();
  $sql = $db->query("SELECT * FROM users;");
  if ($db->rows($sql) > 0) {
  while ($a = $db->recorrer($sql)) {
  $users[$a['id']] = array(
                        'id' => $a['id'],
                        'user' => $a['user'],
                        'pass' => $a['pass'],
                        'email' => $a['email'],
                        'permisos' => $a['permisos']
                      );
  }
  } else {
    $users=false;
  }
  $db->liberar($sql);
  $db->close();
return $users;
}
 ?>
