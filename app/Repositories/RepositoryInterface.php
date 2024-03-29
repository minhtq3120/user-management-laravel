<?php

namespace App\Repositories;

use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

/**
 * Interface BaseRepositoryInterface
 *
 * @package App\Repositories
 */
interface RepositoryInterface
{
    public function getData($id = null);
    public function setData(UserRequest $request);
    public function updateData(UpdateRequest $request);
    public function findData(Request $request);
    public function deleteData($id);
    public function restoreData($id);
    public function denied_permission();
    public function sendMailToAdmin($newUser);
    public function getSoftDeleteData();
}
