<?php
/**
 * Created by PhpStorm.
 * User: vijaykrishnachalamalasetty
 * Date: 2019-03-26
 * Time: 20:31
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LeapController extends AbstractController
{
    public function show($year)
    {
        return $this->render("leap/leap.html.twig", [
            'result' => $this->isLeapYear($year), 'year' => $year
        ]);
    }

    public function isLeapYear($year)
    {
        return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0)));
    }
}