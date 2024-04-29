<?php 
    $title = "Quizzes";
    $path = "../";

    include($path."assets/inc/header.php");
    include($path."assets/inc/nav.php");

    // Setting up our QUESTIONS from database
    $sql_questions = "SELECT * FROM `240quiz_questions`";

    // Get result
    $result = $conn->query($sql_questions) or die($conn->error.__LINE__);

    if ($result->num_rows > 0) {
?>

<div class="quiz-introduction">
    <h2>Welcome to the Unix Systems Tutorial Quiz!</h2>
    <p>This quiz consists of 10 questions related to Unix systems. Are you ready to start?</p>
    <button onclick="startQuiz()">Start Quiz</button>
</div>

<div class="quiz-container" style="display: none;">
    <h2>Quiz Time!</h2>
    <form action="#" method="post" id="quiz-form">
        <?php
        // Loop through each question and display it
        while ($question = $result->fetch_assoc()) {
        ?>
            <div class="question" id="<?php echo $question['question_number']; ?>">
                <p><?php echo $question['text']; ?></p>
                <?php
                    // Assuming you have choices stored in another table
                    // You need to replace '240quiz_choices' with the actual table name for choices
                    $sql_choices = "SELECT * FROM `240quiz_choices` WHERE question_number = {$question['question_number']}";
                    $choices_result = $conn->query($sql_choices) or die($conn->error.__LINE__);
                    // Loop through each choice and display it as a radio button
                    while ($choice = $choices_result->fetch_assoc()) {
                ?>
                        <input type="radio" id="<?php echo $choice['id']; ?>" name="question_<?php echo $question['question_number']; ?>" value="<?php echo $choice['id']; ?>" class="choice" <?php if ($choice['is_correct'] == 1) echo 'correct="1"'; else echo 'correct="0"'; ?>>
                        <label for="<?php echo $choice['id']; ?>"><?php echo $choice['text']; ?></label><br>
                <?php
                    }
                ?>
            </div>
        <?php
        }
        ?>
        <input type="submit" value="Submit" id="submit-btn">
    </form>
    <button onclick="resetQuiz()" id="try-again-btn" style="display: none;">Try Again</button>
    <p>Your Score: <span id="score">0</span>/<?php echo $result->num_rows; ?></p>
</div>

<script>
    function startQuiz() {
        document.querySelector('.quiz-introduction').style.display = 'none';
        document.querySelector('.quiz-container').style.display = 'block';
    }

    document.getElementById('quiz-form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission
        
        // Get all radio buttons with class 'choice'
        var choices = document.querySelectorAll('.choice');
        
        // Loop through each choice
        choices.forEach(function(choice) {
            var label = choice.nextElementSibling; // Get the label next to the choice
            var questionNumber = choice.getAttribute('name').split('_')[1]; // Extract question number from choice name attribute
            var selected = choice.checked; // Check if the choice is selected
            
            // Check if the choice is correct or incorrect based on the 'correct' attribute added to the choice input
            if (selected && choice.getAttribute('correct') === '1') {
                label.classList.add('correct'); // Add 'correct' class to label
            } else if (selected && choice.getAttribute('correct') === '0') {
                label.classList.add('incorrect'); // Add 'incorrect' class to label
            }
        });
        
        // Calculate and display score
        var score = document.querySelectorAll('.correct').length;
        document.getElementById('score').textContent = score;
        
        // Show the "Try Again" button
        document.getElementById('try-again-btn').style.display = 'inline-block';
    });

    function resetQuiz() {
        location.reload(); // Reload the page to reset the quiz
    }
</script>

<?php
    } else {
        echo "No questions found.";
    }

    include($path."assets/inc/footer.php");
?>
