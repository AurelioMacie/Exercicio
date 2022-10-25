<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserEntityRepository;
use App\Entities\UserEntity;
use App\Validators\UserEntityValidator;

/**
 * Class UserEntityRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserEntityRepositoryEloquent extends BaseRepository implements UserEntityRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserEntity::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return UserEntityValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
