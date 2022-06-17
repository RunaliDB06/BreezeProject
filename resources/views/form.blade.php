<x-app-layout>
    <x-slot name="header">
        <h2 class="font-seniblod text-x1 text-gray-800 leading-tight">
            {{_('Dashboard')}}
        </h2>
    </x-slot>
    <!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Write your Tittle</h2>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
  <form action="{{Route('store')}}" Method="post">
    @csrf
    <div class="form-group">
      <label for="tittle">Tittle:</label>
      <input type="tittle" class="form-control" id="tittel" name="tittle">
    </div><br>
    <div class="form-group">
      <label for="dis">Discription</label>
      <textarea id="dis" name="dis">
      </textarea>
    </div><br>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
</x-app-layout>
