<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\City;
use App\Models\Admin\Real_estate;
use App\Models\Admin\RealEstate2;
use App\Models\Admin\Status;
use Illuminate\Http\Request;
use App\Http\traits\imageTrait;
use Illuminate\Support\Facades\Auth;
use App\Trait\UploadFile;
class RealEstate2Controller extends Controller
{
    use imageTrait;

    public function index(){
        $data=RealEstate2::all();
    return view('admin.pages.real_estate2',compact('data'));
    }

    public function add_RealEstate2Page(){

    $data=Real_estate::all();
    $dataC=City::all();
    $dataS=Status::all();
        return view('admin.pages.add_RealEstate2Page',compact('data','dataC','dataS'));
    }

    public function add_RealEstate2Add(Request $request){
        $data=new RealEstate2();
        $data->number_of_offer=$request->numberOfOffer;
        $data->address=$request->address;
        $data->price=$request->price;
        $data->kindOfPrice=$request->kindOfPrice;
        $data->fieldDelegate=$request->fieldDelegate;
        $data->date=$request->date;
        $data->images = $this->saveImage($request->images,'uploads/images/realEstateImage');


        if ($request->hasFile('images_2')) {
            $images_values = [];
            foreach ($request->images_2 as $file) {
                $image = UploadFile::File('imgFolder/', $file); // افتراضية الدالة
                $images_values[] = $image;
            }
            $data->images_2 = $images_values;
        }
        

        $data->Real_estate_id=$request->realEstate;
        $data->city_id=$request->city;
        $data->zone=$request->zone;
        $data->neighborhood=$request->neighborhood;
        $data->floors=$request->floors;
        $data->numberOfRooms=$request->numberOfRooms;
        $data->numberOfEntrances=$request->numberOfEntrances;
        $data->elevators=$request->elevators;
        $data->bathrooms=$request->bathrooms;
        $data->numberOfLivingrooms=$request->numberOfLivingrooms;
        $data->kindOfStairs=$request->kindOfStairs;
        $data->theYard=$request->theYard;
        $data->interFace=$request->interFace;
        $data->widthOfStreet=$request->widthOfStreet;
        $data->ageOfRealEstate=$request->ageOfRealEstate;
        $data->barking=$request->barking;
        $data->Maid_s_room=$request->Maid_s_room;
        $data->security_room=$request->security_room;
        $data->Driver_s_room=$request->Driver_s_room;
        $data->space=$request->space;
        $data->Swimming_pools=$request->Swimming_pools;
        $data->piece_number=$request->piece_number;
        $data->the_owner_s_name=$request->the_owner_s_name;
        $data->owner_s_phone_number=$request->owner_s_phone_number;
        $data->security_name=$request->security_name;
        $data->security_number=$request->security_number;
        $data->coordinates=$request->coordinates;
        $data->status_id=$request->status;
        $data->date2=$request->date2;
        $data->notes=$request->notes;
        $data->Special_note=$request->Special_note;
        $data->user = Auth::user()->name;
        $data->save();
        return redirect('RealEstate')->with('success','تم الاضافه بنجاح');
    }


public function editRealEstate($id){
    $data=RealEstate2::find($id);
    $dataR=Real_estate::all();
    $dataC=City::all();
    $dataS=Status::all();
    return view('admin.pages.update_real_estate2',compact('data','dataR','dataC','dataS'));
}

public function updateRealEstate(Request $request)
{
    $data = RealEstate2::find($request->id); // ابحث عن العقار الذي سيتم تحديثه باستخدام المُعرّف

    $data->number_of_offer=$request->numberOfOffer;
    $data->address=$request->address;
    $data->price=$request->price;
    $data->kindOfPrice=$request->kindOfPrice;
    $data->fieldDelegate=$request->fieldDelegate;
    $data->date=$request->date;
    $data->images = $this->saveImage($request->images,'uploads/images/realEstateImage');

    if ($request->hasFile('images_2')) {
        $images_values = [];
        foreach ($request->images_2 as $file) {
            $image = UploadFile::File('imgFolder/', $file); // افتراضية الدالة
            $images_values[] = $image;
        }
        $data->images_2 = $images_values;
    }


    $data->Real_estate_id=$request->realEstate;
    $data->city_id=$request->city;
    $data->zone=$request->zone;
    $data->neighborhood=$request->neighborhood;
    $data->floors=$request->floors;
    $data->numberOfRooms=$request->numberOfRooms;
    $data->numberOfEntrances=$request->numberOfEntrances;
    $data->elevators=$request->elevators;
    $data->bathrooms=$request->bathrooms;
    $data->numberOfLivingrooms=$request->numberOfLivingrooms;
    $data->kindOfStairs=$request->kindOfStairs;
    $data->theYard=$request->theYard;
    $data->interFace=$request->interFace;
    $data->widthOfStreet=$request->widthOfStreet;
    $data->ageOfRealEstate=$request->ageOfRealEstate;
    $data->barking=$request->barking;
    $data->Maid_s_room=$request->Maid_s_room;
    $data->security_room=$request->security_room;
    $data->Driver_s_room=$request->Driver_s_room;
    $data->space=$request->space;
    $data->Swimming_pools=$request->Swimming_pools;
    $data->piece_number=$request->piece_number;
    $data->the_owner_s_name=$request->the_owner_s_name;
    $data->owner_s_phone_number=$request->owner_s_phone_number;
    $data->security_name=$request->security_name;
    $data->security_number=$request->security_number;
    $data->coordinates=$request->coordinates;
    $data->status_id=$request->status;
    $data->date2=$request->date2;
    $data->notes=$request->notes;
    $data->Special_note=$request->Special_note;
    $data->user = Auth::user()->name;
    $data->save();

    // إعادة توجيه إلى الصفحة أو إظهار رسالة بنجاح التحديث
    return redirect('RealEstate')->with('success','تم ألتعديل بنجاح'); // حدد اسم المسار الذي تريد الانتقال إليه بعد التحديث
}


    public function deleteRealEstate($id) {
        $realEstate = RealEstate2::findOrFail($id);
        $realEstate->delete();
        
        return redirect('RealEstate')->with('success', 'تم الحذف بنجاح');
    }

public function unShareRealEstate2(){
    return view('admin.pages.un_share_real_estate2');
}
    
}










