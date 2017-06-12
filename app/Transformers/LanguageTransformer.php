<?php

namespace SON\Transformers;

use League\Fractal\TransformerAbstract;
use SON\Models\Language;

/**
 * Class LanguageTransformer
 * @package namespace SON\Transformers;
 */
class LanguageTransformer extends TransformerAbstract
{

    /**
     * Transform the \Language entity
     * @param \Language $model
     *
     * @return array
     */
    public function transform(Language $model)
    {
        return [
            'id'         => (int) $model->id,
            'choes'      => (String)$model->choes,
            'votes'      => (float)$model->votes,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
