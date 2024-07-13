<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Pages\Page;

class Customer extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.customer';
    public  $name;

    public function mount()
    {
       $name= User::get();

        $this->name = $name;
    }
}
