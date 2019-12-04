<?php


namespace MasterCrupt;


class Application implements ApplicationInterface
{
    public function Leet(string $message, UI $ui)
    {
        $ui->SetLeeted(Leeter::Leet($message));
    }
}

$ui = new UI();
