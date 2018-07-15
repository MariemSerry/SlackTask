<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class admin extends Model
{

    // Import Notifiable Trait
    use Notifiable;


    // Specify Slack Webhook URL to route notifications to
    public function routeNotificationForSlack() {

        return env('SLACK_WEBHOOK_URL');    }


}
