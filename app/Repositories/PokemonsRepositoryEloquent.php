<?php

namespace SON\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use SON\Presenters\QuestionPresenter;
use SON\Repositories\QuestionRepository;
use SON\Models\Question;
use SON\Validators\QuestionValidator;

/**
 * Class QuestionRepositoryEloquent
 * @package namespace SON\Repositories;
 */
class QuestionRepositoryEloquent extends BaseRepository implements QuestionRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Question::class;
    }

    public function presenter()
    {
        return QuestionPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
