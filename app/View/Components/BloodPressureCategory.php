<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BloodPressureCategory extends Component
{
    public $category;

    public function __construct($category)
    {
        $this->category = $category;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        $colour = $this->getColour($this->category);
        $category = $this->category;

        return view('components.blood-pressure-category', compact('category', 'colour'));
    }

    /**
     * Returns a colour for each category of blood pressure
     * @param string $category
     * @return string
     */
    public function getColour($category)
    {
        switch ($category)
        {
            case 'Elevated':
                $colour = 'golden-tainoi';
                break;

            case 'Hypertension Stage 1':
                $colour = 'tree-poppy';
                break;

            case 'Hypertension Stage 2':
                $colour = 'crusta';
                break;

            case 'Hypertensive Crisis':
                $colour = 'coral-red';
                break;

            case 'Low':
                $colour = 'blue';
                break;

            case 'Normal':
                $colour = 'chelsea-cucumber';
                break;

            default:
                $colour = 'lynch';
        }

        return $colour;
    }
}
