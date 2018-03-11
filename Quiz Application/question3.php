<?php
    session_start();
    $_SESSION['answer2']=$_POST['answer2'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cyber Security Question 1</title>
        <link rel="stylesheet" type="text/css" href="page.css">
    </head>
    <body>
        
        <div id="question">
            <div id="question-title">
                Question 3:
            </div>
            <div id="question-content">The type of threats on the security of a computer system or network are &#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;&#46;
                    <br>i&#41; Interruption                  ii&#41; Interception                  iii&#41; Modification
                    <br>iv&#41; Creation                      v&#41; Fabrication 
            </div>
            <form method=post action="score.php" id="options">
            <div class="radio-input"><input type="radio" name="answer3" value="A"> A&#41; i, ii, iii and iv only<br></div>
            <div class="radio-input"><input type="radio" name="answer3" value="B"> B&#41; ii, iii, iv and v only<br></div>
            <div class="radio-input"><input type="radio" name="answer3" value="C"> C&#41; i, ii, iii and v only<br></div>
            <div class="radio-input"><input type="radio" name="answer3" value="D"> D&#41; All i, ii, iii, iv and v</div>
            <a href="end.html"><input id="btn-next" type="submit" name="next" value="Next >>"></a>
            </form>
            
        </div>
       
    
    </body>

</html>