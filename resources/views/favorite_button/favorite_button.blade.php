@if (Auth::user()->is_favorite($micropost->id))
        {{-- 登録解除ボタンのフォーム --}}
        {!! Form::open(['route' => ['user.delete_favorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('登録から外す', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- 登録ボタンのフォーム --}}
        {!! Form::open(['route' => ['user.register_favorite', $micropost->id]]) !!}
            {!! Form::submit('お気に入りに登録する', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif