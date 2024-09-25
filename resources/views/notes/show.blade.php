<h1>Note</h1>
<h1>{{ $note->title }}</h1>
<h1>{{ $note->content }}</h1>
<a href="{{ route('notes.edit', $note->id) }}">Edit</a>
<form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE') {{-- Method spoofing for DELETE request --}}
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this note?')">
        Delete
    </button>
</form>