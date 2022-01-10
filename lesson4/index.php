<?php

require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  $dbh = new PDO('mysql:dbname=gb_php;host=localhost', 'root', '');
} catch (PDOException $e) {
  echo "Error: Could not connect. " . $e->getMessage();
}

// установка error режима
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
  if (isset($_GET['limit'])) {
    $limit = $_GET['limit'];
  } else {
    $limit = 5;
  }
  // формируем SELECT запрос
  // в результате каждая строка таблицы будет объектом
  $sql = "SELECT goods_4.id AS id, goods_4.name AS name, goods_4.src AS src, goods_4.description AS description, goods_4.price AS price FROM goods_4 limit $limit";
  $sth = $dbh->query($sql);
  while ($row = $sth->fetchObject()) {
    $data[] = $row;
  }

  print_r($_GET['a']);

  // закрываем соединение
  unset($dbh);

  $loader = new Twig_Loader_Filesystem('templates');

  $twig = new Twig_Environment($loader);

  $template = $twig->loadTemplate('autos.tmpl');

  echo $template->render(array(
    'data' => $data,
    'count' => count($data)
  ));
} catch (Exception $e) {
  die('ERROR: ' . $e->getMessage());
}
