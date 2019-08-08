@extends('layouts.app')
@section('content')
<title>add new topic</title>

<form action="/newtopic.php"></form>
<div>
<form action="/newtopic.php">
  <div class="form-group">
    <h1>New Topic</h1>

    <hr>

    <label for="tNo"><b>topic No.</b></label>
    <input type="text" placeholder="enter topic number" name="tNo" required><br>

    <label for="tName"><b>topic's name</b></label>
    <input type="text" placeholder="enter topic" name="tName" required>


    <button type="submit" onclick="location.href='/'">Submit</button>
  </div>
</form>
</div>

@endsection
