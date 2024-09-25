<form action="{{ route('notes.update', $note->id) }}" method="POST">
    @csrf
    @method('PUT') {{-- This specifies a PUT request, necessary for updates --}}

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ $note->title }}" required>
    </div>

    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" id="content" class="form-control" rows="5" required>{{ $note->content }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update Note</button>
</form>