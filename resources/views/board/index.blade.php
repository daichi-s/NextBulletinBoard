@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table border="1">
                        <tr>
                            <th>ID</th>
                            <th>タイトル</th>
                            <th>本文</th>
                            <th>ステータス</th>
                            <th>作成日時</th>
                            <th>更新日時</th>
                        </tr>
                        @forelse ($boardList as $board)
                            <tr>
                                <td>{{ $board->id }}</td>
                                <td>{{ $board->title }}</td>
                                <td>{{ $board->body }}</td>
                                <td>{{ $board->status }}</td>
                                <td>{{ $board->created_at }}</td>
                                <td>{{ $board->updated_at }}</td>
                            </tr>
                        @empty
                            <tr>ボードが存在しません。</tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
