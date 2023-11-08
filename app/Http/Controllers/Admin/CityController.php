<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\City;

class CityController extends Controller
{
    public function index(){
        $data=City::all();
        return view('admin.pages.city',compact('data'));
    }

    public function add_city(Request $request){
        // التحقق من صحة البيانات المدخلة من قبل المستخدم
        $request->validate([
            'city_name' => 'required|string',
            // يمكنك إضافة مزيد من القواعد حسب احتياجاتك
        ]);
    
        // إنشاء مدينة جديدة باستخدام البيانات المدخلة
        $city = new City();
        $city->city_name = $request->input('city_name');
        // حفظ المدينة في قاعدة البيانات
        $city->save();
    
        // إعادة التوجيه إلى الصفحة التي ترغب فيها بعد إضافة المدينة
        return redirect('city')->with('success', 'تمت إضافة المدينة بنجاح');
    }
    
    public function editCity($id){
        $data = City::find($id);
        return view('admin.pages.updateCity',compact('data'));
    }

    public function updateCity(Request $request)
    {
        $id = $request->id;
    
        // التحقق من صحة البيانات المدخلة من قبل المستخدم
        $request->validate([
            'city_name' => 'required|string',
            // يمكنك إضافة المزيد من القواعد هنا حسب احتياجاتك
        ]);
    
        // البحث عن المدينة باستخدام الـ "id"
        $city = City::find($id);
    
        if ($city) {
            // تحديث معلومات المدينة بناءً على البيانات الجديدة
            $city->city_name = $request->city_name;
            $city->save();
        
            return redirect('city')->with('success', 'تم تحديث المدينة بنجاح');
        } else {
            return redirect('city')->with('error', 'المدينة غير موجودة');
        }
    }
    

    public function deleteCity($id){
        // ابحث عن المدينة باستخدام المعرف الممرر
        $city = City::find($id);
    
        // تحقق مما إذا كانت المدينة موجودة
        if (!$city) {
            return redirect('city')->with('error', 'المدينة غير موجودة.');
        }
    
        // قم بحذف المدينة
        $city->delete();
    
        // إعادة التوجيه إلى الصفحة التي ترغب فيها بعد حذف المدينة
        return  redirect('city')->with('success', 'تم حذف المدينة بنجاح.');
    }
    
}
