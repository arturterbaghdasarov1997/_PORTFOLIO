<?php
    function printAboutSection() : void {
        $aboutSection = [
            [
                'greeting' => "Hi, I'm",
                'name' => "Artur Ter-Baghdasarov",
                'text1' => "Front-End Developer",
                'text2' => "If you're a business owner ready to initiate a web development project with a freelance web developer or a developer seeking to collaborate on an exciting project, feel free to reach out to me. Let's team up and work together!",
            ]
        ];
        
        foreach ($aboutSection as $about) {
            echo '<div class="title">
                    <h2>' . $about['greeting'] . '</h2>
                    <span><h1>' . $about['name'] . '</h1></span>
                    <h2>' . $about['text1'] . '</h2>
                    <h3>' . $about['text2'] . '</h3>
                </div>';
        }
    }