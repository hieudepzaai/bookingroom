<form action="/action_page.php">
@foreach ($arr as $key => $value)

    <div class="mb-3 mt-3">
        <label for="email">{{$value}}</label>
        <input type="text" class="form-control" id="{{$value}}" placeholder="Enter {{$value}}" name="{{$value}}">
    </div>
@endforeach
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
