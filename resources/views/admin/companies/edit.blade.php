@extends('admin.layouts.master')
@section('title')
    <title>{{__('Edit Company')}}</title>
@endsection
@section('content')
    <section class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
            <div class="content-heading">
                <div>
                    {{__('Edit Company')}}
                    <small data-localize="dashboard.WELCOME"></small>
                </div>
            </div>
            <!-- START card-->
            <div class="card card-default">
                <div class="card-header"></div>
                <div class="card-body offset-md-2 col-md-8 ">
                    <form action="{{route('companies.update',$company->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label>{{__('companyName')}}</label>
                            <input class="form-control" name="companyName" type="text" value="{{old('companyName',$company->companyName)}}" placeholder="{{__('companyName')}}">
                            <small class="text-danger">@error('companyName') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('supportPhone')}}</label>
                            <input class="form-control" name="supportPhone" type="text" value="{{old('supportPhone',$company->supportPhone)}}" placeholder="{{__('supportPhone')}}">
                            <small class="text-danger">@error('supportPhone') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('supportPhoneName')}}</label>
                            <input class="form-control" name="supportPhoneName" type="text" value="{{old('supportPhoneName',$company->supportPhoneName)}}" placeholder="{{__('supportPhoneName')}}">
                            <small class="text-danger">@error('supportPhoneName') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Email')}}</label>
                            <input class="form-control" name="email" type="text" value="{{old('email',$company->email)}}" placeholder="{{__('Email')}}">
                            <small class="text-danger">@error('email') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('address')}}</label>
                            <input class="form-control" name="address" type="text" value="{{old('address',$company->address)}}" placeholder="{{__('address')}}">
                            <small class="text-danger">@error('address') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('phone')}}</label>
                            <input class="form-control" name="phone" type="text" value="{{old('phone',$company->phone)}}" placeholder="{{__('phone')}}">
                            <small class="text-danger">@error('phone') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('map')}}</label>
                            <input class="form-control" name="map" type="text" value="{{old('map',$company->map)}}" placeholder="{{__('map')}}">
                            <small class="text-danger">@error('map') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('phone')}}</label>
                            <input class="form-control" name="phone" type="text" value="{{old('phone',$company->phone)}}" placeholder="{{__('phone')}}">
                            <small class="text-danger">@error('phone') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('aparat')}}</label>
                            <input class="form-control" name="aparat" type="text" value="{{old('aparat',$company->aparat)}}" placeholder="{{__('aparat')}}">
                            <small class="text-danger">@error('aparat') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('telegram')}}</label>
                            <input class="form-control" name="telegram" type="text" value="{{old('telegram',$company->telegram)}}" placeholder="{{__('telegram')}}">
                            <small class="text-danger">@error('telegram') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('instagram')}}</label>
                            <input class="form-control" name="instagram" type="text" value="{{old('instagram',$company->instagram)}}" placeholder="{{__('instagram')}}">
                            <small class="text-danger">@error('instagram') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('facebook')}}</label>
                            <input class="form-control" name="facebook" type="text" value="{{old('facebook',$company->facebook)}}" placeholder="{{__('facebook')}}">
                            <small class="text-danger">@error('facebook') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('whatsapp')}}</label>
                            <input class="form-control" name="whatsapp" type="text" value="{{old('whatsapp',$company->whatsapp)}}" placeholder="{{__('whatsapp')}}">
                            <small class="text-danger">@error('whatsapp') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('skype')}}</label>
                            <input class="form-control" name="skype" type="text" value="{{old('skype',$company->skype)}}" placeholder="{{__('skype')}}">
                            <small class="text-danger">@error('skype') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('twitter')}}</label>
                            <input class="form-control" name="twitter" type="text" value="{{old('twitter',$company->twitter)}}" placeholder="{{__('twitter')}}">
                            <small class="text-danger">@error('twitter') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('linkedin')}}</label>
                            <input class="form-control" name="linkedin" type="text" value="{{old('linkedin',$company->linkedin)}}" placeholder="{{__('linkedin')}}">
                            <small class="text-danger">@error('linkedin') {{$message}}@enderror</small>
                        </div>
                        <div class="form-group">
                            <label>{{__('Status')}}</label>
                            <br>
                            <input @if($company->status)checked  @endif name="status" type="checkbox"  data-on="{{__('Enable')}}" data-off="{{__('Disable')}}" data-size="sm" data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                            <small class="text-danger">@error('status') {{$message}}@enderror</small>
                        </div>
                        <button class="btn btn-info " type="submit">ارسال</button>
                    </form>
                </div>
            </div>
            <!-- END card-->
        </div>
    </section>
@endsection
