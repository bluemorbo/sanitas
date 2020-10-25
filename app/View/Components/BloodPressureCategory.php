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
        $bgColour = $this->getBackgroundColour($this->category);
        $textColour = $this->getTextColour($this->category);
        $category = $this->category;

        return view('components.blood-pressure-category', compact('category', 'bgColour', 'textColour'));
    }

    /**
     * Returns a background colour for each category of blood pressure
     * @param string $category
     * @return string
     */
    public function getBackgroundColour($category)
    {
        switch ($category)
        {
            case 'Elevated':
                $colour = 'bg-golden-tainoi-200';
                break;

            case 'Hypertension Stage 1':
                $colour = 'bg-tree-poppy-200';
                break;

            case 'Hypertension Stage 2':
                $colour = 'bg-crusta-200';
                break;

            case 'Hypertensive Crisis':
                $colour = 'bg-coral-red-200';
                break;

            case 'Low':
                $colour = 'bg-blue-200';
                break;

            case 'Normal':
                $colour = 'bg-chelsea-cucumber-200';
                break;

            default:
                $colour = 'bg-lynch-200';
        }

        return $colour;
    }

    /**
     * Returns a text colour for each category of blood pressure
     * @param string $category
     * @return string
     */
    public function getTextColour($category)
    {
        switch ($category)
        {
            case 'Elevated':
                $colour = 'text-golden-tainoi-800';
                break;

            case 'Hypertension Stage 1':
                $colour = 'text-tree-poppy-800';
                break;

            case 'Hypertension Stage 2':
                $colour = 'text-crusta-800';
                break;

            case 'Hypertensive Crisis':
                $colour = 'text-coral-red-800';
                break;

            case 'Low':
                $colour = 'text-blue-800';
                break;

            case 'Normal':
                $colour = 'text-chelsea-cucumber-800';
                break;

            default:
                $colour = 'text-lynch-800';
        }

        return $colour;
    }
}
