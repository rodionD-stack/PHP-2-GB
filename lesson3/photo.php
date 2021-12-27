<?php

CONST PHOTO_BIG = 'data/big';
CONST PHOTO_SMALL = 'data/small';

// подгружаем и активируем авто-загрузчик Twig-а
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  // указывае где хранятся шаблоны
  $loader = new Twig_Loader_Filesystem('templates');
  
  // инициализируем Twig
  $twig = new Twig_Environment($loader);
  
  // подгружаем шаблон
  $template = $twig->loadTemplate('photo.tmpl');
  
  $photo = stripcslashes($_GET['photo']);
  if (!file_exists(PHOTO_BIG . '/' .$photo)) throw new Exception ('Фото отсутсвует');
  
  // передаём в шаблон переменные и значения
  // выводим сформированное содержание
  echo $template->render(array(
            'title' => 'Список фотографий альбома',
            'path_to_photo' => PHOTO_BIG,
            'photo' => $photo
            ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
