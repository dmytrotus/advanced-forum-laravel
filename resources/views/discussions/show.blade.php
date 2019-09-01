@extends('layouts.app')

@section('content')


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

                    <hr>
                    
                    <p>
                        {{ $d->content }}
                    </p>
                    
                </div>

                <div class="card-footer">
                    <p>
                        {{ $d->replies->count() }} Reply
                    </p>
                </div>
            </div>

        @foreach ($d->replies as $r)

            <div class="card card-default mb-1">
                <div class="card-heading p-4">
                    <img src="{{ $r->user->avatar }}" alt="" width="40px" height="40px">
                    <span>{{ $r->user->name }}</span>, <b>{{ $r->created_at->diffForHumans() }}</b>
                    <a href="{{ route('discussion', ['slug' => $d->slug ])}}" class="btn btn-info float-right">View</a>

                </div>

                <div class="card-body">                    
                    <p>
                    {{ $r->content }}
                    </p>
                    
                </div>

                <div class="card-footer">
                    <p>
                        LIKE
                    </p>
                </div>
            </div>

        @endforeach


@endsection