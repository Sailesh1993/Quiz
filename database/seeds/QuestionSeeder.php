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
       $question= "what is the capital city of Nepal?";
       $answer= "Kathmandu";
       $questionArray =array("question"=>"$question","answer"=>"$answer");

       Question::create($questionArray);
    }
}

