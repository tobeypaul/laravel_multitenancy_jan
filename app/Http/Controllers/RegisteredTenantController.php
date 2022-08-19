<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterTenantRequest;
use App\Models\Tenant;
use App\Models\Newcomer;
use Illuminate\Http\Request;
use App\Http\Requests\FirstRegisterTenantRequest;

use function PHPSTORM_META\type;

class RegisteredTenantController extends Controller
{
    //

    public function first_create()
    {
        return view('auth.first-register');
    }


    public function first_store(FirstRegisterTenantRequest $request)
    {
        $newcomer = Newcomer::create($request->validated());
        $newcomer_id = $newcomer->getKey();
        $data = NewComer::all()->where('id', $newcomer_id)->toArray();
        $request->session()->put('data', $data);

        // return $data["id"];

        return redirect()->route('second_register');
        // return view('auth.second-register', ['newcomers'=>$data]);
    }

    public function second_create(Request $req)
    {
        $data = $req->session()->get('data');
        return view('auth.second-register', ['newcomers'=>$data]);
    }

    public function second_store(RegisterTenantRequest $request)
    {
        $tenant = Tenant::create($request->validated());
        $tenant->createDomain(['domain' => $request->domain]);

        return redirect(tenant_route($tenant->domains->first()->domain, 'tenant.login'));
    }
}