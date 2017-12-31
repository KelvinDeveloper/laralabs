<?php

namespace CodeBuilder\Http\Controllers;

class CodeBuilderController
{
    public static function loadModel ($model)
    {
        if (is_string($model)) {

            $model = camel_case($model);
            $model = str_singular($model);
            $model = \ucfirst($model);

            $model = "App\\{$model}";

            if (! class_exists($model)) return abort(404);

            return new $model;
        }

        return $model;
    }
}