<?php
    
    use App\Models\Plan;
    use Illuminate\Database\Seeder;
    
    class PlanTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            Plan::create([
                'name' => 'Free',
                'price' => 0.00
            ]);
            
            Plan::create([
                'name' => 'Basic',
                'price' => 100.00
            ]);
            
            Plan::create([
                'name' => 'Plus',
                'price' => 187.00
            ]);
        }
    }
