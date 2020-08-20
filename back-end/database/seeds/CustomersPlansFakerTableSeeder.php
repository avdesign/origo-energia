<?php
    
    use App\Models\Plan;
    use App\Models\Customer;
    use Illuminate\Database\Seeder;
    
    class CustomersPlansFakerTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $plans = Plan::all();
            $customers = Customer::all();
            
            for ($i = 1; $i <= 300; $i++) {
                $planId = $plans->random()->id;
                $customerId = $customers->random()->id;
                $customer = Customer::find($customerId);
                $customer->plans()->attach($planId);
            }
        }
    }
