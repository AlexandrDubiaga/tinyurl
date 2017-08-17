<html>
  <body>
    <form action="{{URL::to('/make-url')}}" method="POST">
      <input type="text" name="url" />
      <button type="submit">Make URL</button>
      @if($errors->first('url'))
      <p>{{{$errors->first('url')}}}</p>
      @endif
 </form>
  </body>
</html>
