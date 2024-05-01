@extends('frontend.layouts.app')

@section('title', 'FAQs')

@section('content')


<section class="faq-question">
    <div class="container">
        <div class="d-flex justify-content-center">
            <h2 class="section-head">
                FAQs
            </h2>
        </div>
        <div class="faq-items">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                @foreach ($datas as $index => $data)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse{{$index}}" aria-expanded="false" aria-controls="flush-collapseOne">
                                {{$data->question}}
                            </button>
                        </h2>
                        <div id="flush-collapse{{$index}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                {!!$data->answer!!}
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</section>

@endsection