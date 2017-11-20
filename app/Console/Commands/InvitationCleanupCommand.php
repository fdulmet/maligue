<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Invitation;
use DB;

class InvitationCleanupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'invitation:cleanup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clean old invitations';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $invitations = Invitation::
          where('consumed', '=', true)
//          ->orwhereDate('created_at', '<', DB::raw('CURDATE() - INTERVAL 30 DAY'))
          ->delete();

    }
}
