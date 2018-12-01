<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 7/12/18
 * Time: 11:11 PM
 */

namespace App\Repository;


use App\User;

class UserRepository extends BaseRepository
{

    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function likeBy($param){
        return $this->model->newQuery()
            ->where('name','LIKE',"{$param}%")
            ->orWhere('email','LIKE',"{$param}%")
            ->limit(10)
            ->get()
            ;
    }
}