@extends('frontend.v1.frontend')
@section('content')
    <div class="index-page">
        <div class="news-slideshow">
            <div class="mask">
                <div class="slideset">
                    <div class="slide">
                        <img src="{{url('/')}}/web-apps/frontend/assets/images/gawadar.jpg" alt="gawadar city">
                        <div class="container">
                            <div class="caption">
                                <h1>Gwadar <span>City</span></h1>
                                <p>{{ str_limit("Gwadar is strategically located on the western end of Baluchistan coast on the opposite end of the Gulf of Oman which is an important route for oil tankers bound for Japan and western countries out of Gulf
                                   China has a great strategic interest in Gwadar. In 2013, the state-owned China Overseas Port Holdings Limited acquired Gwadar Port.The port is strategically important for China as sixty percent of China's oil comes from the Persian Gulf by ships traveling over 16,000 kilometres in two to three months, confronting pirates, bad weather, political rivals, and other risks up to its only commercial port, Shanghai. Gwadar will reduce the distance to a mere 5000 kilometres and also serve round the year",500) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    {{ Form::open(array('url' => 'search','method' => 'GET' ,'class'=>'mainSearch-form')) }}

                        <select class="js-example-basic-single" name="city_id" id="cityId">
                            <option>Select City</option>
                            @foreach($response['data']['cities'] as $city)
                             <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                        <ul class="typeOfBuying">
                            <li>
                                <label for="buy" class="customRadio">
                                    <input type="radio" name="purpose_id" id="buy" value="1" checked>
                                    <span class="fake-label">Buy</span>
                                </label>
                            </li>
                            <li>
                                <label for="rent" class="customRadio">
                                    <input type="radio" name="purpose_id" id="rent" value="2">
                                    <span class="fake-label">Rent</span>
                                </label>
                            </li>
                        </ul>
                        <ul class="subTypes">
                            <li>
                                <label for="all" class="customRadio">
                                    <input type="radio" name="property_type_id" id="all" checked>
                                    <span class="fake-radio"></span>
                                    <span class="fake-label">All Types</span>
                                </label>
                            </li>
                            @foreach($response['data']['propertyTypes'] as $propertyType)
                            <li>
                                <label for="{{$propertyType->id}}" class="customRadio">
                                    <input type="radio" name="property_type_id" id="{{$propertyType->id}}" value="{{$propertyType->id}}" >
                                    <span class="fake-radio"></span>
                                    <span class="fake-label">{{$propertyType->name}}</span>
                                </label>
                            </li>
                            @endforeach
                        </ul>
                        <select class="js-example-basic-single" name="location_id" id="societies">
                            <option>Select Location</option>
                        </select>
                        <button type="submit">Search<span class="icon-arrow-right"></span></button>
                    {{Form::close()}}
                    <div class="btn-holder">
                        <ul class="total-slides">
                            <li><span class="cur-num">0</span></li>
                            <li><span class="all-num">0</span></li>
                        </ul>
                        <div class="btn-container">
                            <a href="#" class="btn-prev"><span class="icon-arrow-left"></span></a>
                            <a href="#" class="btn-next"><span class="icon-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="agent-slider">
            <h2>Top Agents</h2>
            <div class="mask">
                <div class="slideset">
                    @foreach(array_chunk($response['data']['agents'], 12) as $agents)
                        <?php
                        foreach($agents as $agent){
                            $image = url('/') . "/assets/imgs/no.png";
                            foreach ($agent->agencies as $agency)
                            {
                                if ($agency->logo != "")
                                {
                                    $image = url('/') . '/temp/' . $agency->logo;
                                }
                            }
                            ?>
                                 <div class="slide"><a href="{{ URL::to('agent?agent_id='.$agent->id) }}"><img src="{{$image}}" alt="image description"></a></div>
                            <?php }?>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="latest-news">
            <div class="mask">
                <div class="slideset">
                    @foreach($response['data']['news'] as $news)
                        <div class="slide">
                        <div class="container">
                            <h1>{{str_limit($news->title,30)}}</h1>
                            <p>{{ str_limit($news->description,150)}}</p>
                            <a href="#" class="btn-default">READ MORE</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="heading-btns">
                <h1>NEWS</h1>
                <a href="#" class="btn-prev"><span class="icon-arrow-left"></span></a>
                <a href="#" class="btn-next"><span class="icon-arrow-right"></span></a>
            </div>
        </div>
        <div class="cities-section">
            <h1><span>Top</span> Cities</h1>
            <div class="layout">
                <div class="col">
                    <a href="{{url('/')}}/search?city_id={{$response['data']['importantCities'][0]->id}}">
                        <img src="{{ url('/').'/'.$response['data']['importantCities'][0]->path}}" alt="image description">
                        <span class="title">{{$response['data']['importantCities'][0]->city}}</span>
                    </a>
                </div>
                <div class="col">
                    <ul>
                        @for($i=1;$i<sizeof($response['data']['importantCities']);$i++)
                         <li><a href="{{url('/')}}/search?city_id={{$response['data']['importantCities'][$i]->id}}">
                                <img src="{{url('/').'/'.$response['data']['importantCities'][$i]->path}}" alt="image description">
                                 <span class="title">{{$response['data']['importantCities'][$i]->city}}</span>
                             </a>
                         </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
        <div class="projects-slideshow">
            <div class="mask">
                <h2>Projects</h2>
                <div class="slideset">
                  @foreach($response['data']['projects'] as $project)
                    <div class="slide">
                        <img src="{{url('/').'/'.$project->images[0]->image}}" alt="image description">
                        <div class="container">
                            <div class="caption">
                                <strong class="heading">{{$project->title}}</strong>
                                <p>{{$project->description}}<a href="#">Read more..</a></p>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
                <a href="#" class="btn-prev"><span class="icon-keyboard_arrow_left"></span></a>
                <a href="#" class="btn-next"><span class="icon-keyboard_arrow_right"></span></span></a>
                <a href="#" class="btn-default">View all projects</a>
            </div>
        </div>
        <div class="mobile-app">
            <div class="container">
                <img src="{{url('/')}}/web-apps/frontend/assets/images/img07.png" alt="image description" class="mobile-img">
                <div class="caption">
                    <h1><span>Mobile</span> App</h1>
                    <strong class="heading">Coming Soon..</strong>
                    <div class="logo"><img src="{{url('/')}}/web-apps/frontend/assets/images/logo.png" alt="nugree"></div>
                </div>
            </div>
        </div>
        <div class="about-us">
            <h1><span>About</span> Us</h1>
            <div class="description">
                {{--<h2>What is Lorem Ipsum?</h2>--}}
                <p>Nugree.com is friendly portal website. We are providing a maximum feature with minimum exercise, here you can find your desired property on single click.</p>
                <p>Nugree.com is providing flexible search for user which will provide potential clients with a better overall online experience.
                    With modern housing and societies services and a growing population, Nugree.com is a unique regional center and offers plenty of lifestyle and investment opportunity.
                    nugree.com is providing a complete property maintenance solution package that address user,s needs. Our approach is simple. We provide professional, trustworthy property management services</p>
            </div>
        </div>
    </div>
@endsection