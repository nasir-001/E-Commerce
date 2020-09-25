<?php

namespace App\Orchid\Screens;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Map;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Screen\Layout;
use Orchid\Support\Facades\Alert;
use Orchid\Attachment\File;
use Orchid\Support\Color;

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
                ->type(Color::INFO())
                ->icon('icon-pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->exists),

            Button::make('Update')
                ->icon('icon-note')
                ->type(Color::INFO())
                ->method('createOrUpdate')
                ->canSee($this->exists),

            Button::make('Remove')
                ->icon('icon-trash')
                ->type(Color::DANGER())
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
                Input::make('product.name')
                    ->required()
                    ->title('Product Name')
                    ->placeholder('Enter name for your product')
                    ->help('Provide a short and descriptive name for the product'),

                Input::make('product.slug')
                    ->required()
                    ->title('Product title')
                    ->placeholder('Product title')
                    ->help('Please enter a title name for this product'),

                Input::make('product.details')
                    ->required()
                    ->title('Product details')
                    ->placeholder('Product details')
                    ->help('Provide a details for this product'),

                SimpleMDE::make('product.description')
                    // ->required()
                    ->placeholder('Enter the description for this product')
                    ->title('Product desciption'),

                Picture::make('product.image')
                    ->targetRelativeUrl()
                    // ->required()
                    ->horizontal()
                    ->title('Select first image for this product'),

                Picture::make('product.images')
                    ->targetRelativeUrl()
                    // ->required()
                    ->horizontal()
                    ->title('optional image for this product'),
                    
                Picture::make('product.images1')
                    ->targetRelativeUrl()
                    // ->required()
                    ->horizontal()
                    ->title('Optional image for this product'),

                Input::make('product.price')
                    ->required()
                    ->title('Product price')
                    ->placeholder('Product price')
                    ->type('number')
                    ->help('Enter the price for this product'),

                Select::make('category')
                    ->title('choose category for this  product')
                    ->multiple()
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
        $product->fill($request->get('product'))->save();
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
