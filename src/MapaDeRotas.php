<?php

class MapaDeRotas
{
    private const MAPA_DE_ESTADOS = [
        'RS' => ['RS','SC'],
        'SC' => ['SC','RS', 'PR'],
        'PR' => ['PR','SC', 'SP', 'MS'],
        'SP' => ['SP','PR', 'RJ', 'MG', 'MS'],
        'RJ' => ['RJ','SP', 'MG', 'ES'],
        'MG' => ['MG','SP', 'RJ', 'ES', 'GO', 'BA', 'DF'],
        'ES' => ['ES','RJ', 'MG', 'BA'],
        'BA' => ['BA','ES', 'MG', 'GO', 'TO', 'PI', 'PE', 'AL', 'SE'],
        'MS' => ['MS','PR', 'SP', 'MG', 'GO', 'MT'],
        'GO' => ['GO','MG', 'DF', 'MT', 'TO', 'BA', 'MS'],
        'MT' => ['MT','RO', 'AM', 'PA', 'TO', 'GO', 'MS'],
        'RO' => ['RO','AC', 'AM', 'MT'],
        'AM' => ['AM','RO', 'RR', 'PA', 'MT', 'AC'],
        'PA' => ['PA','AM', 'RR', 'AP', 'MA', 'TO', 'MT'],
        'RR' => ['RR','AM', 'PA'],
        'AP' => ['AP','PA'],
        'MA' => ['MA','PA', 'TO', 'PI'],
        'TO' => ['TO','PA', 'MA', 'PI', 'BA', 'GO', 'MT'],
        'PI' => ['PI','MA', 'CE', 'PE', 'BA', 'TO'],
        'CE' => ['CE','PI', 'PE', 'RN', 'PB'],
        'RN' => ['RN','CE', 'PB'],
        'PB' => ['PB','RN', 'CE', 'PE'],
        'PE' => ['PE','PB', 'CE', 'PI', 'BA', 'AL'],
        'AL' => ['AL','PE', 'BA', 'SE'],
        'SE' => ['SE','AL', 'BA'],
        'DF' => ['DF','GO', 'MG']
    ];

    public function getVizinhos(string $estado): ?array
    {
        return self::MAPA_DE_ESTADOS[$estado] ?? null;
    }
}