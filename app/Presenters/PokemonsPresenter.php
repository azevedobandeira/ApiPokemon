<?php

namespace SON\Presenters;

use SON\Transformers\PokemonsTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class PokemonsPresenter
 *
 * @package namespace SON\Presenters;
 */
class PokemonsPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PokemonsTransformer();
    }
}
