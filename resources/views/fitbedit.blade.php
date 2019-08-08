@extends('layouts.app')
@section('content')
<title>MCQ</title>

<h1>Fill in the Blank</h1>
<p>Question:</p>
<textarea rows="4" cols="50">
</textarea><br><br><br>

<p>Answer:</p>
<textarea rows="4" cols="50">
</textarea><br>

<button type="button" onclick="location.href='topicDetail'">comfirm</button>

@endsection