<?php

/**
 * Created by PhpStorm.
 * User: ccdnkenny
 * Date: 2016/5/3
 * Time: 下午1:34
 */
require_once ('../DTO/User.php');
class LoginTest extends PHPUnit_Framework_TestCase
{
    public function testUser()
    {
        $manager = new User("Sharlock", "221-B", "Sharlock.H@B211.com");
        //預期username為Sharlock
        $this->assertEquals("Sherlock", $manager->username);
    }
}
