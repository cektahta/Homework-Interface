<?php
namespace Climate;

class ClimateInfo
{
    protected $maxTemperature;
    protected $minTemperature;

    public function __construct($maxTemperature,$minTemperature)
    {
        $this->maxTemperature = $maxTemperature;
        $this->minTemperature = $minTemperature;
    }

    public function __get($parameter)
    {
        if (property_exists($this, $parameter)) {
            return $this->$parameter;
        }
    }

    public function __toString()
    {
        return sprintf("Maximal Temperature: %d , Minimal Temperature: %d",
            $this->minTemperature,
            $this->maxTemperature);
    }


}