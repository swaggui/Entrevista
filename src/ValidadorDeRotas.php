<?php
class ValidadorDeRotas
{
    private MapaDeRotas $mapaDeRotas;

    public function __construct(MapaDeRotas $mapaDeRotas)
    {
        $this->mapaDeRotas = $mapaDeRotas;
    }

    public function isRotaValida(string $rota): bool
    {
        $estados = explode(',', $rota);

        for ($i = 0; $i < count($estados) - 1; $i++) {
            $estadoAtual = trim($estados[$i]);
            $proximoEstado = trim($estados[$i + 1]);

            $vizinhos = $this->mapaDeRotas->getRotas($estadoAtual);

            if ($vizinhos === null || !in_array($proximoEstado, $vizinhos)) {
                return false;
            }
        }
        return true;
    }
}