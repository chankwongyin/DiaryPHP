<?php

class User
{
    private $id;
    private $email;
    private $password;
    private $diary;

    public function getID()
    {
        return $this->id;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getDiary()
    {
        return $diary;
    }
    public function setID($id)
    {
        $this->id = $id;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function setDiary($diary)
    {
        $this->diary = $diary;
    }
    public function printUser()
    {
        $str = "id: " . $this->getID() . "<br>";
        $str .= "email: " . $this->getEmail() . "<br>";
        $str .= "password: " . $this->getPassword() . "<br>";
        $str .= "diary: " . $this->getDiary()->printDiary() . "<br>";
        return $str;
    }
}