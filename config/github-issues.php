<?php

// config for Vortechstudio/LaravelGithubIssues
return [
    "openai" => [
        "token" => env('OPENAI_API_KEY', null),
        "state" => env('OPENAI_STATE', null),
    ]
];
