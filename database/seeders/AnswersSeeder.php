<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Answers;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     "name" => "Test User",
        //     "email" => "test@example.com",
        // ]);
        $answers = new Answers();
        $answers->answers = "Acima do esperado";
        $answers->status = 1;
        $answers->question_id = 1;
        $answers->value_answers = 1;
        $answers->save();

        $answers = new Answers();
        $answers->answers = "Dentro do esperado";
        $answers->status = 1;
        $answers->question_id = 1;
        $answers->value_answers = 1;
        $answers->save();

        $answers = new Answers();
        $answers->answers = "Abaixo do esperado";
        $answers->status = 1;
        $answers->question_id = 1;
        $answers->value_answers = 1;
        $answers->save();


        $answers = new Answers();
        $answers->answers = "Alto";
        $answers->status = 1;
        $answers->question_id = 2;
        $answers->value_answers = 1;
        $answers->save();

        $answers = new Answers();
        $answers->answers = "Médio";
        $answers->status = 1;
        $answers->question_id = 2;
        $answers->value_answers = 1;
        $answers->save();

        $answers = new Answers();
        $answers->answers = "Baixo";
        $answers->status = 1;
        $answers->question_id = 2;
        $answers->value_answers = 1;
        $answers->save();
        
        $answers = new Answers();
        $answers->answers = "Sim";
        $answers->status = 1;
        $answers->question_id = 3;
        $answers->value_answers = 1;
        $answers->save();

        $answers = new Answers();
        $answers->answers = "Não";
        $answers->status = 1;
        $answers->question_id = 3;
        $answers->value_answers = 1;

        $answers->save();

    }
}
