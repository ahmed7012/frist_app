@extends('app')

@section('content')

<h1>contact page</h1>
<div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{('/send-message')}}" method="POST" class="order p-3">
    @csrf
    @if (session('success')!==null)
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
<div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" name="name" id="name">
</div>
<div class="form-group">
    <label for="name">email</label>
    <input type="email" class="form-control" name="email" id="email">
</div>
<div class="form-group">
    <label for="name">message</label>
<textarea class="form-control" name="content" id="content" rows="5" ></textarea>
</div>
<div class="form-group">
    <input type="submit" class="form-control bg-success" value="send" >
</div>
</form>
</div>
</div>
</div>
@endsection
