<?php
namespace App\Http\Helpers\Classement;

use App\Equipe;
use Illuminate\Support\Facades\Auth;

class Classer
{

    static public function getClasser()
    {
        $currentLigue = session('currentLigue');

        $equipes = $currentLigue->equipes()->get();
        $rangParPoints = [];

        foreach ($equipes as $equipe)
        {
            $data = new Data($equipe);

            //Rang
            if (!isset($rangParPoints[$data->points])) {
                $rangParPoints[$data->points] = [];
            }
            if (!isset($rangParPoints[$data->points][$data->diff])) {
                $rangParPoints[$data->points][$data->diff] = [];
            }
            if (!isset($rangParPoints[$data->points][$data->diff][$data->butsPour])) {
                $rangParPoints[$data->points][$data->diff][$data->butsPour] = [];
            }
            $rangParPoints[$data->points][$data->diff][$data->butsPour][] = $equipe->nom;
        }

        ksort($rangParPoints); // Sort by points

        foreach ($rangParPoints as $points => $diff)
        {
            krsort($diff);
            $diff = array_reverse($diff, true);
            $rangParPoints[$points] = $diff;
            echo '<pre>';
            var_dump($diff);
            echo '</pre>';
            foreach ($diff as $butsPour)
            {
                krsort($butsPour);
                echo '<pre>';
                var_dump($butsPour);
                echo '</pre>';
                $rangParPoints[$points][$diff] = $butsPour;
            }
            echo '<br>------------------------------------------<br>';
        }
        echo '<br>------------------------------------------<br>';
        echo '<br>------------------------------------------<br>';
        dd('fin');

        $rangs = self::flatten($rangParPoints);

        $rangs = array_reverse($rangs);

        return $rangs;
    }

    static public function flatten(array $array)
    {
        $return = array();
        array_walk_recursive($array, function ($a) use (&$return) {
            $return[] = $a;
        });
        return $return;
    }
}