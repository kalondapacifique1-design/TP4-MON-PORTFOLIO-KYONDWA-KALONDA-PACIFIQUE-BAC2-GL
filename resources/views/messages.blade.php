<h1>Messages reçus</h1>

@foreach($messages as $msg)
    <p>{{ $msg->name }} - {{ $msg->message }}</p>
@endforeach
