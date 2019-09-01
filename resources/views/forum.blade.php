@extends('layouts.app')

@section('content')
           
           @foreach ($discussions as $d)

            <div class="card card-default mb-1">
                <div class="card-heading p-3">
                    <img src="{{ $d->user->avatar }}" alt="" width="40px" height="40px">
                    <span>{{ $d->user->name }}</span>, <b>{{ $d->created_at->diffForHumans() }}</b>
                    <a href="{{ route('discussion', ['slug' => $d->slug ])}}" class="btn btn-info float-right">View</a>

                </div>

                <div class="card-body">
                    <h4 class="text-center">
                    {{ $d->title }}
                    </h4>
                    <p class="text">
                        {{ str_limit($d->content, 50) }}
                    </p>
                    
                </div>

                <div class="card-footer">
                    <p>
                        {{ $d->replies->count() }} Reply
                    </p>
                </div>
            </div>

           @endforeach

           {{ $discussions->links() }}

@endsection
