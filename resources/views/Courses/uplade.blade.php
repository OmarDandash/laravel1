<form action="{{route('photo.seve')}}" method="post" enctype="multipart/form-data">
    @csrf
<input type="file" name="potho" id="">
<button type="submit">submit</button>
</form>