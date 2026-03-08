@extends('layout')

@section('content')

<div class="row justify-content-center">

<div class="col-md-6">

<div class="eid-card">

<h3 class="text-center mb-4">🎁 ঈদি তৈরি করো</h3>

<form method="POST" action="/store">

@csrf

<div class="mb-3">

<label>তোমার নাম</label>

<input type="text" name="sender_name" class="form-control">

</div>

<div class="mb-3">

<label>মোট টাকা</label>

<input type="number" name="amount" class="form-control">

</div>

<div class="mb-3">

<label>কয়জন বন্ধু পাবে</label>

<input type="number" name="receivers" class="form-control">

</div>

<button class="btn btn-success btn-eid w-100">

🚀 লিংক তৈরি করো

</button>

</form>

</div>

</div>

</div>

@endsection