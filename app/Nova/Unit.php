<?php

namespace App\Nova;

use App\Nova\Shape;
use App\Nova\Section;
use Laravel\Nova\Panel;
use App\Nova\PaymentPlan;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Tag;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\BelongsTo;
use App\Nova\Actions\ChangeUnitView;
use Laravel\Nova\Fields\BelongsToMany;
use App\Nova\Actions\AssignPaymentPlan;
use Laravel\Nova\Http\Requests\NovaRequest;
use Ebess\AdvancedNovaMediaLibrary\Fields\Files;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;

class Unit extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Unit::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * Get the displayable singular label of the resource.
     *
     * @return string
     */
    public static function singularLabel()
    {
        return __('Unidad');
    }

    public static function label()
    {
        return __('Unidades');
    }

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
            ID::make()->sortable()->hideFromDetail(),

            Text::make('Unidad', 'name')->rules('required', 'max:50')->sortable()->creationRules('unique:units,name')->updateRules('unique:units,name,{{resourceId}}')
            ->displayUsing(
                function($value){
                    return $value.' - '.$this->bedrooms.' BR - '.$this->bathrooms.' BA - '.$this->area.'m²';
                }
            ),

            BelongsTo::make('Vista de la Unidad', 'section', Section::class)->withoutTrashed()->rules('required')->hideFromIndex()->filterable(),
            Number::make('Recámaras', 'bedrooms')->rules('required')->min(0)->max(15)->hideFromIndex(),
            Boolean::make('Flexroom', 'flexroom')->help('Marque la casilla si la unidad cuenta con un Flexroom')->hideFromIndex(),
            Number::make('Baños', 'bathrooms')->rules('required')->min(0)->max(15)->hideFromIndex(),
            Number::make('Piso', 'floor')->rules('required')->min(0)->max(15)->sortable(),
            
            Number::make('Construcción total', 'area')->rules('required')->min(0)->step(0.01)->hideFromIndex()->help('El área total de la unidad en metros cuadrados')
            ->displayUsing(
                function($value){
                    return $value.' m²';
                }
            ),

            Number::make('Precio', 'price')->rules('required')->min(0)->step(0.01)->sortable()
            ->displayUsing(
                function($value){
                    return '$'.number_format($value,2).' '.$this->currency;
                }
            ),

            Select::make('Moneda', 'currency')->options([
                'USD' => 'USD',
                'MXN' => 'MXN',
            ])->rules('required')->default('MXN')->onlyOnForms(),

            Select::make('Estatus', 'status')->options([
                'Disponible' => 'Disponible',
                'Apartada' => 'Apartada',
                'Vendida' => 'Vendida',
            ])->rules('required')->default('Disponible')->onlyOnForms()->filterable(),

            Badge::make('Estatus', 'status')->map([
                'Vendida' => 'danger',
                'Disponible' => 'success',
                'Apartada' => 'warning',
            ])->sortable(),

            new Panel('Imágenes', $this->imageFields()),
            
            URL::make('Tour Virtual', 'virtual_tour')->displayUsing(fn () => $this->virtual_tour)->hideFromIndex()->placeholder('Pegue solamente el link del Tour Virtual de la Unidad'),

            //BelongsToMany::make('Planes de pago', 'paymentPlans', PaymentPlan::class),

            Tag::make('Planes de pago', 'paymentPlans', PaymentPlan::class)->hideFromIndex(),

            HasOne::make('Polígono', 'shape', Shape::class),

     ];
    }

    protected function imageFields() {

        return [
            Images::make('Portada', 'portrait')->hideFromIndex()/*->rules('required')*/->enableExistingMedia(),
            Images::make('Isométrico', 'isometric')->hideFromIndex()/*->rules('required')*/->enableExistingMedia(),
            Images::make('Galería', 'gallery')->hideFromIndex()/*->rules('required')*/->enableExistingMedia(),
            Images::make('Ubicación en planta', 'floor')->hideFromIndex()/*->rules('required')*/->enableExistingMedia(),
            Images::make('Planos de la unidad', 'blueprint')->hideFromIndex()/*->rules('required')*/->enableExistingMedia(),

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
        return [
            new ChangeUnitView,
            new AssignPaymentPlan,
        ];
    }
}
