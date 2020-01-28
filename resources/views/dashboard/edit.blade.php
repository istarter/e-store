<h1>Customer details</h1>


<div class="card-body card-block">
    <form action="{{route('update', $category->id)}}" method="post">
        @csrf
        
    <div class="has-success form-group">
        <label for="inputIsValid" class=" form-control-label">Add to Category</label>
        <input type="text" value="{{$category->name}}" name="name" id="inputIsValid" class="is-valid form-control-success form-control">
    </div>
    <div class="form-actions form-group">
        <button type="submit" class="btn btn-success btn-sm">Save</button>
    </div>
</form>
</div>