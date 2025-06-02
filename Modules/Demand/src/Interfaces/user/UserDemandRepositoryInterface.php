<?php


namespace Modules\Demand\src\Interfaces\user;

use Modules\User\Models\User;

interface UserDemandRepositoryInterface
{
    public function create($request, $user);

    public function show($user);

    public function update($request, $user);

    public function delete($user);

    public function checkUserHasPendingDemand(User $user): bool;

    public function checkUserHasActiveLoan(User $user): bool;

}
