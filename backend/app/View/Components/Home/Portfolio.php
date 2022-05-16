<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Python','Tailwind.css/Bootstrap'],
                'title' => 'Django Blog',
                'image' => url('/img/django_blog.png'),
                'github' => 'https://github.com/yudai-github/django_blog'
            ],
            [
                'category' => ['PHP', 'Tailwind.css/Bootstrap', 'Docker'],
                'title' => 'Laravel Portfolio',
                'image' => url('/img/laravel_portfolio.png'),
                'github' => 'https://github.com/thecodeholic/laravel-vue-survey'
            ],
            [
                'category' => ['Python'],
                'title' => 'FastAPI Reservation System',
                'image' => url('/img/reservation_app.png'),
                'github' => 'https://github.com/yudai-github/reservation_app'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
