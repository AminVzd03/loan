<?php

namespace App\Repositories\User;

use App\Enums\DemandStatus;
use App\Interfaces\UserDemandRepositoryInterface;
use App\Models\Demand;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

    class UserDemandRepository implements UserDemandRepositoryInterface
{
    public function make($request,$user) {

    }
    public function show() { }
    public function update() { }
    public function delete() { }
    public function checkUserHasPendingDemand($user) : bool {
       return  Demand::where('user_id', $user->id)
            ->where('status', DemandStatus::PENDING)->exists();

    }

}
