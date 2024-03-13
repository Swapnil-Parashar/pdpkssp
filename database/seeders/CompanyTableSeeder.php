<?php

namespace Database\Seeders;


use Dipokhalder\EnvEditor\EnvEditor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Smartisan\Settings\Facades\Settings;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::group('company')->set([
            'company_name'         => 'Plumb Distribution',
            'company_email'        => 'm@Plumbdistribution.co.uk',
            'company_calling_code' => '+880',
            'company_phone'        => '13333846282',
            'company_website'      => 'https://plumbdistribution.co.uk',
            'company_city'         => 'UK',
            'company_state'        => 'UK',
            'company_country_code' => 'UK',
            'company_zip_code'     => '1216',
            'company_latitude'     => '23.7699072',
            'company_longitude'    => '90.3643136',
            'company_address'      => '123, temp add, near somewhere'
        ]);

        $envService = new EnvEditor();
        $envService->addData([
            'APP_NAME' => "Plumb Distribution"
        ]);
        Artisan::call('optimize:clear');
    }
}
