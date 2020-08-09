<?php

namespace IbrahemKamal\JsonField;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class JsonField extends Field
{

    public function __construct($attribute = null, $resolveCallback = null)
    {
        parent::__construct($attribute,$resolveCallback);
        $this->withMeta([
            'mode' => 'code',
            'expandedOnStart' => false,
            'defaultJson' => (object) [],
        ]);
    }
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'JsonField';

    protected function fillAttributeFromRequest(
        NovaRequest $request,
        $requestAttribute,
        $model,
        $attribute
    ) {
        // decoding the input so we can use the laravel casts
        if ($request->exists($requestAttribute)) {
            $model->{$attribute} = json_decode($request->get($requestAttribute));
        }
    }

    public function mode(string $mode)
    {
        return $this->withMeta(['mode' => $mode]);
    }
    public function expandedOnStart(bool $expandedOnStart)
    {
        return $this->withMeta(['expandedOnStart' => $expandedOnStart]);
    }
    public function defaultJsonPath(string $defaultJson)
    {
        return $this->withMeta(['defaultJson' => (object) json_decode(file_get_contents($defaultJson))]);
    }
}
