<?php

use TCG\Voyager\Traits\Seedable;
use Illuminate\Database\Seeder;

class PagesDatabaseSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath = __DIR__ . '/';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seed('PagesDataTypesTableSeeder');
        $this->seed('PagesDataRowsTableSeeder');
        $this->seed('PagesMenuItemsTableSeeder');
        $this->seed('PagesPermissionsTableSeeder');
        $this->seed('PagesPermissionRoleTableSeeder');
        $this->seed('PagesModuleTableSeeder');
    }
}
