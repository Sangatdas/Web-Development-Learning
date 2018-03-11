<?php
    session_start();
    $_SESSION['answer1']=$_POST['answer1'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cyber Security Question 1</title>
        <link rel="stylesheet" type="text/css" href="page.css">
        <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
    </head>
    <body>
        
        <div id="question">
            <div id="question-title">
                Question 2:
            </div>
            <div id="question-content">In computer security, &#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46; means that the information in a computer system only be accessible for reading by authorized parities. 
            </div>
            <form method=post action="question3.php" id="options">
            <div class="radio-input"><input type="radio" name="answer2" value="A"> A&#41; Confidentiality<br></div>
            <div class="radio-input"><input type="radio" name="answer2" value="B"> B&#41; Integrity<br></div>
            <div class="radio-input"><input type="radio" name="answer2" value="C"> C&#41; Availability<br></div>
            <div class="radio-input"><input type="radio" name="answer2" value="D"> D&#41; Authenticity</div>
            <a href="end.html"><input id="btn-next" type="submit" name="next" value="Next >>"></a>
            </form>
                    
        </div>
        
    
    </body>

</html>
