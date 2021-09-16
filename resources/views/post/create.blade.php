<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    
   <h1>Create New Post</h1>
  <form action="#">
    @csrf
    <select name="channel_id" id="channel_id">
        @foreach ($channels as $channel)
        <option value="{{$channel->id}}">{{$channel->name}}</option>
        @endforeach
        
    </select>

  </form>


</body>
</html>