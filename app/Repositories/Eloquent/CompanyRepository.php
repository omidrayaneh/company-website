<?php

namespace App\Repositories\Eloquent;


use App\Company;
use App\Repositories\CompanyRepositoryInterface;

class CompanyRepository implements CompanyRepositoryInterface
{

    public function all()
    {
        return Company::all();
    }
    public function findById($id)
    {
        return Company::findOrFail($id);
    }

    public function allWithPaginate($page)
    {
        return Company::paginate($page);
    }

    public function create( $request)
    {

        $inputs = $request->only(['companyName', 'status','phone','supportPhone',
            'email','address','supportPhoneName','map','aparat','telegram','instagram',
            'facebook','whatsapp','skype','twitter','linkedin']);

        $company = new Company();
        $company->companyName = $inputs['companyName'];
        $company->phone = $inputs['phone'];
        $company->supportPhone = $inputs['supportPhone'];
        $company->supportPhoneName = $inputs['supportPhoneName'];
        $company->email = $inputs['email'];
        $company->address = $inputs['address'];
        $company->map = $inputs['map'];
        $company->aparat = $inputs['aparat'];
        $company->telegram = $inputs['telegram'];
        $company->instagram = $inputs['instagram'];
        $company->facebook = $inputs['facebook'];
        $company->whatsapp = $inputs['whatsapp'];
        $company->skype = $inputs['skype'];
        $company->twitter = $inputs['twitter'];
        $company->linkedin = $inputs['linkedin'];

        $company->user_id = auth()->id();
        if (isset($inputs['status']) && $inputs['status'] =='on')
            $company->status = 1;
        else
            $company->status = 0;

        $company->save();

        toast('شرکت اضافه شد','success');

    }


    public function update($request, $id)
    {
        $inputs = $request->only(['companyName', 'status','phone','supportPhone',
            'email','address','supportPhoneName','map','aparat','telegram','instagram',
            'facebook','whatsapp','skype','twitter','linkedin']);

        $company = $this->findById($id);

        $company->companyName = $inputs['companyName'];
        $company->phone = $inputs['phone'];
        $company->supportPhone = $inputs['supportPhone'];
        $company->supportPhoneName = $inputs['supportPhoneName'];
        $company->email = $inputs['email'];
        $company->address = $inputs['address'];
        $company->map = $inputs['map'];
        $company->aparat = $inputs['aparat'];
        $company->telegram = $inputs['telegram'];
        $company->instagram = $inputs['instagram'];
        $company->facebook = $inputs['facebook'];
        $company->whatsapp = $inputs['whatsapp'];
        $company->skype = $inputs['skype'];
        $company->twitter = $inputs['twitter'];
        $company->linkedin = $inputs['linkedin'];

        $company->user_id = auth()->id();
        if (isset($inputs['status']) && $inputs['status'] =='on')
            $company->status = 1;
        else
            $company->status = 0;

        $company->save();

        toast('شرکت بروز شد','success');


    }

    public function delete($id)
    {
        $company = $this->findById($id);
        $company->delete();
    }



}
