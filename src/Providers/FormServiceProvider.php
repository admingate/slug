<?php

namespace Admingate\Slug\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Form::component('permalink', 'packages/slug::permalink', [
            'name',
            'value' => null,
            'id' => null,
            'prefix' => '',
            'preview' => false,
            'attributes' => [],
            'editable' => true,
            'model' => '',
        ]);
    }
}
