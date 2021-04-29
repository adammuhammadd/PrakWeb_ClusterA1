<?php
$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
sort($data);

$length = count($data);
for($i = 0; $i < $length; $i++) {
  echo $data[$i];
  echo "<br>";
}
?>