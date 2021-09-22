<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {  //	fname	mname	lname	phone	email	email_verified_at	password
        DB::table('users')->insert([
            'fname' => 'Deo',
            'mname' => 'Deo',
            'lname' => 'Deo',
            'phone' => '0744914470',
            'email_verified_at' => '2021-09-01 11:56:59',
            'email' =>'deodastan@gmail.com',
            'password' => Hash::make('12345'),
        ]);

        $perm1 = new Permission();
		$perm1->name = 'View Menu';
		$perm1->slug = 'view_Menu';
		$perm1->save();

		$perm2 = new Permission;
		$perm2->name = 'Manage Customer';
		$perm2->slug = 'Manage_Customer';
		$perm2->save();

        $view_Menu_Perm=Permission::where('slug','view_Menu')->first();
		$Manage_Customer_Perm= Permission::where('slug','Manage_Customer')->first();

        //RoleTableSeeder.php
		$user_role = new Role();
		$user_role->slug = 'admin_role';
		$user_role->name = 'Administrator';
		$user_role->save();
		$user_role->permissions()->attach($view_Menu_Perm);
		$user_role->permissions()->attach($Manage_Customer_Perm);

        $user1_role = new Role();
		$user1_role->slug = 'employee_role';
		$user1_role->name = 'Normal Employee';
		$user1_role->save();
		$user1_role->permissions()->attach($Manage_Customer_Perm);

        $admin_role   = Role::where('slug','admin_role')->first();
		$employee_role = Role::where('slug','employee_role')->first();

        $user = new User();
        $user->fname='Deogratias';
        $user->mname='Lugemalila';
        $user->lname='Dastan';
        $user->email='deo@gmail.com';
        $user->phone='0744914470';
        $user->password=bcrypt('12345');
        $user->save();
		$user->roles()->attach($admin_role);

        $user1 = new User();
        $user1->fname='Flavia';
        $user1->mname='Asimwe';
        $user1->lname='Karamagi';
        $user1->email='flavia@gmail.com';
        $user1->phone='0744914471';
        $user1->password=bcrypt('12345');
        $user1->save();
		$user1->roles()->attach($employee_role);
        //$user1->permissions()->attach($Manage_Customer_Perm);

      //  UserTableSeeder::class;
    }
}
