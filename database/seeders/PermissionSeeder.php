<?php

namespace Database\Seeders;

use App\Enums\PermissionName;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Permission::truncate();
        Role::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Permission::create([
            'name' => PermissionName::MANAGE_PRODUCTS,
            'display_name' => 'Quản lý sản phẩm',
        ]);
        Permission::create([
            'name' => PermissionName::MANAGE_CATEGORIES,
            'display_name' => 'Quản lý danh mục sản phẩm',
        ]);
//        Permission::create([
//            'name' => PermissionName::MANAGE_BRANDS,
//            'display_name' => 'Quản lý thương hiệu sản phẩm',
//        ]);
        Permission::create([
            'name' => PermissionName::MANAGE_ORDERS,
            'display_name' => 'Quản lý đơn hàng',
        ]);
        Permission::create([
            'name' => PermissionName::MANAGE_REVIEWS,
            'display_name' => 'Quản lý đánh giá, bình luận',
        ]);
        Permission::create([
            'name' => PermissionName::MANAGE_DISCOUNTS,
            'display_name' => 'Quản lý mã giảm giá',
        ]);
        Permission::create([
            'name' => PermissionName::MANAGE_USERS,
            'display_name' => 'Quản lý tài khoản người dùng',
        ]);
        Permission::create([
            'name' => PermissionName::MANAGE_PERMISSIONS,
            'display_name' => 'Quản lý phân quyền hệ thống',
        ]);

        $role = Role::create(['name' => 'Quản trị viên hệ thống']);
        Role::create(['name' => 'Quản lý cửa hàng']);
        Role::create(['name' => 'Nhân viên bán hàng']);
        Role::create(['name' => 'Cộng tác viên bán hàng']);

        $role->syncPermissions([
            PermissionName::MANAGE_PRODUCTS,
            PermissionName::MANAGE_CATEGORIES,
//            PermissionName::MANAGE_BRANDS,
            PermissionName::MANAGE_ORDERS,
            PermissionName::MANAGE_REVIEWS,
            PermissionName::MANAGE_DISCOUNTS,
            PermissionName::MANAGE_USERS,
            PermissionName::MANAGE_PERMISSIONS,
        ]);

        User::find(1)->assignRole('Quản trị viên hệ thống');
    }
}
