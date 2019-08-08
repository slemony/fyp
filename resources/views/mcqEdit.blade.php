@extends('layouts.app')
@section('content')
<title>MCQ</title>

<h1>MCQ</h1>
<p>Question:</p>
<textarea rows="4" cols="50">
</textarea><br>

<form action="" require>
  <input type="radio" name="gender" value="1"> sample 1<br>
  <input type="radio" name="gender" value="2"> sample 2<br>
  <input type="radio" name="gender" value="3"> sample 3<br>
</form><br>
<button>add choice</button>


<button type="button" onclick="location.href='topicDetail'">comfirm</button>

@endsection

