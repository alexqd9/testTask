<?php


namespace TestTask\Controller;

use TestTask\Entity\MetaInformConfirm;
use TestTask\Entity\ResponseConfirm;
use TestTask\Entity\Setting;
use TestTask\Service\Confirm;
use TestTask\Service\Confirmation;

 class ConfirmController
{

    public function findParamForChange(Setting $settingChange, Setting $settingCurrent):array {
        //Сравниваем измененные настроки с текущими хранящимися в файлах, бд и т.д.
        $arrayCompare = Setting::compare($settingChange,$settingCurrent);
        if (count($arrayCompare) != 1){
            //Вызвать исключение т.к. по тз изменять можно только один парамметр
        }else{
            return $arrayCompare;
        }
    }


    public function sendConfirm(Confirm $confirm, MetaInformConfirm $metaInformConfirm): ResponseConfirm{
        $confirmation = new Confirmation($confirm);
        return $confirmation->confirm($metaInformConfirm);
    }
}