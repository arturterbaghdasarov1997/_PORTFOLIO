<?php
    function printSkills() : void {
        $skillsSection = [
            [
                'skill' => "HTML",
                'percentage' => "80%",
            ],
            [
                'skill' => "CSS",
                'percentage' => "75%",
            ],
            [
                'skill' => "WordPress",
                'percentage' => "76%",
            ],
            [
                'skill' => "PHP",
                'percentage' => "10%",
            ],
        ];

        foreach ($skillsSection as $skills) {
            echo '<div class="skills">
                <h1>' . $skills['skill'] . ' <span>' . $skills['percentage'] . '</span></h1>
                </div>';
        }
    }