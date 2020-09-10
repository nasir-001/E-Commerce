<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Orchid\Layouts\OrderListLayout;
use App\Order;
use Orchid\Screen\Link;
use Orchid\Screen\Repository;

class OrderListScreen extends Screen
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
    public $description = 'All orders';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'orders' => Order::paginate(),
        ];
    }

    /**
     * Button commands.
     *
     * @return Action[]
     */
    public function commandBar(): array
    {
        return [
           
        ];
    }

    /**
     * Views.
     *
     * @return Layout[]
     */
    public function layout(): array
    {
        return [
            OrderListLayout::class
        ];
    }
}
