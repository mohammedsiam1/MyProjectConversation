<div class="incoming_msg">
    <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
    <div class="received_msg">
      <div class="received_withd_msg">
        <p>{{ $message->body }}</p>
        <span class="time_date"> <small> {{$message->user->name  }} | {{$message->created_at->diffForHumans() }}</small></span></div>
    </div>
  </div>
