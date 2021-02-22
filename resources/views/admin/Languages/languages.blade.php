@extends('layouts.language')

@section('content')
<div class="row">
    <div class="col-3"></div>
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">اللغات الموجودة</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <td>
                        <button class="btn btn-sm round btn-danger btn-glow"><i class="la la-close font-medium-1"></i> حذف الجميع</button>
                    </td>
                </div>
            </div>
            <div class="card-content">
                <div class="table-responsive">
                    <table class="table table-de mb-0">
                        <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>الاختصار</th>
                            <th>الاتجاه</th>
                            <th>الحالة</th>
                            <th style="text-align: center;">الاجراءات</th>
                        </tr>
                        </thead>
                        <tbody>
                            @isset($languages)
                            @foreach ($languages as $lang)
                            <tr>
                                <td>{{$lang->name}}</td>

                                <td>{{$lang->abbr}}</td>
                                <td>{{$lang->direction}}</td>
                                <td>{{$lang->active}}</td>
                                <td style="width: 200px;">
                                    <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    <button class="btn btn-sm round btn-outline-danger"> Edit</button>
                                </td>
                            </tr>

                            @endforeach
                            @endisset


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-1"></div>
</div>
@endsection
