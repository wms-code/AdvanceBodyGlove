<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'colour_create',
            ],
            [
                'id'    => '18',
                'title' => 'colour_edit',
            ],
            [
                'id'    => '19',
                'title' => 'colour_show',
            ],
            [
                'id'    => '20',
                'title' => 'colour_delete',
            ],
            [
                'id'    => '21',
                'title' => 'colour_access',
            ],
            [
                'id'    => '22',
                'title' => 'master_access',
            ],
            [
                'id'    => '23',
                'title' => 'fabric_create',
            ],
            [
                'id'    => '24',
                'title' => 'fabric_edit',
            ],
            [
                'id'    => '25',
                'title' => 'fabric_show',
            ],
            [
                'id'    => '26',
                'title' => 'fabric_delete',
            ],
            [
                'id'    => '27',
                'title' => 'fabric_access',
            ],
            [
                'id'    => '28',
                'title' => 'stock_point_create',
            ],
            [
                'id'    => '29',
                'title' => 'stock_point_edit',
            ],
            [
                'id'    => '30',
                'title' => 'stock_point_show',
            ],
            [
                'id'    => '31',
                'title' => 'stock_point_delete',
            ],
            [
                'id'    => '32',
                'title' => 'stock_point_access',
            ],
            [
                'id'    => '33',
                'title' => 'audit_log_show',
            ],
            [
                'id'    => '34',
                'title' => 'audit_log_access',
            ],
            [
                'id'    => '35',
                'title' => 'account_create',
            ],
            [
                'id'    => '36',
                'title' => 'account_edit',
            ],
            [
                'id'    => '37',
                'title' => 'account_show',
            ],
            [
                'id'    => '38',
                'title' => 'account_delete',
            ],
            [
                'id'    => '39',
                'title' => 'account_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
