<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Admin Seeder
        $user = User::create([
            'name' => 'Ayman', 
            'email' => 'aymanashraf584@gmail.com',
            'password' => bcrypt('fb@6N0VQCC8^|5PCn!OCNY8E'),
            'roles_name' => ["owner"],
            'Status' => 'مفعل',
            'is_admin'=>1,
            ]);
      
            $role = Role::create(['name' => 'owner']);
       
            $permissions = Permission::pluck('id','id')->all();
      
            $role->syncPermissions($permissions);
       
            $user->assignRole([$role->id]);
    }
}
