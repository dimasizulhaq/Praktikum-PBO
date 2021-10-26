<!-- Nama   : Muh.dimas izulhaq hidayat -->
<!-- NIM    : 20051397075 -->
<!-- Prodi  : D4 Manajemen Informatika 2020 A -->

<?php
class changebidirectionalassociationtounidirectional extends phpunit_framework_testcase
{
    public function testphonenumbersdonotneedtorefertousers()
    {
        $user = new user('giorgio');
        $user->addphonenumber(new phonenumber('012345'));
        $this->assertequals("012345\n", $user->phonenumberslist());
    }
}

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
        $phonenumber->internalsetuser($this);
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

    /**
     * @var user
     */
    private $user;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function internalsetuser(user $u)
    {
        $this->user = $u;
    }

    public function __tostring()
    {
        return $this->number;
    }
}