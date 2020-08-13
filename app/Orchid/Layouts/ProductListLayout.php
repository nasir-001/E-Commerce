<?php

namespace App\Orchid\Layouts;

use App\Product;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;

class ProductListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'products';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::set('name', 'Name')
                ->render(function(Product $product){
                    return Link::make($product->name)
                        ->route('platform.product.edit', $product);
                }),

            TD::set('slug', 'title'),
            TD::set('price', 'Prices'),
            TD::set('details', 'Details'),
            TD::set('description', 'Descriptions'),
            TD::set('created_at', 'Created'),
            TD::set('updated_at', 'Last edit'),
        ];
    }
}
