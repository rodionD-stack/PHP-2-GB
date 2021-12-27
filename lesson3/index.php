<?php

const PHOTO_BIG = 'data/big';
const PHOTO_SMALL = 'data/small';

// подгружаем и активируем авто-загрузчик Twig-а
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  // указывае где хранятся шаблоны
  $loader = new Twig_Loader_Filesystem('templates');

  // инициализируем Twig
  $twig = new Twig_Environment($loader);

  // подгружаем шаблон
  $template = $twig->loadTemplate('index.tmpl');

  // Получаем список фотографий 
  $photos = array_slice(scandir(PHOTO_BIG), 2);

  // передаём в шаблон переменные и значения
  // выводим сформированное содержание
  //echo print_r($photos_in_dir);
  echo $template->render(array(
    'title' => 'Список фотографий альбома',
    'path_to_photo_small' => PHOTO_SMALL,
    'photos' => $photos
  ));
} catch (Exception $e) {
  die('ERROR: ' . $e->getMessage());
}
