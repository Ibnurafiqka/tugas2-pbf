<?php

namespace App\Controllers;

class Skill extends BaseController
{
    public function index(): string
    {
        return view('skill');
    }
}