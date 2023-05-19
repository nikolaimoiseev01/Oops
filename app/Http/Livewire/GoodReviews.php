<?php

namespace App\Http\Livewire;

use App\Models\GoodReview;
use Livewire\Component;

class GoodReviews extends Component
{

    public $good_reviews;
    public $reviews_cnt = 5;
    public $good_reviews_orig;
    public $load_more_check;

    protected $listeners = ['refreshGoodReviews' => '$refresh'];

    public function render()
    {
        $this->good_reviews = $this->good_reviews_orig->take($this->reviews_cnt);

        $goods_count_before_take = count($this->good_reviews_orig);
        $goods_count_after_take = count($this->good_reviews);

        if ($goods_count_before_take > $goods_count_after_take) {
            $this->load_more_check = true;
        } else {
            $this->load_more_check = false;
        }


        return view('livewire.good-reviews');
    }

    public function mount($good_id) {
        $this->good_reviews_orig = GoodReview::where('good_id', $good_id)->get();
    }

    public function load_more() {
        $this->reviews_cnt += 5;
        $this->good_reviews = $this->good_reviews_orig->take($this->reviews_cnt);
    }
}
