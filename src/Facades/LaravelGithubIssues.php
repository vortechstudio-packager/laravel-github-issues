<?php

namespace Vortechstudio\LaravelGithubIssues\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Vortechstudio\LaravelGithubIssues\LaravelGithubIssues
 */
class LaravelGithubIssues extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Vortechstudio\LaravelGithubIssues\LaravelGithubIssues::class;
    }
}
