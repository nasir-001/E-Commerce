<?php

namespace App\Orchid\Screens;


use App\User;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Layout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;

class CategoryEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Create New Category';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Category';

    /**
     * @var bool
    */
    public $exists = false;

    /**
     * Query data.
     *
     * @param Category
     * 
     * @return array
     */
    public function query(Category $category): array
    {
        $this->exists = $category->exists;

        if($this->exists){
            $this->name = 'Edit Category';
        }

        return [
            'category' => $category,
        ];
    }

    /**
     * Button commands.
     *
     * @return Link[]
     * 
     * @return Action[]
     * 
     */
    public function commandBar(): array
    {
        return [
            Button::make('Create Category')
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
                Input::make('category.name')
                    ->type('text')
                    ->title('Category Name')
                    ->placeholder('Enter category name')
                    ->help('Please enter a short and descriptive name for your customers'),

                Input::make('category.slug')
                    ->type('text')
                    ->title('Category Slug')
                    ->placeholder('Category slug')
                    ->help('Please enter a title name for this category'),
                
                Select::make('product.')
                    ->title('choose a products')
                    ->placeholder('Search ...')
                    ->multiple()
                    ->fromModel(Product::class, 'name')
            ])
        ];
    }

    /**
     * @param Category $category
     * @param Product $product
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */

    public function createOrUpdate(Category $category, Request $request, Product $product)
    {
        $category->fill($request->get('category'))->save();
        $product = $request->get('product');
        $category->products()->attach($product);
        
        Alert::success('Your category was successfully created.');

        return redirect()->route('platform.category.list');
    }
    /**
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     * 
     * @throws \Exception
     */

    public function remove(Category $category)
    {
        $category->delete()
            ? Alert::success('Category was successfully deleted!.')
            : Alert::warning('Whooops! Something went wrong!')
        ;

        return redirect()->route('platform.category.list');
    }
}
