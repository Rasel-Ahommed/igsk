<div class="quick-notice-board">
    <div id="carouselId" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="col-lg-4">

                    <div class="quick-notice-board">
                        <div class="card p-3">

                            <div class="card-body">

                                <div class="d-flex justify-content-between">

                                    <p class="notice-month h6">{{ $monthName }}</p>

                                    <p class="notice-week h6">Week: {{ $ordinals[$week] }}</p>

                                </div>



                                @foreach ($notices as $index => $notice)
                                    @php

                                        $dateTime = Carbon::parse($notice->created_at);

                                        $formattedTime = $dateTime->format('h:i A');

                                        $formattedDateTime = $dateTime->format('d-m-y');

                                    @endphp



                                    <li>

                                        <div
                                            class="notice-item-top d-flex flex-column-reverse justify-content-between align-items-end pb-2 ">

                                            <div class="notice-title h5 m-0">

                                                {{ $index + 1 }}. {{ $notice->title }}

                                            </div>

                                            <div class="notice-datetime">

                                                <span class="notice-time">Time: {{ $formattedTime }}</span>

                                                <span class="notice-date d-block">Date: {{ $formattedDateTime }}</span>

                                            </div>

                                        </div>

                                        <div class="notice-item-bottom">

                                            <p class="notice-body">

                                                <a style="color:black;text-decoration: none" href="{{ $notice->image }}"
                                                    target="_blanck">{!! $notice->details !!}</a>

                                            </p>

                                        </div>

                                    </li>
                                @endforeach

                            </div>

                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>


{{-- <div class="col-lg-4">


    <div class="quick-notice-board">

      <div class="card p-3">

        <div class="card-body">

          <div class="d-flex justify-content-between">

            <p class="notice-month h6">{{$monthName}}</p>

            <p class="notice-week h6">Week: {{$ordinals[$week]}}</p>

          </div>

          

        @foreach ($notices as $index => $notice)

          @php

              $dateTime = Carbon::parse($notice->created_at);



              $formattedTime = $dateTime->format('h:i A');



              $formattedDateTime = $dateTime->format('d-m-y');

          @endphp

          

          <li>

            <div class="notice-item-top d-flex flex-column-reverse justify-content-between align-items-end pb-2 ">

              <div class="notice-title h5 m-0">

              {{$index + 1}}. {{$notice->title}}

              </div>

              <div class="notice-datetime">

                <span class="notice-time">Time: {{$formattedTime}}</span>

                <span class="notice-date d-block">Date: {{ $formattedDateTime}}</span>

              </div>

            </div>

            <div class="notice-item-bottom">

              <p class="notice-body">

                <a style="color:black;text-decoration: none" href="{{$notice->image}}" target="_blanck">{!!$notice->details!!}</a>

              </p>

            </div>

          </li>

        @endforeach

        </div>

      </div>

    </div>

</div> --}}
