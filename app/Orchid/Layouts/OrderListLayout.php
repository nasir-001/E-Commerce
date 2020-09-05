<?php

namespace App\Orchid\Layouts;

use App\Order;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class OrderListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'orders';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::set('name', 'Name')
                ->render(function (Order $order) {
                    return Link::make($order->user_id)
                        ->route('platform.order.edit', $order);
                }),

            TD::set('created_at', 'Created'),
        ];
    }
}
