<?php

namespace Soybean15\RichTextEditor;


use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Soybean15\RichTextEditor\Components\RichTextEditor;

class RichTextEditorServiceProvider extends ServiceProvider
{
/**
     * Register services.
     */
    public function register(): void
    {
        //
        Blade::component('rich-text-editor', RichTextEditor::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'rich-text-editor');

        $this->publishes([
            __DIR__ . '/resources/js/quill.js' => public_path('js/quill.js'),
            __DIR__ . '/resources/css/quill.css' => public_path('css/quill.css'),
        ], 'rich-text-editor-assets');
    }
}
