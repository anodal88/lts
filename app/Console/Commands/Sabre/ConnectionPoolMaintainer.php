<?php

namespace App\Console\Commands\Sabre;

use App\Repository\SabreConnectionPoolTokenRepository;
use Illuminate\Console\Command;

class ConnectionPoolMaintainer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sabre:connection-pool:maintainer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "This command is the responsible to keep all security token created previously alive to save time and resources with the integration.";

    /** @var SabreConnectionPoolTokenRepository  */
    protected $repository;
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(SabreConnectionPoolTokenRepository $repo)
    {
        parent::__construct();
        $this->repository=$repo;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $deletedExpiredConnections = $this->repository->deleteExpiredConnections();
        $this->info("{$deletedExpiredConnections} connection(s) expired pruned.");
        $connectionsAlive = $this->repository->getConnectionsAlive();
        $this->info(count($connectionsAlive)." connection(s) alive.");
        $nextRun = (new \DateTime())->modify("+5 minutes");
        $connectionsExpiringForNextRun = $this->repository->getConnectionsExpiring($nextRun);
        $this->info(count($connectionsExpiringForNextRun)." connection(s) expiring at ".$nextRun->format("Y-m-d H:i:s").".");
    }
}
