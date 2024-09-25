<h1>Notes</h1>
<a href="{{ route('notes.create') }}">Create Note</a>

<ul>
    @if($notes->isEmpty())
        <li>No notes available.</li>
    @else
        @foreach($notes as $note)
            <a href="{{ route('notes.show', $note->id) }}">{{ $note->title }}</a>
            <br>
        @endforeach
    @endif
</ul>