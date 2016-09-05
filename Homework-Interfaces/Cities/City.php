<?php

namespace Cities;

use Climate\ClimateInfo;

class City
{
    protected $name;
    protected $countryCode;
    protected $index;
    protected $climateInfo;

    use traitAddIndex;

    public function __construct($name,$countryCode,$climateInfo)
    {
        $this->name = $name;

        if (preg_match("/[A-Z]\\w{2}/",$countryCode)) {
            $this->countryCode = $countryCode;
        }


        $this->climateInfo = $climateInfo;

    }



    public function __get($parameter)
    {
        if (property_exists($this, $parameter)) {
            return $this->$parameter;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }

    public function __toString()
    {
        $climateInfo = $this->climateInfo;
        if (!isset($climateInfo)) {
            $climateInfo = "Climate info is not set";
        }

        return sprintf("The name of the city is %s.Country code is %s , the index is %d.The climate info is %s"
            ,$this->name.PHP_EOL
            ,$this->countryCode.PHP_EOL
            ,$this->index.PHP_EOL
            ,$climateInfo.PHP_EOL
        );
    }

}