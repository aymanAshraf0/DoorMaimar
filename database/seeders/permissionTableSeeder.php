<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        $permissions = [
            'عرض الصلاحيات',
            'اضافه صلاحيه',
            'تعديل صلاحيه',
            'حذف صلاحيه',
            
            
            'عرض المستخدمين',
            'اضافه مستخدم',
            'تعديل مستخدم',
            'حذف مستخدم',


            'الاعدادات',



            'عرض المدينه',
            'اضافه مدينه',
            'تعديل مدينه',
            'حذف مدينه',


            'عرض انواع العقارات',
            'اضافه نوع عقار',
            'تعديل نوع عقار',
            'حذف نوع عقار',



            'عرض العقارات',
            'اضافه عقار',
            'تعديل عقار',
            'حذف عقار',



            'السلايدر',
            
            
            
            'عرض جميع العقارات',
            'عرض العقارات غير المنشورة',
            'عرض تفاصيل العقار',
            'حاله النشر',
        ];
       
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
