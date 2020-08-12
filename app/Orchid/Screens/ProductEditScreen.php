<?php

namespace App\Orchid\Screens;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Screen\Layout;
use Orchid\Support\Facades\Alert;

class ProductEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Creating New Product';

    /**
     * Display header description.
     *
     * @var string
     */
    public $description = 'Products';
    /**
     * @var bool
     */
    public $exists = false;

    /**
     * Query data.
     *
     * @param Product
     * 
     * @return array
     */
    public function query(Product $product): array
    {
        $this->exists = $product->exists;

        if($this->exists) {
            $this->name = 'Edit product';
        }

        return [
            'product' => $product
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
            Button::make('Create product')
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
     * 
     */
    public function layout(): array
    {
        return [
            Layout::rows([
                Input::make('name')
                    ->title('Product Name')
                    ->placeholder('Enter name for your product')
                    ->help('Provide a short and descriptive name for the product'),

                Input::make('slug')
                    ->title('Product Slug')
                    ->placeholder('Product slug')
                    ->help('Please enter a title name for this product'),

                Input::make('details')
                    ->title('Product details')
                    ->placeholder('Product details')
                    ->help('Provide a details for this product'),

                Input::make('description')
                    ->title('Product description')
                    ->placeholder('Product description')
                    ->help('Please enter the description for this product'),

                Input::make('price')
                    ->title('Product price')
                    ->placeholder('Product price')
                    ->type('number')
                    ->help('Enter the price for this product'),

                Select::make('category')
                    ->title('choose category for this  product')
                    ->fromModel(Category::class, 'name'),
            ])
        ];
    }

    /**
     * @param Product $product
     * @param Request @request
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createOrUpdate(Product $product, Request $request)
    {   
        $product->fill($request->all())->save();
        $category = $request->get('category');
        $product->categories()->attach($category);

        Alert::success('Your product was successfully created!');

        return redirect()->route('platform.product.list');
    }

    /**
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     * 
     * @throws \Exception
     */
    public function remove(Product $product)
    {
        $product->delete()
            ? Alert::success('Product was successfully deleted')
            : Alert::warning('Whooops! Something went wrong!')
        ;

        return redirect()->route('platform.product.list');
    }

}
