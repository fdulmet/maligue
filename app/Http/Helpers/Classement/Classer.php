<?php
namespace App\Http\Helpers\Classement;

use Illuminate\Support\Facades\DB;
use App\Equipe;

class _ClasserHelper
{
    public function __construct()
    {
    }

    public function getClasser()
    {
        $classementHelper = new ClassementHelper();
        $equipes = Equipe::all();
        $rangParPoints = [];
        foreach ($equipes as $equipe) {
            $gameStats = $classementHelper->getGamesStats($equipe);
            $points = $classementHelper->getPoints($gameStats['gagnes'], $gameStats['nuls']);
            $butsStats = $classementHelper->getButs($equipe);
            $diff = $butsStats['butsPour'] - $butsStats['butsContre'];

            //Rang
            if (!isset($rangParPoints[$points])) {
                $rangParPoints[$points] = [];
            }
            if (!isset($rangParPoints[$points][$diff])) {
                $rangParPoints[$points][$diff] = [];
            }
            if (!isset($rangParPoints[$points][$diff][$butsStats['butsPour']])) {
                $rangParPoints[$points][$diff][$butsStats['butsPour']] = [];
            }
            $rangParPoints[$points][$diff][$butsStats['butsPour']][] = $equipe;
        }

        ksort($rangParPoints);// Sort by points
        foreach ($rangParPoints as $diff) {
            ksort($diff);
            foreach ($diff as $butsPour) {
                ksort($butsPour);
            }
        }

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

        return ['rangs' => $rangs];
    }
}