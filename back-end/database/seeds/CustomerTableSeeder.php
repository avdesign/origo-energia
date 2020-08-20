<?php
    
    use App\Models\Customer;
    use Illuminate\Database\Seeder;
    
    class CustomerTableSeeder extends Seeder
    {
        
        /**
         * @var Customer
         */
        private $customer;
        
        public function __construct(Customer $customer)
        {
            $this->customer = $customer;
        }
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $this->customer->create([
                'state_id' => 26,
                'name' => 'Claudianus Boast',
                'email' => 'cboast0@fastcompany.com',
                'phone' => '(19) 957645371',
                'city' => 'Araraquara',
                'birth_date' => '1993-06-07'
            ]);
            
            $this->customer->create([
                'state_id' => 26,
                'name' => 'Loni Jennions',
                'email' => 'ljennions1@va.gov',
                'phone' => '(19) 905613161',
                'city' => 'Limeira',
                'birth_date' => '1985-05-09'
            ]);
            
            $this->customer->create([
                'state_id' => 26,
                'name' => 'Margi Gilhouley',
                'email' => 'mgilhouley2@telegraph.co.uk',
                'phone' => '(19) 966290104',
                'city' => 'Araraquara',
                'birth_date' => '1984-09-13'
            ]);
            
            $this->customer->create([
                'state_id' => 26,
                'name' => 'Lexy Sprulls',
                'email' => 'lsprulls3@moonfruit.com',
                'phone' => '(19) 976121601',
                'city' => 'Rio Claro',
                'birth_date' => '1999-10-19'
            ]);
            
            $this->customer->create([
                'state_id' => 26,
                'name' => 'Marie Shatliff',
                'email' => 'mshatliff4@cbslocal.com',
                'phone' => '(19) 991376354',
                'city' => 'Rio Claro',
                'birth_date' => '1990-07-20'
            ]);
            
            $this->customer->create([
                'state_id' => 26,
                'name' => 'Graig Mouncey',
                'email' => 'gmouncey5@so-net.ne.jp',
                'phone' => '(19) 941806149',
                'city' => 'Araraquara',
                'birth_date' => '1990-03-27'
            ]);
            
            $this->customer->create([
                'state_id' => 11,
                'name' => 'Laurice Liger',
                'email' => 'lliger0@php.net',
                'phone' => '(35) 971740954',
                'city' => 'Areado',
                'birth_date' => '1992-10-25'
            ]);
            
            $this->customer->create([
                'state_id' => 11,
                'name' => 'Kendrick Sooper',
                'email' => 'ksooper1@slate.com',
                'phone' => '(31) 944324086',
                'city' => 'Belo Horizonte',
                'birth_date' => '1981-06-02'
            ]);
            
            $this->customer->create([
                'state_id' => 11,
                'name' => 'Gordon Levington',
                'email' => 'glevington2@hpost.com',
                'phone' => '(31) 922405868',
                'city' => 'Belo Horizonte',
                'birth_date' => '1992-11-25'
            ]);
            
            $this->customer->create([
                'state_id' => 11,
                'name' => 'Noam Scolland',
                'email' => 'nscolland3@mozilla.org',
                'phone' => '(35) 996817669',
                'city' => 'Areado',
                'birth_date' => '1999-12-31'
            ]);
            
            $this->customer->create([
                'state_id' => 11,
                'name' => 'Lindon Skehens',
                'email' => 'lskehens4@npr.org',
                'phone' => '(35) 967671104',
                'city' => 'Areado',
                'birth_date' => '1985-01-10'
            ]);
            
            $this->customer->create([
                'state_id' => 11,
                'name' => 'Kimbra Rase',
                'email' => 'krase5@topsy.com',
                'phone' => '(35) 999428030',
                'city' => 'Areado',
                'birth_date' => '1999-05-05'
            ]);
            
            $this->customer->create([
                'state_id' => 11,
                'name' => 'Lorenzo Fisk',
                'email' => 'lfisk6@businessweek.com',
                'phone' => '(31) 912695467',
                'city' => 'Belo Horizonte',
                'birth_date' => '1985-12-22'
            ]);
            
            
            $this->customer->create([
                'state_id' => 11,
                'name' => 'Bourke Flavelle',
                'email' => 'bflavelle7@fc2.com',
                'phone' => '(35) 959386145',
                'city' => 'Itapeva',
                'birth_date' => '1984-04-10'
            ]);
            
            $this->customer->create([
                'state_id' => 11,
                'name' => 'Curran McSharry',
                'email' => 'cmcsharry8@webeden.co.uk',
                'phone' => '(35) 902916131',
                'city' => 'Itapeva',
                'birth_date' => '1983-01-15'
            ]);
            
            $this->customer->create([
                'state_id' => 11,
                'name' => 'Aveline Dowtry',
                'email' => 'adowtry9@miibeian.gov.cn',
                'phone' => '(31) 945227500',
                'city' => 'Belo Horizonte',
                'birth_date' => '1994-12-23'
            ]);
            
            $this->customer->create([
                'state_id' => 11,
                'name' => 'John Sebastian',
                'email' => 'jsebastiana@cbslocal.com',
                'phone' => '(31) 907366740',
                'city' => 'Belo Horizonte',
                'birth_date' => '1998-04-06'
            ]);
            
            $this->customer->create([
                'state_id' => 11,
                'name' => 'Reynolds Greenan',
                'email' => 'rgreenanb@bloomberg.com',
                'phone' => '(35) 923551410',
                'city' => 'Itapeva',
                'birth_date' => '1985-07-19'
            ]);
            
        }
    }
