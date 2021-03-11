<?php

namespace App\Faker;

use Faker\Provider\Base;

class CustomProvider extends Base
{
    public function poste()
            {
            $poste=array('avant', 'arrière','centr' ,'remplaçant');
            $rdm = rand(0,3);

            return($poste[$rdm]);
    
            }
}

