<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OfertaCreditoController extends Controller
{
    public function consultarOfertas()
    {
        // Consulte quais instituições financeiras oferecem crédito para o CPF informado
        // Você pode implementar a lógica de consulta ao banco de dados ou a uma API externa aqui

        // Supondo que você já tenha os dados das ofertas de crédito, você pode retorná-los em formato JSON
        $ofertas = [
            [
                'instituicaoFinanceira' => 'Banco A',
                'modalidadeCredito' => 'Empréstimo Pessoal',
                'valorAPagar' => 5000,
                'valorSolicitado' => 10000,
                'taxaJuros' => 0.1,
                'qntParcelas' => 12,
            ],
            [
                'instituicaoFinanceira' => 'Banco B',
                'modalidadeCredito' => 'Cartão de Crédito',
                'valorAPagar' => 2500,
                'valorSolicitado' => 5000,
                'taxaJuros' => 0.2,
                'qntParcelas' => 6,
            ],
            [
                'instituicaoFinanceira' => 'Banco C',
                'modalidadeCredito' => 'Financiamento Imobiliário',
                'valorAPagar' => 150000,
                'valorSolicitado' => 200000,
                'taxaJuros' => 0.05,
                'qntParcelas' => 240,
            ],
        ];

        return response()->json($ofertas);
    }

    public function simularOfertas($cpf, $ofertasSelecionadas)
    {
      

        $ofertasOrdenadas = []; // Array vazio para armazenar as ofertas ordenadas

        // Exemplo de lógica para selecionar até 3 ofertas e ordená-las por valor a pagar
        $ofertasSelecionadas = array_slice($ofertasSelecionadas, 0, 3); // Seleciona até 3 ofertas
        usort($ofertasSelecionadas, function ($a, $b) {
            return $a['valorAPagar'] - $b['valorAPagar'];
        }); // Ordena as ofertas pelo valor a pagar

        foreach ($ofertasSelecionadas as $oferta) {
            // Adicione as informações necessárias da oferta ao array de ofertas ordenadas
            $ofertasOrdenadas[] = [
                'instituicaoFinanceira' => $oferta['instituicaoFinanceira'],
                'modalidadeCredito' => $oferta['modalidadeCredito'],
                'valorAPagar' => $oferta['valorAPagar'],
                'valorSolicitado' => $oferta['valorSolicitado'],
                'taxaJuros' => $oferta['taxaJuros'],
                'qntParcelas' => $oferta['qntParcelas'],
            ];
        }

        return response()->json($ofertasOrdenadas);
    }
}
