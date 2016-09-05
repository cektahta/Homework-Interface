<?php

namespace Tourist;

use Cities\City;

class TouristGuide
{
    protected $cities;
    protected $allowedCities;

    public function __construct($value)
    {
        $this->allowedCities = $value;
        $this->cities = [];

    }

    public static function convertToFahrenheit($degrees) {
        $fahrenheit = 0;
        $fahrenheit = ($degrees*(9/5))+32;
        return $fahrenheit;
    }

    public function addCity(City $city) {
        if ($this->allowedCities > count($this->cities)) {
            $this->cities[] = $city;
        }
    }

    public function unknownMethod($isFahrenheit = true)
    {
        if ($isFahrenheit) {
            foreach ($this->cities as $key=>$value){

                    $minTemp = self::convertToFahrenheit($value->climateInfo->minTemperature);
                    $maxTemp = self::convertToFahrenheit($value->climateInfo->maxTemperature);
                    echo sprintf("The name of the city is: %s,maximum temperature is : %d , minimum temperature is : %d",
                        $value->name,
                        $minTemp,
                        $maxTemp
                    );
            }
        } else {
            foreach ($this->cities as $key=>$value){
                    $minTemp = $value->climateInfo->minTemperature;
                    $maxTemp = $value->climateInfo->maxTemperature;
                echo sprintf("The name of the city is: %s,maximum temperature is : %d , minimum temperature is : %d",
                    $value->name,
                    $minTemp,
                    $maxTemp
                );
            }
        }
    }
}