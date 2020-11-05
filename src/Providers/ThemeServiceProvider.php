<?php

namespace ThemeTaschenmesser\Providers;

use Plenty\Plugin\Templates\Twig;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Events\Dispatcher;
use IO\Extensions\Functions\Partial;

class ThemeServiceProvider extends ServiceProvider {
    const EVENT_LISTENER_PRIORITY = 99;

    /**
     * Register the service provider.
     */
    public function register() {}

    /**
     * @param Twig $twig
     * @param Dispatcher $eventDispatcher
     * @return bool
     */
    public function boot(Dispatcher $eventDispatcher)
    {

        // HEADER / FOOTER
        $eventDispatcher->listen('IO.init.templates', function(Partial $partial) {
//            $partial->set('header', 'ThemeTaschenmesser::PageDesign.Partials.Header.Header');
//            $partial->set('footer', 'ThemeTaschenmesser::PageDesign.Partials.Footer');
//            $partial->set('page-design', 'ThemeTaschenmesser::PageDesign.PageDesign');
            return false;
        }, self::EVENT_LISTENER_PRIORITY);

    }
}
