@extends('layouts.app')

@section('content')
<div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
            {{-- ユーザ一覧 --}}
     
   


    //
    <p>{!!$user!!}</p>
    //
    @foreach ($microposts as $favorite)
        <p>{!!$favorite!!}</p>
           

        @endforeach
        
        </div>
        
        
        
        
        
    
        
        
        
        
        
        
</div>
    
@endsection