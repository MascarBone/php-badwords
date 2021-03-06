<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" href="data:,"> -->
    <link rel="icon" type="image/png" href="favicon.png"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Php Badwords</title>
</head>
<body>
    <h1 class="text-center">First page with Php</h1>

    <!-- Variable with a paragraph saved -->
    <?php
        // \n Doesn't work on the string saved; 
        $paragraph = "If you’re here to find out more about Back 4 Blood, you’re in the right place!
        \nBack 4 Blood is a first-person co-op zombie shooter brought to you by Turtle Rock Studios and WB Games. The Back 4 Blood story takes place after a catastrophic outbreak where most of humanity has either been killed or infected by the parasitic Devil Worm. Hardened by unspeakable events and emboldened to fight for the last of humanity, a group of apocalypse veterans called the Cleaners have rallied to take on the infected horrors known as the Ridden and reclaim the world. Back 4 Blood features thrilling, dynamic moment-to-moment gameplay and highly variable, customizable action to keep players coming back for more.
        \nThis is the hub for all things Back 4 Blood, so please check back often for updates and be sure to follow us on our socials for more news and updates";
    ?>   

    <!-- First STEP -->
    <h2 class="text-center">Printing the paragraph</h2>
    <p>
        <?php
            echo $paragraph;
        ?>
    </p>
    
    <p class="text-center">
        <span>Lenght of the paragraph: </span>
        <?php
            echo strlen($paragraph);
        ?>
    </p>
    
    <!-- Second STEP -->
    <?php
        $censuredWord = $_GET['word'];
    ?>
    <h2 class="text-center">Printing the censured paragraph</h2>

    <h3 class="text-center">
        <?php
            echo "censured word: " . $censuredWord;
        ?>
    </h3>
    <p>
        <?php
            // echo $paragraph;
            
            // $newParagraph = str_replace($_GET['word'], "***", $paragraph);
            $newParagraph = str_replace($censuredWord, "***", $paragraph);

            echo $newParagraph;
    
        ?>
    </p>
    
    <p class="text-center">
        <span>Lenght of the paragraph: </span>
        <?php
            echo strlen($newParagraph);
        ?>
    </p>

</body>
</html>