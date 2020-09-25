<?php

namespace App\Orchid\Screens;
use App\Orchid\Layouts\BlogListLayout;
use App\Blog;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class BlogListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Blog post';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'All blog post';

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'blogs' => Blog::paginate()
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
            Link::make('Create new')
                ->icon('icon-pencil')
                ->route('platform.blog.edit')
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
            BlogListLayout::class
        ];
    }
}
