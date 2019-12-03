<?php


namespace MasterCrupt;


class UI
{

    public $application;
    private $leeted;

    public function __construct()
    {
        $this->application = new Application();
    }

    public function EncryptMessage(string $unLeeted) : string
    {
        $this->application->Leet($unLeeted, $this);
        return "Leeted: ".$this->leeted;
    }

    public function SetLeeted(string $leeted)
    {
            $this->leeted = $leeted;
    }
}