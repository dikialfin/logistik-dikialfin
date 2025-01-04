<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Form extends Component
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
        $routeName = Route::currentRouteName();
        $formUrlSubmit = '';
        switch ($routeName) {
            case 'Form Barang Masuk':
                $formUrlSubmit = "/form/barang_masuk";
                break;
            case 'Form Barang Keluar':
                $formUrlSubmit = "/form/barang_keluar";
                break;
            
            default:
                $formUrlSubmit = '';
                break;
        }

        return view('components.form', ['title' => $routeName, 'formUrlSubmit' => $formUrlSubmit]);
    }
}
