@extends('layouts.app')

@section('content')

    <div class="card mt-3 pl-2 pr-3">
        <div class="card-title"><h1>Contact</h1>

            <div class="card-body">

                <form role="form" id="contact-form" method="POST" action="{{route('contact.store')}}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" type="text" class="form-control" autocomplete="off" id="Name"
                                       placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input name="email" type="email" class="form-control" autocomplete="off" id="email"
                                       placeholder="name@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="body">Message</label>
                                <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection