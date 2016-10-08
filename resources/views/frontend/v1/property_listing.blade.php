@extends('frontend.v1.frontend')
@section('content')
    <link media="all" rel="stylesheet" href="{{url('/')}}/web-apps/frontend/assets/css/property-agent-listing.css">
    <div class="listing-page">
        <div class="ads-slideshow">
            <div class="mask">
                <div class="slideset">
                    @if(isset($response['data']['banners']['leftBanners']))
                        @foreach($response['data']['banners']['leftBanners'] as $leftBanner)
                            <div class="slide"><a @if($leftBanner->banner_link !=="")href="{{$leftBanner->banner_link}}"@endif><img src="{{$leftBanner->image}}" alt="image description"></a></div>

                        @endforeach
                    @endif

                </div>
            </div>
        </div>
        <div class="container">
            <a class="aside-opener-filters togglerSearchButton">More Filters <b>(Land Area / Price...)</b><span class="button"><b></b></span></a>
            <aside id="aside">
                <div class="top-head">
                    <p>Search Filters</p>
                    <a class="close togglerSearchButton"><span class="icon-cross"></span></a>
                </div>
                <form cla ss="filter-form" id="properties-filter-form" method="get" action="<?= url('/search') ?>">
                 <ul class="filters-links text-upparcase">
                        <li class="active">
                            <a class="filters-links-opener">SEARCH FILTERS</a>
                            <div class="slide"></div>
                        </li>
                        <li class="active">
                            <a class="filters-links-opener">PROPERTY FOR</a>
                            <div class="slide">
                                <ul class="filterChecks">
                                    <li>
                                        <label for="buy-filter" class="customRadio">
                                            <input type="radio" name="purpose_id" id="buy-filter" value="1" @if($response['data']['oldValues']['purposeId'] == 1) checked @endif>
                                            <span class="fake-checkbox"></span>
                                            <span class="fake-label">BUY</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="rent-filter" class="customRadio">
                                            <input type="radio" name="purpose_id" id="rent-filter" value="2" @if($response['data']['oldValues']['purposeId'] == 2) checked @endif>
                                            <span class="fake-checkbox"></span>
                                            <span class="fake-label">Rent</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="active">
                            <a class="filters-links-opener">Property Type</a>
                            <div class="slide">
                                <ul class="filterChecks">
                                    @foreach($response['data']['propertyTypes'] as $propertyType)
                                        <li>
                                            <label for="{{$propertyType->name."_".$propertyType->id}}" class="customRadio">
                                                <input type="radio" id="{{$propertyType->name."_".$propertyType->id}}"
                                                       @if($response['data']['oldValues']['propertyTypeId'] == $propertyType->id)checked @endif
                                                       name="property_type_id" class="property_type filter-form-input" value="{{$propertyType->id}}">
                                                <span class="fake-checkbox"></span>
                                                <span class="fake-label">{{$propertyType->name}}</span>
                                            </label>
                                        </li>
                                   @endforeach
                                </ul>
                            </div>
                        </li>
                        <li class="active">
                            <a class="filters-links-opener">Property SUB-Type</a>
                            <div class="slide">
                                <ul class="filterChecks">
                                    @foreach($response['data']['propertySubtypes'] as $propertySubType)
                                        <li>
                                            <label for="{{$propertySubType->name."_".$propertySubType->id}}" class="customRadio">
                                                <input type="radio" id="{{$propertySubType->name."_".$propertySubType->id}}"
                                                       @if($response['data']['oldValues']['subTypeId'] == $propertySubType->id) checked @endif
                                                       name="sub_type_id" class="property_sub_type filter-form-input" value="{{$propertySubType->id}}">
                                                <span class="fake-checkbox"></span>
                                                <span class="fake-label">{{$propertySubType->name}}</span>
                                            </label>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </li>
                        <li class="active">
                            <a class="filters-links-opener">LOCATION / SOCIETY</a>
                            <div class="slide">
                                <ul class="filterChecks">
                                    <li>
                                        <select class="js-example-basic-single" name="city_id" id="cityId">
                                            <option value="">Select City</option>
                                            @foreach($response['data']['cities'] as $city)
                                                <option value="{{$city->id}}" @if($response['data']['oldValues']['cityId'] == $city->id) selected @endif>{{$city->name}}</option>
                                            @endforeach
                                        </select>
                                    </li>
                                    <li>
                                        <select class="js-example-basic-single" name="location_id" id="societies">
                                            <option>Select society</option>
                                        </select>

                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="active">
                            <a class="filters-links-opener">LAND AREA</a>
                            <div class="slide">
                            <span class="fake-select">
                                <select name="land_unit_id">
                                    @foreach($response['data']['landUnits'] as $landUnit)
                                    <option value="{{$landUnit->id}}">{{$landUnit->name}}</option>
                                   @endforeach
                                </select>
                            </span>
                                <div class="fromTo">
                                    <div class="field-holder">
                                        <input type="number" placeholder="From" name="land_area_from">
                                    </div>
                                    <div class="field-holder">
                                        <input type="number" placeholder="To" name="land_area_to">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="active">
                            <a class="filters-links-opener">PRICE RANGE</a>
                            <div class="slide">
                                <div class="fromTo full-width">
                                    <div class="field-holder">
                                        <input type="number" placeholder="From" class="PriceField" name="price_from">
                                    </div>
                                    <div class="field-holder">
                                        <input type="number" placeholder="To" class="PriceField" name="price_to">
                                    </div>
                                </div>
                                <span class="calculatedPrice">Please enter the price</span>
                            </div>
                        </li>
                     <li class="active">
                         <a class="filters-links-opener">Sort</a>
                         <div class="slide">
                             <ul class="filterChecks">
                                 <li>
                                     <select class="js-example-basic-single" name="sort_by" id="sort">
                                         <option value='' selected >Default Order</option>
                                         <option value='price_asc'>Price Low to High</option>
                                         <option value='price_desc'>Price High to Low</option>
                                         <option value='beds_asc'>Beds Low to High</option>
                                         <option value='beds_desc'>Beds High to Low</option>
                                         <option value='land_asc'>Area Low to High</option>
                                         <option value='land_desc'>Area High to Low</option>
                                         <option value='date_desc'>Date New to Old</option>
                                         <option value='date_asc'>Date Old to New</option>
                                         <option value='verified_desc'>Verified Only</option>
                                         <option value='picture_desc'>With Photos</option>
                                     </select>

                                 </li>
                             </ul>
                         </div>
                     </li>
                    </ul>
                    <ul class="filter-btn">
                        <li><button type="submit">Search</button></li>
                        <li><button type="reset">Reset</button></li>
                    </ul>
                </form>
            </aside>
            <section id="content">
                <div class="propertyNotFound hidden">
                    <strong class="no-heading">sorry, no property found</strong>
                    <p>Maybe your search was to specific, please try searching with another term.</p>
                </div>
            @foreach($response['data']['properties'] as $property)
                <article class="publicProperty-post">
                    <div class="image-holder">
                        <div class="listing-image-slider">
                            <div class="mask">
                                <div class="slideset">
                                    <?php
                                    $count = 0;
                                    $betweenCountIndex=0;
                                    $image = url('/')."/assets/imgs/no.png";
                                    foreach($property->documents as $document)
                                    {
                                        if($document->type == 'image' && $document->main == true && $document->path != "")
                                        {
                                            $image = url('/').'/temp/'.$document->path;
                                        }
                                    }
                                    $count++
                                    ?>
                                    <div class="slide"><a href="property?propertyId={{$property->id}}">
                                            <img src="{{$image}}" alt="image description"></a></div>

                                </div>
                            </div>
                            <a href="#" class="btn-prev"><span class="icon-keyboard_arrow_left"></span></a>
                            <a href="#" class="btn-next"><span class="icon-keyboard_arrow_right"></span></a>
                        </div>

                    </div>
                    <div class="caption text-left">
                        <div class="layout">
                            <h1>{{ ''.$property->land->area.' '.$property->land->unit->name .' '}}{{$property->type->subType->name.' '.                                                (($property->wanted)?'required ':''). $property->purpose->name.'
                                  in '.$property->location->location->location}}</h1>
                            <p>{{str_limit($property->description,148) }}</p>
                            <span class="price">Rs <b>{{App\Libs\Helpers\PriceHelper::numberToRupees($property->price)}}</b></span>
                            <span class="premiumProperty text-upparcase">@if($property->isFeatured !=null){{'Featured'}}@endif</span>
                            <div class="holder-ui">
                                <ul class="public-ui-features text-capital">
                            @foreach($property->features as $feature)
                                @foreach($feature as $featureSection)
                                    @if($featureSection->priority ==1)
                                    <li><span>{{$featureSection->value}}</span></li>

                                    @endif
                                @endforeach
                            @endforeach
                                </ul>
                                <?php
                                $image = url('/') . "/assets/imgs/no.png";
                                if ($property->owner->agency != null) {
                                    if ($property->owner->agency->logo != null) {
                                        $image = url('/') . '/temp/' . $property->owner->agency->logo;
                                    }
                                }
                                ?>
                                <a @if(isset($property->owner->isTrusted) && $property->owner->isTrusted == 1 && isset($property->owner->isAgent) && $property->owner->isAgent==1 ) href="{{ URL::to('agent?agent_id='.$property->owner->id) }}" @endif>
                                    <img src="{{$image}}" alt="image description" class="company-logo"></a>
                            </div>
                        </div>
                        <div class="layout links-holder">
                            <a href="property?propertyId={{$property->id}}" class="btn-default text-upparcase">VIEW DETAILS <span class="icon-search"></span></a>
                            <ul class="quick-links">
                                <li><a href="#callPopup" class="lightbox call-agent-btn" data-tel="{{$property->mobile}}"><span class="icon-phone"></span><span class="hidden-xs">View number</span></a></li>
                                <li><a href="#sendEmail-popup" class="lightbox"><span class="icon-empty-envelop"></span><span class="hidden-xs">Send mail</span></a></li>
                            </ul>
                            <a class="add-to-favorite"><span class="icon-heart-o"></span></a>
                        </div>
                    </div>
                </article>
            @endforeach
                <?php
                $for_previous_link = $_GET;
                $pageValue = (isset($for_previous_link['page']))?$for_previous_link['page']:1;
                ($pageValue ==1)?$for_previous_link['page'] = $pageValue:$for_previous_link['page'] = $pageValue-1;
                $convertPreviousToQueryString  = http_build_query($for_previous_link);
                $previousResult = URL('/search').'?'.$convertPreviousToQueryString;
                ?>
                <?php
                $totalPaginationValue = intval(ceil($response['data']['totalProperties'] / config('constants.Pagination')));
                $for_next_link = $_GET;
                $pageValue = (isset($for_next_link['page']))?$for_next_link['page']:1;
                ($pageValue == $totalPaginationValue)?$for_next_link['page'] = $pageValue:$for_next_link['page'] = $pageValue+1;
                $convertToQueryString  = http_build_query($for_next_link);
                $nextResult = URL('/search').'?'.$convertToQueryString;
                ?>
                <ul class="pager">

                    <li><a href="#" class="first"><span class="icon-arrow1-left"></span></a></li>
                    @if($totalPaginationValue !=0)
                    <li><a href="{{$previousResult}}" class="previous"><span class="icon-bold-arrow-left"></span></a></li>
                    @endif
                    <?php
                    $paginationValue = intval(ceil($response['data']['totalProperties'] / config('constants.Pagination')));
                    $query_str_to_array = $_GET;
                    $current_page = (isset($query_str_to_array['page']))?$query_str_to_array['page']:1;
                    for($i = (($current_page-3 > 0)?$current_page-3:1); $i <= (($current_page + 3 <= $paginationValue)?$current_page+3:$paginationValue);$i++){
                        $query_str_to_array['page'] = $i;
                        $queryString  = http_build_query($query_str_to_array);
                        $result = URL('/search').'?'.$queryString;
                        ?>
                    <li @if($current_page == $i)class="active" @endif><a href="{{$result}}">{{$i}}</a></li>
                    <?php }?>
                    @if($totalPaginationValue !=0)
                    <li><a href="{{$nextResult}}" class="next"><span class="icon-bold-arrow-right"></span></a></li>
                    @endif
                    <li><a href="#" class="last"><span class="icon-arrow1-right"></span></a></li>
                </ul>
            </section>
            <div class="popup-holder">
                <div id="callPopup" class="lightbox call-agent generic-lightbox">
                    <span class="lighbox-heading">Phone Number</span>
                    <p></p>
                    <span class="information"><span class="icon-info"></span>When you call, don't forget to mention that you found this ad on nugree.com</span>
                </div>
                <div id="sendEmail-popup" class="lightbox generic-lightbox">
                    <span class="lighbox-heading">Send Email</span>
                    {{Form::open(array('url'=>'mail-to-agent','method'=>'POST','class'=>'inquiry-email-form'))}}
                    <div class="field-holder">
                        <label for="name">Name</label>

                        <div class="input-holder"><input type="text" id="name" name="name"></div>
                    </div>
                    <div class="field-holder">
                        <label for="email">Email</label>

                        <div class="input-holder"><input type="email" id="email" name="email"
                                                         required></div>
                    </div>
                    <div class="field-holder">
                        <label for="phone">phone</label>

                        <div class="input-holder"><input type="tel" id="phone" name="phone"
                                                         required></div>
                    </div>
                    <div class="field-holder">
                        <label for="subject">subject</label>

                        <div class="input-holder"><input type="text" id="subject" name="subject">
                        </div>
                    </div>
                    <div class="field-holder">
                        <label for="message">message</label>

                        <div class="input-holder"><textarea id="message" name="message"
                                                            required></textarea>
                            <p>By submitting this form I agree to <a href="#terms-of-user" class="termsOfUse lightbox">Terms of Use</a></p>
                        </div>
                    </div>
                    <button type="submit">SEND</button>
                    {{Form::close()}}
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $( "#cityId" ).trigger( "change" );
        });
    </script>
@endsection