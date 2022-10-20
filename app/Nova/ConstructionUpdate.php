<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Text;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Laravel\Nova\Panel;

class ConstructionUpdate extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\ConstructionUpdate::class;

    /**
     * Get the value that should be displayed to represent the resource.
     *
     * @return string
     */
    public function title()
    {
        $date = $this->date;

        $date = date_format($date, 'M Y');

        return $date;
    }

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Avance de obra');
    }

    public static function label()
    {
        return __('Avances de obra');
    }

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
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
            Date::make('Fecha de la Actualización', 'date')->required()->sortable(),
            Text::make('Descripción', 'description')->help('Pequeña descripción de lo que se hizo en la obra de construcción')->nullable(),
            Text::make('Description', 'description_en')->help('Pequeña descripción de lo que se hizo en la obra de construcción en INGLÉS')->nullable(),

            new Panel('Imágenes', $this->imageFields()),
        ];
    }

    protected function imageFields() {

        return [
            Images::make('Portada', 'portraitc')->hideFromIndex()->rules('required')->enableExistingMedia(),
            Images::make('Galería', 'galleryc')->hideFromIndex()/*->rules('required')*/->enableExistingMedia(),
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
