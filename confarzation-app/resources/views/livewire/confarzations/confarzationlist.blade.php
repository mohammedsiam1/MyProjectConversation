<div>
    @forelse ($confarzations as $confarzation)
    <a href="{{ route('confarzations.show',$confarzation)}}" class="chat_list">
        <div class="chat_people">
          <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="{{$confarzation->Name!='' ? $confarzation->Name: $confarzation->users->plick('Name')->join(', ') }}"> </div>
          <div class="chat_ib">
            <h5>{{$confarzation->Name!='' ? $confarzation->Name: $confarzation->users->plick('Name')->join(', ') }} <span class="chat_date">Dec 25</span></h5>
            <p>Test, which is a new approach to have all solutions
              astrology under one roof.</p>
          </div>
        </div>
    </a>

      @empty
    <p>لا توجد رسائل!</p>
      @endforelse
</div>
