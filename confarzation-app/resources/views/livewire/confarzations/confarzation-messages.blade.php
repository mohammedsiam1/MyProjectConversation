<div>
    @foreach ($messages as $message )

@if ($message-isOwn())

<livewire:confarzations.confarzation-message-own :message="$message" :key="$message->id"/>

  @else

  <livewire:confarzations.confarzation-message :message="$message" :key="$message->id" />
@endif
    @endforeach

</div>
