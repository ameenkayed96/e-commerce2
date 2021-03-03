<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\http\Requests\LanguageRequest;


class LanguagesController extends Controller
{
    //get languages from DB and display on view
    public function index(){
        $languages = Language::all();
        return view('admin.Languages.languages',compact('languages'));
    }

    //delete Language by ID
    public function delete($id){
        $lang = Language::findorfail($id);
        $lang->delete();
        return redirect('admin/languages/');
    }

    public function addLang(){

        //session(['success' => 'تم الحفظ']);
        return view('admin.Languages.addLang') ->with('success',session()->get('success'));
    }

    public function saveLang(LanguageRequest $request){
        try{
            // dd("asas");
            Language::create($request->except(['_token']));
           // session(['success' => 'تم الحفظ بنجاح']);
            return redirect()->route('admin.addLanguages')->with('success' ,'هناك خطا ما يرجي المحاوله فيما بعد');
        }catch(\Exception $ex){
            return redirect()->route('admin.addLanguages')->with(['error' => 'هناك خطا ما يرجي المحاوله فيما بعد']);
        }


    }

    public function editLang($id){
        $lang = Language::findorfail($id);
        return view('admin.languages.editLang',compact('lang'));
    }


    public function saveEdit(LanguageRequest $request,$id){
        $lang = Language::findorfail($id);
        $lang->name =  $request->input("name");
        $lang->abbr =  $request->input("abbr");
        $lang->active =  $request->input("active");
        $lang->direction =  $request->input("dir");
        $lang -> save();
        return redirect('admin/languages/');
    }

    public function deleteAll(){
        Language::truncate();
        return redirect('admin/languages/');

    }
}
