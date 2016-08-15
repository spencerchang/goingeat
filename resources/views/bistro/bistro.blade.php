@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                New Bistro
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->
                @include('common.errors')

                <!-- New Bistro Form -->
                <form action="{{ url('bistro') }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                    <!-- Bistro Name -->
                    <div class="form-group">
                        <label for="bistro-name" class="col-sm-3 control-label">Bistro</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="bistro-name" class="form-control" value="{{ old('bistro') }}">
                        </div>
                    </div>

                    <!-- Add Bistro Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Add Bistro
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Current Bistros -->
        @if (count($bistros) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Bistros
            </div>

            <div class="panel-body">
                <table class="table table-striped bistro-table">
                    <thead>
                    <th>Bistro</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        @foreach ($bistros as $bistro)
                        <tr>
                            <td class="table-text"><div>{{ $bistro->name }}</div></td>

                            <!-- Bistro Delete Button -->
                            <td>
                                <form action="{{url('bistro/' . $bistro->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button type="submit" id="delete-bistro-{{ $bistro->id }}" class="btn btn-danger">
                                        <i class="fa fa-btn fa-trash"></i>Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
