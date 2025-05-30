<?php

namespace App\Interfaces;

use App\Models\User;

interface UserDemandRepositoryInterface
{
    public function make($request,$user);
    public function show();
    public function update();
    public function delete();
    public function checkUserHasPendingDemand(User $user) : bool;

}
