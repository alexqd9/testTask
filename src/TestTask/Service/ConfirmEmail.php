<?php


namespace TestTask\Service;


use TestTask\Entity\MetaInformConfirm;
use TestTask\Entity\ResponseConfirm;

class ConfirmEmail implements Confirm
{
    public function send(MetaInformConfirm $metaInformConfirm): ResponseConfirm
    {
        // TODO: Implement send() method.
        return new ResponseConfirm();
    }


}