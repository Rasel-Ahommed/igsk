@extends('frontend.layouts.app')

@section('title', 'co-curriculam')

@section('content')


<!-- academic header start -->

<section class="about-header">
    <div class="about-header-text">
        <h1>Co-curriculum Activities</h1>
    </div>
</section>

<!-- academic header end -->

<!-- activities start -->

<section class="igsk-activities">
    <div class="container py-md-5 py-4">
        <h5 class="text-primary list-style-sqr">
            <li class="fw-bold">Our Activates</li>
        </h5>
        <div class="row">
            <div class="col-md-6 col-sm-8">
                <h3>
                    Vibrant Activities: Nurturing Minds, Cultivating Skills
                </h3>
            </div>
        </div>
        <div class="row activities-item">
            <div class="col-md-4 col-sm-6">
                <div class="activiti-card">
                    <div class="card-img activiti-gray">
                        <img src="{{asset('frontendData/asset/image/work-img/club (1) 1.svg')}}" alt="Faculty Member" loading="lazy">
                    </div>
                    <div class="card-text">
                        <h5 class="fw-bold">Club Activities</h5>
                        <h6>Exploration and Introduction to Clubs</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="activiti-card">
                    <div class="card-img activiti-purple">
                        <img src="{{asset('frontendData/asset/image/work-img/karate 1.svg')}}" alt="Faculty Member" loading="lazy">
                    </div>
                    <div class="card-text">
                        <h5 class="fw-bold">Karate</h5>
                        <h6>Martial Arts Introduction and Passion</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="activiti-card">
                    <div class="card-img activiti-orange">
                        <img src="{{asset('frontendData/asset/image/work-img/yoga 1.svg')}}" alt="Faculty Member" loading="lazy">
                    </div>
                    <div class="card-text">
                        <h5 class="fw-bold">Yoga</h5>
                        <h6>Yoga Asanas and Practice Routine</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="activiti-card">
                    <div class="card-img activiti-green">
                        <img src="{{asset('frontendData/asset/image/work-img/paint 1.svg')}}" alt="Faculty Member" loading="lazy">
                    </div>
                    <div class="card-text">
                        <h5 class="fw-bold">Arts & Crafts</h5>
                        <h6>Exploring Various Artistic Mediums</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="activiti-card">
                    <div class="card-img activiti-pink">
                        <img src="{{asset('frontendData/asset/image/work-img/cooking 1.svg')}}" alt="Faculty Member" loading="lazy">
                    </div>
                    <div class="card-text">
                        <h5 class="fw-bold">Cooking</h5>
                        <h6>Cooking Competitions and Challenges</h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="activiti-card">
                    <div class="card-img activiti-yellow">
                        <img src="{{asset('frontendData/asset/image/work-img/language 1.svg')}}" alt="Faculty Member" loading="lazy">
                    </div>
                    <div class="card-text">
                        <h5 class="fw-bold">Language</h5>
                        <h6>Language Exchange Programs and Partnerships</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- activities end -->

<!-- details activities start -->

<section class="activities-details">
    <div class="container py-md-5 py-4">
        <div class="left-align-content text-start">
            <div class="details-content">
                <div class="details-img">
                    <img src="{{asset('frontendData/asset/image/work-img/club.png')}}" alt="Faculty Member" loading="lazy">
                </div>
                <div class="card-text">
                    <h4 class="fw-bold">Club Activities</h4>
                    <p>
                        A child needs a number of skills along with studies to aid himself in the future. To inbuilt
                        such real life based skills in our children we have after school activities such as the COOKING
                        CLASSES, ARTS & CRAFTS, KARATE, LANGUAGE CLUB, COMPUTER CLUB, BOOK READING Club and many more.
                    </p>
                </div>
            </div>
        </div>
        <div class="right-align-content text-end">
            <div class="details-content">
                <div class="card-text">
                    <h4 class="fw-bold">Karate</h4>
                    <p>
                        We believe self protection is essential for a child to adapt with today’s world. Realizing this
                        need we introduced our Karate classes for children of all ages. We provide weekly Karate classes
                        to not only keep our students’ physically active but also to develop their confidence &
                        self-dependency.
                    </p>
                </div>
                <div class="details-img">
                    <img src="{{asset('frontendData/asset/image/work-img/karate.png')}}" alt="Faculty Member" loading="lazy">
                </div>
            </div>
        </div>
        <div class="left-align-content text-start">
            <div class="details-content">
                <div class="details-img">
                    <img src="{{asset('frontendData/asset/image/work-img/yoga.png')}}" alt="Faculty Member" loading="lazy">
                </div>
                <div class="card-text">
                    <h4 class="fw-bold">Yoga</h4>
                    <p>
                        Yoga can support both the mental & physical internal healing process along with improving one’s
                        strength, balance & flexibility. Practicing yoga from a tender age can build a healthy
                        lifestyle. Keeping this in mind, IGSK designed yoga classes for all students every week.
                    </p>
                </div>
            </div>
        </div>
        <div class="right-align-content text-end">
            <div class="details-content">
                <div class="details-text">
                    <h4 class="fw-bold">Arts & Crafts</h4>
                    <p>
                        A creative mind makes a person think in a multi-dimensional way. Arts & Crafts classes help to
                        instill a sense of achievement and pride in children, boosting to play with their creativity &
                        grow their curiosity. On every Thursday, we arrange an open Arts and Crafts class for all
                        students to nurture their creative minds.
                    </p>
                </div>
                <div class="details-img">
                    <img src="{{asset('frontendData/asset/image/work-img/art.png')}}" alt="Faculty Member" loading="lazy">
                </div>
            </div>
        </div>
        <div class="left-align-content text-start">
            <div class="details-content">
                <div class="details-img">
                    <img src="{{asset('frontendData/asset/image/work-img/cooking.png')}}" alt="Faculty Member" loading="lazy">
                </div>
                <div class="card-text">
                    <h4 class="fw-bold">Cooking</h4>
                    <p>
                        Basic skills like cooking can also be fun and easy in the yummy aromas of IGSK's cooking
                        classes. We believe skills which can help to adapt in the real life scenario are important to be
                        taught to our children from their early ages to aid them to grow up as self-dependent.
                    </p>
                </div>
            </div>
        </div>
        <div class="right-align-content text-end">
            <div class="details-content">
                <div class="card-text">
                    <h4 class="fw-bold">Language</h4>
                    <p>
                        Learning Language can enhance students’ cognitive function and improve their verbal, spatial &
                        creative thinking abilities. IGSK offers Multi Language Learning Classes to help their students
                        grow up as Global Citizens with enhanced knowledge about the cultures & heritages around us.
                    </p>
                </div>
                <div class="details-img">
                    <img src="{{asset('frontendData/asset/image/work-img/languese.png')}}" alt="Faculty Member" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- details activities end -->

@endsection