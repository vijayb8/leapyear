<?php
/**
 * Created by PhpStorm.
 * User: vijaykrishnachalamalasetty
 * Date: 2019-03-26
 * Time: 20:46
 */

namespace App\Tests\Controller;

use App\Controller\LeapController;
use PHPUnit\Framework\TestCase;


class LeapControllerTest extends TestCase
{

    public function testIsLeapYear()
    {
        $leapYear = new LeapController();
        $this->assertEquals(1, $leapYear->isLeapYear(1988));
        $this->assertEquals(0, $leapYear->isLeapYear(1989));
    }
}
