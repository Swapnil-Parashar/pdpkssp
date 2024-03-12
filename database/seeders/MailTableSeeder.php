<?php

namespace Database\Seeders;


use Dipokhalder\EnvEditor\EnvEditor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Smartisan\Settings\Facades\Settings;


class MailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $envService = new EnvEditor();

        Settings::group('mail')->set([
            'mail_mailer'     => 'smtp',
            'mail_host'       => $envService->getValue('DEMO') ? 'm.plumbdistribution.co.uk' : '',
            'mail_port'       => $envService->getValue('DEMO') ? '465' : '',
            'mail_username'   => $envService->getValue('DEMO') ? 'm.plumbdistribution.co.uk' : '',
            'mail_password'   => $envService->getValue('DEMO') ? 'rb-XO$3~dc4q' : '',
            'mail_encryption' => $envService->getValue('DEMO') ? 'ssl' : '',
            'mail_from_name'  => $envService->getValue('DEMO') ? 'Plumb Distribution' : '',
            'mail_from_email' => $envService->getValue('DEMO') ? 'm.plumbdistribution.co.uk' : ''
        ]);

        $envService->addData([
            'MAIL_MAILER'       => 'smtp',
            'MAIL_HOST'         => $envService->getValue('DEMO') ? 'm.plumbdistribution.co.uk' : '',
            'MAIL_PORT'         => $envService->getValue('DEMO') ? '465' : '',
            'MAIL_USERNAME'     => $envService->getValue('DEMO') ? 'm.plumbdistribution.co.uk' : '',
            'MAIL_PASSWORD'     => $envService->getValue('DEMO') ? 'rb-XO$3~dc4q' : '',
            'MAIL_ENCRYPTION'   => $envService->getValue('DEMO') ? 'ssl' : '',
            'MAIL_FROM_NAME'    => $envService->getValue('DEMO') ? 'Plumb Distribution' : '',
            'MAIL_FROM_ADDRESS' => $envService->getValue('DEMO') ? 'm.plumbdistribution.co.uk' : ''
        ]);
        Artisan::call('optimize:clear');
    }
}
