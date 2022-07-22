@extends('layouts.dashboard') 

@section('title') 
    New Customer Dashboard 
@stop 

@section('page-css') 
@stop 

@section('header_title') 
    New Customer Dashboard 
@stop 

@section('content')

<section class="dashboard-main-section">
    <div class="dash-content-area-sec">
        <div class="mobile-toogle">
            <div class="menu-icon" id="menu-Toggle">
               <a href="#"><img src="img/home/menu.png"></a>
            </div>
            <div class="mobile-logo">
               <img src="img/logo/logo.png">
            </div>
         </div>
        <div class="container-fluid">
            <div class="ad-customer-section">
                 <div class="profile-images-box">
                      <a href="#"><img src="{{ asset('img/home/profile-image.png') }}"></a>
                 </div>
                 <div class="ad-customer-details-sec">
                       <div class="row">
                             <div class="col-lg-6 col-md-6">
                                  <div class="date-sec sm-mobile-devise">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22.6562 3.125H20.3125V1.5625H18.75V3.125H6.25V1.5625H4.6875V3.125H2.34375L1.5625 3.90625V22.6562L2.34375 23.4375H22.6562L23.4375 22.6562V3.90625L22.6562 3.125ZM21.875 21.875H3.125V7.8125H21.875V21.875ZM21.875 6.25H3.125V4.6875H21.875V6.25ZM6.25 12.5H4.6875V14.0625H6.25V12.5ZM4.6875 15.625H6.25V17.1875H4.6875V15.625ZM6.25 18.75H4.6875V20.3125H6.25V18.75ZM9.375 12.5H10.9375V14.0625H9.375V12.5ZM10.9375 15.625H9.375V17.1875H10.9375V15.625ZM9.375 18.75H10.9375V20.3125H9.375V18.75ZM10.9375 9.375H9.375V10.9375H10.9375V9.375ZM14.0625 12.5H15.625V14.0625H14.0625V12.5ZM15.625 15.625H14.0625V17.1875H15.625V15.625ZM14.0625 18.75H15.625V20.3125H14.0625V18.75ZM15.625 9.375H14.0625V10.9375H15.625V9.375ZM18.75 12.5H20.3125V14.0625H18.75V12.5ZM20.3125 15.625H18.75V17.1875H20.3125V15.625ZM18.75 9.375H20.3125V10.9375H18.75V9.375Z" fill="#13C6FF"/>
                                    </svg>
                                    <h4>25 April 2022, monday </h4>                                                  
                                  </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                <div class="date-sec">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5 0C11.4219 0 9.62031 0.414063 7.92499 0.875C6.19062 1.34375 4.44218 1.89844 3.41406 2.23438C2.9842 2.37633 2.6031 2.63666 2.31455 2.98547C2.026 3.33428 1.84169 3.75741 1.78281 4.20625C0.851556 11.2016 3.01249 16.3859 5.63437 19.8156C6.74621 21.2828 8.07191 22.5747 9.56718 23.6484C10.1703 24.075 10.7297 24.4016 11.2047 24.625C11.6422 24.8313 12.1125 25 12.5 25C12.8875 25 13.3562 24.8313 13.7953 24.625C14.3679 24.3467 14.9158 24.02 15.4328 23.6484C16.9281 22.5748 18.2538 21.2828 19.3656 19.8156C21.9875 16.3859 24.1484 11.2016 23.2172 4.20625C23.1584 3.75719 22.9741 3.33381 22.6856 2.98474C22.3971 2.63566 22.0159 2.37505 21.5859 2.23281C20.0934 1.74346 18.5894 1.2902 17.075 0.873438C15.3797 0.415625 13.5781 0 12.5 0ZM12.5 7.8125C13.0535 7.81168 13.5894 8.00677 14.0129 8.36322C14.4363 8.71968 14.7199 9.21449 14.8135 9.76002C14.9071 10.3056 14.8046 10.8666 14.5241 11.3438C14.2437 11.821 13.8034 12.1835 13.2812 12.3672L13.8828 15.4766C13.9047 15.5897 13.9013 15.7062 13.8729 15.8178C13.8444 15.9294 13.7917 16.0334 13.7184 16.1222C13.645 16.2111 13.553 16.2826 13.4488 16.3317C13.3446 16.3808 13.2308 16.4063 13.1156 16.4062H11.8844C11.7693 16.406 11.6557 16.3804 11.5517 16.3312C11.4477 16.282 11.3558 16.2105 11.2827 16.1216C11.2095 16.0328 11.1569 15.929 11.1286 15.8174C11.1002 15.7059 11.0969 15.5895 11.1187 15.4766L11.7187 12.3672C11.1966 12.1835 10.7563 11.821 10.4759 11.3438C10.1954 10.8666 10.0929 10.3056 10.1865 9.76002C10.2801 9.21449 10.5637 8.71968 10.9871 8.36322C11.4106 8.00677 11.9465 7.81168 12.5 7.8125Z" fill="#13C6FF"/>
                                    </svg>                                                
                                  <h4>Number of days before locking event</h4> 
                                  <p class="count">03</p>                                                 
                                </div>
                           </div>
                       </div>
                       <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="time-sec sm-mobile-devise">
                                     <div class="left-icon">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23.0713 10.0586H16.8213C16.7139 10.0586 16.626 10.1465 16.626 10.2539V11.4258C16.626 11.5332 16.7139 11.6211 16.8213 11.6211H23.0713C23.1787 11.6211 23.2666 11.5332 23.2666 11.4258V10.2539C23.2666 10.1465 23.1787 10.0586 23.0713 10.0586ZM19.7998 13.3789H16.8213C16.7139 13.3789 16.626 13.4668 16.626 13.5742V14.7461C16.626 14.8535 16.7139 14.9414 16.8213 14.9414H19.7998C19.9072 14.9414 19.9951 14.8535 19.9951 14.7461V13.5742C19.9951 13.4668 19.9072 13.3789 19.7998 13.3789ZM11.6528 7.87354H10.5957C10.4443 7.87354 10.3223 7.99561 10.3223 8.14697V14.2017C10.3223 14.2896 10.3638 14.3701 10.4346 14.4214L14.0698 17.0728C14.1919 17.1606 14.3628 17.1362 14.4507 17.0142L15.0781 16.1572V16.1548C15.166 16.0327 15.1392 15.8618 15.0171 15.7739L11.9238 13.5376V8.14697C11.9263 7.99561 11.8018 7.87354 11.6528 7.87354Z" fill="#13C6FF"/>
                                            <path d="M19.6484 16.4526H18.2373C18.1006 16.4526 17.9712 16.5234 17.8979 16.6406C17.5879 17.1313 17.2265 17.5854 16.8115 18.0005C16.0962 18.7158 15.2636 19.2773 14.3384 19.668C13.3789 20.0732 12.3608 20.2783 11.311 20.2783C10.2588 20.2783 9.2407 20.0732 8.28367 19.668C7.35838 19.2773 6.52586 18.7158 5.81053 18.0005C5.0952 17.2852 4.53368 16.4526 4.14305 15.5273C3.73778 14.5703 3.5327 13.5522 3.5327 12.5C3.5327 11.4478 3.73778 10.4321 4.14305 9.47266C4.53368 8.54737 5.0952 7.71485 5.81053 6.99952C6.52586 6.28419 7.35838 5.72267 8.28367 5.33204C9.2407 4.92677 10.2612 4.72169 11.311 4.72169C12.3633 4.72169 13.3813 4.92677 14.3384 5.33204C15.2636 5.72267 16.0962 6.28419 16.8115 6.99952C17.2265 7.41456 17.5879 7.86866 17.8979 8.35938C17.9712 8.47657 18.1006 8.54737 18.2373 8.54737H19.6484C19.8169 8.54737 19.9243 8.37159 19.8486 8.22266C18.2568 5.05616 15.0293 2.99806 11.4258 2.95656C6.14988 2.89064 1.76756 7.20948 1.7578 12.4805C1.74803 17.7612 6.02781 22.0459 11.3086 22.0459C14.9585 22.0459 18.2397 19.9805 19.8486 16.7773C19.9243 16.6284 19.8144 16.4526 19.6484 16.4526Z" fill="#13C6FF"/>
                                        </svg>
                                     </div>
                                     <div class="time-sec-box">
                                          <h4>Arrival time</h4>
                                          <p>8:00 AM</p>
                                     </div>
                                     <div class="time-sec-box">
                                          <h4>Start time</h4>
                                          <p>11:30 AM</p>
                                     </div>
                                      <div class="time-sec-box">
                                         <h4>End time</h4>
                                          <p>9:00 AM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="date-sec">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.5 16.6666C14.8012 16.6666 16.6667 14.8011 16.6667 12.4999C16.6667 10.1987 14.8012 8.33325 12.5 8.33325C10.1988 8.33325 8.33333 10.1987 8.33333 12.4999C8.33333 14.8011 10.1988 16.6666 12.5 16.6666Z" fill="#13C6FF"/>
                                        <path d="M13.5417 4.23846V2.08325H11.4583V4.23846C9.62531 4.4725 7.92184 5.30843 6.61517 6.6151C5.30851 7.92176 4.47258 9.62523 4.23854 11.4583H2.08333V13.5416H4.23854C4.47224 15.3747 5.30805 17.0784 6.61478 18.3851C7.92151 19.6919 9.62517 20.5277 11.4583 20.7614V22.9166H13.5417V20.7614C15.3749 20.5278 17.0786 19.6921 18.3854 18.3853C19.6922 17.0786 20.5279 15.3748 20.7615 13.5416H22.9167V11.4583H20.7615C20.5278 9.62509 19.6919 7.92144 18.3852 6.61471C17.0785 5.30798 15.3748 4.47216 13.5417 4.23846ZM12.5 18.7499C9.05312 18.7499 6.25 15.9468 6.25 12.4999C6.25 9.05304 9.05312 6.24992 12.5 6.24992C15.9469 6.24992 18.75 9.05304 18.75 12.4999C18.75 15.9468 15.9469 18.7499 12.5 18.7499Z" fill="#13C6FF"/>
                                    </svg>
                                    <h4>Venue location or name</h4>    
                                </div>
                            </div>
                       </div>

                       <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="date-sec">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.60727 3.83969C7.10399 3.34238 7.66153 2.90979 8.26664 2.55219C9.54971 1.79726 11.0113 1.39917 12.5 1.39917C13.9887 1.39917 15.4502 1.79726 16.7333 2.55219C17.3384 2.9098 17.896 3.34239 18.3927 3.83969L12.5 9.73239L6.60727 3.83969ZM12.5 6.78552L9.80519 4.09073C10.647 3.68986 11.5676 3.48184 12.5 3.48184C13.4323 3.48184 14.353 3.68986 15.1948 4.09073L12.5 6.78552Z" fill="#13C6FF"/>
                                        <path d="M2.08332 13.1856C2.08176 11.6369 2.42626 10.1074 3.09164 8.70882C3.75702 7.31029 4.72648 6.0781 5.92915 5.10229L7.41144 6.58563C6.03388 7.64782 5.02325 9.11448 4.52123 10.78C4.01921 12.4455 4.05097 14.2264 4.61205 15.8729C5.17314 17.5194 6.23543 18.9491 7.64999 19.9615C9.06455 20.9739 10.7605 21.5183 12.5 21.5183C14.2395 21.5183 15.9354 20.9739 17.35 19.9615C18.7645 18.9491 19.8268 17.5194 20.3879 15.8729C20.949 14.2264 20.9808 12.4455 20.4787 10.78C19.9767 9.11448 18.9661 7.64782 17.5885 6.58563L19.0708 5.10229C20.2735 6.0781 21.2429 7.31029 21.9083 8.70882C22.5737 10.1074 22.9182 11.6369 22.9167 13.1856C22.9167 18.9377 18.2531 23.6023 12.5 23.6023C6.74686 23.6023 2.08332 18.9377 2.08332 13.1856Z" fill="#13C6FF"/>
                                    </svg>                                                
                                    <h4>Wedding</h4>    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                <div class="date-sec">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="8" cy="8" r="7.5" stroke="#2D610D"/>
                                        <circle cx="8" cy="8" r="4" fill="#2D610D"/>
                                     </svg>
                                    <select id="" class="form-control">
                                        <option value="0" selected="">Active</option>
                                        <option value="1">..</option>
                                        <option value="2">..</option>
                                        <option value="3">..</option>
                                    </select>
                                </div>
                            </div>
                      </div>

                      <div class="row">
                          <div class="col-lg-12">
                            <div class="songs-progress">
                                <div class="icon-left">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16.765 14.7282C17.1178 13.3295 16.0774 11.8609 14.441 11.4481C12.8046 11.0353 11.1921 11.8345 10.8392 13.2332C10.4863 14.632 11.5268 16.1005 13.1632 16.5133C14.7995 16.9262 16.4121 16.1269 16.765 14.7282Z" stroke="#13C6FF" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.7646 14.7282L19.6104 3.41675C19.1385 5.2855 22.9391 4.36987 22.4891 6.15373" stroke="#13C6FF" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.6083 8.94676C15.4521 8.25807 14.09 7.99915 12.7617 8.21555C11.4334 8.43195 10.2239 9.1098 9.34601 10.1299C8.46812 11.15 7.97805 12.4469 7.96199 13.7926C7.94592 15.1384 8.4049 16.4467 9.25818 17.4874C10.1115 18.5281 11.3044 19.2347 12.6272 19.4827C13.9499 19.7308 15.3178 19.5044 16.4902 18.8435C17.6626 18.1827 18.5643 17.1295 19.0369 15.8694C19.5095 14.6093 19.5226 13.2229 19.0739 11.954" stroke="#13C6FF" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17.2953 6.21611C15.3986 5.31613 13.2353 5.15246 11.2247 5.75684C9.21417 6.36121 7.49965 7.69058 6.41353 9.48721C5.32742 11.2838 4.94708 13.4198 5.34625 15.4809C5.74542 17.542 6.89567 19.3815 8.574 20.6427C10.2523 21.904 12.3392 22.4971 14.43 22.3072C16.5208 22.1173 18.4666 21.1578 19.8902 19.6148C21.3138 18.0718 22.1138 16.0551 22.135 13.9558C22.1563 11.8565 21.3973 9.82409 20.0052 8.25257" stroke="#13C6FF" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.6719 2.66919C10.702 2.66919 7.85378 3.84897 5.75376 5.94898C3.65375 8.049 2.47397 10.8972 2.47397 13.8671" stroke="#13C6FF" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="input-progress">
                                    <h4>05/20 Songs section Progress</h4>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                         <label>25%</label>
                                    </div>
                                </div>
                            </div>
                         </div>
                      </div> 
                      
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="songs-progress">
                              <div class="icon-left">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 22.9166C18.253 22.9166 22.9167 18.2529 22.9167 12.4999C22.9167 6.74695 18.253 2.08325 12.5 2.08325C6.74704 2.08325 2.08334 6.74695 2.08334 12.4999C2.08334 18.2529 6.74704 22.9166 12.5 22.9166Z" stroke="#13C6FF" stroke-width="2"/>
                                    <path d="M12.5 17.1873V17.7082M10.4167 8.83734C10.9375 7.80609 11.4584 7.2915 12.5 7.2915C13.7979 7.2915 14.5834 8.32171 14.5834 9.35192C14.5834 10.3821 14.0625 10.8967 12.5 11.928V13.5415L10.4167 8.83734Z" stroke="#13C6FF" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                                    
                              </div>
                              <div class="input-progress">
                                  <h4>10/10 Questions Progress</h4>
                                  <div class="progress">
                                      <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                       <label>50%</label>
                                  </div>
                              </div>
                          </div>
                       </div>
                    </div>   

                 </div>
            </div>
        </div>
    </div>
</section>

@stop

