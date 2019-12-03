<?php


namespace MasterCrupt;


class Application
{
    public function Leet(string $message, UI $ui)
    {
        $ui->SetLeeted(Leeter::Leet($message));
    }
}