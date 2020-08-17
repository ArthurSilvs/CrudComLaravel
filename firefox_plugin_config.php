<?php

namespace Tests;

use Facebook\WebDriver\Firefox\FirefoxProfile;
use Laravel\Dusk\TestCase as BaseTestCase;

abstract class FirefoxDuskTestCase extends BaseTestCase
{
    // Some other methods

    /**
     * Load firefox extensions.
     *
     * @param FirefoxProfile $profile
     */
    protected function loadExtensions(FirefoxProfile $profile)
    {
        // Do not require extension to be signed.
        // This allows us to load our custom extensions.
        $profile->setPreference('xpinstall.signatures.required', false);

        // Load custom plugin.
        $profile->addExtension(
            storage_path('extensions/firefox/some-plugin.xpi')
        );

        // Configure custom plugin.
        $profile->setPreference('some-plugin.foo', 'foo');
        $profile->setPreference('some-plugin.bar', 'bar');
    }
}