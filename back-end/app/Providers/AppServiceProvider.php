<?php
    
    namespace App\Providers;
    
    use App\Models\Customer;
    use App\Observers\CustomerObserver;
    use Illuminate\Support\ServiceProvider;
    
    class AppServiceProvider extends ServiceProvider
    {
        /**
         * Register any application services.
         *
         * @return void
         */
        public function register()
        {
            // Quando injetar as interface usa o repository.
            $repositories = [
                'State',
                'Plan',
                'Customer'
            ];
            
            foreach ($repositories as $repository) {
                $this->app->bind("App\Repositories\Contracts\\{$repository}Interface", "App\Repositories\\{$repository}Repository");
            }
        }
        
        /**
         * Bootstrap any application services.
         *
         * @return void
         */
        public function boot()
        {
            Customer::observe(CustomerObserver::class);
        }
    }
