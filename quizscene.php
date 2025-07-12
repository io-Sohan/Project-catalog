<?php

$questions = [
    ['questions' => 'What is 4+2? ', 'correct'=>'6'],
    ['questions' => 'What is the capital of Bangladesh? ', 'correct'=>'Dhaka'],
    ['questions' => 'What is the national animal of Bangladesh? ', 'correct'=>'Tiger'],
];



$answers = [] ;

foreach($questions as $index => $question)
{
    echo ($index + 1). "." .$question['questions']."/n";
    $answers[] = trim(readline("Your Answer: " ));

}


function evaluateQuiz(array $questions, array $answers)
{
$score = 0 ;
foreach ($questions as $index => $question) {
    
    if ($answers[$index] === $question['correct']) {
        $score++;
    }
}
return $score;

}

$myScore = evaluateQuiz($questions , $answers);

echo "|n You Scored out $myScore out of ". count($questions)."./n";

if ($myScore === count($questions)) {
    echo "Excellent job";
}elseif ($myScore >= 1) {
    echo "Good Effort";
}else{
    echo "Your Result is fail.Try again latter.";
}