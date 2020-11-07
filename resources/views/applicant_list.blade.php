@extends('home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 mt-5">
                <table class="table table-striped table-dark mt-5">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">surname</th>
                            <th scope="col">position</th>
                            <th scope="col">phone</th>
                            <th scope="col">status</th>
                            <th scope="col">edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($applicants as $applicant)
                            <tr>
                                <th>{{ $applicant->id }}</th>
                                <td>{{ $applicant->name }}</td>
                                <td>{{ $applicant->surname }}</td>
                                <td>{{ $applicant->position }}</td>
                                <td>{{ $applicant->phone }}</td>
                                <td>
                                    @if ($applicant->is_hired == 1)
                                        <button class="btn btn-success">hired</button>
                                    @else
                                        <a class="btn btn-danger" href="{{ route('hire', $applicant->id) }}">not hired</a>
                                    @endif
                                </td>
                                <td><a href="{{ route('edit', $applicant->id) }}" class="btn btn-light">Edit</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
