@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Channels</div>

                <div class="d-flex justify-content-end m-3">
                <a href="{{ route('channels.create')}}" class="btn btn-success">New Channel</a>
                </div>

                <div class="card-body">
                   
                   <table class="table table-hover">
                       <thread>
                           <th>Name</th>
                           <th>Edit</th>
                           <th>Delete</th>
                       </thread>
                       <tbody>
                           @foreach($channels as $channel)

                           <tr>
                               <td>
                                   {{$channel->title}}
                               </td>
                               <td>
                                   <a href="{{ route('channels.edit', ['channel' => $channel->id ]) }}" class="btn btn-sm btn-info">Edit</a>
                               </td>
                               <td>
                                <form action="{{ route('channels.destroy', ['channel' => $channel->id]) }}" method="POST">

                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}

                                  <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                  


                                </form>
                                   
                               </td>
                           </tr>

                           @endforeach
                       </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection