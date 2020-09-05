<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Order;
use App\User;
class OrderEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Order';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'This order';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [];
    }
}
