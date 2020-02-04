<?php

namespace iAxel\Shared\Providers;

use iAxel\Shared\Shared;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class SharedServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        Blade::directive('shared', function () {
            return '<?php echo app(\iAxel\Shared\Shared::class)->render(); ?>';
        });
    }

    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(Shared::class, function () {
            return new Shared;
        });
    }

    /**
     * @return array
     */
    public function provides(): array
    {
        return [
            Shared::class,
        ];
    }
}
