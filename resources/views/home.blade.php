@extends('layouts.app')
@section('content')

<title>home</title>

<link rel="stylesheet" href="/css/style.css">

<div class="table-responsive" style="margin: 0 auto;">
<table id = "mainTable" class="table">
	<tr>
        <th>Test Name/Chapter</th>
        <th>No. of Question</th>
        <th>Detail</th>
   	</tr>
   	<tr>
        <td>Lecture 01</td>
        <td>50<br>
			50</td>
        <td><a href="topicDetail">show more</a></td>
   	</tr>
   	<tr>
        <td>Lecturer 02</td>
		<td>50<br>
			50</td>
        <td><a href="topicDetail">show more</a></td>
   	</tr>
</table>
</div>

<button type="button" onclick="location.href='newtopic'">Add New Chapter</button>

<div class="tooltip">i
  <span class="tooltiptext">Add new chapter for the quiz.</span>
</div>

@endsection