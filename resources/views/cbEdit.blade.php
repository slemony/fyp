@extends('layouts.app')
@section('content')
<title>Checkbox</title>

<h1>Checkbox</h1>
<p>Question:</p>
<textarea rows="4" cols="50">
</textarea><br>

<form action="" require>
  <input type="checkbox" name="gender" value="1"> sample 1<br>
  <input type="checkbox" name="gender" value="2"> sample 2<br>
  <input type="checkbox" name="gender" value="3"> sample 3<br>
</form><br>
<button>add choice</button>


<button type="button" onclick="location.href='topicDetail'">comfirm</button>

@endsection

