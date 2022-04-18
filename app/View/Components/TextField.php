<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TextField extends Component
{
    public string $name;
    public mixed $label;
    public string $type;
    public bool $required;
    public bool $long;
    public string $value;
    public string $step;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $name,
        $label = null,
        $type = 'text',
        $required = false,
        $value = '',
        $long = false,
        $step = 1
    )
    {
        if ($label) {
            $this->label = $label;
        } else {
            $this->label = __("form.{$name}");
        }

        $this->name = $name;
        $this->type = $type;
        $this->required = $required;
        $this->value = $value;
        $this->long = $long;
        $this->step = $step;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $component = $this->long ? 'area-field' : 'input-field';

        return view("components.{$component}", [
            'name'     => $this->name,
            'label'    => $this->label,
            'type'     => $this->type,
            'required' => $this->required,
            'value'    => $this->value,
            'step'     => $this->step,
        ]);
    }
}
