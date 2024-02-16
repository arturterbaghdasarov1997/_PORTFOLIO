<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="./Assets/Logo.png">
    <?php
        require "navigation.php";
        require "about.php";
        require "skills.php";
        require "footer.php";
    ?>

</head>
<body>
    
    <!-- header -->
    <div class="header">
        <div class="logo">
            <a href="./index.php"><img src="./Assets/Logo.png" alt="logo"></a>
        </div>

        <div class="navigation">
            <?php
                printNavigation();
            ?>
        </div>
    </div>

    <!-- about me -->
    <div class="main-container" id="about">
        <div class="about-container">
            <div class="image">
                <img src="./Assets/Photo.jpeg" alt="me">
            </div>
            
            <div class="title">
                <?php
                    printAboutSection();
                ?>
            </div>
        </div>
    </div>

    <!-- skills -->
    <div class="second-container">
        <div class="skills-container" id="skills">
            <div class="skills">
                <?php
                    printSkills();
                ?>
            </div>
        </div>
    </div>

    <!-- footer -->
        <div class="footer">
            <?php
                printFooter()
            ?>
        </div>

</body>
</html>