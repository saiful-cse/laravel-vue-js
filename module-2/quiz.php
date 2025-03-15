<?php
function evaluateQuiz(array $questions, array $answers): int
{
    $score = 0;
    foreach ($questions as $index => $question) {
        if ($answers[$index] === $question['correct']) {
            $score++;
        }
    }
    return $score;
}

$questions = [
    [
        'question' => 'What is 2 + 2?',
        'correct' => '4'
    ],
    [
        'question' => 'What is the capital of France?',
        'correct' => 'Paris'
    ],
    [
        'question' => 'Who wrote "Hamlet"?',
        'correct' => 'Shakespeare'
    ]
];

$answers = [];

foreach ($questions as $index => $question) {
    echo ($index + 1) . '. ' . $question['question'] . "\n";
    $answers[] = trim(readline('Your answer: '));
}

$score = evaluateQuiz($questions, $answers);
echo "\nYour scored is: $score out of " . count($questions) . "\n";

if ($score === count($questions)) {
    echo "Excellent job\n";
} else if ($score > 1) {
    echo "Good Effort\n";
} else {
    echo "Your result is failed!!";
}
