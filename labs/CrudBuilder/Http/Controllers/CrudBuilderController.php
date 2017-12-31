<?php

namespace CrudBuilder\Http\Controllers;

use CodeBuilder\Http\Controllers\CodeBuilderController;
use Illuminate\Http\Request;

abstract class CrudBuilderController extends CodeBuilderController
{
    /**
     * Showing record
     *
     * @param $model object
     *
     * @return object
     * */
    public static function index ($model, $id=false)
    {
        $model = self::loadModel($model);

        if($id) return $model->find($id);

        return $model->get();
    }

    /**
     * Store record
     *
     * @param $request \Illuminate\Http\Request
     * @param $model object
     *
     * @return object
     * */
    public static function save (Request $request, $model, $id=false)
    {
        $model = self::loadModel($model);

        if ($id) $model->find($id);

        $model->fill($request->all());
        $model->save();

        return $model;
    }

    /**
     * Delete record
     *
     * @param $model object
     * @param $id integer
     *
     * @return object
     * */
    public static function delete ($model, $id)
    {
        $model = self::loadModel($model);
        $model->find($id)->delete;

        return $model;
    }
}