<?php

use App\Model\Question;
use Illuminate\Database\Seeder;


class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = "what is the capital of finland?";
        $answer = "Helsinkli";
        Question::create(['question' => $question,'answer'=>$answer]);
    }
}
