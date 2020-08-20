<?php
    
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    
    class CreateCustomersTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create('customers', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('state_id');
                $table->string('name');
                $table->string('email')->unique();
                $table->string('phone', 20);
                $table->string('city', 50);
                $table->date('birth_date', 20);
                $table->timestamps();
                
                $table->foreign('state_id')
                    ->references('id')
                    ->on('states');
            });
            
        }
        
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('customers');
        }
    }
