<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait TranslatedNameTrait
{
    public function initializeAppendAttributeTrait()
    {
        $this->append('name');
    }

    public function name(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->{'name_' . app()->getLocale()}
        );
    }
}