<?php

$query = [
    'CREATE TABLE `catalog`.`articles` (
          `id` INT NOT NULL AUTO_INCREMENT ,
          `title` VARCHAR(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
          `preview` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
          `text` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
          `author` INT NOT NULL ,
          `rubric` INT NOT NULL ,
          PRIMARY KEY (`id`)
          )
          ENGINE = InnoDB CHARSET=utf8
          COLLATE utf8_general_ci;',
    'CREATE TABLE `catalog`.`authors` (
          `id` INT NOT NULL AUTO_INCREMENT ,
          `name` VARCHAR(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
          `sign` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
          `avatar` MEDIUMBLOB NULL,
          PRIMARY KEY (`id`)
          )
          ENGINE = InnoDB CHARSET=utf8
          COLLATE utf8_general_ci;',
    'CREATE TABLE `catalog`.`rubrics` (
          `id` INT NOT NULL AUTO_INCREMENT ,
          `name` VARCHAR(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
          `parentId` INT NOT NULL,
          `groupId` INT NOT NULL,
          PRIMARY KEY (`id`)
          )
          ENGINE = InnoDB CHARSET=utf8
          COLLATE utf8_general_ci;',
];


$mysqli = new mysqli('localhost', 'root', 'user', 'catalog');
$mysqli->set_charset('utf8');

foreach ($query as $sql) {
    $mysqli->query($sql);
}

echo "Таблицы созданы" . "<br />";