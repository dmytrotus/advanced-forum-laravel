@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Channel {{ $channel->title }}</div>

                <div class="card-body">
                	@if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('channels.update', ['channel' => $channel->id ]) }}" method="POST">
                    	{{ csrf_field() }}
                        {{ method_field('PUT') }}


                    	<div class="form-group">
                    		<input name="channel" type="text" class="form-control" value="{{ $channel->title }}">
                    	</div>

                    	<div class="form-group">
                    		<div class="text-center">
                    			<button class="btn btn-success" type="submit">
                    				Update Channel
                    			</button>
                    		</div>
                    	</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
