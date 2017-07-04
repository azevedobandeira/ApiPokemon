<?php

namespace SON\Transformers;

use League\Fractal\TransformerAbstract;
use SON\Models\Pokemons;

/**
 * Class PokemonsTransformer
 * @package namespace SON\Transformers;
 */
class PokemonsTransformer extends TransformerAbstract
{

    /**
     * Transform the \Pokemons entity
     * @param \Pokemons $model
     *
     * @return array
     */
    public function transform(Pokemons $model)
    {
        return [
            'id'          => (int)    $model->id,
            'name'        => (string) $model->name,
            'tipo'        => (string) $model->tipo,
            'poderatack'  => (int)    $model->poderatack,
            'poderdefesa' => (int)    $model->poderdefesa,
            'agilidade'   => (int)    $model->agilidade

        ];
    }

}
