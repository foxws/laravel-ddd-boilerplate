<?php

use Foundation\Broadcasting\TagChannel;
use Foundation\Broadcasting\UserChannel;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('user.{user}', UserChannel::class);
Broadcast::channel('tag.{video}', TagChannel::class);
