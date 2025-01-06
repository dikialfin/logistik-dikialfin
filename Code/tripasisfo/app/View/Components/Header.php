<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class Header extends Component
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
        $urlForm = '';

        switch ($routeName) {
            case 'Barang Masuk':
                $urlForm = "/form/barang_masuk";
                break;
            case 'Barang Keluar':
                $urlForm = "/form/barang_keluar";
                break;
            case 'Stok Barang':
                $urlForm = "/form/stok_barang";
                break;
            
            default:
                $urlForm = '';
                break;
        }

        return view('components.header', ['title' => Route::currentRouteName(), 'urlForm' => $urlForm]);
    }
}
