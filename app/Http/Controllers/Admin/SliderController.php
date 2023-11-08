<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\traits\imageTrait;
use App\Models\Admin\Slider;

class SliderController extends Controller
{
    use imageTrait;
    public function index(){
    $data=Slider::all();
        return view('admin.pages.slider',compact('data'));
    }

    public function add_slider_imge(Request $request){
        $data=new Slider();        
        $data->image = $this->saveImage($request->image,'uploads/images/slider');
        $data->save();
        return redirect()->back()->with('message','تم الاضافه بنجاح');
    }

    public function editimage($id){
        $data=Slider::find($id);
        return view('admin.pages.update_slider_image',compact('data'));
    }

public function updateImage(Request $request,$id){
    // الحصول على البيانات المرسلة من النموذج
    $data = Slider::find($id);

    if(!$data){
        return redirect()->back()->with('error', 'البيانات غير موجودة');
    }
    // إذا تم تحديث صورة جديدة، يمكنك استخدام الصفة "imageTrait" لحفظها
    if($request->hasFile('image')) {
        $data->image = $this->saveImage($request->file('image'), 'uploads/images/slider');
    }

    // حفظ التغييرات
    $data->save();

    return redirect('slider')->with('message', 'تم التعديل بنجاح');
}

    public function deleteImage($id){
                // ابحث عن الصوره  باستخدام المعرف الممرر
                $slider = Slider::find($id);
    
                // تحقق مما إذا كانت الصوره  موجوده
                if (!$slider) {
                    return redirect('slider')->with('error', 'الصوره غير موجوده في قاعده البيانات');
                }
                        // قم بحذف  الصوره
                        $slider->delete();
            
                        // إعادة التوجيه إلى الصفحة التي ترغب فيها بعد حذف الصوره
                        return  redirect('slider')->with('success', 'تم حذف الصوره بنجاح.');
    }
}
