<?php

namespace App\Entity;

class User
{
// Attributs USER////////////////////////////////////////
private $Id;

private $FirstName;

private $LastName;

private $Email;

private $Password;

private $Role;

private $ClassesId;

private $AttendanceId;

private $TeacherId;
///////////////////////////////////////////////////////
//Constructeur////////////////////////////////////////
public function __construct(){

}
////////////////////////////////////////////////////
//Getter sur toute l'instance //////////////////////

public function getUser(){

    return $this;
}
////////////////////////////////////////////////////
//Getters et Setters sur l'ensemble des attributs///
public function getId(){

    return $this->Id;
}

public function setId(string $_Id){

    $this->Id = $_Id;
}
public function getFirstName(){

    return $this->FirstName;
}
public function setFirstName(string $_FirstName){

    $this->FirstName = $_FirstName;
}

public function getLastName(){

    return $this->LastName;
}

public function setLastName(string $_LastName){

    $this->LastName = $_LastName;
}

public function getEmail(){

    return $this->Email;
}

public function setEmail(string $_Email){

    $this->Email = $_Email;
}

public function getPassword(){

    return $this->Password;
}

public function setPassword(string $_Password){

    $this->Password = $_Password;
}

public function getRole(){

    return $this->Role;
}

public function setRole(string $_Role){

    $this->Role = $_Role;
}

public function getClassesId(){

    return $this->ClassesId;
}

public function setClassesId(int $_ClassesId){
    
    $this->ClassesId = $_ClassesId;
}

public function getAttendanceId(){

    return $this->AttendanceId;
}

public function setAttendanceId(int $_AttendanceId){
    
    $this->AttendanceId = $_AttendanceId;
}

public function getTeacherId(){

    return $this->TeacherId;
}

public function setTeacherId(int $_TeacherId){
    
    $this->TeacherId = $_TeacherId;
}
////////////////////////////////////////////////////////////////////
// Information User/////////////////////////////////////////////////
public function to_string()
{
    return "Id : ".$this->Id." , FirstName : ".$this->FirstName." , LastName : ".$this->LastName." , Email : ".$this->Email." , Password : ".$this->Password.", Role : ".$this->Role." , ClassesId : ".$this->ClassesId." , AttendanceId : ".$this->AttendanceId." , TeacherId : ".$this->TeacherId;
}
///////////////////////////////////////////////////////////////////
//CRUD ////////////////////////////////////////////////////////////

public function createUser()
{   
    require (ROOT."ORM/ORM.php");
    $ORMc = new ORM();
    $ORMc->setObject($this->getUser());
    return $ORMc->execute_and_result('ACTION_CREATE');

}

public function deleteUser(int $_Id)
{
    require (ROOT."ORM/ORM.php");
    $ORMd = new ORM();
    $this->setId($_Id);
    $ORMd->setObject($this->getUser());
    return $ORMd->execute_and_result('ACTION_DELETE');

}

public function readUser(int $_Id)
{
    require (ROOT."ORM/ORM.php");
    $ORMr = new ORM();
    $this->setId($_Id);
    $ORMr->setObject($this->getUser());
    return $ORMr->execute_and_result('ACTION_READ');

}

public function allUser()
{
    require (ROOT."ORM/ORM.php");
    $ORMa = new ORM();
    $this->setId(0);
    $ORMa->setObject($this->getUser());
    return $ORMa->execute_and_result('ACTION_ALL');
    
}

public function updateUser($_Id,$_FirstName,$_LastName,$_Email,$_Password,$_ClassesId,$_AttendanceId,$_TeacherId)
{
    require (ROOT."ORM/ORM.php");
    $ORMu = new ORM();
    $this->setId($_Id);
    $this->setFirstName($_FirstName);
    $this->setLastName($_LastName);
    $this->setEmail($_Email);
    $this->setPassword($_Password);
    $this->setClassesId($_ClassesId);
    $this->setAttendanceId($_AttendanceId);
    $this->setTeacherId(date($_TeacherId));
    $ORMu->setObject($this->getUser());
    $ORMu->generate_query('ACTION_UPDATE');
    return $ORMu->execute_and_result('ACTION_UPDATE'); 
}
}