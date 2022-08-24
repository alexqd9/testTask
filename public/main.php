<?php

use TestTask\Controller\ConfirmController;
use TestTask\Entity\Setting;
use TestTask\Service\ConfirmEmail;
use TestTask\Entity\MetaInformationEmail;

require 'vendor/autoload.php';


$setting1 = new Setting();
$setting1->setParam2('Парамметр2');
$setting1->setParam1('Парамметр1');
$setting2 = new Setting();
$setting2->setParam2('Парамметр2');

$confirmController = new ConfirmController();
$paramArr = $confirmController->findParamForChange($setting1,$setting2); // Ищем парамметр который будем изменять


//задаем информацию необходимую для отправки потвержения
$metaInformationConfirm = new MetaInformationEmail();
$metaInformationConfirm->setTextMessage($paramArr[array_keys($paramArr)[0]]); // задаем какой парамметр меняем
//.......... заполняем остальными парамметрами будь то номер телефона или email и т.д.


$confirm = new ConfirmEmail(); // Определяем через какой класс отправлять

//отправляем Уведомление
$confirmController->sendConfirm($confirm, $metaInformationConfirm);
