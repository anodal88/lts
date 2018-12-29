<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 7/12/18
 * Time: 11:11 PM
 */

namespace App\Repository;


use App\IntegrationHub\Vendors\Sabre\SabrePropertyProxy;
use App\SabreConnectionPoolToken;

class SabreConnectionPoolTokenRepository extends BaseRepository
{
    const DEADLINE_IN_SECONDS=300; // 5 minutes

    /** @var SabreConnectionPoolToken */
    protected $model;

    public function __construct(SabreConnectionPoolToken $model)
    {
        $this->model = $model;
    }

    /**
     * Delete all expired Connections
     * @return int|mixed
     * @throws \Exception
     */
    public function deleteExpiredConnections()
    {
        $now = (new \DateTime())->format('Y-m-d H:i:s');

        return $this->model::query()
            ->whereRaw("DATE_ADD(updated_at, INTERVAL ? SECOND) <= ? ", [
                SabreConnectionPoolToken::CONNECTION_LIFE_TIME_IN_SECONDS,
                $now
                ])->delete();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     * @throws \Exception
     */
    public function getConnectionsAlive()
    {
        $now = (new \DateTime())->format('Y-m-d H:i:s');
        return $this->model::query()
            ->whereRaw("DATE_ADD(updated_at, INTERVAL ? SECOND) > ? ", [
                SabreConnectionPoolToken::CONNECTION_LIFE_TIME_IN_SECONDS,
                $now,
                ])->get();
    }

    /**
     * Return a collections of the tokens that needs to be refreshed
     * The function returns the tokens alive that will expire in the next five minutes
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     * @throws \Exception
     */
    public function getConnectionsExpiring(\DateTime $nextRun){
        $nextRun = $nextRun->format('Y-m-d H:i:s');
        $now = (new \DateTime())->format('Y-m-d H:i:s');
        return $this->model::query()
            ->whereRaw("DATE_ADD(updated_at, INTERVAL ? SECOND ) <= ?",
                [
                    SabreConnectionPoolToken::CONNECTION_LIFE_TIME_IN_SECONDS - self::DEADLINE_IN_SECONDS,
                    $nextRun
                ])
            //->where('in_use',false)
            ->get();
    }
}