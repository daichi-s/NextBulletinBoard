@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <form method="POST" action="{{ route('board.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">タイトル</label>
                        <input type="text" class="form-control" name="title" placeholder="タイトル">
                    </div>
                    <div class="form-group">
                        <label for="body">本文</label>
                        <input type="text" class="form-control" name="body" placeholder="本文">
                    </div>
                    <button type="submit" class="btn btn-primary">作成</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
