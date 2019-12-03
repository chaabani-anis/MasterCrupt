<?php


use MasterCrupt\UI;
use PHPUnit\Framework\TestCase;

class AcceptanceTest extends TestCase
{
    public function testSecret()
    {
        $ui = new UI();
        $this->assertEquals("Leeted: S3cr3t", $ui->EncryptMessage("Secret"));
    }

}
