<?php
namespace App\Interfaces\Sections;


interface SectionRepositoryInterface
{

    // get All Sections
    public function index();

    // store Sections
    public function store($request);

    // get Section
    public function show($id);

    // Update Sections
    public function update($request);

    // destroy Sections
    public function destroy($request);

}
