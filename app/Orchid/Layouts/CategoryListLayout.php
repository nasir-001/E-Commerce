<?php

namespace App\Orchid\Layouts;

use App\Category;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;

class CategoryListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        /**
        * @return TD[]
        */
        return [
            TD::set('name', 'Name')
                ->render(function(Category $category){
                    return Link::make($category->name, $category->slug)
                        ->route('platform.category.edit', $category);
                }),
            
            TD::set('created_at', 'Created'),
            TD::set('updated_at', 'Last edit'),
        ];
    }
}
