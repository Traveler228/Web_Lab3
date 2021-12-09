<?php 
require "functions.php";
global $dbh;
global $id = 2;
$sth = $dbh->prepare("SELECT * FROM user WHERE 'id_role' = ?");
$sth->execute([$id]); ;

$array = $sth -> fetchALL(PDO::FETCH_ASSOC);

// $stmt->execute([$login, $id_role]);
// while ($row = $stmt->fetch(PDO::FETCH_LAZY)) {
//  echo 'Login: '.$row->login; 
//  echo 'id_role: '.$row->id_role;
// }
?>

<table>
<tr>
  <th>login</th>
  <th>id_role</th>
</tr>
  <?php 
  for ($i = 0; $i < count($array); $i++) {
    $login = $array[$i]['login']  ;
    $id_role = $array[$i]['id_role'] ;
    print('<tr>
    <td>'.$login.'</td>
    <td>'.$id_role.'</td>
    </tr>');
}
  ?>
</table>