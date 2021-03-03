@extends('layouts.editLang')

@section('content')
<div class="row">
    <div class="col-3">
    </div>
    <div class="col-8" >
    <form class="form-horizontal form-simple" action="{{url ('/admin/languages/edit/'. $lang->id )}}" method="post"
    novalidate>
        <div class="form-group">
          <label for="exampleFormControlInput1">الاسم</label>
          <input  type="text" value ="{{$lang->name}}" class="form-control" name="name" id="name" placeholder="العربية">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">الاختصار</label>
            <input type="text" value ="{{$lang->abbr}}" class="form-control" name="abbr" id="abbr" placeholder="ar_AR">
          </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">الحالة</label>
          <select class="form-control" value ="{{$lang->active}}" id="active" name="active">
            <option>1</option>
            <option>0</option>
          </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">الاتجاه</label>
            <input type="text" class="form-control" value ="{{$lang->direction}}" name="dir" id="dir" placeholder="rtl">
          </div>
        {{-- <div class="form-group">
          <label for="exampleFormControlSelect2">Example multiple select</label>
          <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div> --}}
        {{-- <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div> --}}

        <button type="submit" class="btn btn-success">حفظ</button>&nbsp;&nbsp;&nbsp;
        <button  class="btn btn-danger">الغاء</button>

      </form>
    </div>
    <div class="col-1">
    </div>
</div>
<div class="row"> &nbsp;</div>

@endsection

