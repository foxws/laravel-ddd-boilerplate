<?php

namespace Foundation\Providers;

use Domain\Media\Models\Media;
use Domain\Media\Policies\MediaPolicy;
use Domain\Tags\Models\Tag;
use Domain\Tags\Policies\TagPolicy;
use Domain\Users\Models\User;
use Domain\Users\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Media::class => MediaPolicy::class,
        Tag::class => TagPolicy::class,
    ];
}
