@extends('layouts.addLang')

@section('content')

    <div class="row">
        <div class="col-3">
        </div>
        <div class="col-8">
            <form class="form-horizontal form-simple" action="{{ route('languages.add') }}" method="post" novalidate>
                @csrf
                <section class="inputmask" id="inputmask">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> بيانات اللغة</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12">
                                                <fieldset>
                                                    <h5>الاسم</h5>
                                                    <div class="form-group">
                                                        <input name="name" class="form-control date-inputmask" type="text"
                                                            placeholder="Enter name"/>
                                                        {{-- @error('required')
                                                            <span class="text-danger">{{$message}}</span>
                                                        @enderror --}}
                                                        </div>
                                                </fieldset>

                                                <fieldset>
                                                    <h5>الاختصار
                                                    </h5>
                                                    <div class="form-group">
                                                        <input type="text" name="abbr" class="form-control cc-inputmask"
                                                            id="cc-mask" placeholder="Enter abbriviation" />

                                                    </div>
                                                </fieldset>
                                                <fieldset>
                                                    <h5>
                                                    </h5>
                                                    <div class="form-group">
                                                        <button type="submit"
                                                            class="btn btn-success">حفظ</button>&nbsp;&nbsp;&nbsp;
                                                        <button class="btn btn-danger">الغاء</button>

                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-6 col-lg-12">
                                                <fieldset>
                                                    <h5>الاتجاه
                                                    </h5>
                                                    <div class="form-group">
                                                        <select class="form-control" id="active" name="direction">
                                                            <option value="ltr">من اليسار الى اليمين</option>
                                                            <option value="rtl">من اليمين الى اليسار</option>
                                                        </select>
                                                    </div>
                                                </fieldset>

                                                <fieldset>
                                                    <h5>الحالة
                                                    </h5>
                                                    <div class="form-group">
                                                        <select class="form-control" id="active" name="active">
                                                            <option value="1">فعّال</option>
                                                            <option value="0">غير فعّال</option>
                                                        </select>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </form>
        </div>
        <div class="col-1">
        </div>
    </div>
    <div class="row"> &nbsp;</div>

@endsection
