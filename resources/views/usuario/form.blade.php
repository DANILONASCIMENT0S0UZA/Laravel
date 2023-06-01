@extends('layouts.base')

@section('content')

<form action="" method="post">
    @csrf

    <div class="row">
        <div class="col-md-6">
            <label class="form-label" for="name">
                Nome*
            </label>
            <input class="form-control" type="text"
            name="name" id="name" required>
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">E-mail*</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

    </div>
</form>

@endsection
