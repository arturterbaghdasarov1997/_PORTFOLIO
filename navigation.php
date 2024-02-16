<?php
    function printNavigation() : void {
        $categories = [
            [
                'link' => '/Portfolio/index.php',
                'icon' => 'Assets/Home.png',
                'name' => 'Home',
            ],
            [
                'link' => '/2',
                'icon' => 'Assets/About.png',
                'name' => 'About',
            ],
            [
                'link' => '/3',
                'icon' => 'Assets/Skills.png',
                'name' => 'Skills',
            ],
            [
                'link' => '/4',
                'icon' => 'Assets/Contact.png',
                'name' => 'Contact',
            ],
            [
                'link' => 'https://drive.google.com/file/d/1wp1juNjFFHqBghsWTKE9P2zhkPFOuEkK/view?usp=sharing',
                'icon' => 'Assets/CV.png',
                'name' => 'CV',
            ],
        ];

        foreach ($categories as $category) {
            echo '<div class="navigation">
                    <div class="home">
                        <a href="' . $category['link'] . '"><img src="' . $category['icon'] . '" alt="home"></a>
                        <a href=""><h4>' . $category['name'] . '</h4></a>
                    </div>
                </div>';
        }
    }