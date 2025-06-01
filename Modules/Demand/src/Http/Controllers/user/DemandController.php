<?php


namespace Modules\Demand\src\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Demand\src\Http\Requests\CreateUserDemandRequest;
use Modules\Demand\src\Repositories\user\UserDemandRepository;

class DemandController extends Controller
{
    public function __construct(UserDemandRepository $userDemandRepository)
    {
        $this->userDemandRepository = $userDemandRepository;
    }

    public function create($user, CreateUserDemandRequest $request): array
    {
        $user = Auth::user();
        return $this->userDemandRepository->create($user, $request);
    }
    public function show() {

    }

}
