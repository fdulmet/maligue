<?php
namespace App\Http\Helpers\Classement;

use App\Equipe;

class Classer
{

    static public function getClasser()
    {
        $currentLigue = session('currentLigue');

        $equipes = $currentLigue->equipes()->get();
        $rangParPoints = [];

        foreach ($equipes as $equipe)
        {
            $data                   = new Data($equipe);

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
            $rangParPoints[$data->points][$data->diff][$data->butsPour][] = $equipe;
        }

        var_dump($rangParPoints);

        ksort($rangParPoints);// Sort by points

        var_dump($rangParPoints);

        foreach ($rangParPoints as $diff) {
            ksort($diff);
            foreach ($diff as $butsPour) {
                ksort($butsPour);
            }
        }

        dd($rangParPoints);

        function flatten(array $array)
        {
            $return = array();
            array_walk_recursive($array, function ($a) use (&$return) {
                $return[] = $a;
            });
            return $return;
        }

        $rangs = flatten($rangParPoints);
        $rangs = array_reverse($rangs);

        return $rangs;
    }
}