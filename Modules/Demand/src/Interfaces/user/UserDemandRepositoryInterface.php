<?php


namespace Modules\Demand\src\Interfaces\user;

use App\Models\User;

interface UserDemandRepositoryInterface
{
    public function create($request, $user);

    public function show($user);

    public function update();

    public function delete();

    public function checkUserHasPendingDemand(User $user): bool;

    public function checkUserHasActiveLoan(User $user): bool;

}
