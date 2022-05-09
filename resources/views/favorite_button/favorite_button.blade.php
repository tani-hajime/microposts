@if (Auth::user()->is_favorite($micropost->id))
        {{-- 登録解除ボタンのフォーム --}}
        {!! Form::open(['route' => ['user.delete_favorite', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('unfavorite', ['class' => "btn-sm btn-outline-dark"]) !!}
        {!! Form::close() !!}
        
    @else
        {{-- 登録ボタンのフォーム --}}
        {!! Form::open(['route' => ['user.register_favorite', $micropost->id]]) !!}
            {!! Form::submit('favorite', ['class' => "btn-sm btn btn-outline-success"]) !!}
        {!! Form::close() !!}
    @endif