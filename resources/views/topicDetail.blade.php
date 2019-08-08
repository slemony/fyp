@extends('layouts.app')
@section('content')
<title>add detail</title>

<h1>Detail</h1>
<h2>Topic Name</h2>

<div class="table-responsive" style="margin: 0 auto;">
<table id = "mainTable" class="table">
	<tr>
        <th>Question Type</th>
        <th>No. of Question</th>
        <th>Edit</th>
   	</tr>
   	<tr>
        <td>MCQ</td>
        <td>10</td>
        <td><a href="mcqEdit">edit</a></td>
   	</tr>
   	<tr>
        <td>True/False</td>
        <td>10</td>
        <td><a href="tfEdit">edit</a></td>
   	</tr>
    <tr>
        <td>Checkbox</td>
        <td>10</td>
        <td><a href="cbEdit">edit</a></td>
   	</tr>
    <tr>
        <td>Fill in the blank</td>
        <td>10</td>
        <td><a href="fitbEdit">edit</a></td>
   	</tr>
</table>
</div>

<p>sort question by: </p>
<select>
  <option value="qType">Quesiton Type</option>
  <option value="cTime">Create Time</option>
</select>

<div class="table-responsive" style="margin: 0 auto;">
<table id = "mainTable" class="table">
	<tr>
        <th>No.</th>
        <th>Question</th>
        <th>Type</th>
        <th>Edit</th>
   	</tr>
   	<tr>
        <td>1.</td>
        <td>Sample Question 1</td>
        <td>MCQ</td>
        <td><a href="mcqEdit">edit</a></td>
   	</tr>
   	<tr>
        <td>2.</td>
        <td>Sample Question 2</td>
        <td>MCQ</td>
        <td><a href="mcqEdit">edit</a></td>
   	</tr>
</table>
</div>

@endsection