<?php
namespace App\Events;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class noti implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $name;
  public $phone_number;
  public $address;
  public $note;

  public function __construct($name,$phone_number,$address,$note)
  {
      $this->name = $name;
      $this->phone_number = $phone_number;
      $this->address = $address;
      $this->note = $note;
  }

  public function broadcastOn()
  {
      return ['my-channel'];
  }

  public function broadcastAs()
  {
      return 'my-event';
  }
}
