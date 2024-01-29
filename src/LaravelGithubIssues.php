<?php

namespace Vortechstudio\LaravelGithubIssues;

use Monolog\Handler\AbstractProcessingHandler;
use Monolog\LogRecord;
use Vortechstudio\LaravelGithubIssues\Jobs\GithubIssueHandlerJob;

class LaravelGithubIssues extends AbstractProcessingHandler
{
    protected function write(LogRecord $record): void
    {
        dispatch(new GithubIssueHandlerJob($record))->onQueue('github_error');
    }
}
