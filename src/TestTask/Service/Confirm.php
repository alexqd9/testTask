<?php


namespace TestTask\Service;


use TestTask\Entity\MetaInformConfirm;
use TestTask\Entity\ResponseConfirm;

interface Confirm
{
    public function send(MetaInformConfirm $metaInformConfirm): ResponseConfirm;
}