<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AvaliacaoDesempenho;

class AvaliacaoDesempenhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $avaliacaoDesempenho = new AvaliacaoDesempenho();
        $avaliacaoDesempenho->questions = "Como foram as entregas deste(a) colaborador(a) de um modo geral?";
        $avaliacaoDesempenho->status = 1;
        $avaliacaoDesempenho->typeTest = 1;
        $avaliacaoDesempenho->save();

        $avaliacaoDesempenho->questions = "As entregas no último semestre foram realizadas dentro do prazo planejado?";
        $avaliacaoDesempenho->status = 1;
        $avaliacaoDesempenho->typeTest = 1;
        $avaliacaoDesempenho->save();


        $avaliacaoDesempenho->questions = "As entregas no último semestre foram realizadas com a qualidade esperada?";
        $avaliacaoDesempenho->status = 1;
        $avaliacaoDesempenho->typeTest = 1;
        $avaliacaoDesempenho->save();

        $avaliacaoDesempenho->questions = "O(a) colaborador(a) possui participação ativa nas atividades em equipe?";
        $avaliacaoDesempenho->status = 1;
        $avaliacaoDesempenho->typeTest = 1;
        $avaliacaoDesempenho->save();
    }
}
