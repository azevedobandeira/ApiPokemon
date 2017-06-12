<?php

namespace SON\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use SON\Presenters\LanguagePresenter;
use SON\Repositories\LanguageRepository;
use SON\Models\Language;
use SON\Validators\LanguageValidator;

/**
 * Class LanguageRepositoryEloquent
 * @package namespace SON\Repositories;
 */
class LanguageRepositoryEloquent extends BaseRepository implements LanguageRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Language::class;
    }

    public function presenter()
    {
        return LanguagePresenter::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
