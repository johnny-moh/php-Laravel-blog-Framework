@extends('layouts.master')

@section('content')
    <main>
        <h1 id="title">{{ $title }}</h1>
        <section>
            <h2 style="text-align: center">Contact Me</h2>
            <article>
                <p style="text-align: center">Fill Up the Form To Reach Us
                <p>
            </article>
            <form action="/contact" method="post">
                @csrf
                <div class="alert alert-danger">
                    @if ($errors->any())

                    @endif

                    @foreach ($erros->all() as $error)
                        <li>(($error))</li>
                    @endforeach


                </div>
                @endif



                <div class="form-controls">
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname" value=""><br>
                </div>
                <div class="form-controls">
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname" value=""><br><br>
                    
                </div>

                <div class="form-controls">
                    <button type="submit" name="submit">Submit</button>
                    <button type="reset" name="reset">Reset</button>
                </div>

            </form>


        </section>
    </main>
@endsection
