<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 7/12/18
 * Time: 11:08 PM
 */

namespace App\Repository;



use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    protected $model;
    /**
     * BaseRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function findOneBy($column, $value){
        return $this->model::query()->where($column,$value)->first();
    }
}