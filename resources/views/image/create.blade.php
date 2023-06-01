<h1>Upload New Image</h1>
<form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="file">File</label>
        <input type="file" id="file" name="file">
        @error('file')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}">
        @error('title')
            <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Upload</button>
</form>
