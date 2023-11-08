<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Real_estate;
use App\Models\Admin\RealEstate;

class RealEstateController extends Controller
{
    public function index(){
        $data=Real_estate::all();
return view('admin.pages.real_estate',compact('data'));
    }


    public function add_real_estate(Request $request){
        // التحقق من صحة البيانات المدخلة من قبل المستخدم
        $request->validate([
            'real_estate_name' => 'required|string',
            // يمكنك إضافة مزيد من القواعد حسب احتياجاتك
        ]);
    
        // إنشاء نوع عقار جديدة باستخدام البيانات المدخلة
        $Real_estate = new Real_estate();
        $Real_estate->real_estate_name = $request->input('real_estate_name');
        // حفظ نوع العقار في قاعدة البيانات
        $Real_estate->save();
    
        // إعادة التوجيه إلى الصفحة التي ترغب فيها بعد إضافة نوع العقار
        return redirect('real_estate')->with('success', 'تمت إضافة نوع العقار بنجاح');
    }

public function edit_real_estate_name($id){
    $data=Real_estate::find($id);
    return view('admin.pages.update_real_estate',compact('data'));
}

public function update_real_estate_name(Request $request){
    $id = $request->id;
    
    // التحقق من صحة البيانات المدخلة من قبل المستخدم
    $request->validate([
        'real_estate_name' => 'required|string',
        // يمكنك إضافة المزيد من القواعد هنا حسب احتياجاتك
    ]);

    // البحث عن المدينة باستخدام الـ "id"
    $Real_estate = Real_estate::find($id);

    if ($Real_estate) {
        // تحديث معلومات المدينة بناءً على البيانات الجديدة
        $Real_estate->real_estate_name = $request->real_estate_name;
        $Real_estate->save();
    
        return redirect('real_estate')->with('success', 'تم تحديث نوع العقار بنجاح');
    } else {
        return redirect('real_estate')->with('error', 'نوع العقار غير موجود');
    }
}



    public function delete_real_estate_name($id){
        // ابحث عن نوع العقار باستخدام المعرف الممرر
        $real_estate_name = Real_estate::find($id);
    
        // تحقق مما إذا كان نوع العقار موجود
        if (!$real_estate_name) {
            return redirect('real_estate')->with('error', 'نوع العقار غير موجود.');
        }
                // قم بحذف نوع العقار
                $real_estate_name->delete();
    
                // إعادة التوجيه إلى الصفحة التي ترغب فيها بعد حذف نوع العقار
                return  redirect('real_estate')->with('success', 'تم حذف نوع العقار بنجاح.');
            }
}
