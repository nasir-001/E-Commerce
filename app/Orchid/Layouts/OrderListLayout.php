<?php

namespace App\Orchid\Layouts;

use App\Order;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Support\Color;

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
            TD::set('name', 'Customer')
                ->render(function (Order $order) {
                    return Link::make($order->billing_first_name)
                        ->route('platform.order.edit', $order);
                }),
            
            TD::set('billing_email', 'Email'),
            TD::set('created_at', 'Order time'),
            TD::set('billing_total', 'Amount'),
            TD::set('billing_address', 'Address'),
            TD::set('billing_phone', 'Phone'),
            TD::set('billing_city', 'City'),
            TD::set('billing_town', 'Town'),
            TD::set('billing_postalcode', 'Zip Code'),
        ];
    }
}
