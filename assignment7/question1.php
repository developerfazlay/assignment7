<?php

$questionSet = [
 [
    'question' => 'Question No 1?',
    'options' => [
    'answer 1', 'answer 2', 'answer 3', 'answer 4'
    ]

],
[
    'question' => 'Question No 2?',
    'options' => [
    'answer 1', 'answer 2', 'answer 3', 'answer 4'
    ]

],
[
    'question' => 'Question No 3?',
    'options' => [
    'answer 1', 'answer 2', 'answer 3', 'answer 4'
    ]

],
[
    'question' => 'Question No 4?',
    'options' => [
    'answer 1', 'answer 2', 'answer 3', 'answer 4'
    ]

],
[
    'question' => 'Question No 5?',
    'options' => [
    'answer 1', 'answer 2', 'answer 3', 'answer 4'
    ]

],
[
    'question' => 'Question No 6?',
    'options' => [
    'answer 1', 'answer 2', 'answer 3', 'answer 4'
    ]

],
[
    'question' => 'Question No 7?',
    'options' => [
    'answer 1', 'answer 2', 'answer 3', 'answer 4'
    ]

],
[
    'question' => 'Question No 8?',
    'options' => [
    'answer 1', 'answer 2', 'answer 3', 'answer 4'
    ]

],
[
    'question' => 'Question No 9?',
    'options' => [
    'answer 1', 'answer 2', 'answer 3', 'answer 4'
    ]

],
[
    'question' => 'Question No 10?',
    'options' => [
    'answer 1', 'answer 2', 'answer 3', 'answer 4'
    ]

],


    

];

// Randomize
shuffle($questionSet);



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Question No 1</title>
  </head>
  <body>
    


  <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 my-5">
              <div class="card">
                  <div class="card-header text-center">
                      <h3>Assignment No #1</h3>
                      <p>Choice the correct answer.</p>
                  </div>
                  <div class="card-body question-answer-area">
                    
                    <?php 
                    
                    foreach ($questionSet as $key => $singleQuestion) {
                    ?>
                        <div class="question-internal mb-5">
                            <h4><span><?php echo ++$key; ?>-</span> <?php echo $singleQuestion['question']; ?> 
                            </h4>                   
                            <?php 
                            foreach( $singleQuestion['options'] as $singleAnswer ){ 
                            ?>
                            <div class="form-check">
                                <label class="form-check-label"> <input class="form-check-input" type="radio" name="ans_list" value="<?php echo $singleAnswer; ?>" > <?php echo $singleAnswer; ?> </label>
                            </div>

                            <?php } ?>
                            
                            
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                  
              </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>