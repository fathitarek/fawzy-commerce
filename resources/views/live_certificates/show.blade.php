@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Live Certificate
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('live_certificates.show_fields')
                    <a href="{{ route('liveCertificates.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
