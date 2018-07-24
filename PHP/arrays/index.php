<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        // $familly = array( 'Dad', 'Mom' , 'Sis1', 'Sis2' ); 
        // print_r ($familly); 
        // echo "<br/>";
        // $fav_dishes = array('Pizza','lasagna','pasta','pudding' );
        // print_r ($fav_dishes);
        // echo "<br/>";
        // $fav_tv_shows = array('HIMYM', 'Banshee', 'White Collar' );
        // print_r ($fav_tv_shows);
        // echo "<br/>";
        // echo  'My favorite show is ' . $fav_tv_shows [1];

        //-------------------------------------------------------------
        
        // $moi = array (
        //     'prenom' => ' Mohamed Ali ',
        //     'nom' => 'Nadir',
        //     'age' => 24,
        //     'aime_le_sport' => false,
        //     $hobbies = array('sleeping', 'Gaming', 'Binge watching tv shows', 'coding' ),
        //     'papa' => $papa
        //     );
        // $papa = array (
        //     'prenom' => ' Mohamed',
        //     'nom' => 'Nadir',
        //     'age' => 67,
        //     'aime_le_sport' => true,
        //     $hobbies = array('Sports', 'Politics', 'talking to people', 'medecin')
        // );  

        // echo '<pre>';
        // print_r($moi);
        // echo '</pre>';

        //------------------------------------------------------------------------------------

  
        // $moi['nom'] = 'someone';
        // array_push($moi['hobbies'], 'hobby');
        // $nbr_hobbies_papa = count($papa['hobbies']);
        // $nbr_hobbies_moi = count($moi['hobbies']);
        // echo $nbr_hobbies_papa;
        // echo "<br>";
        // echo $nbr_hobbies_moi;
        // echo "<br>";
        // echo $nbr_hobbies_moi + $nbr_hobbies_papa ;
         ?>
        <?php
        // echo'<pre>';
        // print_r($moi);
        // echo'</pre>';
        ?>

            <pre><?php  print_r($web_development);?></pre><?php
            array_push($web_development['frontend'], 'xhtml');
            ?> <pre><?php print_r($web_development) ;?></pre><?php
            array_push($web_development['backend'], 'Ruby on Rails');
            ?> <pre><?php print_r($web_development); ?></pre><?php
            array_push($web_development['frontend'], 'CSS');
            ?> <pre><?php print_r($web_development); ?></pre><?php
            array_push($web_development['backend'], 'Flash');
            ?> <pre><?php print_r($web_development); ?></pre><?php
            array_push($web_development['frontend'], 'Javascript');
            array_push($web_development['backend'], 'Javascript');
            ?> <pre><?php print_r($web_development); ?></pre><?php
            $web_development['frontend'][0] = 'html';
            ?> <pre><?php print_r($web_development); ?></pre><?php
            array_splice($web_development['backend'],1,1);
            ?> <pre><?php print_r($web_development); ?></pre><?php
    ?>

    
</body>
</html>