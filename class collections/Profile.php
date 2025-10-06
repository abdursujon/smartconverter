<?php
class Profile
{

    protected $name = '', $email, $gender, $dob;
    function __construct($name, $email, $gender, $dob)
    {
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
        $this->dob = $dob;

    }

    public function setName($name){
        if(!empty($name)){
            $this->name = $name;
        }
        else{
            $this->name = "default";
        }
    }

    public function getName(){
        return $this->name;
    }

}


$myself = new Profile('Abdur Sujon', 'oceanboy@gmail.com', 'male', '01/03/199');
$myself ->setName('Ryan');
echo $myself->getName();