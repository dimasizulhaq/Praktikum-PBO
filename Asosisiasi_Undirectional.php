<?php
class user
{
    private $name;
    private $phonenumbers;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addphonenumber(phonenumber $phonenumber)
    {
        $this->phonenumbers[] = $phonenumber;
    }

    public function phonenumberslist()
    {
        $list = '';
        foreach ($this->phonenumbers as $number) {
            $list .= "$number\n";
        }
        return $list;
    }

    public function getname()
    {
        return $this->name;
    }
}

class phonenumber
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function __tostring()
    {
        return $this->number;
    }
}
