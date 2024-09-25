<form action="{{route('notes.store')}}" method="post">
@csrf
    <input type="text" id="title" name="title" placeholder="Title" >
    <input type="text" id="content" name="content" placeholder="Content" >
    <button type="submit">
        Save
    </button>
</form>