<?php
namespace App\Http\Helpers\Classement;

use App\Equipe;

class Classer
{

    static public function getClasser()
    {
        $currentLigue = session('currentLigue');

        $user = Auth::user();

        if ($user->email == 'bj.delorme@gmail.com')
        {

        }

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
            $rangParPoints[$data->points][$data->diff][$data->butsPour][] = $equipe;
        }

        ksort($rangParPoints); // Sort by points

        foreach ($rangParPoints as $i => $diff)
        {
            $diff = array_reverse($diff, true);
            $rangParPoints[$i] = $diff;
            foreach ($diff as $butsPour)
            {
                ksort($butsPour);
            }
        }

        $rangs = self::flatten($rangParPoints);

        $rangs = array_reverse($rangs);

        if ($user->email == 'bj.delorme@gmail.com')
        {
            dd($rangs);
        }

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