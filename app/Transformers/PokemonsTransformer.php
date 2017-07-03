<?php

namespace SON\Transformers;

use League\Fractal\TransformerAbstract;
use SON\Models\Language;
use SON\Models\Question;

/**
 * Class QuestionTransformer
 * @package namespace SON\Transformers;
 */
class QuestionTransformer extends TransformerAbstract
{

    /**
     * Transform the \Question entity
     * @param \Question $model
     *
     * @return array
     */
    public function transform(Question $model)
    {
        return [
            'id'         => (int) $model->id,
            'name'       => (string) $model->name,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }

}
