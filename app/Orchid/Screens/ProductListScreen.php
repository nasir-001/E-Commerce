<?php

namespace App\Orchid\Screens;

use App\Product;
use App\Orchid\Layouts\ProductListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class ProductListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Products';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All Products';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'products' => Product::paginate()
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
            Link::make('Created New')
                ->icon('icon-pencil')
                ->route('platform.product.list')
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
            ProductListLayout::class
        ];
    }
}
