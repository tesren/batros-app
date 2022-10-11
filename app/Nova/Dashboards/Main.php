<?php

namespace App\Nova\Dashboards;

use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;
use App\Nova\Metrics\UnitsPerStatus;
use App\Nova\Metrics\MessagesReceived;
use App\Nova\Metrics\LowestUnitPrice;
use App\Nova\Metrics\SoldUnits;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new UnitsPerStatus,
            new LowestUnitPrice,
            new SoldUnits,
            new MessagesReceived,
        ];
    }

    /**
     * Get the displayable name of the dashboard.
     *
     * @return string
     */
    public function name()
    {
        return __('Panel Principal');
    }
}
