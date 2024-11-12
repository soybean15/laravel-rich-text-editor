<?php

namespace App\Providers;

use App\View\Components\RichTextEditor;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class RichTextEditorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        Blade::component('rich-text-editor',RichTextEditor::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {

        $this->publishes([
            __DIR__ . '/../resources/js/quill.js' => public_path('vendor/your-package/js/quill.js'),
        ], 'your-package-assets');


        $this->publishes([
            __DIR__ . '/../resources/css/quill.css' => public_path('vendor/your-package/css/quill.css'),
        ], 'your-package-assets');
    }
}
