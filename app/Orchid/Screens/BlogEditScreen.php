<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;
use App\Blog;
use App\User;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Support\Facades\Alert;

class BlogEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create a blog';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Create a blog post';

    /**
     * @var bool
    */
    public $exists = false;

    /**
     * Query data.
     *
     * @return array
     */
    public function query(Blog $blog): array
    {
        $this->exists = $blog->exists;
        if ($this->exists){
            $this->name = 'Edit blog';
        }
        return [
            'blog' => $blog
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
            Button::make('Create blog')
                ->icon('icon-pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->exists),

            Button::make('Update')
                ->icon('icon-note')
                ->method('createOrUpdate')
                ->canSee($this->exists),

            Button::make('Remove')
                ->icon('icon-trash')
                ->method('remove')
                ->canSee($this->exists),
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
            Layout::rows([
                Input::make('blog.title')
                    ->title('Title')
                    ->placeholder('Blog title')
                    ->help('This is where the blog title goes'),

                SimpleMDE::make('blog.body')
                    ->title('Blof body'),

                Picture::make('blog.cover_image')
                    ->targetRelativeUrl()
                    // ->required()
                    ->horizontal()
                    ->title('optional image for this product'),
            ])
        ];
    }

    /**
     * @param Blog    $blog
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Blog $blog, Request $request)
    {
        $blog->user_id = auth()->user()->id;
        
        // dd($blog->user_id);
        $blog->fill($request->get('blog'))->save();

        Alert::success('You have successfully created a post.');

        return redirect()->route('platform.blog.list');
    }

     /**
     * @param Blog $blog
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function remove(Blog $blog) 
    {
        $blog->delete()
        ? Alert::info('You have successfully deleted the post.')
        : Alert::warning('An error has occurred')
    ;

    return redirect()->route('platform.blog.list');

    }
}
