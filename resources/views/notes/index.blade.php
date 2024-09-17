<h1>Your Notes</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<a href="{{ route('notes.create') }}">Create New Note</a>

<ul>
    @foreach ($notes as $note)
        <li>
            <strong>{{ $note->title }}</strong>
            <p>{{ $note->content }}</p>
        </li>
    @endforeach
</ul>
