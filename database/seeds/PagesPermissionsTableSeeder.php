<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class PagesPermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $keys = [
            'browse_pages',
            'read_pages',
            'edit_pages',
            'add_pages',
            'delete_pages',
        ];

        foreach ($keys as $key) {
            Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => null,
            ]);
        }

        Permission::generateFor('pages');
    }
}
