@extends('layouts.master')
@section('title', 'index')

@section('content')
    <div class="card text-center">
        <div class="card-body">
            <div class="card-header">
                Invite nearby affiliates to the office party!
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('inviteAffiliates') }}">
                    {{ csrf_field() }}
                    <select class="form-select form-select-lg mb-3" id="offices" name="office_id" required>
                        <option value="" disabled selected>Select the office</option>
                    @foreach ($office as $item)
                            <option value="{{ $item->office_id}}">{{ $item->office_name }}</option>
                        @endforeach
                    </select>

                    <button class="btn btn-primary" type="submit">Invite Affiliates</button>
                </form>
            </div>

            <div class="card-footer text-muted">
                Discover the affiliates within 100km from the selected office
            </div>
        </div>
    </div>

        {{--            <div>--}}
        {{--                <h1>List of Invited Affiliates:</h1>--}}
        {{--                @foreach($invited_affiliates as $invited_affiliate)--}}
        {{--                    <p>{{ $invited_affiliate }}</p>--}}
        {{--                @endforeach--}}
        {{--            </div>--}}

@endsection
