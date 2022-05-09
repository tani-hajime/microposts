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
    @foreach ($favorites as $favorite)
    @foreach ($microposts as $micropost)
        
        @if($micropost->id == $favorite->pivot->micropost_id)
        <p>{!!$micropost->content!!}</p>
          @endif

    @endforeach
       

    @endforeach
    //
    
        
        </div>
        
        
        
        
        
    
        
        
        
        
        
        
</div>
    
@endsection