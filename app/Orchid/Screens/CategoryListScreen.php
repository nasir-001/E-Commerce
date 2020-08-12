<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\CategoryListLayout;
use App\Category;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CategoryListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Categories';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All Categories';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'categories' => Category::paginate()
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
            Link::make('Create New')
                ->icon('icon-pencil')
                ->route('platform.category.edit')
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
            CategoryListLayout::class
        ];
    }
}
