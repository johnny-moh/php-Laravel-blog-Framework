@extends('layouts.master')

@section('content')
    <main>
        <h1 id="title">{{ $title }}</h1>
        <section>
            <h2>Article Title</h2>
            <article>
                <p>Article content goes here…
                <p>

                    <a href="/add" class="btn btn-primary m-2">Add New project</a>
            </article>


            <table class="table-dark">
                <thead>
                    <tr>
                        <th scope="col">Color</th>
                        <th scope="col">Category</th>
                        <th scope="col">Type</th>
                        <th scope="col">Code</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($projects as $project)
                        <tr>
                            <td>{{$projects}}</td>
                            
                            {{-- <th scope="row">{{ $project->color }}</th>
                            <td>{{ $project->category }}</td>
                            <td>{{ $project->type }}</td>
                            <td>{{ $project->code }}</td>
                            
                            <td><a href="/edit/{{ $project->color }}" class="btn btn-small btn-secondary">Edit</a>
                            <a href="/delete/{{ $project->color }}" class="btn btn-small btn-danger">Delete</a></td> --}}
                        </tr>
                    @endforeach


        </section>




        </tbody>
        </table>
    </main>
@endsection
