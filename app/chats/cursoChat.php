<?php
namespace App\Chats;
use App\Models\Curso;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class cursoChat
{
    public function hold(): \ArielMejiaDev\LarapexCharts\LarapexChart
    {
        $cursos = Curso::all();

        $qtdTurmas = []
        $nomeCursos = [];
        





        return (new LarapexChart)->setType('bar')
            ->setTitle('Valores dos Cursos')
            ->setSubtitle('Valores em Reais')
            ->addData('Valor', $data)
            ->setXAxis($labels);
    }
}
