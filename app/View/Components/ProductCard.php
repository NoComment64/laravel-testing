<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Product;

class ProductCard extends Component
{
    public $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}