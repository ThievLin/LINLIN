@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2> Laravel 9 CRUD (Students Information)</h2>
                        <br>
                        <br>
                        <a href="{{ url('/student') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Student
                        </a>
                        <a href="{{ url('/contact') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Contact
                        </a>
                        <a href="{{ url('/subject') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Subject
                        </a>
                        <a href="{{ url('/background') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Background
                        </a>
                        <br>
                        <br>
                        <div class="card-body">
                            <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                                Add New
                            </a>
                            
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>firstname</th>
                                            <th>lastname</th>
                                            <th>gender</th>
                                            <th>age</th>
                                            <th>dob</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($students as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->firstname }}</td>
                                                <td>{{ $item->lastname }}</td>
                                                <td>{{ $item->gender }}</td>
                                                <td>{{ $item->age }}</td>
                                                <td>{{ $item->dob }}</td>
                                                
          
                                                <td>
                                                    <a href="{{ url('/student/' . $item->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    <a href="{{ url('/student/' . $item->id . '/edit') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
          
                                                    <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('{{ __('Deleted?') }}')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
        </div>
    </div>
    
@endsection