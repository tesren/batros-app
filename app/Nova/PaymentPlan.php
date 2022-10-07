<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Number;

class PaymentPlan extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\PaymentPlan::class;

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Plan de pagos');
    }

    public static function label()
    {
        return __('Planes de pagos');
    }

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Nombre', 'name')->rules('required', 'max:255'),
            Number::make('Descuento', 'discount')->min(0)->max(100)->sortable()->placeholder('Porcentaje de descuento')->displayUsing(
                function($value){
                    if($value != null){
                        return $value.'%';
                    }else{
                        return $value;
                    }
                }
            ),
            Number::make('Enganche', 'down_payment')->min(0)->max(100)->rules('required')->placeholder('Porcentaje de enganche')->sortable()->displayUsing(
                function($value){
                    return $value.'%';
                }
            ),
            Number::make('Porcentaje de Meses', 'months_percent')->min(0)->max(100)->sortable()->rules('required')->displayUsing(
                function($value){
                    return $value.'%';
                }
            ),
            Number::make('Cantidad de Meses', 'months_quantity')->sortable()->min(0)->max(100)->rules('required'),
            
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
