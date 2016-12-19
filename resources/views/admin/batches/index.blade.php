@extends('layouts.admin')
@section('title', 'Admin - Students')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title pull-left">List of batchs</h3>
            <a href="{{ route('batch.create') }}" class="btn btn-primary pull-right">New</a>
            <br>
            <br>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>#</td>
                    <td>Batch Name</td>
                    <td>Starting Date</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($batches as $index => $batch)
                    <tr>
                        <td>{{ ++$index }}</td>
                        <td>{{ $batch->name }}</td>
                        <td>{{ $batch->starting_date }}</td>
                        <td>
                            <!-- Split button -->
                            <div class="btn-group">
                                <a href="{{ route('batch.show', $batch->id) }}" type="button" class="btn btn-default">Details</a>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>
        <div class="text-center">
            {{ $batches->render() }}
        </div>
    </div>

@endsection