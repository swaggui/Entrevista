<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/ValidadorDeRotas.php';
require_once __DIR__ . '/../src/MapaDeRotas.php';

class ValidadorDeRotasTest extends TestCase
{
    private MapaDeRotas $mapaDeRotas;
    private ValidadorDeRotas $validadorDeRotas;
    protected function setUp(): void
    {
        $this->mapaDeRotas = new MapaDeRotas();
        $this->validadorDeRotas = new ValidadorDeRotas($this->mapaDeRotas);
        parent::setUp();
    }
    public function testRotaValida()
    {
        $this->assertTrue($this->validadorDeRotas->isRotaValida("RS,SC,PR"));
        $this->assertTrue($this->validadorDeRotas->isRotaValida("AM,PA,MA,PI,CE,RN"));
        $this->assertTrue($this->validadorDeRotas->isRotaValida("MG,GO,DF,GO,TO"));
        $this->assertTrue($this->validadorDeRotas->isRotaValida("DF,MG,ES,RJ,MG,SP,MS,GO"));
        $this->assertTrue($this->validadorDeRotas->isRotaValida("DF,DF"));
    }

    public function testRotaInvalida()
    {
        $this->assertFalse($this->validadorDeRotas->isRotaValida("RS,SP,MG"));
        $this->assertFalse($this->validadorDeRotas->isRotaValida("MS,MT,PA,AC"));
        $this->assertFalse($this->validadorDeRotas->isRotaValida("ES,MG,GO,PA,AM"));
    }
}
