<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // It and Corporatives
        DB::table('corporative_it')->insert([
            'it_id'=>1,'corporative_id'=>1
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>1,'corporative_id'=>2
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>1,'corporative_id'=>6
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>1,'corporative_id'=>8
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>1,'corporative_id'=>9
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>1,'corporative_id'=>11
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>1,'corporative_id'=>13
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>2,'corporative_id'=>4
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>2,'corporative_id'=>15
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>3,'corporative_id'=>1
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>3,'corporative_id'=>13
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>4,'corporative_id'=>3
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>4,'corporative_id'=>7
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>4,'corporative_id'=>10
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>5,'corporative_id'=>1
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>5,'corporative_id'=>2
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>5,'corporative_id'=>12
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>6,'corporative_id'=>5
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>6,'corporative_id'=>10
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>6,'corporative_id'=>12
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>7,'corporative_id'=>1
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>7,'corporative_id'=>2
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>7,'corporative_id'=>6
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>7,'corporative_id'=>8
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>7,'corporative_id'=>11
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>8,'corporative_id'=>11
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>8,'corporative_id'=>14
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>9,'corporative_id'=>2
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>9,'corporative_id'=>8
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>9,'corporative_id'=>11
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>9,'corporative_id'=>17
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>10,'corporative_id'=>3
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>10,'corporative_id'=>4
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>10,'corporative_id'=>7
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>10,'corporative_id'=>15
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>11,'corporative_id'=>1
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>11,'corporative_id'=>10
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>11,'corporative_id'=>12
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>12,'corporative_id'=>2
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>12,'corporative_id'=>11
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>13,'corporative_id'=>1
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>13,'corporative_id'=>13
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>14,'corporative_id'=>7
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>14,'corporative_id'=>9
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>15,'corporative_id'=>15
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>16,'corporative_id'=>3
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>16,'corporative_id'=>14
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>16,'corporative_id'=>16
        ]);

        DB::table('corporative_it')->insert([
            'it_id'=>17,'corporative_id'=>2
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>17,'corporative_id'=>8
        ]);
        DB::table('corporative_it')->insert([
            'it_id'=>17,'corporative_id'=>17
        ]);

        // It and Processes
        DB::table('it_process')->insert([
            'it_id'=>1,'process_id'=>1
        ]);
        DB::table('it_process')->insert([
            'it_id'=>1,'process_id'=>2
        ]);
        DB::table('it_process')->insert([
            'it_id'=>1,'process_id'=>6
        ]);
        DB::table('it_process')->insert([
            'it_id'=>1,'process_id'=>7
        ]);
        DB::table('it_process')->insert([
            'it_id'=>1,'process_id'=>8
        ]);
        DB::table('it_process')->insert([
            'it_id'=>1,'process_id'=>10
        ]);
        DB::table('it_process')->insert([
            'it_id'=>1,'process_id'=>12
        ]);
        DB::table('it_process')->insert([
            'it_id'=>1,'process_id'=>13
        ]);
        DB::table('it_process')->insert([
            'it_id'=>1,'process_id'=>19
        ]);
        DB::table('it_process')->insert([
            'it_id'=>1,'process_id'=>20
        ]);

        DB::table('it_process')->insert([
            'it_id'=>2,'process_id'=>6
        ]);
        DB::table('it_process')->insert([
            'it_id'=>2,'process_id'=>17
        ]);
        DB::table('it_process')->insert([
            'it_id'=>2,'process_id'=>18
        ]);
        DB::table('it_process')->insert([
            'it_id'=>2,'process_id'=>28
        ]);
        DB::table('it_process')->insert([
            'it_id'=>2,'process_id'=>33
        ]);
        DB::table('it_process')->insert([
            'it_id'=>2,'process_id'=>36
        ]);
        DB::table('it_process')->insert([
            'it_id'=>2,'process_id'=>37
        ]);

        DB::table('it_process')->insert([
            'it_id'=>3,'process_id'=>1
        ]);
        DB::table('it_process')->insert([
            'it_id'=>3,'process_id'=>5
        ]);

        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>3
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>15
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>17
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>18
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>19
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>24
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>29
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>30
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>31
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>32
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>33
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>34
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>35
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>36
        ]);
        DB::table('it_process')->insert([
            'it_id'=>4,'process_id'=>37
        ]);

        DB::table('it_process')->insert([
            'it_id'=>5,'process_id'=>2
        ]);
        DB::table('it_process')->insert([
            'it_id'=>5,'process_id'=>9
        ]);
        DB::table('it_process')->insert([
            'it_id'=>5,'process_id'=>10
        ]);
        DB::table('it_process')->insert([
            'it_id'=>5,'process_id'=>11
        ]);
        DB::table('it_process')->insert([
            'it_id'=>5,'process_id'=>16
        ]);
        DB::table('it_process')->insert([
            'it_id'=>5,'process_id'=>19
        ]);

        DB::table('it_process')->insert([
            'it_id'=>6,'process_id'=>2
        ]);
        DB::table('it_process')->insert([
            'it_id'=>6,'process_id'=>3
        ]);
        DB::table('it_process')->insert([
            'it_id'=>6,'process_id'=>5
        ]);
        DB::table('it_process')->insert([
            'it_id'=>6,'process_id'=>11
        ]);
        DB::table('it_process')->insert([
            'it_id'=>6,'process_id'=>17
        ]);
        DB::table('it_process')->insert([
            'it_id'=>6,'process_id'=>18
        ]);
        DB::table('it_process')->insert([
            'it_id'=>6,'process_id'=>27
        ]);

        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>1
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>2
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>5
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>7
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>13
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>14
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>15
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>16
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>20
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>21
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>22
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>24
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>29
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>30
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>31
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>32
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>34
        ]);
        DB::table('it_process')->insert([
            'it_id'=>7,'process_id'=>35
        ]);

        DB::table('it_process')->insert([
            'it_id'=>8,'process_id'=>9
        ]);
        DB::table('it_process')->insert([
            'it_id'=>8,'process_id'=>23
        ]);
        DB::table('it_process')->insert([
            'it_id'=>8,'process_id'=>25
        ]);

        DB::table('it_process')->insert([
            'it_id'=>9,'process_id'=>4
        ]);
        DB::table('it_process')->insert([
            'it_id'=>9,'process_id'=>6
        ]);
        DB::table('it_process')->insert([
            'it_id'=>9,'process_id'=>8
        ]);
        DB::table('it_process')->insert([
            'it_id'=>9,'process_id'=>9
        ]);
        DB::table('it_process')->insert([
            'it_id'=>9,'process_id'=>15
        ]);
        DB::table('it_process')->insert([
            'it_id'=>9,'process_id'=>26
        ]);

        DB::table('it_process')->insert([
            'it_id'=>10,'process_id'=>3
        ]);
        DB::table('it_process')->insert([
            'it_id'=>10,'process_id'=>17
        ]);
        DB::table('it_process')->insert([
            'it_id'=>10,'process_id'=>18
        ]);
        DB::table('it_process')->insert([
            'it_id'=>10,'process_id'=>24
        ]);
        DB::table('it_process')->insert([
            'it_id'=>10,'process_id'=>33
        ]);

        DB::table('it_process')->insert([
            'it_id'=>11,'process_id'=>4
        ]);
        DB::table('it_process')->insert([
            'it_id'=>11,'process_id'=>6
        ]);
        DB::table('it_process')->insert([
            'it_id'=>11,'process_id'=>8
        ]);
        DB::table('it_process')->insert([
            'it_id'=>11,'process_id'=>9
        ]);
        DB::table('it_process')->insert([
            'it_id'=>11,'process_id'=>12
        ]);
        DB::table('it_process')->insert([
            'it_id'=>11,'process_id'=>22
        ]);
        DB::table('it_process')->insert([
            'it_id'=>11,'process_id'=>27
        ]);
        DB::table('it_process')->insert([
            'it_id'=>11,'process_id'=>28
        ]);
        DB::table('it_process')->insert([
            'it_id'=>11,'process_id'=>29
        ]);
        DB::table('it_process')->insert([
            'it_id'=>11,'process_id'=>31
        ]);
        DB::table('it_process')->insert([
            'it_id'=>11,'process_id'=>35
        ]);

        DB::table('it_process')->insert([
            'it_id'=>12,'process_id'=>13
        ]);
        DB::table('it_process')->insert([
            'it_id'=>12,'process_id'=>20
        ]);
        DB::table('it_process')->insert([
            'it_id'=>12,'process_id'=>25
        ]);

        DB::table('it_process')->insert([
            'it_id'=>13,'process_id'=>10
        ]);
        DB::table('it_process')->insert([
            'it_id'=>13,'process_id'=>12
        ]);
        DB::table('it_process')->insert([
            'it_id'=>13,'process_id'=>16
        ]);
        DB::table('it_process')->insert([
            'it_id'=>13,'process_id'=>17
        ]);
        DB::table('it_process')->insert([
            'it_id'=>13,'process_id'=>19
        ]);
        DB::table('it_process')->insert([
            'it_id'=>13,'process_id'=>23
        ]);

        DB::table('it_process')->insert([
            'it_id'=>14,'process_id'=>14
        ]);
        DB::table('it_process')->insert([
            'it_id'=>14,'process_id'=>18
        ]);
        DB::table('it_process')->insert([
            'it_id'=>14,'process_id'=>22
        ]);
        DB::table('it_process')->insert([
            'it_id'=>14,'process_id'=>28
        ]);
        DB::table('it_process')->insert([
            'it_id'=>14,'process_id'=>31
        ]);
        DB::table('it_process')->insert([
            'it_id'=>14,'process_id'=>32
        ]);

        DB::table('it_process')->insert([
            'it_id'=>15,'process_id'=>3
        ]);
        DB::table('it_process')->insert([
            'it_id'=>15,'process_id'=>6
        ]);
        DB::table('it_process')->insert([
            'it_id'=>15,'process_id'=>35
        ]);
        DB::table('it_process')->insert([
            'it_id'=>15,'process_id'=>36
        ]);

        DB::table('it_process')->insert([
            'it_id'=>16,'process_id'=>4
        ]);
        DB::table('it_process')->insert([
            'it_id'=>16,'process_id'=>6
        ]);

        DB::table('it_process')->insert([
            'it_id'=>16,'process_id'=>12
        ]);

        DB::table('it_process')->insert([
            'it_id'=>17,'process_id'=>2
        ]);
        DB::table('it_process')->insert([
            'it_id'=>17,'process_id'=>6
        ]);
        DB::table('it_process')->insert([
            'it_id'=>17,'process_id'=>7
        ]);
        DB::table('it_process')->insert([
            'it_id'=>17,'process_id'=>9
        ]);
        DB::table('it_process')->insert([
            'it_id'=>17,'process_id'=>12
        ]);
        DB::table('it_process')->insert([
            'it_id'=>17,'process_id'=>13
        ]);
        DB::table('it_process')->insert([
            'it_id'=>17,'process_id'=>23
        ]);
        DB::table('it_process')->insert([
            'it_id'=>17,'process_id'=>26
        ]);
    }
}
