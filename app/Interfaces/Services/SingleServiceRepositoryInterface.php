<?php

namespace App\Interfaces\Services;

interface SingleServiceRepositoryInterface
{

    // Get SingleServices
    public function index();

    // store SingleService
    public function store($request);

    // update SingleService
    public function update($request);

    // destroy SingleService
    public function destroy($request);

}
