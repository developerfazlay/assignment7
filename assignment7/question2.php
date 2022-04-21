
<?php
$team_members = [
    [
        'name'    => 'Md. Fazlay Rabbi',
        'image'   => 'images/team1.jpg',
        'skill'   => 'Laravel Developer'
    ],
    [
        'name'    => 'Md. Shakil Ahamed',
        'image'   => 'images/team2.jpg',
        'skill'   => 'Wordpress Developer'
    ],
    [
        'name'    => 'Morium',
        'image'   => 'images/team3.jpg',
        'skill'   => 'Graphics Designer'
    ],
    [
        'name'    => 'I J Kheya',
        'image'   => 'images/team4.jpg',
        'skill'   => 'Digital Marketer'
    ],
    
    
];



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Team Member</title>
  </head>
  <body>




  <div class="container">
        <div class="team-header text-center mt-5">
            <h2>Our Team </h2>
        </div>
        <div class="row">
        <?php
        foreach ($team_members as  $singleMember) {
            
        ?>
            <div class="col-md-3 my-4">
                <div class="team">
                    <div class="team-body text-center">
                        <img class="img-thumbnail circle" src="<?php echo  $singleMember['image']; ?>" alt="">
                        <h4 class="my-3"><?php echo $singleMember['name']; ?></h4>
                        <h6> <?php echo $singleMember['skill']; ?> </h6>
                        
                    </div>
                </div>
            </div>
            <?php }?>
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