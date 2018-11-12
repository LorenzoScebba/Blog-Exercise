<div class="card mb-3">
    <form action="{{route("post.new")}}" method="post">
        @csrf
        <div class="card-header">
            Crea un nuovo post!
        </div>
        <div class="card-body">
            <div class="form-group">
                                <textarea class="form-control" name="text" id="text"
                                          placeholder="Scrivi qui il tuo post!" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">Categoria</label>
                <select class="custom-select" name="category" id="category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card-footer text-muted">
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>