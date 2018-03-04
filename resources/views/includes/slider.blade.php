<div class="slider">

    <div class="rev_slider_wrapper">

        <div id="slider1" class="rev_slider" data-version="5.0">

            <ul>
                @foreach($slides as $slide)
                    <li data-transition="zoomout" data-slotamount="10" data-masterspeed="3000">

                        <img src="images/resource/slide10.jpg" alt="slidebg1" class="rev-slidebg" data-bgposition="center center" data-bgfit="cover"
                            data-bgrepeat="no-repeat" data-no-retina />

                        <div class="tp-caption slide-title1 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                            data-y="['150','150','150','150']" data-voffset="['0','0','0','0']" data-fontsize="['49','49','29','19']"
                            data-lineheight="['49','49','29','19']" data-width="['none','none','none','400']" data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:90;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;"
                            data-transform_out="x:left(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="1700" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on" style="; white-space: nowrap;">{!! $slide->first_statement !!}
                        </div>



                        <div class="tp-caption slide-subtitle1 tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                            data-y="['220','220','220','220']" data-voffset="['0','0','0','0']" data-fontsize="['18','18','15','15']"
                            data-lineheight="['18','18','15','15']" data-width="['none','none','none','400']" data-height="none"
                            data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:45;rZ:30;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;"
                            data-transform_out="x:right(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="1900"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;"> {!! $slide->second_statement !!} </div>



                        <a href="{!! $slide->button_url !!}" title="" class="tp-caption slide-button colored-box tp-resizeme rs-parallaxlevel-2" data-x="['left','left','left','left']"
                            data-hoffset="['0','0','0','0']" data-y="['280','280','280','280']" data-voffset="['0','0','0','0']"
                            data-fontsize="['13','13','13','13']" data-lineheight="['15','15','13','13']" data-width="['none','none','none','400']"
                            data-height="none" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-transform_idle="o:1;"
                            data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Back.easeInOut;"
                            data-transform_out="y:bottom(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="2100"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" style="white-space: nowrap;">{!! $slide->button_text !!}</a>



                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']"
                            data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" data-transform_idle="o:1;"
                            data-transform_in="y:bottom(R);z:0;rX:90;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:2000;e:Elastic.easeInOut;"
                            data-transform_out="x:right(R);s:2000;e:Back.easeIn;s:1000;e:Back.easeIn;" data-start="2300"
                            data-splitin="none" data-splitout="none" data-responsive_offset="on" data-no-retina>
                            <img src="images/resource/slide9-man.png" alt="" data-ww="['332px','332px','200px','170px']"
                                data-hh="['412px','412px','251px','213px']" itemprop="image" data-no-retina />
                        </div>

                    </li>

                @endforeach
            </ul>

        </div>

    </div>
    <!-- REVOLUTION SLIDER -->

</div>
