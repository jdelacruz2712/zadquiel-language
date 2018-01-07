<?php

if (!function_exists('language')) {
    /**
     * Get the language instance.
     *
     * @return \Zadquiel\Language\Language
     */
    function language()
    {
        return app('language');
    }
}
