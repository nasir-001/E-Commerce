<?php

namespace App\Orchid\Screens;

use App\Product;
use Orchid\Screen\Screen;

use Orchid\Screen\Layout;
use Orchid\Screen\Actions\Button;
use App\Order;
use App\OrderProduct;
use App\User;
class OrderEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'This Order';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All the details for this product.';

    /**
     * @var bool
     */
    public $exists = false;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Order $order): array
    {
        return [
            'order' => $order,
        ];
    }

    public function queries(OrderProduct $orderproduct): array
    {
        return [
            'orderproduct' => $orderproduct
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
            Button::make('Ship')
                ->icon('icon-paper-plane')
                ->method('shippedProduct')
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
            Layout::view('pages.order'),
        ];
    }
}
