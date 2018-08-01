<?php

use App\Project;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Project();
        $client->domain_name = 'summerschool.unyouth.ro';
        $client->wp_user = 'brilliantdevs';
        $client->wp_password = 'X329LlPcw';
        $client->ftp_ip = '';
        $client->ftp_user = '';
        $client->ftp_password = '';
        $client->save();
        $client = new Project();
        $client->domain_name = 'hpdi.ro';
        $client->wp_user = '⁠⁠⁠businesshp';
        $client->wp_password = 'satinmint3,.13';
        $client->ftp_ip = '86.105.97.34';
        $client->ftp_user = 'brilliantdevs_hpdi';
        $client->ftp_password = 'ewpcxutATBWNE!3';
        $client->save();

    }
}
