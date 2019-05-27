@extends('layouts.app')

@section('content')
    <div>
        <form action="{{ route('payment.store') }}" method="post">
            @csrf

            <input class="block px-3 py-4 block uppercase tracking-wide  rounded bg-blue text-white font-bold hover:bg-blue-dark no-underline" type="submit" value="Click Here to Make Payment">

        </form>
    </div>
@endsection