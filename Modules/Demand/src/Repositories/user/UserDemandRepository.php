<?php


namespace Modules\Demand\src\Repositories\user;


use App\Enums\LoanStatus;
use Modules\Demand\Models\Demand;
use Modules\Demand\src\enum\DemandStatus;
use Modules\Demand\src\Interfaces\user\UserDemandRepositoryInterface;

class UserDemandRepository implements UserDemandRepositoryInterface
{
    public function create($request, $user): array
    {
        if ($this->checkUserHasActiveLoan($user) || $this->checkUserHasPendingDemand($user)) {
            return $message = [
                'message' => 'You have another loan / request that is active.',
            ];
        }
        Demand::create([
            'user_id' => $user->id,
            'amount' => $request->amount,
            'status' => DemandStatus::PENDING,
            'installment' => $request->installment,
            'description' => $request->description,
        ]);
        return $message = [
            'message' => 'Demand created successfully.'
        ];
    }

    public function show($user)
    {
        return Demand::where('user_id',$user->id)->firstOrFail();
    }

    public function update()
    {
    }

    public function delete()
    {

    }

    public function checkUserHasPendingDemand($user): bool
    {
        return Demand::where('user_id', $user->id)
            ->where('status', DemandStatus::PENDING)->exists();

    }

    public function checkUserHasActiveLoan($user): bool
    {
        return Loan::where('id', $user->id)
            ->whereNotIn('status', [LoanStatus::REJECTED, LoanStatus::PAYED])->exists();
    }

}
