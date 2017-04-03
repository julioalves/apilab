<?php

namespace App\Repositories;

use App\Models\User;
use InfyOm\Generator\Common\BaseRepository;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Traits\CacheableRepository;

class UserRepository extends BaseRepository implements CacheableInterface
{
    use CacheableRepository;
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    protected $cacheMinutes = 90;

    protected $cacheOnly = ['all'];


    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }
}
