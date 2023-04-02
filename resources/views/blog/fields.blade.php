<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title ?? '' }}" required>
</div>
<div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea type="text" class="form-control" id="content" name="content" required>{{ $blog->content ?? '' }}</textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
