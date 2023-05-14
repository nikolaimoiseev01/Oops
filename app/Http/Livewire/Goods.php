<?php

namespace App\Http\Livewire;

use App\Models\Good;
use App\Models\GoodCategory;
use App\Models\GoodPropName;
use App\Models\GoodPropValue;
use Livewire\Component;

class Goods extends Component
{
    public $goods;
    public $prop_names;
    public $prop_values;
    public $prop_chosen = [];
    public $good_categories;
    public $good_category_chosen = [];

    protected $queryString = ['prop_chosen', 'good_category_chosen'];

    public function render()
    {
        // Удаляем свойство при отжатии чекбокса
        foreach ($this->prop_chosen as $key => $prop_chosen) {
            $prop_name_index = $key;
            foreach ($prop_chosen as $key => $value) {
                $prop_value_index = $key;

                if ($value == '0' || !$value) {
                    unset($this->prop_chosen[$prop_name_index][$prop_value_index]);

                };

                if (empty($this->prop_chosen[$prop_name_index])) {
                    unset($this->prop_chosen[$prop_name_index]);
                }
            };
        }

        $this->goods = Good::orderBy('id')->get();

        $this->goods = $this->goods
            ->when($this->good_category_chosen, function ($q) {
                return $q->whereIn('good_category_id', $this->good_category_chosen);
            })
            ->when(!empty($this->prop_chosen), function ($item) {
                return $item->filter(function ($q) {
                    foreach ($this->prop_chosen as $key => $property_values) {
                        $prop_name_id = $key;
                        foreach ($property_values as $key => $property_value) {
                            $prop_value_id = $key;
                            $arr = array_filter($q['properties'], function ($ar) use ($prop_name_id, $prop_value_id) {
                                return ($ar['Значение'] == $prop_value_id && $ar['Свойство'] == $prop_name_id);
                            });
                            if (!empty($arr)) {
                                return $q;
                            };
//                            dd('name: ' . $prop_name_id, 'value: ' . $prop_value_id);
                        }
                    }
                });
            });
//        dd($this->goods);

        return view('livewire.goods');
    }

    public function mount()
    {
        $this->good_categories = GoodCategory::orderBy('title')->get();
        $this->prop_names = GoodPropName::orderBy('title')->get();
        $this->prop_values = GoodPropValue::orderBy('title')->get();
    }

    public function clearFilters()
    {
        $this->prop_chosen = [];
        $this->good_category_chosen = [];
    }


}
