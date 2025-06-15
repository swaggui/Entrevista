<?php

class MapaDeRotas
{
    private const MAPA_DE_ESTADOS = [
        'RS' => ['SC'],
        'SC' => ['RS', 'PR'],
        'PR' => ['SC', 'SP', 'MS'],
        'SP' => ['PR', 'RJ', 'MG', 'MS'],
        'RJ' => ['SP', 'MG', 'ES'],
        'MG' => ['SP', 'RJ', 'ES', 'GO', 'BA', 'DF'],
        'ES' => ['RJ', 'MG', 'BA'],
        'BA' => ['ES', 'MG', 'GO', 'TO', 'PI', 'PE', 'AL', 'SE'],
        'MS' => ['PR', 'SP', 'MG', 'GO', 'MT'],
        'GO' => ['MG', 'DF', 'MT', 'TO', 'BA', 'MS'],
        'MT' => ['RO', 'AM', 'PA', 'TO', 'GO', 'MS'],
        'RO' => ['AC', 'AM', 'MT'],
        'AM' => ['RO', 'RR', 'PA', 'MT', 'AC'],
        'PA' => ['AM', 'RR', 'AP', 'MA', 'TO', 'MT'],
        'RR' => ['AM', 'PA'],
        'AP' => ['PA'],
        'MA' => ['PA', 'TO', 'PI'],
        'TO' => ['PA', 'MA', 'PI', 'BA', 'GO', 'MT'],
        'PI' => ['MA', 'CE', 'PE', 'BA', 'TO'],
        'CE' => ['PI', 'PE', 'RN', 'PB'],
        'RN' => ['CE', 'PB'],
        'PB' => ['RN', 'CE', 'PE'],
        'PE' => ['PB', 'CE', 'PI', 'BA', 'AL'],
        'AL' => ['PE', 'BA', 'SE'],
        'SE' => ['AL', 'BA'],
        'DF' => ['GO', 'MG']
    ];

    public function getVizinhos(string $estado): ?array
    {
        return self::MAPA_DE_ESTADOS[$estado] ?? null;
    }
}