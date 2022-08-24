<?php


namespace TestTask\Entity;


class Setting
{

    private string $param1;
    private string $param2;
    private string $param3;

    /**
     * @return string
     */
    public function getParam1(): string
    {
        return $this->param1;
    }

    /**
     * @param string $param1
     */
    public function setParam1(string $param1): void
    {
        $this->param1 = $param1;
    }

    /**
     * @return string
     */
    public function getParam2(): string
    {
        return $this->param2;
    }

    /**
     * @param string $param2
     */
    public function setParam2(string $param2): void
    {
        $this->param2 = $param2;
    }

    /**
     * @return string
     */
    public function getParam3(): string
    {
        return $this->param3;
    }

    /**
     * @param string $param3
     */
    public function setParam3(string $param3): void
    {
        $this->param3 = $param3;
    }


    /**
     * @param Setting $settingChange
     * @param Setting $settingCurrent
     */
    public static function compare(Setting $settingChange, Setting $settingCurrent):array{
        $arrayCompare= [];

        foreach ($settingChange as $key => $value) {
            if (isset($settingCurrent->{$key}) && isset($settingCurrent->{$key}) && $settingCurrent->{$key} == $value){
                continue;
            }else{
                $arrayCompare[$key] = $value;
                echo $key."=>".$value;
            }
        }

        return $arrayCompare;
    }


}