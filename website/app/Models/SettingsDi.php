<?php // app/Models/TutorialDi.php

namespace TopCaster\app\Models;

use Vectorface\SnappyRouter\Di\Di;

class SettingsDi extends Di
{

    public function __construct()
    {
        parent::__construct($this->getDiArray());
    }

    protected function getDiArray()
    {
        return array(
            'projectTitle' => function(Di $di) {
                return 'TopCaster';
            }
        );
    }
}