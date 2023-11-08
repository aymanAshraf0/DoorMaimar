<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\traits\imageTrait;
use App\Models\Admin\setting;

class SettingController extends Controller

{
    use imageTrait;

    public function index(){
        return view('admin.pages.setting');
    }
    public function index2(){
        $data=setting::first();
        return view('admin.pages.update_setting',compact('data'));
    }

    public function add_setting(Request $request) {
        $data=new setting();
        $data->name=$request->name;
        $data->name_of_company=$request->companyName;
        $data->address=$request->address;
        
        $data->image = $this->saveImage($request->image,'uploads/images/brands');
        
        $data->save();
        return redirect()->back()->with('message','تم الاضافه بنجاح');
    }

public function update_setting(Request $request, $id){
    // الحصول على البيانات المرسلة من النموذج
    $data = setting::find($id);

    if(!$data){
        return redirect()->back()->with('error', 'البيانات غير موجودة');
    }

    // تحديث البيانات باستخدام القيم من النموذج
    $data->name = $request->name;
    $data->name_of_company = $request->companyName;
    $data->address = $request->address;

    // إذا تم تحديث صورة جديدة، يمكنك استخدام الصفة "imageTrait" لحفظها
    if($request->hasFile('image')) {
        $data->image = $this->saveImage($request->file('image'), 'uploads/images/brands');
    }

    // حفظ التغييرات
    $data->save();

    return redirect()->back()->with('message', 'تم التعديل بنجاح');
}

    
}
