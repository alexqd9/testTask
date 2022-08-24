<?php


namespace TestTask\Service;


use TestTask\Entity\MetaInformConfirm;
use TestTask\Entity\ResponseConfirm;

class Confirmation
{
    private Confirm $confirm;

    /**
     * Confirmation constructor.
     * @param Confirm $confirm
     */
    public function __construct(Confirm $confirm)
    {
        $this->confirm = $confirm;
    }


    public function confirm(MetaInformConfirm $metaInformConfirm): ResponseConfirm{
        return $this->confirm->send($metaInformConfirm);
    }

}