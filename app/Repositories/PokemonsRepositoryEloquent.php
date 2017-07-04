<?php

namespace SON\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use SON\Presenters\PokemonsPresenter;
use SON\Repositories\PokemonsRepository;
use SON\Models\Pokemons;


/**
 * Class PokemonsRepositoryEloquent
 * @package namespace SON\Repositories;
 */
class PokemonsRepositoryEloquent extends BaseRepository implements PokemonsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Pokemons::class;
    }

    public function presenter()
    {
        return PokemonsPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
