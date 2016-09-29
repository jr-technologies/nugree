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
                                <h1>gawadar <span>city</span></h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="{{url('/')}}/web-apps/frontend/assets/images/gawadar.jpg" alt="gawadar city">
                        <div class="container">
                            <div class="caption">
                                <h1>gawadar <span>city</span></h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="{{url('/')}}/web-apps/frontend/assets/images/gawadar.jpg" alt="gawadar city">
                        <div class="container">
                            <div class="caption">
                                <h1>gawadar <span>city</span></h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <img src="{{url('/')}}/web-apps/frontend/assets/images/gawadar.jpg" alt="gawadar city">
                        <div class="container">
                            <div class="caption">
                                <h1>gawadar <span>city</span></h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
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
                        <select class="js-example-basic-single" name="society_id" id="societies">
                            <option>Select society</option>
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
            <h1>Top Agents</h1>
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
                <div class="col"><a href="{{url('/')}}/search?city_id={{$response['data']['importantCities'][0]->id}}"><img src="{{ url('/').'/'.$response['data']['importantCities'][0]->path}}" alt="image description"></a></div>
                <div class="col">
                    <ul>

                        @for($i=1;$i<sizeof($response['data']['importantCities']);$i++)
                         <li><a href="{{url('/')}}/search?city_id={{$response['data']['importantCities'][$i]->id}}">
                                <img src="{{url('/').'/'.$response['data']['importantCities'][$i]->path}}" alt="image description">
                             </a>
                         </li>
                        @endfor
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection