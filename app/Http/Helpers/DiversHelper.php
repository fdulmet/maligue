<?php
namespace App\Http\Helpers;

use App\Equipe;
use App\Season;
use App\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Auth;

class DiversHelper
{
    private $user;
    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function carbon()
    {
        //Carbon date pour déterminer prochain match
        $carbon = Carbon::now('Europe/Paris');
        //$carbon2= date('Y-m-d', strtotime($carbon));
        $carbonStrtotime = strtotime($carbon);
        return $carbonStrtotime;
    }
}
