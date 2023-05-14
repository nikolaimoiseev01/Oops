<?php

namespace App\View\Components\HomePage;

use App\Models\GoodCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ChooseCategory extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $GoodCategories = GoodCategory::orderBy('position', 'asc')->get();

        return view('components.home-page.choose-category', [
            'GoodCategories' => $GoodCategories
        ]);
    }
}
