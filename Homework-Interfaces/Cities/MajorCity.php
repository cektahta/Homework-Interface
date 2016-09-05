<?php

namespace Cities;


class MajorCity
{
    protected $name;

    protected $countryCode;

    protected $index;

    protected $climateInfo;

    protected $numberPeoples;

    public function __construct($name,$countryCode,$climateInfo,$numberPeoples)
    {
        $this->name = $name;

        if (preg_match("/[A-Z]\\w{2}/",$countryCode)) {
            $this->countryCode = $countryCode;
        }


        $this->climateInfo = $climateInfo;
        $this->numberPeoples = $numberPeoples;
    }
    use traitAddIndex;

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
        return sprintf("The name of the city is %s.Country code is %s , the index is %d.The climate info is %s.The number of population is :%d"
            ,$this->name.PHP_EOL
            ,$this->countryCode.PHP_EOL
            ,$this->index.PHP_EOL
            ,$this->climateInfo.PHP_EOL
            ,$this->numberPeoples.PHP_EOL
        );
    }
}