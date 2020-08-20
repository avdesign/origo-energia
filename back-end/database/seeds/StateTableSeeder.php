<?php
    
    use App\Models\State;
    use Illuminate\Database\Seeder;
    
    class StateTableSeeder extends Seeder
    {
        /**
         * @var State
         */
        private $state;
        
        public function __construct(State $state)
        {
            $this->state = $state;
        }
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $this->state->create([
                'uf' => 'AC',
                'name' => 'Acre'
            ]);
            $this->state->create([
                'uf' => 'AL',
                'name' => 'Alagoas'
            ]);
            $this->state->create([
                'uf' => 'AM',
                'name' => 'Amazonas'
            ]);
            $this->state->create([
                'uf' => 'AP',
                'name' => 'Amapá'
            ]);
            $this->state->create([
                'uf' => 'BA',
                'name' => 'Bahia'
            ]);
            $this->state->create([
                'uf' => 'CE',
                'name' => 'Ceará'
            ]);
            $this->state->create([
                'uf' => 'DF',
                'name' => 'Distrito Federal'
            ]);
            $this->state->create([
                'uf' => 'ES',
                'name' => 'Espírito Santo'
            ]);
            $this->state->create([
                'uf' => 'GO',
                'name' => 'Goiás'
            ]);
            $this->state->create([
                'uf' => 'MA',
                'name' => 'Maranhão'
            ]);
            $this->state->create([
                'uf' => 'MG',
                'name' => 'Minas Gerais'
            ]);
            $this->state->create([
                'uf' => 'MS',
                'name' => 'Mato Grosso do Sul'
            ]);
            $this->state->create([
                'uf' => 'MT',
                'name' => 'Mato Grosso'
            ]);
            $this->state->create([
                'uf' => 'PA',
                'name' => 'Pará'
            ]);
            $this->state->create([
                'uf' => 'PB',
                'name' => 'Paraíba'
            ]);
            $this->state->create([
                'uf' => 'PE',
                'name' => 'Pernambuco'
            ]);
            $this->state->create([
                'uf' => 'PI',
                'name' => 'Piauí'
            ]);
            $this->state->create([
                'uf' => 'PR',
                'name' => 'Paraná'
            ]);
            $this->state->create([
                'uf' => 'RJ',
                'name' => 'Rio de Janeiro'
            ]);
            $this->state->create([
                'uf' => 'RN',
                'name' => 'Rio Grande do Norte'
            ]);
            $this->state->create([
                'uf' => 'RO',
                'name' => 'Rondônia'
            ]);
            $this->state->create([
                'uf' => 'RR',
                'name' => 'Roraima'
            ]);
            $this->state->create([
                'uf' => 'RS',
                'name' => 'Rio Grande do Sul'
            ]);
            $this->state->create([
                'uf' => 'SC',
                'name' => 'Santa Catarina'
            ]);
            $this->state->create([
                'uf' => 'SE',
                'name' => 'Sergipe'
            ]);
            $this->state->create([
                'uf' => 'SP',
                'name' => 'São Paulo'
            ]);
            $this->state->create([
                'uf' => 'TO',
                'name' => 'Tocantins'
            ]);
        }
    }
