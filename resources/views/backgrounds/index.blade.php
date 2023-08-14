@extends('backgrounds.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Background Students</h2>
                        <br>
                        <br>
                        <a href="{{ url('/subject') }}" class="btn btn-success btn-sm" title="Go to Subject">
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
                            <a href="{{ url('/background/create') }}" class="btn btn-success btn-sm" title="Add New Background">
                                Add New Background Students
                            </a>     
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Highschool</th>
                                            <th>Year graduate</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($backgrounds as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->highschool }}</td>
                                                <td>{{ $item->graduate }}</td>
                                                
                                                <td>
                                                    <a href="{{ url('/background/' . $item->id) }}"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    <a href="{{ url('/background/' . $item->id . '/edit') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
          
                                                    <form method="POST" action="{{ url('/background' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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