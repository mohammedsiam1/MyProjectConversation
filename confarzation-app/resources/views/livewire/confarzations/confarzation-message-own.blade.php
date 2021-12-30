<div class="outgoing_msg">
    <div class="sent_msg">
      <p>{{ $message->body }}</p>
      <span class="time_date"><small> {{$message->created_at->diffForHumans() }}</small></span> </div>
  </div>

  // هان دغري بقلو هات وقت الرسالة لانو اليوز الي داخل عل اكيد هوا الي مالك
