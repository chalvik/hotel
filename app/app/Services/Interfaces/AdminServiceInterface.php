<?php

namespace App\Services\Interfaces;

interface AdminServiceInterface
{
    function paginate();
    function store();
    function grtById();
    function destroy();
    function delete();
}
