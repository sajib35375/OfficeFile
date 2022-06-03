@php

    $general = \App\Models\Setting::find('1');

@endphp


<footer class="footer_wrap widget_area scheme_original">
    <div class="footer_wrap_inner widget_area_inner">
       <div class="content_wrap">
          <div class="columns_wrap">
             <aside class="widget_number_1 column-1_3 widget widget_text">
                <h5 class="widget_title">Micro office group</h5>
                <div class="textwidget">
                   <p>{{ $general->about }} </p>

                   <img src="images/John-Anderson-.png" alt="">
                </div>
             </aside>
             <aside class="column-1_3 widget widget_text">
                <h5 class="widget_title">Contact us</h5>
                <div class="textwidget">
                   <ul class="sc_list sc_list_style_iconed">
                      <li class="sc_list_item odd first">
                         <span class="sc_list_icon icon-location-1"></span>
                         <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                               <h6>Address:</h6>
                               <div>{{ $general->address }}</div>
                            </div>
                         </div>
                      </li>
                      <li class="sc_list_item even">
                         <span class="sc_list_icon icon-phone-circled"></span>
                         <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                               <h6>Call Us:</h6>
                               <p>{{ $general->phone }}</p>
                            </div>
                         </div>
                      </li>
                      <li class="sc_list_item odd">
                         <span class="sc_list_icon icon-pencil-neg"></span>
                         <div class="wpb_text_column wpb_content_element">
                            <div class="wpb_wrapper">
                               <h6>Email:</h6>
                               <p>{{ $general->email }}</p>
                            </div>
                         </div>
                      </li>
                   </ul>
                </div>
             </aside>
             <aside class="column-1_3 widget widget_nav_menu">
                <h5 class="widget_title">Navigation</h5>
                <div class="menu-sidebar-menu-container">
                   <ul id="menu-sidebar-menu-1" class="menu">
                      <li><a href="#">Open a Ticket</a></li>
                      <li><a href="#">Corporate Landing Demo</a></li>
                      <li><a href="#">Education Demo</a></li>
                      <li><a href="#">Online Documentation</a></li>
                      <li><a href="#">Featured Pages</a></li>
                   </ul>
                </div>
             </aside>
          </div>
       </div>
    </div>
 </footer>
 <div class="copyright_wrap copyright_style_text scheme_original">
    <div class="copyright_wrap_inner">
       <div class="content_wrap">
          <div class="copyright_text">
             Micro Office © 2017 All Rights Reserved.
             <a href="#">Terms of use</a> and
             <a href="#">Privacy Policy</a>
          </div>
       </div>
    </div>
 </div>
