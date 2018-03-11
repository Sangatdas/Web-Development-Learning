<?php
    session_start();
    $answer1 = $_SESSION['answer1'];
    $answer2 = $_SESSION['answer2'];
    $answer3 = $_POST['answer3'];
?>
<html>
    <head>
        <style type="text/css">
            body
            {
                background-color: black;
            }
            #page-head
            {
                font-size: 80px;
                color:white;
                text-align: center;
            }
            .question-answer
            {
                background-color: white;
                color: #EA4522;
                font-weight: bold;
                width: 60%;
                margin-left: auto;
                margin-right: auto;
                padding: 10px;
                font-size: 125%;
                border-radius: 10px;
                margin-top: 10px;
            }
            #score
            {
                float: right;
                color: white;
                width: 150px;
                height: 50px;
                font-size: 200%;
                font-weight: bold;
            }
        </style>
    </head>
    <?php
        $score=0;
        if($answer1=="B")
            $score++;
        if($answer2=="A")
            $score++;
        if($answer3=="C")
            $score++;
    ?>
    <body>
        <div id="page-head">Answers:</div>
        <hr>
        <div id="score">Your score: <?php echo $score?></div>
        <br><br><br><br>
        <div class="question-answer">1.In computer security, &#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46; means that computer system assets can be modified only by authorized parities.
        <p>Right Answer: B</p>
        <p>Your Answer: <?php echo $answer1?></p>
        </div>
        <div class="question-answer">2.In computer security, &#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46; means that the information in a computer system only be accessible for reading by authorized parities.
        <p>Right Answer: A</p>
        <p>Your Answer: <?php echo $answer2?></p>
        </div>
        <div class="question-answer">3.The type of threats on the security of a computer system or network are &#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;
        <p>Right Answer: C</p>
        <p>Your Answer: <?php echo $answer3?></p>
        </div>
    </body>

</html>