<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //サンプル会社
        $param = [
            'company_name' => '企業名',
            'hitokoto' => 'どんなことをしている会社か一言で',
            'industry' => '業種名',
            'jobtype' => '職種名',
            'status' => 'setsumeikai',
            'userid' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('companies')->insert($param);
    }
}
