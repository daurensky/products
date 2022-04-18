<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait TranslatedTitleTrait
{
    public function initializeAppendAttributeTrait()
    {
        $this->append('title');
    }

    public function title(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->{'title_' . app()->getLocale()}
        );
    }
}