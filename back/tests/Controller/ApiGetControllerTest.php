<?php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiGetControllerTest extends WebTestCase
{
    public function testGetVisitor()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/homeVisit');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testGetClass()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/classes/all');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testGetMascot()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/mascot');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testGetStudentsClasses()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/classes/students/all');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testGetStudentsOfOneClasse()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/classe/1/students/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testGetActivitiesOfOneClasse()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/classe/1/activities/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testGetAllDetailsSortedByTeachers()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/teachers/all');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testGetTeacher()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/teacher/1/all');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testGetAllStudents()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/students/list');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testGetStudent()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/student/1/all');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testGetAllTeachers()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/teachers/list');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testGetCaregivers()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/caregivers/list');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testGetStudentAssigments()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/student/1/assigments');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testGetMessages()
    {
        $client = static::createClient();

        $client->request('GET', '/api/get/messages');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}