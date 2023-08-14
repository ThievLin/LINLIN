@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2> Laravel 9 CRUD (Students Information)</h2>
                        <br>
                        <div class="col-md-4">
                            <form action={{ route('student.index') }} method="GET">
                                <div class="input-group">
                                    <input type="text" name="gender" placeholder="All Genders">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </form>
                          </div>
                        <br>
                        <a href="{{ url('/subject') }}" class="btn btn-success btn-sm" title="Go to subject">
                            Subject
                        </a>
                        <br>
                        <br>
                        <a href="{{ url('/student') }}" class="btn btn-success btn-sm" title="Go to Student">
                            Student
                        </a>
                        <a href="{{ url('/contact') }}" class="btn btn-success btn-sm" title="Go to Contact">
                            Contact
                        </a>
                        
                        <a href="{{ url('/background') }}" class="btn btn-success btn-sm" title="Go to Background">
                            Background
                        </a>
                        <br>
                        <br>
                        <div class="card-body">
                            <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                                Add New students 
                            </a>
                            
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Date of Birst</th>
                                            <th>Image</th>
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
                                                    <img src="{{ asset('/storage/images/students/'.$item->image) }}" width= '50' height='50' />
                                                </td>
                                                
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