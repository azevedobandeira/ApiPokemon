<?php

namespace SON\Presenters;

use SON\Transformers\LanguageTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class LanguagePresenter
 *
 * @package namespace SON\Presenters;
 */
class LanguagePresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new LanguageTransformer();
    }
}
