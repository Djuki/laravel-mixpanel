<?php namespace GeneaLabs\LaravelMixpanel\Events;

use Illuminate\Queue\SerializesModels;

class MixpanelEvent
{
    use SerializesModels;

    public $charge;
    public $eventName;
    public $profileData;
    public $user;

    public function __construct($user, string $eventName, int $charge = 0, array $profileData = [])
    {
        $this->charge = $charge;
        $this->eventName = $eventName;
        $this->profileData = $profileData;
        $this->user = $user;
    }
}
