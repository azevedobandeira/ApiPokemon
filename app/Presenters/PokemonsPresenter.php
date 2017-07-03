<?php

namespace SON\Presenters;

use SON\Transformers\QuestionTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class QuestionPresenter
 *
 * @package namespace SON\Presenters;
 */
class QuestionPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new QuestionTransformer();
    }
}
