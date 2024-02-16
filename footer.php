<?php
    function printFooter() : void {
        $socials = [
            [
                'link' => 'https://www.facebook.com/arturterbaghdasarov/',
                'icon' => 'Assets/Facebook.png',
            ],
            [
                'link' => 'https://www.instagram.com/artur.ter_baghdasarov/',
                'icon' => 'Assets/Instagram.png',
            ],
            [
                'link' => 'https://www.linkedin.com/in/arturter-baghdasarov/',
                'icon' => 'Assets/LinkedIn.png',
            ],
            [
                'link' => 'https://github.com/arturterbaghdasarov1997',
                'icon' => 'Assets/Github.png',
            ],
        ];

        foreach ($socials as $social) {
            echo'<div class="footer">
                <a href="' . $social['link'] . '" target="_blank"><img src="' . $social['icon'] . '" alt="facebook"></a>
                </div>';
        }
    }