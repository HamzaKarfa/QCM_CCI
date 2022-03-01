<?php 



class Qcm
{
    private $questions = [];


    public function getQuestions()
    {
        return $this->questions;
    }

    public function addQuestion(Question $question)
    {
        array_push($this->questions, $question);
    }




    public function setAppreciation() {
        return '';
    }
}