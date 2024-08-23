@extends('administrator.layouts.admin')
@section('content')
{!! QrCode::size(300)->generate('https://www.icajobguarantee.com/seminar-workshop?city=Kolkata&center=Dalhousi&utm_campaign=Seminar&utm_source=Center-Workshop') !!}
@endsection
