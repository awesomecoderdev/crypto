{{-- index file --}}
@extends('layouts.app')

{{-- title --}}
@section('title', $coin->name . ' : CryptoGainers')

{{-- meta data --}}
@section('meta')
    <meta name="description"
        content="Leading news source for cryptocurrency, Bitcoin, Ethereum, Blockchain, DeFi, and more. Read the latest analysis and guides by CryptoGainers." />
    <meta property="og:title" content="Home" />
    <meta property="og:description"
        content="Leading news source for cryptocurrency, Bitcoin, Ethereum, Blockchain, DeFi, and more. Read the latest analysis and guides by CryptoGainers." />
    <meta property="og:url" content="https://watcher.guru/news/" />
    <meta property="og:site_name" content="CryptoGainers" />
    <meta property="article:modified_time" content="2021-10-10T15:31:51+00:00" />
    <meta property="og:image" content="https://watcher.guru/news/wp-content/uploads/2021/08/keyart.jpg" />
    <meta property="og:image:width" content="1920" />
    <meta property="og:image:height" content="1005" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="https://watcher.guru/news/wp-content/uploads/2021/08/keyart.jpg" />
    <meta name="twitter:label1" content="Est. reading time" />
    <meta name="twitter:data1" content="1 minute" />
@endsection


{{-- content --}}
@section('contents')
    {{-- start:nav --}}
    @include('layouts.nav')
    {{-- end:nav --}}

    <pre>
    {{ print_r($coin) }}
</pre>
@endsection

{{-- content --}}
@section('content')
    {{-- start:nav --}}
    @include('layouts.nav')
    {{-- end:nav --}}


    <!-- Component Code -->
    <div class="relative">
        <div class="max-w-3xl mx-auto">
            <div class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                <div class="">
                    <a href="#"
                        class="text-primary-600 hover:text-gray-700 transition duration-500 ease-in-out text-sm">Election</a>
                    <h1 href="#" class="text-gray-900 font-bold text-4xl">Portrait Photography In Early Days</h1>
                    <div class="py-5 text-sm font-regular text-gray-900 flex">
                        <span class="mr-3 flex flex-row items-center">
                            <svg class="text-primary-600" fill="currentColor" height="13px" width="13px" version="1.1"
                                id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <g>
                                        <path
                                            d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
                                                                                                                                                            c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
                                                                                                                                                            c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z" />
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1">6 mins ago</span></span>
                        <a href="#" class="flex flex-row items-center hover:text-primary-600  mr-3">
                            <svg class="text-primary-600" fill="currentColor" height="16px" aria-hidden="true" role="img"
                                focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor"
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                </path>
                                <path d="M0 0h24v24H0z" fill="none"></path>
                            </svg>
                            <span class="ml-1">AliSher Azimi</span></a>
                        <a href="#" class="flex flex-row items-center hover:text-primary-600">
                            <svg class="text-primary-600" fill="currentColor" height="16px" aria-hidden="true" role="img"
                                focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                                <path fill=""
                                    d="M15.4496399,8.42490555 L8.66109799,1.63636364 L1.63636364,1.63636364 L1.63636364,8.66081885 L8.42522727,15.44178 C8.57869221,15.5954158 8.78693789,15.6817418 9.00409091,15.6817418 C9.22124393,15.6817418 9.42948961,15.5954158 9.58327627,15.4414581 L15.4486339,9.57610048 C15.7651495,9.25692435 15.7649133,8.74206554 15.4496399,8.42490555 Z M16.6084423,10.7304545 L10.7406818,16.59822 C10.280287,17.0591273 9.65554997,17.3181054 9.00409091,17.3181054 C8.35263185,17.3181054 7.72789481,17.0591273 7.26815877,16.5988788 L0.239976954,9.57887876 C0.0863319284,9.4254126 0,9.21716044 0,9 L0,0.818181818 C0,0.366312477 0.366312477,0 0.818181818,0 L9,0 C9.21699531,0 9.42510306,0.0862010512 9.57854191,0.239639906 L16.6084423,7.26954545 C17.5601275,8.22691012 17.5601275,9.77308988 16.6084423,10.7304545 Z M5,6 C4.44771525,6 4,5.55228475 4,5 C4,4.44771525 4.44771525,4 5,4 C5.55228475,4 6,4.44771525 6,5 C6,5.55228475 5.55228475,6 5,6 Z">
                                </path>
                            </svg>
                            <span class="ml-1">activewear</span></a>
                    </div>
                    <hr />
                    <p class="text-base leading-8 my-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                    <h3 class="text-2xl font-bold my-5">#1. What is Lorem Ipsum?</h3>

                    <p class="text-base leading-8 my-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                    <blockquote class="text-md italic leading-8 my-5 p-5 text-primary-600 font-semibold">Lorem Ipsum is
                        simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        standard dummy text ever since the 1500s</blockquote>

                    <p class="text-base leading-8 my-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                    <a href="#"
                        class="text-xs text-primary-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                        #Election
                    </a>, <a href="#"
                        class="text-xs text-primary-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                        #people
                    </a>, <a href="#"
                        class="text-xs text-primary-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                        #Election2020
                    </a>, <a href="#"
                        class="text-xs text-primary-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                        #trump
                    </a>,<a href="#"
                        class="text-xs text-primary-600 font-medium hover:text-gray-900 transition duration-500 ease-in-out">
                        #Joe
                    </a>

                </div>

            </div>
        </div>
    </div>

    <!-- Component Code -->
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 relative">
        <div class="grid grid-cols-1 sm:grid-cols-12 gap-10">

            <div class="sm:col-span-6 lg:col-span-5">
                <a href="#">
                    <div class="h-56 bg-cover text-center overflow-hidden"
                        style="background-image: url('https://tailwindcss.com/img/card-left.jpg')"
                        title="Woman holding a mug">
                    </div>
                </a>
                <div
                    class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                    <div class="lg:pl-16">
                        <a href="#"
                            class="text-xs text-primary-600 uppercase font-medium mb-3 flex items-center hover:text-gray-900 transition duration-500 ease-in-out">
                            Fashion
                        </a>
                        <a href="#"
                            class="text-gray-900 font-bold text-lg mb-2 hover:text-primary-600 transition duration-500 ease-in-out">The
                            perfect summer sweater that you can wear! </a>
                        <p class="text-gray-700 text-xs mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-6 lg:col-span-4">
                <div class="flex items-start mb-3 pb-3">
                    <a href="#" class="inline-block mr-3">
                        <div class="w-20 h-20 bg-cover bg-center"
                            style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-fc-looks-dejected-during-the-uefa-of-picture-id1227967060?k=6&m=1227967060&s=612x612&w=0&h=cMSMlRyI6YAzcE_C2KgHGRLeVojHYoUhIvhwPBYv8f4=);">
                        </div>
                    </a>
                    <div class="text-sm">
                        <p class="text-gray-600 text-xs">Aug 18</p>
                        <a href="#" class="text-gray-900 font-medium hover:text-primary-600 leading-none">Cristiano Ronaldo
                            of Juventus FC looks dejected during the...</a>
                    </div>
                </div>
                <div class="flex items-start mb-3 pb-3">
                    <a href="#" class="inline-block mr-3">
                        <div class="w-20 h-20 bg-cover bg-center"
                            style="background-image:url(https://media.gettyimages.com/photos/lionel-messi-and-marcandre-ter-stegen-of-fc-barcelona-waits-in-the-picture-id1266763488?k=6&m=1266763488&s=612x612&w=0&h=8vxz9HfQVfrff5N7d1lBVxtLamRQGK3J3lyHkUuuIiw=);">
                        </div>
                    </a>
                    <div class="text-sm w-2/3">
                        <p class="text-gray-600 text-xs">Jan 18</p>
                        <a href="#" class="text-gray-900 font-medium hover:text-primary-600 leading-none">Barcelona v Bayern
                            Munich </a>
                    </div>
                </div>
                <div class="flex items-start mb-3 pb-3">
                    <a href="#" class="inline-block mr-3">
                        <div class="w-20 h-20 bg-cover bg-center"
                            style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-fc-looks-dejected-during-the-uefa-of-picture-id1227967060?k=6&m=1227967060&s=612x612&w=0&h=cMSMlRyI6YAzcE_C2KgHGRLeVojHYoUhIvhwPBYv8f4=);">
                        </div>
                    </a>
                    <div class="text-sm">
                        <p class="text-gray-600 text-xs">Aug 18</p>
                        <a href="#" class="text-gray-900 font-medium hover:text-primary-600 leading-none">Cristiano Ronaldo
                            of Juventus FC looks dejected during the...</a>
                    </div>
                </div>
                <div class="flex items-start">
                    <a href="#" class="inline-block mr-3">
                        <div class="w-20 h-20 bg-cover bg-center"
                            style="background-image:url(https://media.gettyimages.com/photos/lionel-messi-of-fc-barcelona-looks-dejected-following-his-teams-in-picture-id1266341828?k=6&m=1266341828&s=612x612&w=0&h=FZi-bSrIlOEE01780h79GsbBYPqZo2l3aaCxoktWADY=);">
                        </div>
                    </a>
                    <div class="text-sm w-2/3">
                        <p class="text-gray-600 text-xs">July 23</p>
                        <a href="#" class="text-gray-900 font-medium hover:text-primary-600 leading-none">Barcelona v Bayern
                            Munich - UEFA Champions League </a>
                    </div>
                </div>
            </div>

            <div class="sm:col-span-12 lg:col-span-3">
                <a href="#">
                    <div class="h-56 bg-cover text-center overflow-hidden"
                        style="background-image: url('https://tailwindcss.com/img/card-left.jpg')"
                        title="Woman holding a mug">
                    </div>
                </a>
                <div
                    class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                    <div class="">
                        <a href="#"
                            class="text-xs text-primary-600 uppercase font-medium flex items-center hover:text-gray-900 transition duration-500 ease-in-out">
                            Fashion
                        </a>
                        <a href="#"
                            class="text-gray-900 font-bold text-lg mb-2 hover:text-primary-600 transition duration-500 ease-in-out">The
                            perfect summer sweater that you can wear! </a>
                        <p class="text-gray-700 text-xs mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>





    <!-- Component Code -->
    <div class="max-w-screen-2xl mx-auto p-5 sm:p-10 relative">

        <div class="bg-white">
            <div class="grid grid-cols-12 grid-rows-2 sm:grid-rows-1">
                <div class="col-span-12 sm:col-span-6 relative w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="min-height: 400px; background-image:url(https://media.gettyimages.com/photos/at-the-the-network-tolo-televised-debate-dr-abdullah-abdullah-with-picture-id1179614034?k=6&m=1179614034&s=612x612&w=0&h=WwIX3RMsOQEn5DovD9J3e859CZTdxbHHD3HRyrgU3A8=);">
                    <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <div class="absolute top-0 right-0 left-0 mx-10 mt-6 flex justify-between items-center">
                        <a href="#"
                            class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                        <div class="text-white font-regular flex flex-col justify-start">
                            <span class="text-3xl leading-0 font-semibold">25</span>
                            <span class="-mt-3">May</span>
                        </div>
                    </div>
                    <main class="p-10 z-10">
                        <a href="#"
                            class="text-lg tracking-tight font-medium leading-7 font-regular text-white hover:underline">Dr.
                            Abdullah Abdullah's Presidential Election Campaign
                        </a>
                        <p class="text-white text-sm mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.</p>
                    </main>

                </div>

                <div class="col-span-12 sm:col-span-6 lg:col-span-3 bg-white border shadow-lg p-6 lg:mx-5">
                    <div class="border-b mb-5 flex justify-between text-sm">
                        <div class="text-primary-600 flex items-center pb-2 pr-2 border-b-2 border-primary-600 uppercase">
                            <svg class="h-6 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.005 455.005"
                                style="enable-background:new 0 0 455.005 455.005;" xml:space="preserve">
                                <g>
                                    <path
                                        d="M446.158,267.615c-5.622-3.103-12.756-2.421-19.574,1.871l-125.947,79.309c-3.505,2.208-4.557,6.838-2.35,10.343
                                                                                                                          c2.208,3.505,6.838,4.557,10.343,2.35l125.947-79.309c2.66-1.675,4.116-1.552,4.331-1.432c0.218,0.12,1.096,1.285,1.096,4.428
                                                                                                                          c0,8.449-6.271,19.809-13.42,24.311l-122.099,76.885c-6.492,4.088-12.427,5.212-16.284,3.084c-3.856-2.129-6.067-7.75-6.067-15.423
                                                                                                                          c0-19.438,13.896-44.61,30.345-54.967l139.023-87.542c2.181-1.373,3.503-3.77,3.503-6.347s-1.323-4.974-3.503-6.347L184.368,50.615
                                                                                                                          c-2.442-1.538-5.551-1.538-7.993,0L35.66,139.223C15.664,151.815,0,180.188,0,203.818v4c0,23.63,15.664,52.004,35.66,64.595
                                                                                                                          l209.292,131.791c3.505,2.207,8.136,1.154,10.343-2.35c2.207-3.505,1.155-8.136-2.35-10.343L43.653,259.72
                                                                                                                          C28.121,249.941,15,226.172,15,207.818v-4c0-18.354,13.121-42.122,28.653-51.902l136.718-86.091l253.059,159.35l-128.944,81.196
                                                                                                                          c-20.945,13.189-37.352,42.909-37.352,67.661c0,13.495,4.907,23.636,13.818,28.555c3.579,1.976,7.526,2.956,11.709,2.956
                                                                                                                          c6.231,0,12.985-2.176,19.817-6.479l122.099-76.885c11.455-7.213,20.427-23.467,20.427-37.004
                                                                                                                          C455.004,277.119,451.78,270.719,446.158,267.615z" />
                                    <path
                                        d="M353.664,232.676c2.492,0,4.928-1.241,6.354-3.504c2.207-3.505,1.155-8.136-2.35-10.343l-173.3-109.126
                                                                                                                          c-3.506-2.207-8.136-1.154-10.343,2.35c-2.207,3.505-1.155,8.136,2.35,10.343l173.3,109.126
                                                                                                                          C350.916,232.303,352.298,232.676,353.664,232.676z" />
                                    <path
                                        d="M323.68,252.58c2.497,0,4.938-1.246,6.361-3.517c2.201-3.509,1.14-8.138-2.37-10.338L254.46,192.82
                                                                                                                          c-3.511-2.202-8.139-1.139-10.338,2.37c-2.201,3.51-1.14,8.138,2.37,10.338l73.211,45.905
                                                                                                                          C320.941,252.21,322.318,252.58,323.68,252.58z" />
                                    <path
                                        d="M223.903,212.559c-3.513-2.194-8.14-1.124-10.334,2.39c-2.194,3.514-1.124,8.14,2.39,10.334l73.773,46.062
                                                                                                                          c1.236,0.771,2.608,1.139,3.965,1.139c2.501,0,4.947-1.251,6.369-3.529c2.194-3.514,1.124-8.14-2.39-10.334L223.903,212.559z" />
                                    <path
                                        d="M145.209,129.33l-62.33,39.254c-2.187,1.377-3.511,3.783-3.503,6.368s1.345,4.983,3.54,6.348l74.335,46.219
                                                                                                                          c1.213,0.754,2.586,1.131,3.96,1.131c1.417,0,2.833-0.401,4.071-1.201l16.556-10.7c3.479-2.249,4.476-6.891,2.228-10.37
                                                                                                                          c-2.248-3.479-6.891-4.475-10.37-2.228l-12.562,8.119l-60.119-37.38l48.2-30.355l59.244,37.147l-6.907,4.464
                                                                                                                          c-3.479,2.249-4.476,6.891-2.228,10.37c2.249,3.479,6.894,4.476,10.37,2.228l16.8-10.859c2.153-1.392,3.446-3.787,3.429-6.351
                                                                                                                          c-0.018-2.563-1.344-4.94-3.516-6.302l-73.218-45.909C150.749,127.792,147.647,127.795,145.209,129.33z" />
                                    <path
                                        d="M270.089,288.846c2.187-3.518,1.109-8.142-2.409-10.329l-74.337-46.221c-3.518-2.188-8.143-1.109-10.329,2.409
                                                                                                                          c-2.187,3.518-1.109,8.142,2.409,10.329l74.337,46.221c1.232,0.767,2.601,1.132,3.953,1.132
                                                                                                                          C266.219,292.387,268.669,291.131,270.089,288.846z" />
                                    <path
                                        d="M53.527,192.864c-2.187,3.518-1.109,8.142,2.409,10.329l183.478,114.081c1.232,0.767,2.601,1.132,3.953,1.132
                                                                                                                          c2.506,0,4.956-1.256,6.376-3.541c2.187-3.518,1.109-8.142-2.409-10.329L63.856,190.455
                                                                                                                          C60.338,188.266,55.714,189.346,53.527,192.864z" />
                                </g>
                            </svg>
                            <a href="#" class="font-semibold inline-block">Fashion</a>
                        </div>
                        <a href="#">See All</a>
                    </div>
                    <div class="flex flex-col justify-between pb-5">
                        <a href="#" class="text-gray-900 font-medium hover:text-primary-600">Bests of Leonel Messi (Videos,
                            Images & Quotes)</a>
                        <div class="flex items-start justify-between mt-3">
                            <div class="text-sm w-2/3">
                                <p class="text-gray-700">Cristiano Ronaldo of Juventus FC looks dejected during the...</p>
                                <p class="text-gray-600 text-xs">Aug 18</p>
                            </div>
                            <a href="#" class="inline-block ml-2">
                                <div class="w-20 h-20 bg-cover bg-center"
                                    style="background-image:url(https://media.gettyimages.com/photos/lionel-messi-and-marcandre-ter-stegen-of-fc-barcelona-waits-in-the-picture-id1266763488?k=6&m=1266763488&s=612x612&w=0&h=8vxz9HfQVfrff5N7d1lBVxtLamRQGK3J3lyHkUuuIiw=);">
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="flex flex-col justify-between pb-5">
                        <a href="#" class="text-gray-900 font-medium hover:text-primary-600">Juventus v Olympique Lyon Best
                            Ronaldo Images</a>
                        <div class="flex items-start justify-between mt-3">
                            <div class="text-sm w-2/3">
                                <p class="text-gray-700">Cristiano Ronaldo of Juventus FC looks dejected during the...</p>
                                <p class="text-gray-600 text-xs">Aug 18</p>
                            </div>
                            <a href="#" class="inline-block ml-2">
                                <div class="w-20 h-20 bg-cover bg-center"
                                    style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-reacts-during-the-uefa-champions-league-picture-id1264546157?k=6&m=1264546157&s=612x612&w=0&h=LlY_gF4hYuRI68Btvq0tK0FcZDNIsJyEyaLaZV2Hi-M=);">
                                </div>
                            </a>
                        </div>

                    </div>
                    <div class="flex flex-col justify-between pb-5">
                        <a href="#" class="text-gray-900 font-medium hover:text-primary-600">Cristiano Ronaldo of Juventus
                            FC looks dejected during the...</a>
                        <div class="flex items-start justify-between mt-3">
                            <div class="text-sm w-2/3">
                                <p class="text-gray-700">Cristiano Ronaldo of Juventus FC looks dejected during the...</p>
                                <p class="text-gray-600 text-xs">Aug 18</p>
                            </div>
                            <a href="#" class="inline-block ml-2">
                                <div class="w-20 h-20 bg-cover bg-center"
                                    style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-fc-looks-dejected-during-the-uefa-of-picture-id1227967060?k=6&m=1227967060&s=612x612&w=0&h=cMSMlRyI6YAzcE_C2KgHGRLeVojHYoUhIvhwPBYv8f4=);">
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="col-span-12 lg:col-span-3 bg-white border shadow-lg p-6">
                    <div class="border-b mb-5 flex justify-between text-sm">
                        <div class="text-primary-600 flex items-center pb-2 pr-2 border-b-2 border-primary-600 uppercase">
                            <svg class="h-6 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.005 455.005"
                                style="enable-background:new 0 0 455.005 455.005;" xml:space="preserve">
                                <g>
                                    <path
                                        d="M446.158,267.615c-5.622-3.103-12.756-2.421-19.574,1.871l-125.947,79.309c-3.505,2.208-4.557,6.838-2.35,10.343
                                                                                                                          c2.208,3.505,6.838,4.557,10.343,2.35l125.947-79.309c2.66-1.675,4.116-1.552,4.331-1.432c0.218,0.12,1.096,1.285,1.096,4.428
                                                                                                                          c0,8.449-6.271,19.809-13.42,24.311l-122.099,76.885c-6.492,4.088-12.427,5.212-16.284,3.084c-3.856-2.129-6.067-7.75-6.067-15.423
                                                                                                                          c0-19.438,13.896-44.61,30.345-54.967l139.023-87.542c2.181-1.373,3.503-3.77,3.503-6.347s-1.323-4.974-3.503-6.347L184.368,50.615
                                                                                                                          c-2.442-1.538-5.551-1.538-7.993,0L35.66,139.223C15.664,151.815,0,180.188,0,203.818v4c0,23.63,15.664,52.004,35.66,64.595
                                                                                                                          l209.292,131.791c3.505,2.207,8.136,1.154,10.343-2.35c2.207-3.505,1.155-8.136-2.35-10.343L43.653,259.72
                                                                                                                          C28.121,249.941,15,226.172,15,207.818v-4c0-18.354,13.121-42.122,28.653-51.902l136.718-86.091l253.059,159.35l-128.944,81.196
                                                                                                                          c-20.945,13.189-37.352,42.909-37.352,67.661c0,13.495,4.907,23.636,13.818,28.555c3.579,1.976,7.526,2.956,11.709,2.956
                                                                                                                          c6.231,0,12.985-2.176,19.817-6.479l122.099-76.885c11.455-7.213,20.427-23.467,20.427-37.004
                                                                                                                          C455.004,277.119,451.78,270.719,446.158,267.615z" />
                                    <path
                                        d="M353.664,232.676c2.492,0,4.928-1.241,6.354-3.504c2.207-3.505,1.155-8.136-2.35-10.343l-173.3-109.126
                                                                                                                          c-3.506-2.207-8.136-1.154-10.343,2.35c-2.207,3.505-1.155,8.136,2.35,10.343l173.3,109.126
                                                                                                                          C350.916,232.303,352.298,232.676,353.664,232.676z" />
                                    <path
                                        d="M323.68,252.58c2.497,0,4.938-1.246,6.361-3.517c2.201-3.509,1.14-8.138-2.37-10.338L254.46,192.82
                                                                                                                          c-3.511-2.202-8.139-1.139-10.338,2.37c-2.201,3.51-1.14,8.138,2.37,10.338l73.211,45.905
                                                                                                                          C320.941,252.21,322.318,252.58,323.68,252.58z" />
                                    <path
                                        d="M223.903,212.559c-3.513-2.194-8.14-1.124-10.334,2.39c-2.194,3.514-1.124,8.14,2.39,10.334l73.773,46.062
                                                                                                                          c1.236,0.771,2.608,1.139,3.965,1.139c2.501,0,4.947-1.251,6.369-3.529c2.194-3.514,1.124-8.14-2.39-10.334L223.903,212.559z" />
                                    <path
                                        d="M145.209,129.33l-62.33,39.254c-2.187,1.377-3.511,3.783-3.503,6.368s1.345,4.983,3.54,6.348l74.335,46.219
                                                                                                                          c1.213,0.754,2.586,1.131,3.96,1.131c1.417,0,2.833-0.401,4.071-1.201l16.556-10.7c3.479-2.249,4.476-6.891,2.228-10.37
                                                                                                                          c-2.248-3.479-6.891-4.475-10.37-2.228l-12.562,8.119l-60.119-37.38l48.2-30.355l59.244,37.147l-6.907,4.464
                                                                                                                          c-3.479,2.249-4.476,6.891-2.228,10.37c2.249,3.479,6.894,4.476,10.37,2.228l16.8-10.859c2.153-1.392,3.446-3.787,3.429-6.351
                                                                                                                          c-0.018-2.563-1.344-4.94-3.516-6.302l-73.218-45.909C150.749,127.792,147.647,127.795,145.209,129.33z" />
                                    <path
                                        d="M270.089,288.846c2.187-3.518,1.109-8.142-2.409-10.329l-74.337-46.221c-3.518-2.188-8.143-1.109-10.329,2.409
                                                                                                                          c-2.187,3.518-1.109,8.142,2.409,10.329l74.337,46.221c1.232,0.767,2.601,1.132,3.953,1.132
                                                                                                                          C266.219,292.387,268.669,291.131,270.089,288.846z" />
                                    <path
                                        d="M53.527,192.864c-2.187,3.518-1.109,8.142,2.409,10.329l183.478,114.081c1.232,0.767,2.601,1.132,3.953,1.132
                                                                                                                          c2.506,0,4.956-1.256,6.376-3.541c2.187-3.518,1.109-8.142-2.409-10.329L63.856,190.455
                                                                                                                          C60.338,188.266,55.714,189.346,53.527,192.864z" />
                                </g>
                            </svg>
                            <a href="#" class="font-semibold inline-block">Fashion</a>
                        </div>
                        <a href="#">See All</a>
                    </div>
                    <div class="grid grid-cols-2 lg:grid-cols-1 gap-5">
                        <div class="lg:border-b pb-4">
                            <a href="#">
                                <div class="h-48 bg-cover text-center overflow-hidden"
                                    style="background-image: url('https://tailwindcss.com/img/card-left.jpg')"
                                    title="Woman holding a mug">
                                </div>
                            </a>
                            <a href="#"
                                class="text-gray-900 text-md font-medium inline-block mt-2 hover:text-primary-600 transition duration-500 ease-in-out">The
                                perfect summer sweater that you can wear! </a>
                        </div>
                        <div class="">
                            <a href="#">
                                <div class="h-48 bg-cover text-center overflow-hidden"
                                    style="background-image: url('https://tailwindcss.com/img/card-left.jpg')"
                                    title="Woman holding a mug">
                                </div>
                            </a>
                            <a href="#"
                                class="text-gray-900 text-md font-medium inline-block mt-2 hover:text-primary-600 transition duration-500 ease-in-out">The
                                perfect summer sweater that you can wear! </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>



    <!-- Component Code -->
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 relative">

        <div class="bg-white border p-5">
            <div class="border-b mb-5 flex justify-between text-sm">
                <div class="text-primary-600 flex items-center pb-2 pr-2 border-b-2 border-primary-600 uppercase">
                    <svg class="h-6 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.005 455.005"
                        style="enable-background:new 0 0 455.005 455.005;" xml:space="preserve">
                        <g>
                            <path
                                d="M446.158,267.615c-5.622-3.103-12.756-2.421-19.574,1.871l-125.947,79.309c-3.505,2.208-4.557,6.838-2.35,10.343
                                                                                                                  c2.208,3.505,6.838,4.557,10.343,2.35l125.947-79.309c2.66-1.675,4.116-1.552,4.331-1.432c0.218,0.12,1.096,1.285,1.096,4.428
                                                                                                                  c0,8.449-6.271,19.809-13.42,24.311l-122.099,76.885c-6.492,4.088-12.427,5.212-16.284,3.084c-3.856-2.129-6.067-7.75-6.067-15.423
                                                                                                                  c0-19.438,13.896-44.61,30.345-54.967l139.023-87.542c2.181-1.373,3.503-3.77,3.503-6.347s-1.323-4.974-3.503-6.347L184.368,50.615
                                                                                                                  c-2.442-1.538-5.551-1.538-7.993,0L35.66,139.223C15.664,151.815,0,180.188,0,203.818v4c0,23.63,15.664,52.004,35.66,64.595
                                                                                                                  l209.292,131.791c3.505,2.207,8.136,1.154,10.343-2.35c2.207-3.505,1.155-8.136-2.35-10.343L43.653,259.72
                                                                                                                  C28.121,249.941,15,226.172,15,207.818v-4c0-18.354,13.121-42.122,28.653-51.902l136.718-86.091l253.059,159.35l-128.944,81.196
                                                                                                                  c-20.945,13.189-37.352,42.909-37.352,67.661c0,13.495,4.907,23.636,13.818,28.555c3.579,1.976,7.526,2.956,11.709,2.956
                                                                                                                  c6.231,0,12.985-2.176,19.817-6.479l122.099-76.885c11.455-7.213,20.427-23.467,20.427-37.004
                                                                                                                  C455.004,277.119,451.78,270.719,446.158,267.615z" />
                            <path
                                d="M353.664,232.676c2.492,0,4.928-1.241,6.354-3.504c2.207-3.505,1.155-8.136-2.35-10.343l-173.3-109.126
                                                                                                                  c-3.506-2.207-8.136-1.154-10.343,2.35c-2.207,3.505-1.155,8.136,2.35,10.343l173.3,109.126
                                                                                                                  C350.916,232.303,352.298,232.676,353.664,232.676z" />
                            <path
                                d="M323.68,252.58c2.497,0,4.938-1.246,6.361-3.517c2.201-3.509,1.14-8.138-2.37-10.338L254.46,192.82
                                                                                                                  c-3.511-2.202-8.139-1.139-10.338,2.37c-2.201,3.51-1.14,8.138,2.37,10.338l73.211,45.905
                                                                                                                  C320.941,252.21,322.318,252.58,323.68,252.58z" />
                            <path
                                d="M223.903,212.559c-3.513-2.194-8.14-1.124-10.334,2.39c-2.194,3.514-1.124,8.14,2.39,10.334l73.773,46.062
                                                                                                                  c1.236,0.771,2.608,1.139,3.965,1.139c2.501,0,4.947-1.251,6.369-3.529c2.194-3.514,1.124-8.14-2.39-10.334L223.903,212.559z" />
                            <path
                                d="M145.209,129.33l-62.33,39.254c-2.187,1.377-3.511,3.783-3.503,6.368s1.345,4.983,3.54,6.348l74.335,46.219
                                                                                                                  c1.213,0.754,2.586,1.131,3.96,1.131c1.417,0,2.833-0.401,4.071-1.201l16.556-10.7c3.479-2.249,4.476-6.891,2.228-10.37
                                                                                                                  c-2.248-3.479-6.891-4.475-10.37-2.228l-12.562,8.119l-60.119-37.38l48.2-30.355l59.244,37.147l-6.907,4.464
                                                                                                                  c-3.479,2.249-4.476,6.891-2.228,10.37c2.249,3.479,6.894,4.476,10.37,2.228l16.8-10.859c2.153-1.392,3.446-3.787,3.429-6.351
                                                                                                                  c-0.018-2.563-1.344-4.94-3.516-6.302l-73.218-45.909C150.749,127.792,147.647,127.795,145.209,129.33z" />
                            <path
                                d="M270.089,288.846c2.187-3.518,1.109-8.142-2.409-10.329l-74.337-46.221c-3.518-2.188-8.143-1.109-10.329,2.409
                                                                                                                  c-2.187,3.518-1.109,8.142,2.409,10.329l74.337,46.221c1.232,0.767,2.601,1.132,3.953,1.132
                                                                                                                  C266.219,292.387,268.669,291.131,270.089,288.846z" />
                            <path
                                d="M53.527,192.864c-2.187,3.518-1.109,8.142,2.409,10.329l183.478,114.081c1.232,0.767,2.601,1.132,3.953,1.132
                                                                                                                  c2.506,0,4.956-1.256,6.376-3.541c2.187-3.518,1.109-8.142-2.409-10.329L63.856,190.455
                                                                                                                  C60.338,188.266,55.714,189.346,53.527,192.864z" />
                        </g>
                    </svg>
                    <a href="#" class="font-semibold inline-block">Fashion</a>
                </div>
                <a href="#">See All</a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="min-height: 400px; background-image:url(https://media.gettyimages.com/photos/at-the-the-network-tolo-televised-debate-dr-abdullah-abdullah-with-picture-id1179614034?k=6&m=1179614034&s=612x612&w=0&h=WwIX3RMsOQEn5DovD9J3e859CZTdxbHHD3HRyrgU3A8=);">
                    <div
                        class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                        <a href="#"
                            class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                        <div class="text-white font-regular flex flex-col justify-start">
                            <span class="text-3xl leading-0 font-semibold">25</span>
                            <span class="-mt-3">May</span>
                        </div>
                    </div>
                    <main class="p-5 z-10">
                        <a href="#"
                            class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Dr.
                            Abdullah Abdullah's Presidential Election Campaign
                        </a>
                    </main>

                </div>

                <div class="lg:border-l lg:pl-4">
                    <div class="flex items-start mb-3 pb-3">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-20 h-20 bg-cover bg-center"
                                style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-fc-looks-dejected-during-the-uefa-of-picture-id1227967060?k=6&m=1227967060&s=612x612&w=0&h=cMSMlRyI6YAzcE_C2KgHGRLeVojHYoUhIvhwPBYv8f4=);">
                            </div>
                        </a>
                        <div class="text-sm">
                            <p class="text-gray-600 text-xs">Aug 18</p>
                            <a href="#" class="text-gray-900 font-medium hover:text-primary-600 leading-none">Cristiano
                                Ronaldo of Juventus FC looks dejected during the...</a>
                        </div>
                    </div>
                    <div class="flex items-start mb-3 pb-3">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-20 h-20 bg-cover bg-center"
                                style="background-image:url(https://media.gettyimages.com/photos/lionel-messi-and-marcandre-ter-stegen-of-fc-barcelona-waits-in-the-picture-id1266763488?k=6&m=1266763488&s=612x612&w=0&h=8vxz9HfQVfrff5N7d1lBVxtLamRQGK3J3lyHkUuuIiw=);">
                            </div>
                        </a>
                        <div class="text-sm w-2/3">
                            <p class="text-gray-600 text-xs">Jan 18</p>
                            <a href="#" class="text-gray-900 font-medium hover:text-primary-600 leading-none">Barcelona v
                                Bayern Munich </a>
                        </div>
                    </div>
                    <div class="flex items-start mb-3 pb-3">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-20 h-20 bg-cover bg-center"
                                style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-fc-looks-dejected-during-the-uefa-of-picture-id1227967060?k=6&m=1227967060&s=612x612&w=0&h=cMSMlRyI6YAzcE_C2KgHGRLeVojHYoUhIvhwPBYv8f4=);">
                            </div>
                        </a>
                        <div class="text-sm">
                            <p class="text-gray-600 text-xs">Aug 18</p>
                            <a href="#" class="text-gray-900 font-medium hover:text-primary-600 leading-none">Cristiano
                                Ronaldo of Juventus FC looks dejected during the...</a>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-20 h-20 bg-cover bg-center"
                                style="background-image:url(https://media.gettyimages.com/photos/lionel-messi-of-fc-barcelona-looks-dejected-following-his-teams-in-picture-id1266341828?k=6&m=1266341828&s=612x612&w=0&h=FZi-bSrIlOEE01780h79GsbBYPqZo2l3aaCxoktWADY=);">
                            </div>
                        </a>
                        <div class="text-sm w-2/3">
                            <p class="text-gray-600 text-xs">July 23</p>
                            <a href="#" class="text-gray-900 font-medium hover:text-primary-600 leading-none">Barcelona v
                                Bayern Munich - UEFA Champions League </a>
                        </div>
                    </div>
                </div>

                <div class="lg:border-l lg:pl-4">
                    <div class="flex items-start mb-3 pb-3">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-20 h-20 bg-cover bg-center"
                                style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-fc-looks-dejected-during-the-uefa-of-picture-id1227967060?k=6&m=1227967060&s=612x612&w=0&h=cMSMlRyI6YAzcE_C2KgHGRLeVojHYoUhIvhwPBYv8f4=);">
                            </div>
                        </a>
                        <div class="text-sm">
                            <p class="text-gray-600 text-xs">Aug 18</p>
                            <a href="#" class="text-gray-900 font-medium hover:text-primary-600 leading-none">Cristiano
                                Ronaldo of Juventus FC looks dejected during the...</a>
                        </div>
                    </div>
                    <div class="flex items-start mb-3 pb-3">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-20 h-20 bg-cover bg-center"
                                style="background-image:url(https://media.gettyimages.com/photos/lionel-messi-and-marcandre-ter-stegen-of-fc-barcelona-waits-in-the-picture-id1266763488?k=6&m=1266763488&s=612x612&w=0&h=8vxz9HfQVfrff5N7d1lBVxtLamRQGK3J3lyHkUuuIiw=);">
                            </div>
                        </a>
                        <div class="text-sm w-2/3">
                            <p class="text-gray-600 text-xs">Jan 18</p>
                            <a href="#" class="text-gray-900 font-medium hover:text-primary-600 leading-none">Barcelona v
                                Bayern Munich </a>
                        </div>
                    </div>
                    <div class="flex items-start mb-3 pb-3">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-20 h-20 bg-cover bg-center"
                                style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-fc-looks-dejected-during-the-uefa-of-picture-id1227967060?k=6&m=1227967060&s=612x612&w=0&h=cMSMlRyI6YAzcE_C2KgHGRLeVojHYoUhIvhwPBYv8f4=);">
                            </div>
                        </a>
                        <div class="text-sm">
                            <p class="text-gray-600 text-xs">Aug 18</p>
                            <a href="#" class="text-gray-900 font-medium hover:text-primary-600 leading-none">Cristiano
                                Ronaldo of Juventus FC looks dejected during the...</a>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-20 h-20 bg-cover bg-center"
                                style="background-image:url(https://media.gettyimages.com/photos/lionel-messi-of-fc-barcelona-looks-dejected-following-his-teams-in-picture-id1266341828?k=6&m=1266341828&s=612x612&w=0&h=FZi-bSrIlOEE01780h79GsbBYPqZo2l3aaCxoktWADY=);">
                            </div>
                        </a>
                        <div class="text-sm w-2/3">
                            <p class="text-gray-600 text-xs">July 23</p>
                            <a href="#" class="text-gray-900 font-medium hover:text-primary-600 leading-none">Barcelona v
                                Bayern Munich - UEFA Champions League </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Component Code -->
    <div class="max-w-screen mx-auto sm:p-10 relative">
        <div class="lg:flex">

            <div class="lg:w-6/12">
                <div class="relative h-full w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="min-height: 300px; background-image:url(https://media.gettyimages.com/photos/at-the-the-network-tolo-televised-debate-dr-abdullah-abdullah-with-picture-id1179614034?k=6&m=1179614034&s=612x612&w=0&h=WwIX3RMsOQEn5DovD9J3e859CZTdxbHHD3HRyrgU3A8=);">
                    <div
                        class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <div class="absolute top-0 right-0 left-0 mx-6 mt-4 flex justify-between items-center">
                        <a href="#"
                            class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                        <div class="text-white font-regular flex flex-col justify-start">
                            <span class="text-3xl leading-0 font-semibold">25</span>
                            <span class="-mt-3">May</span>
                        </div>
                    </div>
                    <main class="p-8 z-10">
                        <a href="#"
                            class="text-xl tracking-tight font-semibold leading-7 mb-3 inline-block text-white hover:underline">Dr.
                            Abdullah Abdullah's Presidential Election Campaign
                        </a>
                        <p class="text-gray-200 text-xs">
                            By <a href="#" class="text-white font-semibold hover:underline">Ahmad
                                Sultani</a>&nbsp;&nbsp;|&nbsp;&nbsp;5 mins read
                        </p>
                    </main>

                </div>

            </div>
            <div class="lg:w-6/12 md:grid grid-cols-2 grid-rows-2">

                <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="min-height: 300px; background-image:url(https://media.gettyimages.com/photos/ashraf-ghani-afghanistans-president-speaks-at-the-council-on-foreign-picture-id850794338?k=6&m=850794338&s=612x612&w=0&h=b_XBw5S38Cioslqr6VL3e36cWQU205IsInqDXZpDOD4=);">
                    <div
                        class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                        <a href="#"
                            class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                        <div class="text-white font-regular flex flex-col justify-start">
                            <span class="text-3xl leading-0 font-semibold">10</span>
                            <span class="-mt-3">Mar</span>
                        </div>
                    </div>
                    <main class="p-5 z-10">
                        <a href="#"
                            class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Afghanistan's
                            President Ashraf Ghani Speaks At The Council
                        </a>
                    </main>

                </div>

                <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="min-height: 300px; background-image:url(https://media.gettyimages.com/photos/afghan-president-ashraf-ghani-arrives-to-the-welcoming-ceremony-the-picture-id694155252?k=6&m=694155252&s=612x612&w=0&h=IIJPetzJL-hAgPkE4hm2wUKvO4YOav8jJp484CgLEUs=);">
                    <div
                        class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                        <a href="#"
                            class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                        <div class="text-white font-regular flex flex-col justify-start">
                            <span class="text-3xl leading-0 font-semibold">20</span>
                            <span class="-mt-3">Jan</span>
                        </div>
                    </div>
                    <main class="p-5 z-10">
                        <a href="#"
                            class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Middle
                            East Participants Gather In Warsaw
                        </a>
                    </main>

                </div>

                <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="min-height: 300px; background-image:url(https://media.gettyimages.com/photos/afghan-president-ashraf-ghani-speaks-during-a-gathering-in-jalalabad-picture-id1205021905?k=6&m=1205021905&s=612x612&w=0&h=nwAH1XuZxF_H4f6LfHv-lgqtZe0h1tVFXfzhpMwFqao=);">
                    <div
                        class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                        <a href="#"
                            class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                        <div class="text-white font-regular flex flex-col justify-start">
                            <span class="text-3xl leading-0 font-semibold">25</span>
                            <span class="-mt-3">May</span>
                        </div>
                    </div>
                    <main class="p-5 z-10">
                        <a href="#"
                            class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Afghan
                            President Ashraf Ghani Visits Jalalabad</a>
                    </main>

                </div>

                <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="min-height: 300px; background-image:url(https://media.gettyimages.com/photos/afghanistan-president-ashraf-ghani-carries-the-coffin-of-slain-picture-id1192749054?k=6&m=1192749054&s=612x612&w=0&h=CV-WfSEmfPOf3FdU934-JcUPkeCXOv7se-InwdewvPo=);">
                    <div
                        class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                    </div>
                    <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                        <a href="#"
                            class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                        <div class="text-white font-regular flex flex-col justify-start">
                            <span class="text-3xl leading-0 font-semibold">25</span>
                            <span class="-mt-3">May</span>
                        </div>
                    </div>
                    <main class="p-5 z-10">
                        <a href="#"
                            class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Coffin
                            Of Slain Japanese Doctor Nakamura Transported To Japan</a>
                    </main>

                </div>

            </div>

        </div>
    </div>

    <!-- Component Code -->
    <div class="max-w-screen-xl mx-auto lg:p-16 relative">
        <div class="sm:flex items-start">

            <div class="md:w-8/12 sm:w-6/12 sm:p-10">
                <div class="border-b mb-5 flex justify-between text-sm">
                    <div class="text-primary-600 flex items-center pb-2 pr-2 border-b-2 border-primary-600 uppercase">
                        <svg class="h-6 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.005 455.005"
                            style="enable-background:new 0 0 455.005 455.005;" xml:space="preserve">
                            <g>
                                <path
                                    d="M446.158,267.615c-5.622-3.103-12.756-2.421-19.574,1.871l-125.947,79.309c-3.505,2.208-4.557,6.838-2.35,10.343
                                                                                                    c2.208,3.505,6.838,4.557,10.343,2.35l125.947-79.309c2.66-1.675,4.116-1.552,4.331-1.432c0.218,0.12,1.096,1.285,1.096,4.428
                                                                                                    c0,8.449-6.271,19.809-13.42,24.311l-122.099,76.885c-6.492,4.088-12.427,5.212-16.284,3.084c-3.856-2.129-6.067-7.75-6.067-15.423
                                                                                                    c0-19.438,13.896-44.61,30.345-54.967l139.023-87.542c2.181-1.373,3.503-3.77,3.503-6.347s-1.323-4.974-3.503-6.347L184.368,50.615
                                                                                                    c-2.442-1.538-5.551-1.538-7.993,0L35.66,139.223C15.664,151.815,0,180.188,0,203.818v4c0,23.63,15.664,52.004,35.66,64.595
                                                                                                    l209.292,131.791c3.505,2.207,8.136,1.154,10.343-2.35c2.207-3.505,1.155-8.136-2.35-10.343L43.653,259.72
                                                                                                    C28.121,249.941,15,226.172,15,207.818v-4c0-18.354,13.121-42.122,28.653-51.902l136.718-86.091l253.059,159.35l-128.944,81.196
                                                                                                    c-20.945,13.189-37.352,42.909-37.352,67.661c0,13.495,4.907,23.636,13.818,28.555c3.579,1.976,7.526,2.956,11.709,2.956
                                                                                                    c6.231,0,12.985-2.176,19.817-6.479l122.099-76.885c11.455-7.213,20.427-23.467,20.427-37.004
                                                                                                    C455.004,277.119,451.78,270.719,446.158,267.615z" />
                                <path
                                    d="M353.664,232.676c2.492,0,4.928-1.241,6.354-3.504c2.207-3.505,1.155-8.136-2.35-10.343l-173.3-109.126
                                                                                                    c-3.506-2.207-8.136-1.154-10.343,2.35c-2.207,3.505-1.155,8.136,2.35,10.343l173.3,109.126
                                                                                                    C350.916,232.303,352.298,232.676,353.664,232.676z" />
                                <path
                                    d="M323.68,252.58c2.497,0,4.938-1.246,6.361-3.517c2.201-3.509,1.14-8.138-2.37-10.338L254.46,192.82
                                                                                                    c-3.511-2.202-8.139-1.139-10.338,2.37c-2.201,3.51-1.14,8.138,2.37,10.338l73.211,45.905
                                                                                                    C320.941,252.21,322.318,252.58,323.68,252.58z" />
                                <path
                                    d="M223.903,212.559c-3.513-2.194-8.14-1.124-10.334,2.39c-2.194,3.514-1.124,8.14,2.39,10.334l73.773,46.062
                                                                                                    c1.236,0.771,2.608,1.139,3.965,1.139c2.501,0,4.947-1.251,6.369-3.529c2.194-3.514,1.124-8.14-2.39-10.334L223.903,212.559z" />
                                <path
                                    d="M145.209,129.33l-62.33,39.254c-2.187,1.377-3.511,3.783-3.503,6.368s1.345,4.983,3.54,6.348l74.335,46.219
                                                                                                    c1.213,0.754,2.586,1.131,3.96,1.131c1.417,0,2.833-0.401,4.071-1.201l16.556-10.7c3.479-2.249,4.476-6.891,2.228-10.37
                                                                                                    c-2.248-3.479-6.891-4.475-10.37-2.228l-12.562,8.119l-60.119-37.38l48.2-30.355l59.244,37.147l-6.907,4.464
                                                                                                    c-3.479,2.249-4.476,6.891-2.228,10.37c2.249,3.479,6.894,4.476,10.37,2.228l16.8-10.859c2.153-1.392,3.446-3.787,3.429-6.351
                                                                                                    c-0.018-2.563-1.344-4.94-3.516-6.302l-73.218-45.909C150.749,127.792,147.647,127.795,145.209,129.33z" />
                                <path
                                    d="M270.089,288.846c2.187-3.518,1.109-8.142-2.409-10.329l-74.337-46.221c-3.518-2.188-8.143-1.109-10.329,2.409
                                                                                                    c-2.187,3.518-1.109,8.142,2.409,10.329l74.337,46.221c1.232,0.767,2.601,1.132,3.953,1.132
                                                                                                    C266.219,292.387,268.669,291.131,270.089,288.846z" />
                                <path
                                    d="M53.527,192.864c-2.187,3.518-1.109,8.142,2.409,10.329l183.478,114.081c1.232,0.767,2.601,1.132,3.953,1.132
                                                                                                    c2.506,0,4.956-1.256,6.376-3.541c2.187-3.518,1.109-8.142-2.409-10.329L63.856,190.455
                                                                                                    C60.338,188.266,55.714,189.346,53.527,192.864z" />
                            </g>
                        </svg>
                        <a href="#" class="font-semibold inline-block">Fashion Blog</a>
                    </div>
                    <a href="#">See All</a>
                </div>
                <div class="mb-5 pb-5 w-full lg:flex justify-center items-center border-b">
                    <a href="#">
                        <div class="h-56 lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                            style="background-image: url('https://tailwindcss.com/img/card-left.jpg')"
                            title="Woman holding a mug">
                        </div>
                    </a>
                    <div
                        class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="">
                            <a href="#"
                                class="text-sm text-primary-600 uppercase font-medium mb-3 flex items-center hover:text-gray-900 transition duration-500 ease-in-out">
                                Fashion
                            </a>
                            <a href="#"
                                class="text-gray-900 font-bold text-xl mb-2 hover:text-primary-600 transition duration-500 ease-in-out">The
                                perfect summer sweater that you can wear! </a>
                            <p class="text-gray-700 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mb-5 pb-5 w-full lg:flex justify-center items-center border-b">
                    <a href="#">
                        <div class="h-56 lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                            style="background-image: url('https://tailwindcss.com/img/card-left.jpg')"
                            title="Woman holding a mug">
                        </div>
                    </a>
                    <div
                        class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="">
                            <a href="#"
                                class="text-sm text-primary-600 uppercase font-medium mb-3 flex items-center hover:text-gray-900 transition duration-500 ease-in-out">
                                Fashion
                            </a>
                            <a href="#"
                                class="text-gray-900 font-bold text-xl mb-2 hover:text-primary-600 transition duration-500 ease-in-out">The
                                perfect summer sweater that you can wear! </a>
                            <p class="text-gray-700 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pb-5 w-full lg:flex justify-center items-center">
                    <a href="#">
                        <div class="h-56 lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                            style="background-image: url('https://tailwindcss.com/img/card-left.jpg')"
                            title="Woman holding a mug">
                        </div>
                    </a>
                    <div
                        class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                        <div class="">
                            <a href="#"
                                class="text-sm text-primary-600 uppercase font-medium mb-3 flex items-center hover:text-gray-900 transition duration-500 ease-in-out">
                                Fashion
                            </a>
                            <a href="#"
                                class="text-gray-900 font-bold text-xl mb-2 hover:text-primary-600 transition duration-500 ease-in-out">The
                                perfect summer sweater that you can wear! </a>
                            <p class="text-gray-700 text-sm mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="sticky top-0 md:w-4/12 sm:w-6/12 sm:p-10 sm:border-l">
                <div class="border-b mb-5 flex justify-between text-sm">
                    <div class="text-primary-600 flex items-center pb-2 pr-2 border-b-2 border-primary-600 uppercase">
                        <svg class="h-6 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.005 455.005"
                            style="enable-background:new 0 0 455.005 455.005;" xml:space="preserve">
                            <g>
                                <path
                                    d="M446.158,267.615c-5.622-3.103-12.756-2.421-19.574,1.871l-125.947,79.309c-3.505,2.208-4.557,6.838-2.35,10.343
                                                                                                    c2.208,3.505,6.838,4.557,10.343,2.35l125.947-79.309c2.66-1.675,4.116-1.552,4.331-1.432c0.218,0.12,1.096,1.285,1.096,4.428
                                                                                                    c0,8.449-6.271,19.809-13.42,24.311l-122.099,76.885c-6.492,4.088-12.427,5.212-16.284,3.084c-3.856-2.129-6.067-7.75-6.067-15.423
                                                                                                    c0-19.438,13.896-44.61,30.345-54.967l139.023-87.542c2.181-1.373,3.503-3.77,3.503-6.347s-1.323-4.974-3.503-6.347L184.368,50.615
                                                                                                    c-2.442-1.538-5.551-1.538-7.993,0L35.66,139.223C15.664,151.815,0,180.188,0,203.818v4c0,23.63,15.664,52.004,35.66,64.595
                                                                                                    l209.292,131.791c3.505,2.207,8.136,1.154,10.343-2.35c2.207-3.505,1.155-8.136-2.35-10.343L43.653,259.72
                                                                                                    C28.121,249.941,15,226.172,15,207.818v-4c0-18.354,13.121-42.122,28.653-51.902l136.718-86.091l253.059,159.35l-128.944,81.196
                                                                                                    c-20.945,13.189-37.352,42.909-37.352,67.661c0,13.495,4.907,23.636,13.818,28.555c3.579,1.976,7.526,2.956,11.709,2.956
                                                                                                    c6.231,0,12.985-2.176,19.817-6.479l122.099-76.885c11.455-7.213,20.427-23.467,20.427-37.004
                                                                                                    C455.004,277.119,451.78,270.719,446.158,267.615z" />
                                <path
                                    d="M353.664,232.676c2.492,0,4.928-1.241,6.354-3.504c2.207-3.505,1.155-8.136-2.35-10.343l-173.3-109.126
                                                                                                    c-3.506-2.207-8.136-1.154-10.343,2.35c-2.207,3.505-1.155,8.136,2.35,10.343l173.3,109.126
                                                                                                    C350.916,232.303,352.298,232.676,353.664,232.676z" />
                                <path
                                    d="M323.68,252.58c2.497,0,4.938-1.246,6.361-3.517c2.201-3.509,1.14-8.138-2.37-10.338L254.46,192.82
                                                                                                    c-3.511-2.202-8.139-1.139-10.338,2.37c-2.201,3.51-1.14,8.138,2.37,10.338l73.211,45.905
                                                                                                    C320.941,252.21,322.318,252.58,323.68,252.58z" />
                                <path
                                    d="M223.903,212.559c-3.513-2.194-8.14-1.124-10.334,2.39c-2.194,3.514-1.124,8.14,2.39,10.334l73.773,46.062
                                                                                                    c1.236,0.771,2.608,1.139,3.965,1.139c2.501,0,4.947-1.251,6.369-3.529c2.194-3.514,1.124-8.14-2.39-10.334L223.903,212.559z" />
                                <path
                                    d="M145.209,129.33l-62.33,39.254c-2.187,1.377-3.511,3.783-3.503,6.368s1.345,4.983,3.54,6.348l74.335,46.219
                                                                                                    c1.213,0.754,2.586,1.131,3.96,1.131c1.417,0,2.833-0.401,4.071-1.201l16.556-10.7c3.479-2.249,4.476-6.891,2.228-10.37
                                                                                                    c-2.248-3.479-6.891-4.475-10.37-2.228l-12.562,8.119l-60.119-37.38l48.2-30.355l59.244,37.147l-6.907,4.464
                                                                                                    c-3.479,2.249-4.476,6.891-2.228,10.37c2.249,3.479,6.894,4.476,10.37,2.228l16.8-10.859c2.153-1.392,3.446-3.787,3.429-6.351
                                                                                                    c-0.018-2.563-1.344-4.94-3.516-6.302l-73.218-45.909C150.749,127.792,147.647,127.795,145.209,129.33z" />
                                <path
                                    d="M270.089,288.846c2.187-3.518,1.109-8.142-2.409-10.329l-74.337-46.221c-3.518-2.188-8.143-1.109-10.329,2.409
                                                                                                    c-2.187,3.518-1.109,8.142,2.409,10.329l74.337,46.221c1.232,0.767,2.601,1.132,3.953,1.132
                                                                                                    C266.219,292.387,268.669,291.131,270.089,288.846z" />
                                <path
                                    d="M53.527,192.864c-2.187,3.518-1.109,8.142,2.409,10.329l183.478,114.081c1.232,0.767,2.601,1.132,3.953,1.132
                                                                                                    c2.506,0,4.956-1.256,6.376-3.541c2.187-3.518,1.109-8.142-2.409-10.329L63.856,190.455
                                                                                                    C60.338,188.266,55.714,189.346,53.527,192.864z" />
                            </g>
                        </svg>
                        <a href="#" class="font-semibold inline-block">Cooking</a>
                    </div>
                    <a href="#">See All</a>
                </div>
                <div class="my-4 flex">
                    <span class="text-primary-600 font-bold text-3xl mr-4">
                        1.
                    </span>
                    <div class="text-md border-b pb-4">
                        <a href="#" class="text-gray-900 hover:text-primary-600 font-semibold">Special Yummy Pizza</a>
                        <p class="text-gray-500 text-sm">Lorem ipsum, dolor sit amet consectetur</p>
                    </div>
                </div>
                <div class="my-4 flex">
                    <span class="text-primary-600 font-bold text-3xl mr-4">
                        2.
                    </span>
                    <div class="text-md border-b pb-4">
                        <a href="#" class="text-gray-900 hover:text-primary-600 font-semibold">New Brunch Recipe</a>
                        <p class="text-gray-500 text-sm">Lorem ipsum, dolor sit amet consectetur Lorem ipsum, dolor sit
                            amet consectetur</p>
                    </div>
                </div>
                <div class="my-4 flex">
                    <span class="text-primary-600 font-bold text-3xl mr-4">
                        3.
                    </span>
                    <div class="text-md border-b pb-4">
                        <a href="#" class="text-gray-900 hover:text-primary-600 font-semibold">The perfect summer sweater
                            that you can wear! </a>
                        <p class="text-gray-500 text-sm">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard ...</p>
                    </div>
                </div>
                <div class="my-4 flex">
                    <span class="text-primary-600 font-bold text-3xl mr-4">
                        4.
                    </span>
                    <div class="text-md pb-4">
                        <a href="#" class="text-gray-900 hover:text-primary-600 font-semibold">Special Yummy Pizza</a>
                        <p class="text-gray-500 text-sm">Lorem ipsum, dolor sit amet consectetur</p>
                    </div>
                </div>

            </div>

        </div>
    </div>


    <!-- Component Code -->
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
        <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-5">

            <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                style="height: 450px; background-image:url(https://media.gettyimages.com/photos/at-the-the-network-tolo-televised-debate-dr-abdullah-abdullah-with-picture-id1179614034?k=6&m=1179614034&s=612x612&w=0&h=WwIX3RMsOQEn5DovD9J3e859CZTdxbHHD3HRyrgU3A8=);">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                </div>
                <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                    <a href="#"
                        class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                    <div class="text-white font-regular flex flex-col justify-start">
                        <span class="text-3xl leading-0 font-semibold">25</span>
                        <span class="-mt-3">May</span>
                    </div>
                </div>
                <main class="p-5 z-10">
                    <a href="#"
                        class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Dr.
                        Abdullah Abdullah's Presidential Election Campaign
                    </a>
                </main>

            </div>

            <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                style="height: 450px; background-image:url(https://media.gettyimages.com/photos/ashraf-ghani-afghanistans-president-speaks-at-the-council-on-foreign-picture-id850794338?k=6&m=850794338&s=612x612&w=0&h=b_XBw5S38Cioslqr6VL3e36cWQU205IsInqDXZpDOD4=);">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                </div>
                <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                    <a href="#"
                        class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                    <div class="text-white font-regular flex flex-col justify-start">
                        <span class="text-3xl leading-0 font-semibold">10</span>
                        <span class="-mt-3">Mar</span>
                    </div>
                </div>
                <main class="p-5 z-10">
                    <a href="#"
                        class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Afghanistan's
                        President Ashraf Ghani Speaks At The Council
                    </a>
                </main>

            </div>

            <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                style="height: 450px; background-image:url(https://media.gettyimages.com/photos/afghan-president-ashraf-ghani-arrives-to-the-welcoming-ceremony-the-picture-id694155252?k=6&m=694155252&s=612x612&w=0&h=IIJPetzJL-hAgPkE4hm2wUKvO4YOav8jJp484CgLEUs=);">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                </div>
                <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                    <a href="#"
                        class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                    <div class="text-white font-regular flex flex-col justify-start">
                        <span class="text-3xl leading-0 font-semibold">20</span>
                        <span class="-mt-3">Jan</span>
                    </div>
                </div>
                <main class="p-5 z-10">
                    <a href="#"
                        class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Middle
                        East Participants Gather In Warsaw
                    </a>
                </main>

            </div>

            <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                style="height: 450px; background-image:url(https://media.gettyimages.com/photos/afghan-president-ashraf-ghani-speaks-during-a-gathering-in-jalalabad-picture-id1205021905?k=6&m=1205021905&s=612x612&w=0&h=nwAH1XuZxF_H4f6LfHv-lgqtZe0h1tVFXfzhpMwFqao=);">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                </div>
                <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                    <a href="#"
                        class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                    <div class="text-white font-regular flex flex-col justify-start">
                        <span class="text-3xl leading-0 font-semibold">25</span>
                        <span class="-mt-3">May</span>
                    </div>
                </div>
                <main class="p-5 z-10">
                    <a href="#"
                        class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Afghan
                        President Ashraf Ghani Visits Jalalabad</a>
                </main>

            </div>

        </div>
    </div>

    <!-- Component Code -->
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">

            <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center"
                style="background-image:url(https://media.gettyimages.com/photos/at-the-the-network-tolo-televised-debate-dr-abdullah-abdullah-with-picture-id1179614034?k=6&m=1179614034&s=612x612&w=0&h=WwIX3RMsOQEn5DovD9J3e859CZTdxbHHD3HRyrgU3A8=);">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                </div>
                <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                    <a href="#"
                        class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                    <div class="text-white font-regular flex flex-col justify-start">
                        <span class="text-3xl leading-0 font-semibold">25</span>
                        <span class="-mt-3">May</span>
                    </div>
                </div>
                <main class="p-5 z-10">
                    <a href="#"
                        class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Dr.
                        Abdullah Abdullah's Presidential Election Campaign
                    </a>
                </main>

            </div>

            <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center"
                style="background-image:url(https://media.gettyimages.com/photos/ashraf-ghani-afghanistans-president-speaks-at-the-council-on-foreign-picture-id850794338?k=6&m=850794338&s=612x612&w=0&h=b_XBw5S38Cioslqr6VL3e36cWQU205IsInqDXZpDOD4=);">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                </div>
                <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                    <a href="#"
                        class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                    <div class="text-white font-regular flex flex-col justify-start">
                        <span class="text-3xl leading-0 font-semibold">10</span>
                        <span class="-mt-3">Mar</span>
                    </div>
                </div>
                <main class="p-5 z-10">
                    <a href="#"
                        class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Afghanistan's
                        President Ashraf Ghani Speaks At The Council
                    </a>
                </main>

            </div>

            <div class="relative h-64 w-full flex items-end justify-start text-left bg-cover bg-center"
                style="background-image:url(https://media.gettyimages.com/photos/afghan-president-ashraf-ghani-arrives-to-the-welcoming-ceremony-the-picture-id694155252?k=6&m=694155252&s=612x612&w=0&h=IIJPetzJL-hAgPkE4hm2wUKvO4YOav8jJp484CgLEUs=);">
                <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900">
                </div>
                <div class="absolute top-0 right-0 left-0 mx-5 mt-2 flex justify-between items-center">
                    <a href="#"
                        class="text-xs bg-primary-600 text-white px-5 py-2 uppercase hover:bg-white hover:text-primary-600 transition ease-in-out duration-500">Politics</a>
                    <div class="text-white font-regular flex flex-col justify-start">
                        <span class="text-3xl leading-0 font-semibold">20</span>
                        <span class="-mt-3">Jan</span>
                    </div>
                </div>
                <main class="p-5 z-10">
                    <a href="#"
                        class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline">Middle
                        East Participants Gather In Warsaw
                    </a>
                </main>

            </div>

        </div>
    </div>

    <!-- Component Code -->
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">

        <div class="border-b mb-5 flex justify-between text-sm">
            <div class="text-primary-600 flex items-center pb-2 pr-2 border-b-2 border-primary-600 uppercase">
                <svg class="h-6 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.005 455.005"
                    style="enable-background:new 0 0 455.005 455.005;" xml:space="preserve">
                    <g>
                        <path d="M446.158,267.615c-5.622-3.103-12.756-2.421-19.574,1.871l-125.947,79.309c-3.505,2.208-4.557,6.838-2.35,10.343
                                                                    c2.208,3.505,6.838,4.557,10.343,2.35l125.947-79.309c2.66-1.675,4.116-1.552,4.331-1.432c0.218,0.12,1.096,1.285,1.096,4.428
                                                                    c0,8.449-6.271,19.809-13.42,24.311l-122.099,76.885c-6.492,4.088-12.427,5.212-16.284,3.084c-3.856-2.129-6.067-7.75-6.067-15.423
                                                                    c0-19.438,13.896-44.61,30.345-54.967l139.023-87.542c2.181-1.373,3.503-3.77,3.503-6.347s-1.323-4.974-3.503-6.347L184.368,50.615
                                                                    c-2.442-1.538-5.551-1.538-7.993,0L35.66,139.223C15.664,151.815,0,180.188,0,203.818v4c0,23.63,15.664,52.004,35.66,64.595
                                                                    l209.292,131.791c3.505,2.207,8.136,1.154,10.343-2.35c2.207-3.505,1.155-8.136-2.35-10.343L43.653,259.72
                                                                    C28.121,249.941,15,226.172,15,207.818v-4c0-18.354,13.121-42.122,28.653-51.902l136.718-86.091l253.059,159.35l-128.944,81.196
                                                                    c-20.945,13.189-37.352,42.909-37.352,67.661c0,13.495,4.907,23.636,13.818,28.555c3.579,1.976,7.526,2.956,11.709,2.956
                                                                    c6.231,0,12.985-2.176,19.817-6.479l122.099-76.885c11.455-7.213,20.427-23.467,20.427-37.004
                                                                    C455.004,277.119,451.78,270.719,446.158,267.615z" />
                        <path d="M353.664,232.676c2.492,0,4.928-1.241,6.354-3.504c2.207-3.505,1.155-8.136-2.35-10.343l-173.3-109.126
                                                                    c-3.506-2.207-8.136-1.154-10.343,2.35c-2.207,3.505-1.155,8.136,2.35,10.343l173.3,109.126
                                                                    C350.916,232.303,352.298,232.676,353.664,232.676z" />
                        <path d="M323.68,252.58c2.497,0,4.938-1.246,6.361-3.517c2.201-3.509,1.14-8.138-2.37-10.338L254.46,192.82
                                                                    c-3.511-2.202-8.139-1.139-10.338,2.37c-2.201,3.51-1.14,8.138,2.37,10.338l73.211,45.905
                                                                    C320.941,252.21,322.318,252.58,323.68,252.58z" />
                        <path
                            d="M223.903,212.559c-3.513-2.194-8.14-1.124-10.334,2.39c-2.194,3.514-1.124,8.14,2.39,10.334l73.773,46.062
                                                                    c1.236,0.771,2.608,1.139,3.965,1.139c2.501,0,4.947-1.251,6.369-3.529c2.194-3.514,1.124-8.14-2.39-10.334L223.903,212.559z" />
                        <path
                            d="M145.209,129.33l-62.33,39.254c-2.187,1.377-3.511,3.783-3.503,6.368s1.345,4.983,3.54,6.348l74.335,46.219
                                                                    c1.213,0.754,2.586,1.131,3.96,1.131c1.417,0,2.833-0.401,4.071-1.201l16.556-10.7c3.479-2.249,4.476-6.891,2.228-10.37
                                                                    c-2.248-3.479-6.891-4.475-10.37-2.228l-12.562,8.119l-60.119-37.38l48.2-30.355l59.244,37.147l-6.907,4.464
                                                                    c-3.479,2.249-4.476,6.891-2.228,10.37c2.249,3.479,6.894,4.476,10.37,2.228l16.8-10.859c2.153-1.392,3.446-3.787,3.429-6.351
                                                                    c-0.018-2.563-1.344-4.94-3.516-6.302l-73.218-45.909C150.749,127.792,147.647,127.795,145.209,129.33z" />
                        <path d="M270.089,288.846c2.187-3.518,1.109-8.142-2.409-10.329l-74.337-46.221c-3.518-2.188-8.143-1.109-10.329,2.409
                                                                    c-2.187,3.518-1.109,8.142,2.409,10.329l74.337,46.221c1.232,0.767,2.601,1.132,3.953,1.132
                                                                    C266.219,292.387,268.669,291.131,270.089,288.846z" />
                        <path d="M53.527,192.864c-2.187,3.518-1.109,8.142,2.409,10.329l183.478,114.081c1.232,0.767,2.601,1.132,3.953,1.132
                                                                    c2.506,0,4.956-1.256,6.376-3.541c2.187-3.518,1.109-8.142-2.409-10.329L63.856,190.455
                                                                    C60.338,188.266,55.714,189.346,53.527,192.864z" />
                    </g>
                </svg>
                <a href="#" class="font-semibold inline-block">Cooking BLog</a>
            </div>
            <a href="#">See All</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <a href="#">
                    <div class="relative">
                        <img class="w-full"
                            src="https://images.pexels.com/photos/61180/pexels-photo-61180.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="Sunset in the mountains">
                        <div
                            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>
                        <a href="#!">
                            <div
                                class="text-xs absolute top-0 right-0 bg-primary-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                Cooking
                            </div>
                        </a>
                    </div>
                </a>
                <div class="px-6 py-4 mb-auto">
                    <a href="#"
                        class="font-medium text-lg inline-block hover:text-primary-600 transition duration-500 ease-in-out inline-block mb-2">Simplest
                        Salad Recipe ever</a>
                    <p class="text-gray-500 text-sm">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                    <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
                                                                      c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
                                                                      c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z" />
                                </g>
                            </g>
                        </svg>
                        <span class="ml-1">6 mins ago</span></span>

                    <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                        <span class="ml-1">39 Comments</span></span>
                </div>
            </div>

            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <a href="#">
                    <div class="relative">
                        <img class="w-full"
                            src="https://images.pexels.com/photos/1600727/pexels-photo-1600727.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="Sunset in the mountains">
                        <div
                            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>
                        <a href="#!">
                            <div
                                class="text-xs absolute top-0 right-0 bg-primary-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                Cooking
                            </div>
                        </a>
                    </div>
                </a>
                <div class="px-6 py-4 mb-auto">
                    <a href="#"
                        class="font-medium text-lg inline-block hover:text-primary-600 transition duration-500 ease-in-out inline-block mb-2">Best
                        FastFood Ideas (Yummy)</a>
                    <p class="text-gray-500 text-sm">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                    <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
                                                                      c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
                                                                      c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z" />
                                </g>
                            </g>
                        </svg>
                        <span class="ml-1"> 10 days ago</span></span>

                    <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                        <span class="ml-1">0 Comments</span></span>
                </div>
            </div>

            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <a href="#">
                    <div class="relative">
                        <img class="w-full"
                            src="https://images.pexels.com/photos/6086/food-salad-healthy-vegetables.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="Sunset in the mountains">
                        <div
                            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>
                        <a href="#!">
                            <div
                                class="text-xs absolute top-0 right-0 bg-primary-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                Cooking
                            </div>
                        </a>
                    </div>
                </a>
                <div class="px-6 py-4 mb-auto">
                    <a href="#"
                        class="font-medium text-lg inline-block hover:text-primary-600 transition duration-500 ease-in-out inline-block mb-2">Why
                        to eat salad?</a>
                    <p class="text-gray-500 text-sm">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                    <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
                                                                      c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
                                                                      c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z" />
                                </g>
                            </g>
                        </svg>
                        <span class="ml-1">16 hours ago</span></span>

                    <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                            </path>
                        </svg>
                        <span class="ml-1">9 Comments</span></span>
                </div>
            </div>

        </div>
    </div>
    <div class="sm:flex items-center max-w-screen-xl p-10 sm:p-16 md:p-24">
        <div class="sm:w-2/3 sm:mr-10">
            <div class="text">
                <span class="text-gray-500 border-b-2 border-primary-600 uppercase">about us</span>
                <h2 class="font-bold text-3xl my-4 sm:text-4xl">About <span class="text-primary-600 font-bold">Our
                        Company</span></h2>
                <p class="text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, commodi
                    doloremque, fugiat illum magni minus nisi nulla numquam obcaecati placeat quia, repellat tempore
                    voluptatum.</p>
            </div>
        </div>
        <div class="sm:w-1/3 sm:mx-auto">
            <div class="image object-center text-center">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" class="w-full" viewBox="0 0 512 512"
                    enable-background="new 0 0 512 512" xml:space="preserve">
                    <image id="image0" class="" x="0" y="0" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAgAAAAIACAYAAAD0eNT6AAAABGdBTUEAALGPC/xhBQAAACBjSFJN
                                                    AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAACA
                                                    AElEQVR42uy9d5wdV333//6emblt+6qsumzZsi33IrkCxqYZgwFTQodfAiQQegIPJKQ8kAAhPAnl
                                                    IckTSugdDBgwuOFuWc3Gsi3LsnrbvauVtPW2mTnn98fclVbS9r1td8/br+td3d2998zcmfP9nO/5
                                                    FrBYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8Vi
                                                    sVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKx
                                                    WCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFY
                                                    LBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgs
                                                    FotlGKTaA7BYLGNjgC0HzbJ+TYvvk3Q9zNCfC0h9A13nNcn2ao/VYrFMD6wAsFgqxC5jEvvbOc+B
                                                    pSI0Ow5JMcwH2oB5wEKBNgMtIhgBMQYRAWMQOPYYCQNoBA2gNX3KoR3NAWCPQDowHNWaXGBI92XY
                                                    euNK2V/t82KxWKqDFQAWS5nYlDZvCeF6BSsR4hiaBBoNzInF8AaX8MYAJvpqDCcu7WGYJ0ZBTvxW
                                                    5PgDiZ4LNeiAXqAL6DVC1hgKYcgzjuKRNQvkm9U+dxaLpfxYAWCxTJF1afMmBRcpWIBwqTacI+AU
                                                    ja4oRWTg4QRDX01OEAZFtD42LgNkgEcRthpNOjA8fNVC+V11R22xWEqJFQAWywR5tNOcqYV3YHiF
                                                    QNIYWh2HJlFFI6qPG/tpSdFToBxQAkEIxtAF9BnYLZpfrF4g/7faw7RYLFPDCgCLZQw2dpq3YXg5
                                                    0CZwcSxBow4jV3qtrOjLjajiloICVfzeL3AA2KJhnwjfXD1fHqz2OC0Wy/ixAsBiOYmH0uYqD65y
                                                    hOcDVwANSpFEQIcz39iPF1UUA2EIGPoN9AH3G83GvOGR5yyygsBiqWWsALBYimzsMJ9EeCWwwIvR
                                                    ZvTxfXFr9EdnMJ5AKXBcyOfpxLDfGP5nzQL5j2qPz2KxnIoVAJZZy8P7zEu8GC8XYTWGK5WKjJgx
                                                    keG3TB5RUfxA8Vz6ItzlG9Ze0Sb/ZCcdi6U2sPeiZdaxLm0+5MDbgWXKoVWsa7+siERegcAnBNII
                                                    9xQM/3l1mzxc7bFZLLMZKwAss4J1B82bHMUbUFwV85gbhqBNFLFvqQzHtgmcyMOiQzYbeHi1ufPD
                                                    suDFuWqPz2KZbVgBYJmx/GSbWbyiifca+BOBpcohhnXv1wyOEwUQCvSHhgcx3Hr5Qvmvao/LYpkt
                                                    WAFgmZGsT5uvKOEmx2GZKa70rYu/NhmyRaBFeFbD/6yZL/9a7XFZLDMdKwAsM4b1B83NyuENIrzS
                                                    cYhrbVf70wmR48GDQUA/cIcP/3VVm9xV7bFZLDMRKwAs05617WaVp/h3gasdl8bQBvRNe0TA9cAv
                                                    0G3gwbzDXzxnrhys9rgslpmEFQCWac36tLnNEZ7vuCTDwBr+mYYIuC74ATkM99XPf+Y158g5A9Ue
                                                    l8UyE7ACwDLtWNtpronBe43mJselXtv9/RnPYJGhMMQ38PPQ8NUrF8g91R6XxTKdsQLAMq1Y324+
                                                    oxze5TjMtbn7s4/BgEHf57AYvrt6gXy42mOyWKYrVgBYpgUbOsw/i+L/i8VYHPg2uG+2I6q4NVAg
                                                    bYTvr5kvf13tMVks0w0rACw1zcZO81qBfzSGc5WD0mG1R2SpJVTUgtkY2AZ8YU2b/He1x2SxTBes
                                                    ALDULBvS5qcCNzsujnX3W0ZEwFHRt0HI70LFB6+cJ89We1gWS61jBYCl5tiQNh8R+Ihyoo581vBb
                                                    xkUxUFCH9GP44eoF8ufVHpLFUstYAWCpKTakzT0KniMOrnX3WybDkNTBJ4KQT165UH5e7TFZLLWI
                                                    FQCWmmB9u3mPcvis59IU2Hx+SwlwnOhRyPOLJsNfrFwoh6o9JoullrACwFJ1NqbN/wBvUQrPRvdb
                                                    SopEpYW15oCBf1vTJl+o9pAsllrBCgBLVdnQaf7gKq6zxXws5UQ5gIFQc9uaNnlZtcdjsdQCVgBY
                                                    qsKGDvOnAp91XNpCu9dvqQBDqgkeMYZ/XLNAvlLtMVks1cQKAEvF2dRhPojwaeVQZ42/pdIoB7Sm
                                                    YAL+Y80i+atqj8diqRZWAFgqysYO8zWEdxYLuFgsVUEkEgKBz5NrFsgF1R6PxVINrACwVIwNB813
                                                    lMMbEVy732+pBTwP/IBdxvAva9rkq9Uej8VSSawAsFSEDWnzM8/jNbZlr6XWcBwIQ/LA11e3yfuq
                                                    PR6LpVJYAWApOxvS5g8xj+t8v9ojsViGZ7DLYBhwW+M8Xr1SJF/tMVks5UZVewCWmc2GtPlpPGaN
                                                    v6W2MQaCABBu7EnzdLXHY7FUAisALGVjQ9rckUjw2kKh2iOxWMaBAaPB8Th9Y9r0b+w0H6/2kCyW
                                                    cmK3ACxlYUPa3OK63BwG1R6JxTJxlAJjyGnD19a0yQeqPR6LpRxYD4Cl5Kw/aD6mhJttMx/LdEVr
                                                    QEgo4f3r0+ZH1R6PxVIOrAfAUlI2dJj3ifA5pUjZPH/LdOdYZ8EC61YvkCurPR6LpZRYAWApKZs6
                                                    zVFRNNvVv2Um4cXAz/OH1QvkBdUei8VSKuwWgKVkbEyb7cqxxt8y8/ALEEtw/ca02VTtsVgspcJ6
                                                    ACwlYUOHucN1eZGt7W+ZyRSLBm0Oe3nuFSult9rjsVimgvUAWKbMxrT5ilK8yO75W2Y6YQhejAud
                                                    Ru6p9lgslqliPQCWKbGxw7xROfzAGFvi1zJ7cD0IAvb0Heb5162S3dUej8UyGawHwDJp1h8x54nw
                                                    zyLW+FtmF4EPjsPyhlZuv7/DXF7t8Vgsk8EKAMukkQI/dD1W2H1/y2wkDMDzOKtO+E61x2KxTAYr
                                                    ACyTYkPafMNxuMDW+LfMZnwflMPZGzttdoBl+mEFgGXCbEibtwi81br9LZYoMDAW49INaXNHtcdi
                                                    sUwEGwRomRBrD5hrXJc7HUXSRv1bLMeJxaFQYMPq+WJjAizTAusBsEwIz+XL1vhbLKdSyIPrsmZj
                                                    2txe7bFYLOPBCgDLuNmYNj+Ox7nUGn+LZXiCAJTDizekzZeqPRaLZSysALCMi41p8xmB1xQK1R6J
                                                    xVLDHK+H8a4NafPhag/HYhkNGwNgGZNdxjQfOcQOEVrt6t9iGRulQGsGVrdJfbXHYrGMhPUAWMbk
                                                    yCE2K8caf4tlvGgNjkvdhrTZ8ZM7TVO1x2OxDIcVAJZR2dBhfuU4LA2Dao/EYplehAE4ihWnX8BP
                                                    qz0Wi2U4rACwjMjGtPm8CDfZSn8Wy+TQBlyPF23sMF+t9lgslpOxMQCWYVl30Lw4Huf2MLR1/i2W
                                                    qSDFWVYb/m5Nm3y62uOxWAaxHgDLKdxjTLPr8mXb4c9imTrGRCJAwfsfbjfPq/Z4LJZBrACwnEJD
                                                    J3e7Hmdb17/FUhq0BuXSFlP8qNpjsVgGsQLAcgIbOsy3leJS3+b7Wywlpdg9cOGGTvNItcdisYAV
                                                    AJYhPJI2bxXhjdbtb7GUB98HBVdsSJtvVXssFosVABYA1naYm1zhy0rhWQFgsZQXgbduSJuPVHsc
                                                    ltmNFQAWAFzh3x1Fsy32Y7GUF2PAcVAivK/aY7HMbqwAsLAxbW6PxTjTBv1ZLJUhDMHzWL4xbX5f
                                                    7bFYZi9WAMxyNnaa7yvFi23Qn8VSWQIfEK5b32E+Vu2xWGYnVgDMYjamzb8q4U12z99iqTzGgFLE
                                                    lGAFgKUqWAEwS9mQNv8Si/NRW+zHYqkeOgTXo2VD2vy22mOxzD6sAJiFPNJhPiDCh/2CNf4WS7UJ
                                                    AxB46YZO8zfVHotldmF7AcwyHjxgbkq6fE8UjTbi32KpDZQDOiS9uk0WVHssltmD9QDMIh7uMO9N
                                                    uHxLnNo1/kqB64DrDvNwwHFAWdlqmWHoEByHto2d5r5qj8Uye7BT6Szh4Xbz1pjDlx1Fc62l+4lE
                                                    ht0YeHbvIfYfSJPv68fogMFL1E0kcONxGhrrWb54Pm2tKSBKpzIa7E6GZboz2DUQ4c8vmydfq/Z4
                                                    LDMfKwBmAes7zAcd4d9E4dTSyl+IVvZd3VmeeHonH/rOH+BwL7jq1Ctz0MIbA4GGtmY+eN0FXHf5
                                                    uSxaMA/PjcSAxTKdUQq0pjsIuenKRfJgtcdjmdlYATDDWXfQ/K3j8gklpGrJ+CsFoYZNm7fxrV89
                                                    yCPb0rgpl6SjRr0oTfGR1wY/60Ndgrdeeho3veRqVixtG5xALZZpS/Eavmd1m1xf7bFYZjZWAMxg
                                                    1neYjzmKfxGpLaPoOnCkJ8s3fnoX37/1UZiXosFVk7oYfWPIFkI4muftr7yU1954DcsWtRAENsPB
                                                    Mn2JxSCX5V2XL5KvV3sslpmLFQAzlPVp86+uqr08f6Vg9/4u/vLffkTH0QEaE25JXtcAfbkAYg7/
                                                    +vYX89w15xGPOTUlfCyW8VL0kO3oLXDtC5bKgWqPxzIzcao9AEvp2dBp/tkRPg61Zfw9D57Z1cG7
                                                    Pv9DuvpzNMZLY/whUrJxV2EM/P7Bpwn6ezj/3DNIxFRNnQOLZTwYA65La8xBf/Xzn7yz2uOxzEys
                                                    B2CGsanTfD2R5B25bG0Zf8eBzc/s4+2f/gF4ika3fBmoBujLFKCxnl994s0sX9xKEFT7DFgsE6OY
                                                    FZDXCS5a0yjPVHs8lpmHrQMwg9jQae4E3pHN1JbxVwr2tR/lff/3lrIbf4hUbWMqBgMZ/umrv2R/
                                                    RzeO9XVZphnGgAhxyfLFao/FMjOxHoAZwsa02ea6rAzD2jL+IjCQLfB3//4D7t+RLqnbfzz05gPm
                                                    z2viln96F6m4jQmwTC9EAIP2HK67cK7cn3jZZ/9exdzrlUgDYgKjTc4xiXf0/vIDO6o9Vsv0wwqA
                                                    ac76tLlKCbc6DnPDGnRzx2LwjR/fw5d++QgNdbExLzgD9GtDnZKSuad6Bwq89dpzec9bX0Y85taU
                                                    QLJYxsJ1obs39+zzX/uZHY2nN99wyrRtjNEm/En/Lf/rDaf87TX/uDoxv/79COcBZ4nQZYxZ379p
                                                    w4fY89OOah+bpbrYLYBpjhJ+56jaNP5Kwf6OXr50yyOkUt64jH+fhquWNlDnCKVarDfWxfju3U9x
                                                    x/2P4nnVPisWy6mIRPeL40RflTr+fBDCf377NytZ3HgDxhRLXw55gCjlvL7+5s/fOvQ1Uzd/7kvJ
                                                    BQ2/dVzvbUo5lymlGkTU6Y4be339pWt+zelvbKv2cVuqixUA05QNafMPmzpNRimaarUCXqjhjrsf
                                                    AUdwZWxnU582XNvi8v/euop5rtBfQnd9sjHG//7OH3hq20EbD2CpKVwXuvuzbNu+ny1P72LbjgMc
                                                    6OwGiQTArbc/wk8e3EajN9I9FOX6OrH4TalXfP4fG9727TkNN39+q+fGPiAi840OimIh+j0TBjhe
                                                    fHXy4ks+U+1jt1SXym7IWkrC+nbzVRHeJkJc16jxF4G+vgxffHAr8fHm+geGi1Y0ccHpjaxaXMeT
                                                    z/SWrPOPJ0LWFX5++yP8rz+/GUeJ3QqwVBWRyCZvenIX//H9O3j0YC/kfEjFWNac5DVXncMN11/B
                                                    jx54AlU/tuvKhD6OJ+9ioPPPxHWXmVEmB6NDHFHPAYif99EzwobYnOCRT6+v9jmxVBa7FppmbOww
                                                    t8YTvFFr3Fo2YI4DT+84wK9+vZ66uti4/iaf1XzoRUs4f1kjS+pdvnF3O/Fk6ZxUcVfx2OYDXLtm
                                                    JW1zG60AsFQVx4Wf3vYw/+vLv6HdD6j3hETCxVNwNB/w8ON76T50iLU70zS445uqRaRRRJqKWwOj
                                                    /SJgOryzX/gid37jx73G5Nvjq178Rnf+Vev8PffZ2IBZgt0CmEZsTJv73Bg3FQq1Fek/HErB+id2
                                                    QN0ENt1zhmvPaoZAc9GKFv7sqlZ6/RKH7TfHuf3udQQ16jmxzA6UgvsfeYp/+eH9pJpiNLoKVdwm
                                                    UyKklNDYGOc3T+2j0ZvAOm28pT+NNgI4rvsqEZaJME+UusSZ03Bf7Hl/t6ra58dSGawAmCZsTJtb
                                                    4gmeF/jVHsn46eo8As74LrHAAM0ejqPAQCrp8r6Xng6HAnQJxU7Cc/juH/dyoP3QsUAri6WSiECh
                                                    EPLXP74fiTujxseUrWaGMSFw3tDYAIxGlGqMz236arXPkaUy2ClwGrAxbe6PJ7g5n6v2SCaAgJ/J
                                                    DGlyPjoaIDakDXCouWRlK195xxn094WEJRIBMSXQn+WutU/aYEBLVXAUPPTYNoJ9XTSUuSjWiIgM
                                                    H5hjNMqLP6fh5f96YxVPkaVCWAFQ42zoNPc6Ls+dVsZ/kAnE77kAPT5m6HI/CHnvS07nC69eysBA
                                                    GHkJSkAi6fGV3z1a89solpmJCOzatReSNZqTqjWhYkG1h2EpP1YA1DAb0ubeeIxrazHHf0wMKNeN
                                                    vhmGgoHewNCb0/T2BPTvL8D8BIWhS30DCHzoFSv50muWkzns01sCFRBTAr1ZNm87ON4dCoulZOQD
                                                    ONLVPe7tsYojAo6kqz0MS/mxaYA1yqZO84Tjcn4hX+2RTJ7mua0Q7sd40R5/1pjiNxqaYrzujCRX
                                                    n1bPqjNbuWZlC/VJ79QgJhP97wM3nckFyxr50u/38Ksne6Deod6ZQrXAuMPeXXu58KxFlKzikMUy
                                                    BiKQzRY4MlAoWYpriUeICf0wGer7M9UeiqXsWAFQY9y9zyxuivEr1+V8fxoF/J2MMbBi+QLIP0qf
                                                    VuAI8ZTD6y9s5i2r53H24noa6uK0NMYiI69HiV42QKC57sL5XLqimT9s7uQvf7mbjq4CuOB4Qt1E
                                                    J1NXcehwD35g62FbKosxhrBW95+UQgfB3Ydv/VhftYdiKT9WANQQD+wxl6Vi/MSNscIvVHs0U0Nr
                                                    uOL8M6DL8NOPreCs01q5cFlD5PYcNPbGQDCB5XeoaUp53HzNEm5cvYiHnz7EPU8c4p8e66b3QBaS
                                                    CuJCvSvHUqpGxFWs25Hm5kyOhrqEjQewVIx4zKMx7pQkl7e4SzZueg2gocEZ5u+UgwnDrf2/+OhL
                                                    qn2OLJXBCoAa4ZEOc4Ur/EQ5LJvuxh8iG19Xl2LTf7+YS5eq46v8qZYuLG4jxF247qI2nnvuXD76
                                                    qpC9XRke3dvH2u19fHtrL24ujx5lgq13FI9sOYifLyB1Caz9t1QCYyCVUJxx5jJ4bC9MJMd/CL2a
                                                    41tXRsAxNKqx/+ZFzSHnzwn5wrY4MdeQEEAUaK1NGG71e3reXe1zZKkcVgDUAA+0m3M9xXcdl2XT
                                                    Kc9/VAzE4y5nLZsLQRcld7QbINS4SmhIeZy3vInzzmyl0dnHfz3Qjls/+sSqBMj7HOnpZ+6cRqwC
                                                    sJQbpaIYABG4ZvW58I0/QGp8VTIHMUCfL5zdEvCZ8/IoDHv7Hb67z2Nj2oWYAQV1EpV5NcCAAR0I
                                                    xDUfvzTD8mYfpQz/titGoaBMnaMfDYLg9vytH/9Etc+RpbJYAVBl1h0257oBdyuHBTPG+A9iINSG
                                                    iTsqJ/o+5pgg8POFE94qa8A3UKeGqXvdEOPWezbxsZWLCG0goKWMuC60d/awbcc++rJ5Fs1tZsmq
                                                    hRw+3Is3zvgVA/QFwmcuzPInZ2VxxGCAi4AbzxC2HHVZuy/OPV0u6/oU+AJiWN6gedOigNecnaE1
                                                    btBaeO/5Gd5/YRZt9IYVb/3MFdU+P5bqYAVAFXmkw1zhBHxPuSyYlql+Y1CNRXUYhiBRK+H+vIa4
                                                    YkVM2DmgwYFGZ8hk6yp27z5ItgCuqv3yypbpiePAjt1pPvR/b2HfnsPgKXAUS1tTOOMslAVRq+w3
                                                    LvS5aUUOAQJ9/G8FuKA14NzWgFfnhLyvODDg0BwzNCVDWhMaVzgmdEMDGEGHNgZ2NmMFQJVYe8hc
                                                    6hp+7Losn3Er/yGYSs4v2kRGH+jPav7phQt52wuWM6chxsNbD/OxHz/LY70+jcUVV0oJD3UOsGPP
                                                    QVatWFSyaoMWyyBKoPNwH6/5+LcgKTS2JoFIHB/N+uPOBAwBNLzl3Az1njkldtbAseu3NWGQRMji
                                                    xvCYqNWGYUtq20t+dlOjlShmNo8cMpfFDL9UamYb/0qjtaEnF4KvedfqOfzdG1axbG6SupjiRZe0
                                                    8aW3nA0Dx2dOVwT686QPpjF2HWQpA8qB+9Y9CRKe0NRHmFgZgAENN7QFnNsSjJk4Y4rGPtQjG36L
                                                    BawAqDiPHDIrPcMPHJelUw2ItwxBwA8MB3p9KMAHXrwMKM5+xfiAq1e2QmMMf6ivP+5w+6M7mIlb
                                                    MJbqIwJ9R45OOtr/GKHwooW+9ddbSooVABVkbdpc4GnudxzOmi0r/0puAfihZle3D0sTzGtOnFLh
                                                    z9e6WHfg+JgaYg6/v/MpMrncePsWWSwTQhf8ccXA+kDGRF9P+HsAx3DZ3IDQuqosJcQKgArx4H5z
                                                    pQe/UA4Lglmy2ozW2ZWbsLQ27O4PWFPv4pzsX3UUjzx7FPp8vCE/EoA6lyef3V+zpdkt05tYfd2Y
                                                    fvheDVlguWvIFv89SN5AW1LjuDZVxVJa7JRXAe4/YJbGPb7repwRziK3f5TzXCkBIGhteGwgwFWC
                                                    56ootN9VkHB5aMthPvaDbdA4jCs24fLUk8/algCWkqM1nH/+SujJjxhw1xvCq+aH3PrcPn74oh5u
                                                    u7aXdyz26Q2ie8c3sCZpSHmm5EF7ImIjBGYxNgugAqRc7nYczpwtbv9BcoWQnr4+mhukIuHG2hjI
                                                    a9b2Zfjr725hzRnN9OdDdrX38x+PHQE5KQ1wEFfx6I52DncP0NpYZ9MBLSVDa7hg5TLefNOlfP+B
                                                    LTQmTpxyswZIufzTlUepc6LbZF4i5IOX9vONzmZ6s9Earc2DpGtKfh8ZY2bZrGQZihUAZWZjp1nr
                                                    eaycCeV9J4JS0Hm4h1jnPpafO68ySfZFAZBw4BuPH+UbGw9HPn5HSHiK2AjOiHpH8cjOLvp7+pnT
                                                    ZAWApXQYA64r/NlrX8CdW/bTme6msf549T9fw+vn5WnyDPkwukC1gToX7rimn21HXXYOKObFDV6p
                                                    dbSAEWbJhqRlOOwWQBnZ1Gme8DyunG3GHwCB7/7uEQh9KhVdZwyQ17gIjZ7QmHJoTDo0xkY2/lBM
                                                    xzIhd294GmeKwdoWy8loDa3NKX7wD2/nnTdcQm9X9ng3QIFeX04x7NrAGS0BLzsjywcuGuANZ5e+
                                                    Oa8AYqwAmM1YAVAmNqbNA8rh/Nlo/JWCHXs6+eX9W1Gqgha12F1wMnpDxV1+s2l75cZqmVWEIbQ2
                                                    pfjzN97Af3z81Qw4DtpEq/rf9SdRw2zFaxNV+/NDOaHqXykRzCyKSrKcjBUAZWBj2twXi/Oc2Zpb
                                                    LgL/84v7oDtb+ep6weQSD1OOYveuNLsPdqPsXWEpA5E+1bz3e/eg/AAlQlyAHp/DeVWVNFSDjX2d
                                                    zdiprsRs7DRrXZfnFfLVHkl1cBxYt3kHv3voGWj2eHhXX8Xe2xR7nU8GBeAotu/YZ+sBWMqCUrDh
                                                    j9vg4FHqizmnCsBo7t9fj1SlMK+NeJnNWAFQQjZ0ml/FY1w5W/L8T0YE+gYK/PKO9dAQA0/x2+0V
                                                    EgACmULIlMKkPMVTz+wmX5jcNoLFMhoikMlkotTUobjwn8849BUUnjI4UrnqGcau/2c1VgCUiI1p
                                                    c18izivys3TlD+B5cPv9j/L7Tbto9BxSjnD3ll56+isTCNjV74M7+feJew7/s3kfmWyukqfNMkvQ
                                                    Gi48byVkQgpDCgM1CmzNKC6+u5Ffb0/x5KEY/b4quwjQxoDo/mqfF0v1sAKgBKzvMLe6Ls/Lz2K7
                                                    oRTsa+/l079aS6yY5uQKEIT8ZuPBiXU+mQwiHO73p3RFx0SgvQc9m6o1WSqG1rB4fgMff9d15PIh
                                                    vVmf3nxArx/SqMDJK97/WJJX3FdHR59Tds2stQGkt9rnxVI9bB2AKbIubb7sOdwUzGKbIUSdx351
                                                    x1rI5EkkveM/rFP8/W/3csVZrZy5qOF4Q/IJvbqJfJWiRv21jt4COJOfNQNjoCmB2ChAS5kIQ3j1
                                                    Dc/hvJXLuPPhJ0CEoz0D/PrxyGuGZ+gtCIeyirPEUM42lRJpkp5qnxNL9bACYApsTJvPAn+hNbO6
                                                    sbbrwkObtvHVX22godjvfJBGJezqC3j9Fx7j93+zhnktiSjuaMzzFRl+42cxfg6Vah5zHF19hSl5
                                                    ALKFkDc/92ySyUS1T6llhmJMpFHPP2sZq85chig40pPh12/+V1jSEP2SQEdOyroFULy7jNLSXe1z
                                                    YqkedqkzSdYfMs8T4cNKEZvNcbQicLgny/d+8xA0xoadtBo94dH+kPl/v547Nx/CDw04KtoWOMHP
                                                    KQyGPxk/h+47gs70oBL14xpLoM0psQahMWTH4XXo9UPoLfC2V19HIubY2GhL2Sh2p46+19A2J8Xp
                                                    Fy+lNyg+WaEgQEG0cbT1AMxirACYBOs7zauV5rcixPUsj6IVgfvWP8nDj+yFgmZAD9+wpNEVBM2L
                                                    P7+Z2F8/zA/u3cMTu7o50pcHE2ICH5MfQA8cJTzaju49hNEBqmEuKG9cY8kV9AkzZ2gMzXGPpfNb
                                                    6E1n6O3ORfuufkhvqOkNNL2FkN4jWS5Y0MwP/887aJtTz2z/TC2VJQzhAy+7HHLH04d0uQWogAZj
                                                    Ao5W+/gt1cNuAUyQLUfN8ozP/3Mc6m2sWLSJ+MKrL+LClcu4Z91T3L7uaZ491A8O1HsOasiKvEEJ
                                                    tLgMhAFv/t4OcBzu/bMlXHtWCh3qYk6SgFJIqila+YtiXPsrIgzkghMEwEAu4OZLV/Dut99EZiDD
                                                    9n2dPLFtL+kDadLdA6Q8h+amOi6+6Gyec+k5NNQnmK0pnJbqYQyctmwBtKQo5H3QwuJU6Tv/nYwC
                                                    bbBbALMZKwAmSMbn145injX+x0klYpy+rI2VK9q48brV7N3Xzi33P8Ed67dHy5uki7iKehVVO6tT
                                                    gkkKfQMhfj4E10OUASeGOC7ixUE5xRol458Gs0UBEBhDJh+A63Hzjc+hPumRSjQxb24T11y2EmOg
                                                    u79APOaRjEcdVsIQu/K3VAVjoG3eHF6xfA63Ph1lzMxPakwZAwBBMDrUK9/5uV9X+/gt1cMKgAmw
                                                    qdPc7bhcMNva+o6FMdGjUIAFcxtZOK+Ryy85m7/pz/HHp3ez5clneWRnmid2dQEG4g6uE60/+owH
                                                    DXNRYXH1H73ipAqU5TIFGCiQaUry2tVn8KevfzGL5jcxNENjULg1JKNURftZWqqNMVCXVJxzzunc
                                                    +sd90KxwvTKrUR2imxZ7P91t/vJ1p8l/VvscWKqDFQDjZGOn+T5wvXURj87QVXRjXYLrrjiHay49
                                                    h9f19tPf189jW/dw3+M72bo3TWemQGefP2TDcwpOT62JN7XwF689m5defT5z5zRTl3AZyVNjg/ws
                                                    tUQYwpUXnwVf/wOXzneJu2W+QMM84eJLvMUJ3g1YATBLsQVPx8HGdvOv8RQfzeeZ1el+k0WK/5No
                                                    ex+lIqGQ7s7RmGnnyuZDTP1SNDydWkNBBB0e90pYLNMBEcjlfa756H/zytQA//uafhrcMsUBmBAT
                                                    b6DvuR8m1pgkk+Vfr2iTj1X7HFgqj80CGIP1HeaD4vC+gjX+k8YQGWOtIQiirYIggDkNCRbMb6UU
                                                    OlTj4Pshvh+9jzX+lumG4zi87JxFzHcCUmMY/zDUaD2JnhXGgPbJnvsqTCyJnwcX3r623Ty/2sdv
                                                    qTxWAIzCug5zuhI+phRJa1BKjzGTKAw4/CsRihq2aJpIVG5Aqeh7kYq0JbBYJoQx4LqK85bOoznp
                                                    EHdGvzEcR9HbmyGTySMiyJgXdWT40TlyF7yBwpJzo6c0OC5truIj1T4HlspjYwBGwVHc6zgsDO2+
                                                    f9nQk1n9H/uToioTg4hCKcEdYuRDDQOZPJlsnjDUxGMpFFHwX2Nj9Ds28t9SKyiBSy84E78xQA/c
                                                    BhIf9fcbGlIcPdrHwECOuroEsZiH4yhEBDO4YjEa0T7GjRPMO5/cOS8iaFqADJnTggA8l5et7zSv
                                                    vny+3FLt82CpHFYAjMDGtFnvuSzzbZR4yTm2WBGYSMFTbaTo2o9S9/KBojfrMpBzOJxvYJvv0Dvg
                                                    s+fgk+QzaQq+pje3lN6BZhzTQnNScKI/ZdliuOJKmD8/em3r4bFUG63hrBULcVsd9L2/BG90AeA4
                                                    ipaWBnp6+unrzaAchee5xYeD6zqYZAvBvFX4Sy4jaJgHjosMI3q1AWX4B8AKgFmEdYYOw4YO80vH
                                                    4ZV2dThxBo27CDhO9NXAscX6YAxAvhB9Vbks1zZvwR3J5SngB4ov/HYlz3Qm6c0rujIOR7PRCj+u
                                                    IKZAjOZA7yb2dN8LkmdF81Wc2XIldV7dsat8qJEPQsgV4JrL4frrI4+Are1gqToCbncH9fd/FuM1
                                                    jPvPMtk82UyeIAiiFzEaFYsTe/nfYlrnIyFjxjDFE5DP8v3VC+Qt1T4NlspgPQAnsbHDfBrhlXZF
                                                    ODEGI/xzecjn4PCRgB/94ha6+7qpTy1nQcsL0YFDGEbGNwiir/v7knzvnUmWt/WDHkaPKs3tjy7h
                                                    V5sbmZuI3KQtClqL7QEE8HWeRzt/Qrqwj7q6GFe1vZPG+ILBPoInjHGQmIKYB4/+EZ56Gl7zKjjr
                                                    bOsJsExPUsk4yUSMMNQUCgGBX4C6uZEXYRzGH6CQBxFevSFt/mJNm/x3tY/JUn6sABjChrR5C/AR
                                                    UcWqtJYxUQocF3p7YPdu2LwZdu+D7R0dPNazB/BZkVpAmD3e3/xYWiCgQzjcH2N52zAvLoYjPQlu
                                                    2TCfeYmof9AJPwYCE7Cl67ekc3uJqwRr5r+O5sQC9HgaDgKeF4mR7/8EXvh8uO666N9WCFimGyKC
                                                    6zp4ngvaJWxdSm9d07Au/+EwBhyHJCGfAKwAmAVYAVBkfdpcpeA/RRGzrv+xGTTmXV1wx53w5NPR
                                                    v2Nu1B64Lt6N6/q4ONR5MTx3eKMad+BwbxzEcMqOlKP50YPL2N/r0BAbbhDwZOev2JvZilIeV7S9
                                                    gZbE4gk3UlEKPIHf3g79/XDDDcWtCysCLNMQYwwYTZhomPAmbxiCF2Ppxk5z6+r58opqH4ulvNg0
                                                    wCJF499gjf/YKBXt3997L3zjm7B1GyTjkEpExl+AHr8Dl6iRjyPOiPOQK9AzMIx1V4aDh+r5waMt
                                                    1A/zYxE4kt3LvuyzKFGc13gNTfGJG/+hr9dQBw+tgwcfiI7RYpm2GI2JpSb1p4EPGF62vtN8qtqH
                                                    YSkvdpoDNnaYW2NxLrbGf2w8D9rb4X++CXfdEwXzxbwT99cN0JU/iIsDgIgz4uupQQEgJ1puHQq/
                                                    WLuUeufURYwAfphjy5HbUUCLN59lTVeWJKI1EYM774UnnrAiwDJ9EcC4iUkVLzMGlEI58JfVPg5L
                                                    eZn1U9yGTvM1UdxUyFd7JLXNYJDfY4/Ct74L6U5IFoPyhuOQ344SwQBKvBFfVwn0Z05a4juap/e1
                                                    csvmJlLD/KkItPc/yZFCJ6A4u/laXOWUpFCjCHgO/OyXMDBgiwZZpinGYMZIIxwNrUE5zNmYNpuq
                                                    fSiW8jGrBcCmLnM98GabDDk6g0Zw4wb43k/AL0Su/pEIdYEgzFJchyBqdAHQl3MICkUvgQAa/uee
                                                    JaSc4bcwAx2SHngaJYrFidNpSZ42adf/sGNSkRv0wQcqfKItM5JB8ey6kQctFhvj4Sk8dQRX+nBl
                                                    AEeyKMmjpIDCRwiQMUP7DcaNT2lqK6bFXrq+w3yy2ufQUh5mbRDg+rS5Cs1PHUVS2/zvERmsqnff
                                                    vfCr30Fr0xi/D+TDAZBIWxrMqB4AR+BoVpHJuzSmfBDDPY8v5vH2OE0j7P33ZPdxyO+gYHyWNl2O
                                                    q9ySCgCAeAzWboRzz4OlS23FQMvEEImyVrSBru4Beo70sG3PQZ7Y2cWPnjwKh3uh+yj4eRAHHA+U
                                                    B64i1raCd6z+NvPiR5nndTNfjtBMD64bEPOyxNx+4k4PKbrwdE+USoPCGAU4GBTgg5eImm8Va3EY
                                                    fbwvx7gwx0ppf3xju3li9UL5WbXPq6W0zFoBIMJXHZdW2w9+dIyBjevhjj+MbfyBqHCPzqKKaw9j
                                                    wBnFAyBAX17IFRwa63yyOY8frJ1P3ShXZsfA0xgT0Oi20pJYWnLjD8UsgAAeehje9EYrACzjY1Aw
                                                    D2QLbN66h3UbnmLrgS7W7+6GoAAxB88TYklBpVyE6N6IWv9oCqbACrJ0dCj2hXPQzCHgDIyChAdJ
                                                    F1JOQEr51EuBOjekviGkPpWlIdZHi3eIZjlEo95Lf0GxY/tBDnYcpi6Z4KzlC2ioS+J6Lq4aXx+O
                                                    YjxATDv8A2AFwAxjVgqAjWlzi8D51viPjufB5sfh57+BusT4/84PMyiGegBiIzorRaAnr8j7Lrgh
                                                    d/5xGdsOxZibHP73Qx2ybeBxPITFyZUoUWVL13M9eOIp6OiISgZbEWAZDceBTC7k/rV/5Bt3Psr2
                                                    bWmoj1b19QlBjVLbPyqJLUiYRzkhjjp1+8sE4PvQjctRXAzJqN7FocjTEAKhgQBIJCH36FHu278W
                                                    uh8AlYK+gDMuWcorLj6d51x1EacvmXusIdBoaA3xOBds7DTfXT1f3lrt82wpHbNOAGxIm39wPW62
                                                    DX5GRynYuxduux1S8fEHwwlQGOIBgDE8AAK9BUUYOKQ76/nZhnm0JEb53XwHxviE4jI/saKs50CI
                                                    djK2P3u8Z4DFcjKD98a2XR381w/v4t4n90HSpXFOcoKvZNBBf1Tferj3Kf5PTnlyGAKoc1t4zek3
                                                    ku5fwZajd1FoyrIrfZQv3NrFF373KG+6+hz+5MarWb5ozphlsAsFEMNrNqbNY6vb5N+rfc4tpWFW
                                                    BQE+vM88Twkf0KEt8jIag0Vwbv0N9A9MPB0uDLPHZkWDwZHRtwAGCoKI4nePLqKjz8GR0X73EA4O
                                                    MYnhOJPLc54InhPVOcjnbUaA5VQGXf4PbXiS13/2h9z77AEaGmI0upOYWo3GBJlR02Yn/JIG2urP
                                                    YfW815EXSCpDY8oj6Qo/uP8p3vIvP+SpZ/fjeWO/jjgkBf7WmNu88b27pdaZVQIgHuOrjsMc68od
                                                    m4cegj37wJuEjygYGgOAwVGxUX8/rmDrgXr+30Nzhq/4V8QAA/mDOKKIiYfrxCeV5zwRHAc2Pw39
                                                    fdjWWZZTEAV33vcoH/iHn5IwIY0xd5KXiWCCATAhokrrmDUGGhNtvHjxe6j3WghMgCdCY9JjIJPl
                                                    LX/7He5f9/SYIkCHoFzmbDr00gMbuszZlTrHlvIxawTAxrT5uXI4O7Cu/1FRKgpOXrsuquw3GcLw
                                                    eFGFYx6AUQx1Qwy+cf8CFtWN/rqFMEevfxiF4ImHoyaf5zwR6hKwa/fINQ8ssxPXhUfWb+FjX7+D
                                                    1PIGYlO6QKLVv0GQMe6XSb26gaRbz8Vzbybu1BWDDqHBUbhNHu//79vY2949prcvDMB1mSchPy7v
                                                    2bVUglkhADakzZ8LvMKu/MdGKXjgQejpnXwlPGOKLUmJ5rHRYgAo/magZdSVkwBBmOFIcBhB8FQM
                                                    VyXK7QAAool+505bGdByHM+DZ7Z18pefvJVkysWd6v6Q9jE6AAxKlcfDrg00xOdy8Zyb6At7jz2f
                                                    chSEAZ//2q8YyBbGFLqBD0px0ca0+X1ZBmqpGDN+Snukw1wnwudE4dp9/9EZDPz74+YoD34yGKJV
                                                    vwx5xpH4mIZ6zOlTIAizDIR9AMQkhlemifJkHAVdh6NGQTYOwOK68MSWNK//l58QW+TgTfmiEEyY
                                                    B3RRMJfPs6UNzEkt57KWG/DN8ci/xpjL/VsP8s2f3U04jnlSa/A8XrKxw3ytbIO1lJ0ZLwBcxWeV
                                                    orlSq//pbCCMgW3PgB9M7TjMUHNvzJgegPGS1xkcFAZwnVTFtuRFIJONSgNbZjdKQcehAh/6z1uB
                                                    ARKlcAsJmCALDMbMlHdrSxtY0nQ5bYllBOb4nmgy5fE/9z3Fzj3tOOOIQwwiR987NqTN/y7rgC1l
                                                    Y0YLgE2d5hvxOFdMpNLfYFTvcA+lQDlRYJjjRCsB143yxT0ves73oxtjugkBEchm4cF1UXOfyRJ5
                                                    APQJzzgy9cssqjDYX+wvoIk5DRU9PwNZ2xtgtiMSlcf9xg9/R1d3F41uiYL1jMaEOSIloHHdZNm3
                                                    tlzlclbLC9DiHBPsnkTv/6H//g3ZfDjmtW6iSoHiKP5x3UHzjjIP2VIGZmwdgPUHzbsMvKFQOD5p
                                                    H7ugT8qlNSaqiqV1VC5TD35viumCJsqDHVwFZjKQzUFmAHK544/Aj55fsQJecgOYaVRiWCl49lnI
                                                    ZqBuKtl1ptiP/KTzWwoK4QAKQWOIu/UVOzcikMtGD5sJMHtRDvz6zsf46UNbaGia5B7ZKQgmzB77
                                                    l8bgqonWD5g4xkB9bB7nNV7NUz33Eyum6jZ6Du27O3lg/ZO86DkXjXnvFkUAjsPn17abg1ctlN+V
                                                    ffCWkjFjBUCqnr8RSA1kIuOcLxrpQiF6+IVote770fOZTGTgs9lotZfNRv/O5aNHGHKsrvbg11O8
                                                    BEQr4ENH4KKLYMGC6VM9zg9gy5bJ7/2fyNAYACnGBEzdcuZ1BkEIjSZeYQ8AFF2ellmJUtCR7ufr
                                                    v30Yp2GyqX4joMMhqxON55RfAEA0Xy1pupz9mS0M+EdQxfoDTkOML9zyEJecdwZzm+vHLLWtNbgu
                                                    LQT8O2AFwDRiWgiAf/+JSf7md6xy4ywSYZ7AHOUwzxHqlcJTEEdIIjQYQ31jA2d+4Yss6OuLCrgM
                                                    NsAYVLMnf0VOMugc/95V0DDBFbEfwF13w5vfVO0zNz6UgkNp2LGbce39jYbBFEOZhoQBGoOUwHee
                                                    D/oRFCEBCbepIhkAgzgqyoyo6JtaagbHga/9eB37e3ppTJRq9R8RRf8PovGcuopcZwbwlMuqlhew
                                                    tvMnDEYe1DmKjs4efn//Y7z91c9Fj6NkehClB56zKW0eu6xNLin/6C2loKYEwE3vM59wXa43hhYR
                                                    WopPqwfW4jQ14wp4RI8YQvxY/I054Qv9/ZEqHdy3H6RS+7eeC09siSLqTzuNMctsVhsRSHdEHo/J
                                                    5v4PxZwye5VmNotKDINGk3AaKmqMRWwQ4GxFKdh7IMstf1hPw/xyZJ4MmSCMxlPlr3A5iDbQlFjM
                                                    wvhSDuX34xS9AJJ0ufXhp3nTK557zLM5FkEAsTgXb+w0v149X26q2EFYJk1NBQH++ivyaeAS1+MS
                                                    pTit+FimhMVKaBOhFaEBiGMiz5kOh+zZFx8Q3bQnu+grSTIBf/jD9Cgh67pw2x1QioWNwZwYAyAn
                                                    BwVODhEohFEenitxXFXaVdhYKIm2iSyzD23grns3QQMl2co6EXNSkIzGVbGKOpo8FWNZ4+VkzfEC
                                                    XnVKsb39CE9t24+agFewkId4jJdv7DR3V/AQLJOkpgQAgB/wtaEBeCc/posL1nUil/qWLVN3q5cT
                                                    EUinobunRIVujDnF4JsSfGgG8HUODNQ5KSimA1b6XFlmF0pBV9cAX7p/C7F4ORymAiUu/TtRtIG5
                                                    qTNJOA3H7lUVNSdk85PbCCbowcznwVFcv77D2HiAGqfmBMBvviIfM5ptJcgcqzoxL+qmV8teAKVg
                                                    185SipSTVZpEMQBTfNVAh2ijMRiSqh6p8AViqG0hZykPjoL1j+2DnkOlyfkfBlGlL/074TEILE+d
                                                    gz+kLoAbc/j6I8+SzxcmPH+FIcTj3LCh3fykukdmGY2aNLO3fEHO1roEfuMqo1TkNl63rtojGR4p
                                                    urXXb5xa7v9QTPG/E+eLqX2UAvhhjrD4Op6KVVwAYBizWYplZiFAIYAf3LEWUmXcchKPYwpAqucN
                                                    WFx/IY54x7wAKUfRs7OT7XvbJ+Ud9AvgerxuQ4ctGVyr1KQAKNajuHNGeAFi8MDDUTe5WvMCiIL2
                                                    g7DvYLTSKRWnhACWoBBAoPPHJqZSZBRM5pisAJhdKAe2PtvF1sOHqStbJyiDOEMurGoJAANxt5F6
                                                    p/7ELbuUy9M7Dk66EVYxRfAlG9LmW9U5MMto1KyJ/eWX5Aaj6a81ozlRlMBABu69Lwq2qyVE4JF1
                                                    k2v5O8qrnuLun3IMgECgc+jiKzlU3hdvTKlqJFimC1rD9u07IQhwyjkRiYLBinwVDm4dxAAJt54G
                                                    twU9VLB7Dnt27R+zFsCIr2ui8+g4vH1j2vyoKgdnGZGaFQAAfsBXqj2GUhD34PEno7TAWukopxR0
                                                    tMPuvVHAYmmRISZfSpIFEOr8sYlJUFS6JJ82kChBiqRlehB1n4TdHUfLnyxtQJwYGIOSONUqNylA
                                                    Q3wx4ZC0RHGEZw4eofPIwKS9AMYcy876kw2d5vtVOTjLsNSIORqeX/9f+Rtt2D7dvQAiUfXBBx+s
                                                    rW2AHTui0sWlHtOpLzf1LYBQF4ZsAaiKT5HGQDJJteZmS1UwaOVTkQ9dxQCDW+ZGQKMfLTQnlpwQ
                                                    CJhSwmOHBjh6tGdqDcKKfQMUvGlj2nypagdpOYGaFgAAvs9ra8loTpaYB+sfi+rtVzuafFCQ/OG+
                                                    0gX/jUYpYgD0sRgAg6qCB6BY79wyW5Douj3aXwaFPNzbFQVAQiWrJjKNgQZvPkrFGRTtjgj0Zuk5
                                                    cnTK4xoyDXxgfaf53lRe69ppkg5e69TYrvSp/OYr8virPmzucRTXmWmeF9BQBw+vhSVLIB4vXZOc
                                                    iaIU7NwJff3RmEpJFAFw4kxRii0ArX0olhhWVYgO9YodH6udrmWpHMYYenOFChhkA8rBiCLmVNfN
                                                    JOIw35tPr3+IY362uMMfd3Zw+Zrzpn6kg82D4I2bOk36svny1xN9DXf1/7r80dfO+3nDq1HGmA6t
                                                    1FoThlvDXGGvPpRJBy//zDo+OQNWjRWg5gUAQE83n2xp5hIRmqtlNEuB68DT22DbNrj44uo1lwkC
                                                    2LwZEhXyNpbCA+Dr7LFpUeFUNBPAmChQ0rVZALMKYwyHMwVU2TIAjiPiYhBiFegEOBqOijEntogj
                                                    hQ5ig0Lbc3hg20HeVaL3KIoAheFDG9LGW9MmH5jQC7iOJ8gClHIFFimRS0W5EEug65JZeeLfDuhX
                                                    f/6QNmSNNh0Y80Bq7rJbD//PGw9W9eTWINNCANzzTbnvpg+a/07E+Fg4zTuyJeNw62/hnFWRUam0
                                                    oFEKDh6EZ7aXI/gvQk7oBTj1LABjIK+zSDG4MKoBUFmFH/OilE7L7MEYw4FMoTKTpHJAHGIqVYZy
                                                    wxMYhkCd21ps6BVR7whPbm0vqffLGBCFEsO7N6aNWt0m7xv3H0cFQfSx0rDm+NAESaI4U6HOVACO
                                                    AWNe7/cc+FLDaz4Phi4DW4xhexDqo8b3u6XgP5q/+5N3Ve2kV5GajwEY5Ndfko8HBfZM93gApaL2
                                                    w49tqk5AoHLgyScrWZ1QmGohIIMhMIVjE6Oq8GVrTCQAqrltY6k8xhi6s4XypgAeIyoJHFPVTTUx
                                                    gFIeQwW2EoGeDN19uZLOGSZq2OaJ8O5HOszfjPfvgg2fXXtqxdEhRzCYdmD04A3rgMQEFROlFinl
                                                    vNBx3Xcn4vG/SaQSn4s1N3wtceM/P69Kp7yqTBsBADBvLj/RevrvwsZj8Lu74MiRyqYFikTi44GH
                                                    y5jTLsPUAZii1TQYQhMc8yZU2gNgiJo7JSvXpM1SCxigP49T9ktNMGEerQvE3fqqZ5o4Kn7qEFIu
                                                    2/d2lHy+MhoQHE/xTxs7zBdH+93EKz/3scZXf35f46s/vzfKm5zQO3GCONBhsQ2zIIZlXjz+ybqb
                                                    P//z+Ms++2flPbu1xbQSAO97P6tWX4LkC9UeydQQgTCISgRX0gsgCp55+nggThnf6aTvzNQmNRMJ
                                                    AIZ4ACo5R5piDYBkwnoAZhcGsn6ZXfKCCXPobCdhmCGm6qpt/4sCQE5+kt7e/rKMbVAEoHjP+rT5
                                                    uxHPlJK54sWX4LhLtQkITViCR4ARlHK957vx5Ksdz7miyqe/okyLGACAdV1mte/zkmueA489EQWy
                                                    VSA2p2zEPNj4KFxyMSxYGFXLKicikdv/sT9WviLh1LMADKHxj00+IpXNxzMGGhor+paWGsAYA5kC
                                                    0lSu6M/iyj/XBcVd95iqvpsp2gI4+Ukhk8mWzTthNChFTODvN6SNWdMmnz7ll8Jwj/bzfxRRZk58
                                                    6UWCqKnGF4ko8mF/urdweK+jg5hG7yjPEdYm00YAOCH/5bh4TU3w0hfBT38JqWlcmU0E/ABuvxPe
                                                    /rbKvGdvDzyxFerKeN5kyP8HKUUWwPEtgGIMwOA/KkAQwpJ5BQw2CnC2IEAmX/4UQBP0EcXICAaD
                                                    U6VSwGOihEImW9a30EURoODvNnSYxJoF8vdbv/bhd4PpOuddX/xZ9ta/+QrwlX8817D5BnYKnD7V
                                                    uUUpIQz51i+/KB+v4NmsGabFFsD6DvNJ4LIwjC6SCy+C5kYIp3ldAM+FzVuiEsGVKDLT0ADv/XNo
                                                    WwBHc5ALy2NDS90LIIoBCI/tW6gKVwIMApi/yGW616GwTACBTLZAWQMARDBhgeMbZabyXS4ncD4K
                                                    +XzZNbeOAgMTSvG/7jpg3uj1PtnoxOq+8ew3//ZYlP4ntwhi6BaJMo6m9J9AGNJe7dNbLWr0ajsR
                                                    R/EO5SCmGMPhuvC610QXy3Tfk22sgzvvhGyWsq42jImi2E87HT7wrgJf+JPHuXbZUQ4XSi0E5KQA
                                                    A5n6h2QMgfGjbzHFXgCVw3Fg7nw17a81y/gRoC+TK/M+oyluZw32uKjhPU0lHO7NkC+Yso+yKAJi
                                                    zS7feuZ1dxTUwL6fJRLeC7Z/+xP7j/2Ooa9U71fI01vmQ6pZal4AbGw3X1EOi/Xx/hSEYWTILr0w
                                                    cqNPZxwHduyD3U/00Wj6cIyPmGg/UAsYKZ1xNgZ8DXP6dnHR3O188IUP8F+vXM/VS3rI6UgIlIKT
                                                    zP/UuwFyfAsAKusBCDUsW2zLAM86BLK5QnlnyCjn7sQ3rVkPgNCTKRAEYUWyFAa3A+bF+fS2m779
                                                    UC47sDcecxdv//Yn/ggQavyR/jYwRPPZkEfBRM8PPnSxdkAQkMsV6Kr26a0WNR0D8ECHuQLhjcO5
                                                    XgW49vnw8KbIlT6d6wPEPbj9nhivmv9bnGSKnNOI79RTcFLkio+8kyLvxhBz/PiHnosRbezgArwo
                                                    JOr9PuYNbCPExVNw7qKDnLtoH4/vO43fPnU6P9rWytIExJ1S3udT3wIITDjkqCs3SYYhLFsSFQGy
                                                    HoDZgwADuUL5I43l+BQcOaWrLwAEdao3QiAfhITljlYegtbgKFJzYnw5f+GbviyPf/+Dbrzuoj3f
                                                    /fNblt/F/tfMOfVvlIScXX+Q5ckjGFOMSBLo9hN0BwkUhpz2SBcaUKLoyCfb7/uW+nU1z3c1qWkB
                                                    kBQ+5nq0BsNoPa2huRle+VL43Z2REZ2uOAIHsnHuePoSXnHxH3HDHJh09EMRTLG+vhaXvFOH7yTx
                                                    VYJAxQlUgkAlCFWMUBRGBGUMgkGMQZkQR2kkLOAFWeZlnkGhMcWqeqFWgOKipfu4YMk+XnfJPG59
                                                    /Fzu2tOCYyA2YSEw2AvguLUsSTvgIR4Ax0lWrBiE1jB/frTtFJbIQ2KZBghks/myCwAR5/i1LKr6
                                                    HgADargsG4G8H2J0ZVWw1uAq6jJLLnmv0755vzryzFlGWm761qonf/Cz9vODmDpuw7SBJi/L65f9
                                                    iNZEO8Y4HI+vkGOCIAq4VMUYADmdbwdbz3w751TrlFeTmhUAm9LmQuAFo5X+NQYuuwzWrYfefnCq
                                                    L54nTb0LX910Gs87ezvNyQx6mJWAMj6p4Cj4RwFz7NIebJITSuQKEaOPP7w4NMyBIIfp70aLYrhd
                                                    vEgIwMq2Q7z/Bffzyq42vrluFU8fasKPbsJJewSmngVgCAiI6pMJjYmlFcsAUArmt9nV/2wkmy+U
                                                    37UozuDtWzRI1d9rElHDHLaQDzS6CjeC1uA4NGZWv8nzfvuRUMXr3JVNj1wdtJ+vh+ZMRCv9FHsH
                                                    VjEn0YFBATpaDCEYiRY7x4WAKf7fWb716x/9s3Pe+fn/qfzZri41KwC04f94Ho3BGAIgkYCXvwy+
                                                    8R2or24fjSmhBAJf+OH6C3nP8x8CM9xHU/QGFK9fc8pPOebvN+JEjXO9JKI8iLkYNxtVIBoFbYSY
                                                    ozlzyR7en+zjlsfOZ9eReh5NNxBXkFCjz4nR+r+0vQAAAhPgGKElNp+GeEtFMkBMsX7R4sVWAMw2
                                                    BMjl8uXfbRoaBCiqJgTA4KLaFA3nILkgRFdwC2AoRgMxL1k4/QUk9j1Ayut0vJM+m2iuUfznzpcT
                                                    23MDK5KHWJroZkmyn0avh4R7hKR7hIbYEeqcgaJXADzHSYD3J4AVALXAAwfMWSK8aDwuV63htNNg
                                                    9UXwxJYoHmC6knLhDzvn8cJVC1nZlkbrqc8+xhTX+yJILIHJ9A1rwZUYRDQD+TjPpufz4PZlPLRv
                                                    Dr0Fh8+8dD1/Gff5xR/P4Q97WjGhUOcZQj2e1ZEw5fw5E6UB+sDyuosrZoxDDactj/b/fX/qr2eZ
                                                    RggUyu4BMEW3vxyrbyGq+gIgEiEnHrcSyPphSWp6TJoQCosvIb5/LUnnSCohWgVGnRIP1eiAxqW7
                                                    MAfCZjJhmsaYS0tMszCZpWDmoOKGpJPBIARR2sHzq3dg1aMmzWXC4b9cd3ztco2J+rRfdx08sA7m
                                                    tVR79JNHCWQCxXc3rOKfXnEA9BSLggigB3P8DHhJkAGOrzgMSjQ4AXu75vDEntO57dn5bD5UR33R
                                                    M3nIBz/wOH3ZPv7qxR3ccGApv9tyOmv3tWJwRtwWMCd8P/VJwxifuNNEa/K0igkA34dzzi5/lUZL
                                                    bVLI+2XfAohW2JGrWqFQVF8ADJdlo4BMoI8tKKolA8JUM0FqPonc9vmtbk46CqlTSjWEBhYnD/PW
                                                    07/FguROBBeDizEOhkjcGCPHN1GNIe658We+9bG3nf3/fe47VTq0qlBzAmBjh3kHiisnEnA1GKj1
                                                    ypfCH+6rXJ/7cpB04I7dzdy8+zQuXb6PMJzKhCCY0AcdgHIQx0ViScTvR5TmcH89O9ILuXXLEh7Z
                                                    34IQufjrHcgYuPG0Hq4+Yy8XL9tLGERRlucuOsBZCw4Su/dqfr99Polh44VO3ALQZvLRc0IUAIgJ
                                                    WZxYgeu0osveyyASlo4Lp59u3f+zlaCQL3/KmxRT/4xGiRNt11UZkVOFvRKh1w+qtgUARL18Eg2Y
                                                    eAtkkZb4YQ4WUqdIJiWwP9fC/v7VeKKo87pIOBkoNhQ3OCAKMccjqYJQo1AfAqwAqCaieJPjkgom
                                                    6HINAlh9GTzxJPT0VrbLXqmZF4NbN5/F2QvSJL1gSNDKJNAhxi8giRQYg0ql2LnDY93OM3hozxye
                                                    OpykzomER65YbO/Gszp4yTl7WT63nbinTxAhoY72LOtimnA4wziYBDDkCcPUwue18QHF1twhblqw
                                                    l2c6lpEPoi2TcgkBbWDRfKirswKglpDi9RVtaw1TddIcf0wV7ZffAwCCiMIYgyMOSqo7JRsGswBO
                                                    2gIADhc9ANV0ARgFOtEERmiJdaPN0lMuAgEcFN/Ycy1zY6tZEh+g2Q2Yk9yLEk1bcjdN3lGSbpZm
                                                    72gxFsCAyLydX3/v8hXv/I891Tm6ylNTAmBjh7lOhOsnavwhuuGbW+CFL4BvfQ+aGqp9NJMn7sDt
                                                    uxu5bucKrl31NGE4uY9JxCBoJDgKJAAB1+GJI2fwxY1tzPUg5UBnAa5sG+ClZ6e55qytNKYyoF20
                                                    VsN6IBzRNCeC4QVA9M4n/MsYPfk5Q4oegILw3osMn33zfo70dfP7TYv53sZWRAtJt/TZWmEIy5dB
                                                    Y6NN/6smIscXyQJkstDXG1XOzGVh6FxhgHgC2tqiFOHB0uGTIQghn69AlTEpbgEYcHBwlFc9/3oR
                                                    NZwHAAirHQMAYEDXz8FomBs/OuLSQgBP4LTkEV606DfUud00x47iiMYYF1PMBhi6DQAs9k3ijcC/
                                                    VPcgK0dNCQCET01FcIchnH02XHgu7NhV+a53paQtAd/YsJJLTttFQ9xHT8ALEAX0hQwUErQfbeU3
                                                    T57O9Zf2c+GKwxAqXnnlbuKO5iv3tPHcJf285PxtnN2WJhkroI0iDEaPPRBlaIwH48ruFwEzhS0A
                                                    gFD7kDO8+yUrcNwY85pzvPW6Hbzo4nZ+/sgS7n2mkf68IlVC72nBhzPOLN3rWSIG7++x7IhI5MXL
                                                    F6C3G7Y+AwcOQGcnZPPR8/nCqeLM86C1CRYvgjVrYOnS6HUmYrdEoOBrMn5Qgap3kboxGBxxa6IZ
                                                    kAwThyACVKEOwKljA51swhjD3HgPwRjDMRgWp7bhSUheJwmKcVWOBDgCoYkVfw8815WC1guqeoAV
                                                    pmZM5NoD5oXApVPZYhoMCLz2Wti2E5wK7BWXC0egI+Ny79azuenizWBGjwU4HtAXcqQvxSPPXsCD
                                                    u+fx450N5DVcfFb++MpCK25Ys49zFrRzWv0uQEWrfT3eeAPB8/LDzo2n7AAQeQAmgzFRJP6OAZ9P
                                                    3LCY809rKnaAit5hwZwM773xGV5+WSPfeWAJv326gZYYJN2pzduDlROXn2YDAKfC4MpdFVfxWkdG
                                                    O5eNtlbi8WI/D05MFFEKCgV45hl4/HF4elsUkOm50c8G7+nECLaytw+ObIEnn4YrVsPzroX6uol9
                                                    lgU/JFMIK7IFMFj8xxEHpWLVdgAUvWkn+uwEIKiB5isGdKoVjGFOrG/UzUVP4NGeZTTt/gBzvDyH
                                                    /Tj5YmZVSmnObt7MquaH0SZaORgDopzW6h5gZakZAeB5/LnnkppqulUYRoFbV6+Bh9ZN74DAOge+
                                                    tH4FV6zYw/yGXrQZpjiQGEQF9GRS7O5czC+fWsLvd7WSUHAkDx9c3csrrtjHaQv6IRzy91o4bWmI
                                                    yc5BZ/uBk27uY5PAMBiIe/lRGqWdmJgzUgzAYHLC4LsaE0Xw5kPIhNCS1KycG3D1GQXeet3KUycf
                                                    HcmN5Qv6+PvXP8WbDzRx28ZF/OyJJuoVxCYpBPwArrkcYl7157vpiuNAJgP79sLTW2H3XujoPG5P
                                                    BZgzB05bBvPmwsIFxwXBvv2wbgN0HYkqfDoOuBNoYa0UxIqr/ofWwe7d8Ja3QmPD+EWAHwT05yvh
                                                    AQCUg8GgcHCqHAMAkQBQCPoEASAQ1MAWgIBONGMMxJw+GpwAgzvix5RUcN+R0wlNtKga/L0BDVr1
                                                    cl7L/ccEQHRtTiXgavpR/asNMFu76jfBdUGJ9lqDAK64Ep7cCtnM9A0IVAKOFm7bvIo/fe7Dxwz4
                                                    4Go/1Iqu/nru3HI2j+6fwyPpJE0u1CmYX6f5xEvbef4FB3Fdc6LxH0SDxOtwvER0Y5sQwhATBqCD
                                                    KIPAmOOWeggxN89RH/wQPBXtEYpEY+4JIOsbssqA1nQXNHP9qAlHWHw4ElUXjCmIOYaYA0nXsLg1
                                                    y3lL+zl/ST/zmnIk4gVS8QDXrY8i84ZDC2iHFQv7eM9Lt/HCi1r4wYOLWLsnRVxFMRUTQSRK/5MS
                                                    NDKcbQy67p94IqrQuXtv9JzrQCp5fAI2Bvr74PEnItEehMc9L54Tia+6KRb2EoFkHA6k4Z4/wI03
                                                    RtuCY24/AEEQkvHDilTmHyz+o0ShpDa6TnpOklzYfzyjR6i+B0BAchlST/wC3DqcIEOTm6PPrx/V
                                                    URMfxi3pCyxIHMUUF1VKCUEQEhQK26t3gJWnJgTAxpY5X1Qwt1T91o2JVhfXPw9++kuoT1X7CCdP
                                                    vQu3bF3Ac1cu5swFB0E0vZkkf9y9knt3zOP721tYHoeEA00OHMjAXz33CC9bs585LRkIneJKeRTU
                                                    YNCPB97Qe6XoBtQ68tEajdEa0Jy+TPP5m9rJ5Fy6BhyyBUUhFPzQYcV8j46BVnIB1McMK1s1y1p6
                                                    ScV86uOaurgmEfdJxH3qEgXqkwUaUj6NdQVQphjqy3ExbmRk4z8ULTgKzll2mE+9pYvNz87jx2sX
                                                    cteOFG2JyAiNJe+1jvaQlyy1xn+iDE7C998Pv7098r7FYyP/7qBYKHfxrmQcNj4Gy5bCpZeNI6hT
                                                    Ig9AbyHAqcQeoijARMF3NSA6DRBTSXJBP0PtP0FI1SIUBSQoUL/u6zi9ezFOHE9laPGy9Pj1ExZq
                                                    voGFiR5A4bkOfhB2Br7/xVXv+j+frc4BVoeaEAACLy31hR+GcNkaeOBh6OmZvu1cRUCHwnc3nMM7
                                                    rgq5dfOZbNo/l70DDkkF59dHK+rDebhhZYbXP2c/Zy46Gp3VYKIHbU66v83xQYgDOEjR79/SYrh2
                                                    zl4G+xZHEbVgjKBNC4aW4qaa4Iig1DOIGBAzZBkIx9oUIpFYKYUXSEcC4sIzuzh32VH+ZG8z371v
                                                    GZvTMVLO6D0jCgGcd160Rz2eQlSW4xgD99wDd94brd5rKf7G8+BXv4VzVkXlw8eaa8Ig5GihMh4A
                                                    Bsv/1kAZYABMJABOKeAVavxSuWnHiVKQDwzxYIDUYz9G9e7DOAkEEwkAt8CuiR8eCaVJub0YBD8I
                                                    1jYlvRfPf/un+yt6cDVA1QXApnbz/8USLMrnSv/aAtz4Evjej6OFZS1NSBMh4cCj7c3c8aNraHYj
                                                    l3aTB4UQ2jPQnDB87lV7uXJVGuWYyACWDXP8y5BtBTmWm12sDzg0huDYJr9UdostVLiu4aIzD3P2
                                                    kh42PTufz9+xiEMDDs3xaOvi5CPTBi680Ab/TRSloij9Bx6GukTt3WtKIJOHnTvh/PPH9gKEYcgR
                                                    PyRV9uMwxYZApib6AAziOcMIgJjDzgOHOH35ghL09xwdkWjR9sctO9i7cztvnNOOdD2NcRLFsybE
                                                    VJZmzyc0UcDfeDFAs5cnEcvikP2PM97+5fdV9OTWEFUXAMbhH/1CeV47DOGss+GyiyIXYLz6GTaT
                                                    JqZgUSIyUPkQ+kO48Yw+XnxJO5ee3RVNIlqN7e6vFLXiPi8KlURMc80FB7n63IPc+8QifrlxPo8d
                                                    jNMaP+4RCAJYfSG0tloBMFFE4OG1xfattWPHTiARgyefgLPOGjsWIAxD8MOKCJmoJbCpehGgocRU
                                                    ahgBoNiyu4MXPueC0njqRsBxoG8gz//73s/4wa0PQAiLXlbP9WcmTmgCpgQavcNoTpvQ6wuQUjpz
                                                    28E5f/l3f/flb1fspNYgVb3i1rabd4uhrdy24tpr4dHNxzzSZePkCWW0fw+Nq9MmCpDTRPeVPvn3
                                                    hnxdkNRcsbSbN1xzgMVtWby4gbD65UNrnqIQEIHrLjrIFWd1cccfF/LrR+fS3uMS96Lc/wsvjNzF
                                                    tvjPxDAGNjwGDXXVHsnIKAUHOqC3F+bOHf0z1oMCIFaBTYBivqTUlAAYxgPgKPYcPFy2OXQwLuSJ
                                                    rTv57s9/y53rt5BoTpBDeOdGzS31IZcudPCLn5sxirpY17jCg4aiBA7l69q//rnXzmrjD1UWAJ7w
                                                    ItcjWc5Oa1pDUzO8+Hr41W1RdPFQL/bJ30f72MXnhnw9+eeDX5WKVpCue/yr60Qq1nGK3w957oSf
                                                    FfOaU0nNwlSOOlWgyckTdwZ7WA8W9SmWt3RCVi7pZP68HJhY5E4Pa2TFP10wgFGkEj6vumY3z7+w
                                                    gx89fQG3/cFhTgusPMsa/4kiElXmq0jdnCmgVFQj4NvfhVfeBGecMbynR4Qo2DUIkXgFBICJvABK
                                                    1ZIASJ2QBgggSnGw4/CEDe54cBzI5AJ+d+e9/PM3fgGekGpIIEAdMOAbXn17jgduTrKkURFoAIfG
                                                    WOeknBFSKx7KKlPdK054WUUCrQxcemlUXASOG95BQ6xUZKSdYoDY4POOe/zfrgNqiEEf/J2hec2n
                                                    1KQ+eTY8uXa5RFny5wdPk6DYpU+KAx7+fIF2IJzGxQ1qBSMQCKahmTVXO6w6PzJi1Y7Anq4Uyt05
                                                    t0S4DvT1wze/A299U7QdMNxnbkINvq6YoDHioKQ29igNEHOS6MG6/0U8gY6BAoeOZGltTJbkXhlc
                                                    9T+7az//73s/5w8bthKrj+OdVNu7TsEA8Pa7c3zt+QlWtCi0UTTHOsesBnjqm4KBndU+z7VA1QTA
                                                    +g7zSSBeiQnXmCjy9/oXDKlvNcr7jvbzqYx3+NcVtnln0aT7aNaHadJHi78kx35+4ldLqTA4pGU+
                                                    RkNDAzQ02r3/yWBM1DMhHiv/NlspcBTgwu9uj/oGNDWdel8XfL+yalBUTZQBPnaOxDllqnIFjvgh
                                                    h4/2Mqdp6gLAUVEG0133r+NjX/sp5LKkGhMjznR1Cnb2Gv72wTxfeWGCuUmhOdZFYdAjCyfMr8f+
                                                    fdJzyoBf4Ilqn+NaoGoCwBFeqZzKuVuNgbBG07oKeHSqVtIqqkKZNHmaTB+NupeYyeEQEDdZonI7
                                                    g1dzjc+ytY5ojkob/ZKKROFJE4VlYigFZ58ZVd2bDj04HAcOdcG6dXDDS0+dG472ZRml1GXpEQdH
                                                    xWvmGgzCU0t9OyJQCOg+2oOc3jb5Q5XoGtmxJ81/f//n3H77BtyFjcQTYwugOhfWHdG8444sX39x
                                                    kkV1/SgnxFE+jmhc0dFXHeIK0NiE46rjXl0HYjEQ6Lmt2ie5BqjKrbr2oLnZwIV2tRVxcqGqvMRJ
                                                    S5xONReXEIXBNQEuAS3hEZrNUTxTIAobHK76vmVUxNA/4LG/aVG1RzJjMAYuXw07J5qUXUXisSg4
                                                    +KUvPfF5EejL5ErfYnIUjChcVRtbewIEYeaUGggCEGryAwOTfm3XgZ7+HA+t28TfffdX6IEMdYub
                                                    J/QadS5sPmr4z/V5PnhlPV++4KtgAkTCqPupzhM2LSB3/svQ9SqaIeV4K2knar74rj95o7n/kha5
                                                    t9rnu5pURQB4ild7HlLO4L/pzFCTHuIQAIVihHC3W4/LEhp1Hy2mm6bwMC6FIX9lxcCoiMEPFJ//
                                                    5UqueFmMhW3W7V8KjIEVK2DpIjjQPj28AEpB+lAUGFiXOtHj3z1QWQGAOLhqAg0PykxBZ4afSRxh
                                                    T/oIQTixmUYpQODJZ3bxhW/9lE2PPYtqTVEXn1wGU8qDb+0K0Qr+8bn7wBiMMUiYw196FZkLbybh
                                                    xkb0qDguSwKfb8EEcwhnGNWpkq94iY20Hj9DTbsDGBTdqoldznI2xy5hu3cuR9V8fIlTLGdT7SHX
                                                    JmIIQ+ELvz6bP2xvYOtT46swbBkbYyCRhBtuiPpDlOr+HtyZCXT0uvkw+l6b0njLYy70dJ8atxAJ
                                                    gMqdPy2C59ROzXI/6B/WwLsxl6+v3Uqh4I8r1kMkSqvd336IL3/th7zlo//Kpp37qJtbT3IKTVqE
                                                    SAR859mQbz8eEGrBOHEGLv5T+i9+PdqJRdXLzfCPwAfXYfnGtHnW7LqndoIvKkzFdfqGdvMPQLON
                                                    tp4ax6vpCt3SyFG3kYQpUG8GaNVdNOlujm8RDP2LWYqK+s5+6w9ncNfWBubWwQNr4eyzYdFi6wUo
                                                    BTqEJUvgz/8MfvEr6Dx0PC120P062lWoTbEmhoaCHtK92sAZc/O0pkIakwEHu2Oke2MczUZ1HTwF
                                                    SWdywYeiIJc/6TmgZyBf8WhG10nWSggAgc4N+1klHaF31yG6e3pZ2DZnxEDAwT4P+YLmwXWP88Gv
                                                    /RiO9pJoiJesv4IQ9Zv41KN5WpoaefGb3kGhcWGxj8g4jjEAz+PMTannbwAuqtKpriqVd9QprnMd
                                                    PFtnvXQMegfyEiMnMQ6pFlw0zbqHubqLlO7HJc/xJc0sEgNiwNE8sWMu37xvMY/tT9Ja9LT6Adxx
                                                    F7zlLcV9wVqZfacxxsBpp8Ffvjsqu7v1aTjYAfs7QYthoCCn2NWchryGM5pCljQGLG8psHJ+gXkt
                                                    /SycM8CKtj4kNqgIink8Ykh31bGrvYnNu5v5+eYmTCjUeRPz3BsTtSE+AYGu/mwFtwBMcQtgiu0P
                                                    S4gSZ9jWvwKQinPfI4/ylte86Fhq9bGfFwP8evt9tu/cxb995xae3LgN1dZAsq70MQ4OEPOED/+2
                                                    nS9c2sm1ly+ckP/T98F1uXBjh1m7eoFcVclzXAtUXAAIPNe6/8vD0AgAg+KwauGoasEzPs2mh5bw
                                                    CCkzgCJEjpXPmKFxAwKIpqc/zu2PLeI7a+eD4Zjxh2ii2rUHdu4YOR/cMnHCMHL7rloFZ55ZrL/h
                                                    B5yZeYaDRxNoc6zJLNrA4pY8iZhGqRDXCfHckFisuMlsJCpxXTjVXdzWlKetJc3lZ3XyqitS/P7R
                                                    hfzssTmE+tQ+D6ONNZU89bPvqrAHQMStmSBAAEdimJFMacJjw2NP8ZLrrqG1KUUYHm+5ns0VuOee
                                                    Ddz/0HrueGIXKEPdoqayjrWQ97n6ouWcddrSSd3DQQDK5cr1afOdy9vkbWU+tTVFRQXA+g7zgVgc
                                                    p5Cf+mtZxmZwDiyIR1rm0qHmEiOgzmRJ6Sx1ppc6049nspwaRDhNRYEYcDWZAY9N29v40doFbEnH
                                                    aIkXu64O/VWiRd6dd8EZZ0bfWxFQGozhmGGIJ2FuvI+2RD9tc4ZruCYnuWxlfA2tipUwlcD8lgxv
                                                    e8mzXL2qi6/87nR2HYnhjuMlHHf43g87+nMTajAzVRwVw3FqJwjQlRjGDG4hnnhTNDiKe3Yeovlr
                                                    3+Edb3kdpy2dw4GOXjZs2MT//tUfCHa2Q1OSRMwpezvlgYLPorktfPQ9b2fxgtZJd/A0GhS8ZUPa
                                                    9K9pk7+szFmuPhUVAEp4t3X9V54TswpceqSBbqcBYT4CuAQ06l4a9AApM4BHHtf4CAHTQhSIAWUI
                                                    fcXhvhS/3bSAO59q5dCAIuWeuOo/GceB/e3wx8dg9WpbBrgcGANxnT9Whrk8byLgO5y57AjXX9DA
                                                    /717EY1jhHaFIZx1eiRSThYAuf4cyQp5AAyGmIrjOsmaqQOgxCsKgFMRoN6L8Yu1m/nFhi284MKV
                                                    3P34NsgHkIpRN6+hImMcKARQl+Krn/wrFrdN3vjDsQJWguE9G9Pm4Oo2+eeKHESVqZgAeCRtXiFC
                                                    m7HBVlXnZKe/j0uXauWQasUB4qaAR0DMFEiaSBSkzACuGczbHDJLyRBxUInJS6RYyLt4IRnhSF+c
                                                    LfuaeGxHK/fvqKMn65DyGNMADJKIwYaNUefI+jrrBSgHUinLptUJ/TxGww/hjBUj/G5fnkouyD0V
                                                    w5HaaOplgITXRGhGbtMqyqMu4eEj3L15G57n4MXcii0RBgoBc5vq+eJH/4KlC1rxS7CwNCbyEhrD
                                                    369rN1uvWCg/q9DhVI2KCQAPXup5tBbK1PrXMnlOFgQ5iZEjhpEU0HwsFcvFkDIZUiZH0uSI6Ry9
                                                    h31iqkB9IqA+6YMb/Sam+IrHuijpsQXCKbNHsRa5OCAKE2i6+vL0DsTp61/AH/fUc9czDTzTFaPO
                                                    gZQLcQcaJpjU4ziw7yBs2gAveGEUGGQpLWEFc+ramvL4w1xr2oCvoywDp6hXhxMAIkBvDklWJijP
                                                    YHDFA6mYTBqTuljbKPerQYr3pAd4XmVDyQYKAcRi/Ncn3s9ZKxaV9H41GhyHGIYvr9tvnr1iiTxe
                                                    0YOrMBX75Ay8ILDu1WnByA5/YUDq6Je6aMEfwq/XanbvNDQnDfUxQ1Ndnrx+iETiMK31cVrrYyxs
                                                    SrGoeQHNSYZvw2XA10IhUPiBUAgVfqAIQqGjO8WTB55ib3o3PT0F9vTnCNTzSMWWg4nSv5ZNogXt
                                                    YPOmwR1Oz/W55yGf1Zcr6lIJ6wUoMaE4lXkjA0kvJDzp88sFkIhpnnd6lvnNWbp6EuzsTVHXoE75
                                                    rIMQyPkIlYvKd8VFamWLzYBy4jQ6DYTFrqSnICoS5qayk/pArsC5i+byDx98J2eeVlrjP0gxdmUh
                                                    Mb4LXFjRA6wwlZRup1n3//TnmLfAgHIhFlMcHoDe4hZvaDzuax9goH8PGAdCDaqJVYuvJOHUjbio
                                                    UERBeCd/TTpwX+cmCtlD4HhAgTWthrZxuuqHdmk8wcsRZunPd5D3u8kHPRzx29ndn+bIF5r5/Eff
                                                    QjzmWhFQQirXVw+0OfG9sgG8/IJuXra6neULeo5dwJ1HG+iuX04PDccTZCVqS1vRPgDG4IhLrcTY
                                                    GKKaBA1uM0fJDi9MRBDlYsLBOKHyM5ApcNGy+XzyI+/m9KVtJXH7j4TWEItzwcZOc+vq+fKKihxg
                                                    FaiIAFjfYb4IeHZCnVkoBclEZKwHI65dDEtisC/p4IqDQRFzYEVdSMKdeJiAEjgjbtgdKjwRckZw
                                                    ZLjY5AgZUmwm0CG+zhCEWQpBH92Fdg7l9nA0f5AQjSn+pxAcFA2e4qHH97P+8Wd5/pWrphRUZDmO
                                                    EJW0roihMMKSOTmyQxamhRBOX9DP8kU94B/3RMxvzDBfP8E2fSG9Un9M3A5kCxUVAAZwxEOkOoVZ
                                                    hyPmpmhw59IV7EExnPdGgYpBmKvI+ckM5Llq5RL+5R/+msb6eFmN/yCFPMRi3LQhbX62pk1eW/53
                                                    rDwVEQBKuMRxa7cbn2VyGCAWP3UlfrJhNsZMaW/TnOKGlBOqyplinEGgCwz4R+jLHyRX6CIT9tAX
                                                    dNMT9lLQOWLi4OCgRKEYIWCpIcb965/kOWtWVfv0zih0BY1bzNWnbAFoLaBP+sRNlAOzLNjNVm9V
                                                    JFIEsvlCZRsBQU15ACiOJO42YXwz4rBEuWWPWTBApjfLq553Ce97x5torItXNFPH90Hgpg0d5n1r
                                                    FshXKvfOlaHsAuAnR0wTPius+38GUqz/fqIAMKcoAk3IZFMEZHC/oYhCKOgMvblDFPxu+v1D9PiH
                                                    SOf30hscQaFwxUHhoBCUCDGE2DirrCU9xS1P7uMNe9OsXN5GaK/bkhCaCsUAABg5QQA4At0DseHj
                                                    TxASpp8G3c9R1YQQFbOp6BYA0RZAzcQAEN1xycR8wkwI4g77G6KKzXbKNOzAGPLdGd72ymt5z9vf
                                                    QDzmVPx+NAaUIqYN//xwu1l39ULZUNkRlJeyC4DTCrzEjbEksJHVM5JE4kR7P9wUq40Z14b90P36
                                                    UIdoE+CHYbEuefQDT1x29j/Kjv5HyeocgsFB4YhDo6qf8vF4ImQHCjy7Yy9nLp98z3PLiYQV9AAo
                                                    J+TM5hAdOlE8icBAbvSpLm5yGJpAIJervAfArbEtAID6+CICUwBGqFDoxMpr/LM+73vTS3n7G25G
                                                    SfX6dWgNrkuTGL4HnF2dUZSHsgsAJVxbO7rWUkoGO8Cd0FHPRC77oWjC6DkZsggb2hhGINCagUIX
                                                    uaCHbKGTPr+L/qCbLr8T1xicYhS5IIQm2ktKlCtvOqb4xbpnuOG6NdU+xTMGXcE0QCHq7TDUVaxk
                                                    /DmouUKhot54A8UtqdqZKY2Butg8jBlt31ZAeaBLu7c74Aewv5/P/NO7eNG1V9dEhc4gABHO2pQ2
                                                    P72sTV5X3dGUjrILAIGbbHW1mUsqdbIyP/VO1RiURAVaCmGGQOfww356C2l6Ch0cKbTT7XcBkYtf
                                                    EBwEJYoYcsrKqNwTZYPnsHHDLjq6elg4r8l2CpwiQgXTAAEwKDHHul0oBYd7kiNsAUQjzKi64021
                                                    KuwBAIOrPKQGDN0JZ0UcXDVKNSRjEBXHaJ9SKCYDZPpzXHb2cj7ymTdx7splBEHtnBNjIBbntRvT
                                                    5jOr2+Rvqz2eUlBWAbD2oLkUSNXI52cpMcZEjVS0Geq+P9VYOwb29DyCH2boD7rJ6AEGwn5A4xaD
                                                    8lJSO41QBCDh8OS2PSxuu9AKgBJQOQ+A4DiaxY0BOw+5qKKnSeuRDJQmI40MSPLYNez7fkUbAR3L
                                                    AqBmKgEfo8ltpaAHkBE+P1GxyEBP8XSFxpDrz/OC1av4yLvfysL5LTVZkKsYFPjede3msSsWyk+r
                                                    PZ6pUlYB4Dq83kDrhPozWqYV9fWQDXK4hT78cICBQic9/iGcIat2wbCz/49QDMoTpHzu+1IRc9iz
                                                    az/h1TO6DkjFiCoBVsaoioDnmBNWjtpwvDrl8WcxCLvd0whRx0bnV3wLwKCk8p3Zx8Oc+GL2Z7bi
                                                    jhSfoLwpi6VsqNG9ed77phfzpte8glTCrdkUXKPBcWl0Aj4LWAEwBitcD7EBgDMTEeg82sPaXV+n
                                                    aZ5DwfhoExIbJqLZrdEJbkQ8xYbtHdzcM0BrU13NuCGnK5VdAxgcNSRzROBIRjEw4FGXCMGAxiEj
                                                    jexzlzEgyRPWt2GFPQAQtQOuNUSgJb6Y3ZktIxgKgyhnShUBBwoBuC7/+cm/5IpLI7Fd61vGYTTk
                                                    MzamzX2r2+Taao9nKpTVL6fgDJv+N3NRArsPdIKbQZsAD0VcvJoKZpos9UrYsO8IuUy20rZgxlKR
                                                    bQADnqNZ1BgQFDXA4MenjGavewY73HPY5q3iGe/sU4w/VEkAqNoTAABxVYcebRIXJ+oLMMHNi9AY
                                                    Brr6Ofe0xfzgkx/i6jWR8Z8uQjsMQeC56zvMO6s9lqlQ1qsuluCSfPkLRVmqhDawb+9BiM0Moz8U
                                                    FdWE5emdB1i6ZK6NAygBgbjETJ5R/esn/2gSBsEwJC6FyJZ35xUDOZf+xjoGJHEs4G+4kYR+UOGa
                                                    PNEWQC3aPqU81GgBnDKYCZAf55FCphBAXvOxd7+W173iJTiKmnX5j3gcUX0AcTT//kja7LmyTe6s
                                                    9pgmQ9kk+WNp88Jad+VYJo8I9A0UeGrHQfBqK3+5ZCRc1j2913oASkBUDniY9YYy4GiMgUBL1Ayq
                                                    4FAoOPi+ItTF0DhHj88oCwSBw47DsWPlqQUohEIQKlzCEQ0/RI2ABqpQB6BWYwAclSQmHiPW8jRE
                                                    PTrGoV6yoSbTn+eqM5fwrU9/kNfe9JLoupimdkJrEIcGV/hUtccyWcp21QXwV24tSlpLSRCBbC7H
                                                    7fuOEHdmqABwFU/t7bQCoETkJU7SDET/cKL20Nv2NdNxuJEnDyTp6HXpzzvs64kCROfVhSxo9FnW
                                                    WuDcxf2cd1oXdXU+BKNcb0qT7q7nsYMJ5g/JYDu2DTBKNIIAfmjoz/kVr8pbkwLARE2BYiqGP+IK
                                                    36BUjHCUkoA5rQn7ctDcyKff9zquveYK6lNeTaX4TRYdghfjyvXt5j8uXyjvrfZ4JkrZrjoRlk33
                                                    D9cyMiKwv/0QwaE+kvU1HtE/SWIibO04assBlwABMlJPM10YHNZtWcB3HljEvm6PAR/iDrjFqn2D
                                                    i+8DeZe9h+M8tAOC9a0sbVjMO55/gOde0A5GnbrqVIZ8zuWrd55Okzf8KEYTAAiEoaYvW6hsGqCJ
                                                    XO21iKcSeBKjQG7kbT7lRe2BTyIwhnymAM0NfPhVL+SmF19Hc1N95O2ZZi7/0Qh8cBRvXXfQPHTF
                                                    IvlBtcczEcoiADakzQqgriY3tSwlQSl4/NkDoMwM2/0/jitQCDTpwwPMb647seKhZUIIkFF1YOBn
                                                    Dy7jP+9ro8GNdo9aRigBoSSaoOLFLeijWYeP/3IZfzsQ56Vr9qBcczy1TwzZnMO//fIcHj2QIHXS
                                                    zKZN0dVuRt9KCHXIQL7SHoDaTAOM2gIn8MaTsqs80D7GGDJ+CNkCaMX73/pSXvCcK1i2pC3KvpiB
                                                    YtoYcFwaHPgUYAWA1rzIdVhiPQAzF2Pg0a17IVbJCm+VRSEQGjq7umlrqau9Ki3TjLyT4MFtS/nU
                                                    79tY2TxxG+sqaEvC5+9q44cbW3nv9R0saBnAc0MOHGrg879fwkBekTrJXoUGFjWEzGnM0o4etX9N
                                                    GGp6spXPAnBkEr2yK4CrFDGVwBgzygcm5HEJ+nrAF15w1blcf8XFXHnFaua1pgiCyFU+kwkDUIoz
                                                    NqbNj1a3yRuqPZ7xUhYBoBRtnodbKFT78CzlQAmkjwzw+P5DxNUM3f+naAO0obe3v5Y6tU5LBMgb
                                                    j7ufWcRpdZM/nQLMSUB/xuMTv1hKc0KTcA2HMg51DqcYf4gEwNz6gFgiQEY1ZKC1oTfnV9T+R0GA
                                                    tbkFEKVV1jNaQ++8NqycN5eXvOIarr38UubObaUuFQcNs8kGFBe8f7I+bX58eZv8otrjGQ9lEQBi
                                                    WGzdpTMXUdCePkJ/xqd+BnsABtFhYO1/CfAD6BuQkgTYO8WtA6MV2QI0jmI/cwGcs/QIINEWwCgY
                                                    rTmc88vfJOXEd0XVaB0AgLjbUPSbDE/eD7n8gnN522tvLJZdnvkr/uEwBhwHQfNPwLQQAGVZvhlh
                                                    jS0ANHMxBtIdnRDqyvZMqRqz4iDLTjwGy5eDX0LjIDJ6xp4BfAPXrDoKWqEY+c0j46XZm/NxqtAL
                                                    oFZJOE3oUYInY57i20/sJZ8L0Hr6R/ZPhTAE1+G8jZ1m9goABWfMxGAPSzThFnzNxqf3RlFyFss4
                                                    0RrOPx/yFXQLZwJ44/ldtNZlwIyRBQAYoyHvV1jY1m4hIAMk3Ab0KFY9rhTs6sKfSaH9UyAMAcON
                                                    j6XN1dUey1iUXADse8q0ItSunLVMmTAM+ekzHcTdme/+t5QOY6C5GV70fMhVQARoEz1eefmzSFGs
                                                    OqOZWQGjDWT9ivUuhNr3ACTdZoIxPCc4sHV3OzM4JGjcFLcCYqHUfkZAyT+uznm80oC1DDMUETiQ
                                                    PgwHjxCbHf5/ajI8e5piDFx9NbTNjarule19gL4A3nvFdhbNz4GOpjo16m72oAcgQCqaBSDUbC0t
                                                    E9UCGDNNMe6we1/aFs0qEoagFMs3dprvVnsso1Hyyy7UXIjBm837QDMZpWDrroPgzrTq/yPjuLXp
                                                    np2OGAONjXDTy6PVeTmKLBngUA5efU47L73oGXDqGRRxYwcBGihMNuhz4leJweApr6bvJRGHlKob
                                                    NRMAV3G4w1bNHErxUnvtA53mmmqPZSRKLgBEONt1a/p6tkwBbWD37oMzOv9/6LHiCAsWzJvVgU2l
                                                    Jgzh9NPhL94BjhNlB5QKbaDPhzed3857rl1LLFXH0CDOsWIA+rO5KcZ8TvxCiUl8wn9TKQwgoqgb
                                                    IxUQR7Gz/ShHe/NWBBQxBhxFIgn/Vu2xjEQ5HE+2BcAMRQSO9GR5Zk+aY51WZjAB0R28tK3VCoAS
                                                    E4awdCn86Vth0QLI5KbmDdAG+gPIG/jr52zjndesBycBsdQJYenCyJUrRaA/kwdnkhbMMAn7b3BV
                                                    rIRntvSIOCSduqgY0AjElfBoZz89vQNWAAwhjApPXrG+07y62mMZjpInn4otATxjEYGenj4e6uwj
                                                    OQv2//Oh5oozF5GIz66CJpUiCGDxEnjXu+CxR+GhtXCgPUoXVCpK7xs0JoNfB6cWUwzwC4qGvzkR
                                                    8uZz09xwwZPMb+xHaxepay3WqB/8K0GKftmRpqiegTwUDL2FSaiRwe0FGUMcD+1TbDQQxw85Vmpa
                                                    OPHYq40SlzqniTRmxOCumBIOd/aSzwwArdUecu1gQDlgQj4H3FLt4ZxMOapPtFr7PzMRgYPth6Av
                                                    h5uq3ajlkuFrLjljkV39lxGto+vqssvg3HPhYDts3gxHDxl6++HIQGQFezORUaxLGpRAfSxkQTJk
                                                    YWOGS5a1c/lp+6mLZ1FiCEMXVd8CjntKUrojmpTS6GEKAjqiaIoZ3vncxXixSVzf4xEAxlAIQvJ+
                                                    SBBqHDEot4kFLRptotiDvpxwNOPQl1Uk3OoLASVCymkctRaAFP/39K52zlq5dEbW/J8sxYDAMzek
                                                    zX+taZP3VHs8QympAPj1M2Yu0GaLAM1MROChp3aDmiUBgJmAC1YstJNZmTEmesQTsPIMuGZVFimE
                                                    9PdBX3+UuJfNKhzt09T9JOIoErEscxv6qE/kwSi0VkWvgELVtyCx5LAVaXQYUKf7WdYUuWdDc/z9
                                                    DXD61ct503NPn+SRDN4VoyhGA34QEPg+vX29ZAYyRQP/RPQKAr0Zj56+OM/ua+J3G+dCVFymqsQS
                                                    KUzvGL8Ud7jz8V3cfMPl1R1sjaKE1wEzVwDUJzktHqcln5/6a1lqkx89vod4bObv//eHmpVnzOPM
                                                    FUuwgrb8aKBBAhZ52SgwKQ4NCVg0L4oQFAHH+MR27QdxMUYwQBgcX6mLG0PVtUSRhcO5bQTS3XDm
                                                    PYq4CB870/DCZdDWbJjfAAkHAq0xFej/7Hox5syZRyzWR1dXF0Mzp5MxTWpuhsXzBjhn+VF+9Ifl
                                                    tB+JVS/sxkB9Xf2Yor/eVTy4cZfdAR4GrcFxmLOh0/xizXy5udrjGaSkl1QyQcJ++DMTJdDe1Q/7
                                                    DhObBdU+dC7glVetYm5rg20DXGYMkFIhC2I5lBRj6YqtYwfteD6ATQcUvvYItZxYclZFLn/VMCcK
                                                    Hhhlz8ZRhtM8wxLgP7YJz7tdeOttis/dpbj9WaEQFsVGmS9xYwxaa+rr62lubkYPcTNFxy4EoWJ+
                                                    a443vGBPFC5QpevQGGisr0eQUY27EoFsnoOH+mdJifCJoTWI4YXr0+YF1R7LICW9zFXAvGofkKU8
                                                    KAXb97SDp2a8+18bA4HwwudcMuOPtVaY6xZwxRTTziIDnPDgQB/89inh/B8rPnyHUHA8lBdHEvWo
                                                    VBNO03yc5vmIlxzX+ygxNKgomK3NgXNjcDQH/7MPXnW3MOe7im+sE3YcicbgqPJ2gjDG0NTUhOMM
                                                    7+PXWlg4N8PzLzxMrgqVdkVAm5CjfVtRMo57P+myfdfBMeMgZyPGgOdRr+DD1R7LIKUNAhQW2oCp
                                                    mYkB0gfT4M38O7s/H/KnL72I+XMa7P5/BfDEkHJ8QPAc6CtAezf8bItwx35hXRZOV5B2HHYHyziv
                                                    OYOYomUe3MAfJ8ZAwZwYw+IJzHWiR2jgQ08Kq7YJNy4yvOlCOHOuwRHK5gkSERobG+nu7h62AmEY
                                                    KC5e2cPDW1oJAqlYUKAAfphn64GfQHIbnrSMmgoIgKs42nkIkbMqM8hpRhCAwPPWdZiXXbFAflvt
                                                    8ZR0NnccFlb7gCylRwR6Bwo89sy+GV8AKDAGlOKFV19oV/8VwAANbkjcBSNw3y7h7+8ULvqV4svP
                                                    CkcKcK4LCQW7Q6G/EC8uySdm+AfRocMzvhrRRe1I9H5hCN/eI1z2a+Grjwg9+ejSL9c1EYuNXAvA
                                                    IHjeAIl4H0pF92O5r00lEJqAJ/d/hx29D9Pe1UdjKjG2CHIV2/d3kcmFVc9eqEVMlBbY4CreVe2x
                                                    QIk9ANqw3HoAZh4C5HN5frvnMImaLVpeGjIDPn9+42WsWrk46uplKQtCtK0UGjjSW+D3mxXvfVKg
                                                    AItdWOWeaOQEQAtd/XGK9ekm/qbK8NjhFIQKcUd37bgC8x2YC/zDFuGjjws/v95w/ZmGWHHcJT0f
                                                    IiP2HxCEQtDP/ds/hQouZMWca4jH5pKKNR2LlyjdOEAbTVffNp5K38LR3D4SKkEuCGhpSHC4LxPt
                                                    9Y9AzFPc+kw7b8vkiDfVlfYkzRCKXsVXVHscUGIBIMJiKwBmHqKgPX0YDvXhNdZ21bKp0B9qlixq
                                                    4eYXX2n7/5QJKRa4CULYdSjk3md8Hu40PJoRznbBGeXyWqzg151Jblw5yTgUMXxlZzMrnPF/uAo4
                                                    3YXQgdc8KHzigPBnl2sW1kNQwu2hIAgwxgwvAgTCQLNnQJD8I+ztX0drrI22uvNpqV9Ja93ZKOUd
                                                    N8xmYpfvsT8z0JPZx56uu9ndvwnHQFwljv3eYIzGaMSVonvfEQK/gEidraExDMaA6yGbOs2vLpsv
                                                    r6zmWEoqAIxmmZnZC8RZiVKw4ek94Jbf9VgtDKB78nzsPa9gwbxGu/ovMUpF1aMPZwxP7Qv4zfaA
                                                    3x8KWeIKKQXnjqPuTqMy/Hd7HZ/KesxPFaI9g3EPQPPQvlbu6Y2zypu45XYEVjnwuZ3wyw7Fj16i
                                                    WTkPCiUKzMtkMiP+TBCO9vbD4QzJpsgD0l84THfhLvzDt+G5DSxOncO85ErqkotJxOdQF5t73AVv
                                                    hn1RAIIwpC+7n2yunfa+zezpexRXHDzxThAjSoRcLjtml8SoIJBh6652FsxvwYbQDE8YAIbnr0+b
                                                    my9vk19UaxylDgKM2ZXTzMMY2LrzAHgzd/+/Lx9w83Xn8ZzVZ0c3p6VkKAU7OkNufzYg3au554im
                                                    TcG58YnJSSGKQf3O0wv4yGV7JzAAze6jdbz30QWc4epJi1gBznKhLwc336b4xrWGNctNSdoaZzIZ
                                                    1AjptY6j+N2mHRAf9HxE2wUx4sScOMYY2vufYF/fYyjxSDpJUqqRmNtI3Gsk4c0h4bXgOQnyQS+F
                                                    YIBC0Icf9tOb209/2Ievs7jiklAJhivz5Yji0NEjOHK8s+KIxF0e3bqH6646F6yQHhZjwHVpJORP
                                                    gZkhAESs+Z9pKIHOIxm27juEN0P3/7PaoOoTvOWm52CXLKUl7sEjOwL+8ZE8S5JCX86wdAqepDMc
                                                    w9/sbWBxw3zeeG47BM7IngAxoDS7jtbxtrVL6Sq4NKmpT1H1CnI+XHuX8PANcNEiM+lGRiJCNpsd
                                                    9Xe0gTs27x4xAFcQXPFwxcNgCHSB7rAT/DQ6azAmRKMxGASFQhBRCIISB4WQUGOnUfp+ATehCMdy
                                                    j7mKjn1pZkG5kClRPI3XVXMM9iOyjIooOJjuYn9/gfgMDev1j+b4wttfwsrl88rSn342IkQ59D/d
                                                    UOBdD+ZpAHKF4z+bLAo4U+BNf2zjS5uWcyjrgaOjhyo+HA1OyMH+BN99ahErfn8mB3NeSYz/IAkF
                                                    ZwlcfZuwpWNqzrGBgYERXeuOUjy5q50D3VkS47j/pPifIw6OuHjiEVMJEipFUtWRUEliKoEnMVzx
                                                    BuXAmK9rgLq4R9J1xlzluUrY3tXH/rQtCDQaxoAI9Zs6zXerNYZyNAOyzCCMga5DR8APUTOwBkBv
                                                    IeTGa87i8gtXlrQv/WxHBO7e4vOppwqsikUmJtSmJDEkClgV03xoezP3dNTx3Dk55jfkqPOi1LPe
                                                    vMvB7iS/OxLngazLqvjk3f6j4QosV/D3Dyi+/BLNooaJ1woIw5DCaK0mRejoOASBRsWruwVnTMh4
                                                    XGQJgZ19eToPHWHBnHq7DTA2z7nNmMYbRcbqtlByrACwjIgIFALNQ5t3RrPdDCOnDTiKv3j9C0nE
                                                    HRv4VyLiHty1xecjjx03/lDaxAoBznUMT2Rc7upvYMA0MLQZT5OCeWI4dwIR/5OhTsEjvfB3dyu+
                                                    ebNGJhiBPygAhvMAiECu4PPAlv1Vr8ApAvlCAcQf02OgRCCTp9Dfb2sBjIHWEE9w2rxDvBv410q/
                                                    /8xb0llKigk1v3i2nXi125GV+riAQjbg02++juWLW63xLxFK4JGdAf+4qcA5ZSycM0hCYLljONc1
                                                    nOvq4sOwWBliFTI+ixz4SSf86I8Tq9AzuP8/cnU9IZfL85NH9xKvsvdNEHKFPIVgnG6ymGLTM/ut
                                                    V20c+D6I4Z3VeO+SXlWmNB4+S40gAp1HeuBAN7EZtpnXVwi59tzFXHvlhdb4lwglcHhA8/l1edoU
                                                    s2r/96wYfOpx4WD3+BsJicio6X9KCdsOdEF/HrcGltLGaJxxfqiu5/CzzXvQobZegDEodhtdurbd
                                                    VLxVcEkFgEC/lQAzB6Xgsaf3gDeeMKHpQ2gMZEP++s9uoi7p2WIlJUCICuN8f1OB/iCqrz+bcAVy
                                                    AXzqwfF3D/J9f0T3P0QBgA/9cQfU1cZOrQHqEmMHAQKkHEXX0wdP6HJoGZ5iSmAipnhzpd+7tH4l
                                                    oWeW3fcznnR754zK/zfAQC7gQ6+7iuWLmu3qv0QoBY/v8bn1QEjTzLlcJkRLcSvgqY6xvQAiQj6f
                                                    H9H9LyIc7suwff+hqIJSDSDAhIpkxBTb96VnlSdosgQhiOKaSr9vSa8sremx7p6ZgQgc7s7y5I6D
                                                    NTMBlYK+Qsj15y7h1TdczXi3M8fCnPSYbYhANoD/vclnbpnb59YyCvANPLJTxtUrIJfLjSgAlAgd
                                                    h7q5Z38v8ZqxoMJAZmBcaYMAJFy2bNtjWwOPBwOOC+vT5jOVfNvSdgMUumft3T/DEIGe3n4eSPeR
                                                    dGbGhxoYA4HhHa+7noa62JRd/4MGPyGaehVSp0ISSuOJRhWlgC4+Zro4uGdrge68nonJIhNiqYIn
                                                    egQ/HF0Iaa3JZDIjl9YVeGZPB2QLNbH/D5FXwg/y41d4rqI7fajaw542hCEo4eZKvmepSwFXPI/R
                                                    Uh5E4FDXEejJ4NbPjAZAmWzAB195BeesWDRl178BHDEs8HKkVIgrOuongBCa6BF9r8gbwdeKvHHw
                                                    iz8bjdqY7seHCBwdMPxsW8Di2W79iaoEfm0f/FUfLG0euVNfEAT4vj9i+V9B+Oa6HZCojf3/Y+iQ
                                                    6Aodh5x1FLsO9dLdl6chFbexNmNgNIhh0doO8ydXLZCfVOI9S+ucMXTbKWBmoBTcvn5b1fOPS0Wv
                                                    H3LxafN49UuvQUowETkYzkj00+AEKDFoBFN0jrpiSChNSoU0OD5z3QKLYllOT/RzVrKPs5N9nJ4Y
                                                    YEk8Q5uXZ45boMkJSKmQuERFa7Q51XtQi/On58BtTxfYlzWzfvUPx8XbXTtlxJ0zERm1+p+I0JvJ
                                                    sW3DXupqbPtNCdTF3XEGAgq/397FkSM9NhNgHBgDbozGmOIFlXrP0vYCUPTOCGthQQRu2bKv6vnH
                                                    pSA0kTV9359cR1N9bMp7/waY6xVQjGyUzSn/lhOejIsmLoAKoVilPertLkXDL/hGUdAK3yjyWhGY
                                                    SGRoE73eoDgYvOUqfespgY4+w917AubM0sC/4VjiwJMHhWxocBnmWjCGXC434t87StiwdS80jqNF
                                                    YqWRyPN1woU3Aq4IdGfwczkrAMZJsUvgCyv1fiUVAIGm084D0x8lkD6cgd1dxBfUVXs4U2ZgwOf9
                                                    r7qCi85dUZJOfwLUO/6UVuQn/q0c+7+IQQGCIS4aFAz22DIIQXELIUARGsHXRaFgVPGrRDXGiy94
                                                    8rxbynlYBLYfDNidh8U15qmuJimBDb2wvxtObzl1G8D3fXzfH9EDEGrD7j3tUOXSv8NhjKHgFxi3
                                                    RY8pNu84yNlnL6v20KcFxWtl2doD5pqrFstD5X6/kt62SnHAKr3pjyh4ZucBSNTeBDRRMqGGhiSv
                                                    vfE5OCoqvTnl8wPElR5zL38qmBO+P/4+jhhcMcQHa7I7p/5NYE70HvhGHRMOYTFGQRdXcMLkRIEA
                                                    hQB+vzNgzvR3EpUUV+DRAWg/IqxoPbE2sIhQKBQIw3CE8r/C4d4BbttyMOp9XGMYo8nmsohbx3g2
                                                    pSTh8u0Hn+L1L7+y2kOfFhgDSuG6Hh8BppcA0Jqj5R6wpQIIHDl0uCYnoImgDQQFzX+954aSuP5P
                                                    fu1qMWY3NjF4EpIqbi8Ix4MThwYpDnoN+kKXwEys2JP8/+2dd3wdV5m/n/fM3K4uS7Lca9zSbdlp
                                                    hIQQIAkk9N6W3jv8gKWzLEvbpS0QNtQAoRMSQgKEVFKdnjhx7LhX2bL6rTNzzu+PK7lFtlVulc/z
                                                    +chFlmfOzJ055z1v+b4CfWnDNXs0SydHjmhBmeLAbbvgnIVP/7ejqf+JCKlkmsc37SNeV5k31phg
                                                    1M9KTAnbN3baEMAYEAFlWDjxIx2bgs7wAx7JQrhYLeVDBAYGc9y9ZvMR+49XC4NZn1ecuZDlpy4u
                                                    qOCPATxT2cbRgcTB/KIPee9BSDQxFVDj+DS5OaaG0iyIDjI9nMYRM+qwhlJw3zafxsq+DWWjWcF/
                                                    bJQRRXCOVv7nKOHvD+abb1XimmmMoTYawh2l3rGSfO7Lhm29KPusjIpAgzEsu3OHKXoyYEE/kr4s
                                                    u4OAXmvtVTe5bI6/bu4iOlpR8wokX/OvecsrLsRVFLwEKWeqtzri4KoCPZRhUOt4TA1lRn0ML4D1
                                                    u3zqq/cRKSqOAEnYOXCgJ8Kw+t/R5HENcPujmysy/j88voiTN2xG80qpoZuxafN2qwg4WgyEwhB2
                                                    eFaxT1XQ1/fF82WPCD3WAKhelMC+nn7o7CdUxW9sKu3z/166kqaG2oLE/Q/GAH6FewDGfk1CnesR
                                                    GdIzOBpKoCupWTdYuo57VYkLa/ce6gVIp9NH3P0rJWzu7OG+Pf24FfvuCX6Qwxg9egNYIDvQbxUB
                                                    x4DOSwNfWuzzFP4jMdYDUM0oBXc8/BSEK9MFORoyBiJxOP8ZK4oWe8zpyTebGQMxZxSxEoHBpF8r
                                                    rWAAAGmlSURBVOG+pGGSiEQWB4Gte9ifZam1Jp1OH/nHRdiydTekPMIVOokqEfoHB/D8McTUQg4P
                                                    PLWbwZRvcwFGiTagDe137jSLi3mews9iQl/VrhwWENi0dVdVNwDKpTO8etUCprXWF3z3P4xnVEUK
                                                    80wEgxAajQcA2N6ncXV1qRaWAgP0auHxQEDB7kFIe/ncmiAIjtr9z/MDHt64C5zKNr79wCcaHp0Y
                                                    EEDUVfz28R1kMtlyD716MKCgIVTkDoEFr94NNBmneteO4xoR2NOd4onNe0ad5FNp+EZAMlx64dmM
                                                    ZZMyVjwjo9FCqTrCcmyLSQTu2x3QYt9zDJAz0GOE7kBAad7ZmuTimZrWaQmWtZqhfu9CJpMhCIIR
                                                    5X9FBC/n8/27NxGq8OTbQBum1MfYvHdwVH0KwkrIbOlG+3kPgJUEPjbGgBvCMR7LinmeYsh3rPV9
                                                    nsvkmxsnPUrB7s59PDWQJVHZc9AREFLpQd78jEW0t7UVbaIR8h4AbSSvijaJcIaEiI56/Qpu3BvQ
                                                    eBy/4YGBTi30As+N+6ysz3LW9D5WtQ5SE/YIReMkEzXooXpRJXLU7H8lwoadXdCdJNwULfflHRVD
                                                    flE3Y7GAYw6PPbWD86fUUySn3KRD5xtKnVnMcxTcABDDv1C8UyBiLb3qo2dfD2R9nEQFypAeEw07
                                                    dnDOOa8hGlZF9wBMRhwxOGKOKHIkQNaHzn5DU2Jy3oOR0MCgFrYbIBAIB3xq1gAvmdnP1NoUU2uG
                                                    3Nsmnx6vff+QbP8gCMhms0cu/3NUXv43VgWWt4Dvj3wt2hiS2mB8DZ4GX0PGh8Ya1mzp5FlnLi33
                                                    6KsGrSEcYWoxz1FwA6CjXf5w3x7z82IO2lIcPN9w00MbIFSFE7sI/ckeFqyYy+knzsfzinw+ky8F
                                                    jEswaXIBDKAwKAz+kbq+CwxkDC+a5vC3bk2rEmJiJp27z5Df5aeNsE3nXftvb07zjJYUy9r6ObVl
                                                    IH8zhhZ8DksKFROgtIdWIUSEdDp9xPI/EehPZ3nyqR1VkXvjiNDT349PLK+0qQ3kAsgEUBPh5FnN
                                                    rJrbwuwZbTS2NDGttZl5MxsxAXhWJ2ZM6ADu7TSfXtkmXyzG8Yuj4G0YQ42IpRIQAR1orn5yJxG3
                                                    8iehwzGBB4N9vO9FLyxa4t8hCOS0M6S2N3kY9gAcyaoxBhqiwkcuiHHx9izXPjTANZk4CwTCkyAc
                                                    EhjoMsI+Aye7mlW1OV4ws5dVrUma41kSYT+/6AfHekcMYgIgr+aXzWYxxhxR/nd3Vx/Xbu8jVBVl
                                                    FUIqm2F2UwstrqGuuYFTlsymY8kcahIxQuEwiUSMWHiocZUBL1fuMVcnJi/Y8RygigwAeFIplhdS
                                                    fc1SXESgq2cAtnYTaY2XezhjHT0D6W5OmtnE4kWLhpKuin1GyBqFDHXymyw4HLu0TxsIu3BJ2w5e
                                                    3fEwN+5eyPs2z+SpXJgFSletNsDjviDhgE+0prhk+iAzGweZWZce2uUPdU0YZfmnmADRPrh59bxj
                                                    yf/u2L0PetOEaytT/vdg0tpwYlOcj73vJSyZOwUdDJWtDb13w6Ffu9ufOAYQRUOxjl+UVG8R7rei
                                                    D9WFUvDw2s3VEYM8BMEEKejv4TnnrqK1ubZkOv1ZrSZlqmtoNJUAxlCX3E7MES6d8RRrzvwX35m5
                                                    g5aQzz5dfTdlQyBcfkIP6YvX8cVVWzlrVhcza7L5nb5WB1z9o8UYHJ0F5JjxfyWKn96xtqqab3l+
                                                    QG0sRC4HOQ98P28A6LyMrc30LxT5zp5193abolQDFGWZDgzbre5zdaEU7N3dBW6VfXBG42f7IFCc
                                                    f/bK0rj/h8h31au+xe5oGITwMbQADJDw+on4/UPNhRQxx+c9JzzKlac8wKV1gySr7L7EgG7PIeIG
                                                    +UlxeNEfLyIonUM4uvqfCGQ8n7vv20qsSkJvrsDGgRTp1Oiloy3jY8iQavc8zirG8Ysy22uf9bkM
                                                    g1b1qTrIu/8zPLR+e1UkIR0YuELnekknB3nDZefQMqW5ZDuP4Q57fpUtdKPhWFoAWmBKejOO8Rh2
                                                    gRgjaK2YER9AOX7VlXq1KMMv90TxgsJNieJnMBy9+59SQ9n/DlWjle+K0N+fJpe1BkCxMQbCIUKu
                                                    Znoxjl8UA8Cddv/VKHZbA6A6EIGBgUFu2dVHrFpmIYAgS+AlQQvnrFpBOCQldT0GJt8ToIru2KgI
                                                    KX3M+9iQ3oI+PM4nkA3CXD5QQ7zKEgJdgccGIyQ9BwoydsExOXzfP6r6Hwi7du6p2OY/I6FEIJkh
                                                    8Dwr7VsCtAHHYVYxjl0UA2CFrMgAaftwVAcisK+7D7pTVdUASOf6SAcB82a1ctLSRSV1/8Pk9AAY
                                                    wBV9xIldCzRlOnFMjsMTIBSGHek4ZCNUz3KWZ/hKHuqOFy6vwwT42TT+EQQpRITewRQ3rtleVa23
                                                    BcALSB/Fs2EpHDovud1RjGMXLeBrNI9Nuq3RJEUpuOmB9VRP+rZgvEFMkIZUjpecfyaxSGl3/zA5
                                                    uwJCfoIPHWEXrAxMSW/FjFRAJIbVPU2gqi0AcODintyXKJAHAEDw0/1HzKcQgYHBFLet20Os2qS3
                                                    Iw4bd+6xHoASYPKJlXOLceziPXXCr20iYHWgFPz60S241RL/Nz7aGyAwQCjMGactoxwlp8OlgJOR
                                                    kZoCGSAcpInn9mJGmvlFs7m/kcYqc/8PM0Vge18UU6gqBgH8I8fJlSgeeGoX+EHVxP/3E3LY2tlV
                                                    7lEcP0jhzNKDKdrs1dEm13g5tLUQKxsR2L0vjb9pD9Gq2IUIOtsLxifjBVx0+gKmtLSUrewoOwnb
                                                    AsPIoj5GoDG7g5BOc7ifXDDsy0Z5PBWjvkrf+XoxrB4MsTsZLowXwAgRObJl6jiKf96/HqLFkmMp
                                                    Iq7i8W2d5R7F8YS7eo95Q6EPWtzZy3C39QJUNkrBhs27IOxUQcRGMEEmX/ePQMaj49Rl1CUiZTEA
                                                    hLwc8NgKxCuffAhg5FLAptQ2jDx9wVICXekaHsq5RKrUAxAS+EfGIZktnBhP2DEjusmVCNu7+nh8
                                                    Vy9SFep/h+Iqxf27umwIoAQMqQGGxLC80Mcu6vKsDevsA1L5dHXuqfge5Hk0Jtd34K97k5x04tKy
                                                    io54WiaVEuAwzmH6/gaozfUQCQaOcL2GnkwtT3qhqksAHEYB2ldsH4gWLA/AHZZWPvxcSti2s4ud
                                                    fVmiVef/J58svGlPuYdx3OC6CDC/0McttgfgGt+nzxoBlYkIJNM+9z+5rfLr/0XQuX7MkLpa0g+Y
                                                    dsZi5s1qL3n2/+HkJmMpoDy9nUdzeseQvv0IiOHWngaqvUFgq4JrdicKVgngisEdQUTQCzQPP7Ud
                                                    OHb75UpEiUB3klQmsF6AEmDyvxS8T3RRn72V0+RPQMo+IJVLLpvjT+v3EK10BUDtY7xB9s/MqRxv
                                                    eOaKsi+8IpCbhHkAh3sAlNHUZbdjjqjxbfhzby1Tq9T9P0y9GP68r4AeAPV0D4CI4PsB339wK4Sr
                                                    +NmJO3T19FkDoBQYUIqaQh+26E+fgVtVhW8uj1dEoLd/AHb2EK5wN6TO9sCQvpynDdQnOP2UZWU3
                                                    ACDfFXAy5QEYhjwAQwuXFqjPdhIJDjLADkKAdOByV39d1cb/h8nL3IbpSYcK4wUQCKvDDQDo7Bkg
                                                    vW4PiapIvD0CEZeu7l5rAJQAk2/QObXQxy3F03fdJJobJxVKwb2PbazwJiSC8VP5mv+hGTkXaC6Y
                                                    M5X29qkla/xz5NENJwJOLlzJu6aHb29zZhv6CM1DlWge7WvKiwRUOQKg4MmeeMG8ABHHHJKn4ijF
                                                    3Wu2QBV0/jsqIUV//0BFGOGTHWNADDNu3WWWFPK4RZ+5OtrkF4HPRlsNUHk4CtZtqHD9fxNgvP5D
                                                    v5fzOWHxAuoSbkV0HfONoCfZNChiUEPLf9xPEvf2jVz7DyCGzf1NBRTQKffFGzr7C2QAGIg6B5JU
                                                    BMh6ARs374JQlU+KjiKVTE7KjpiVhjEQiqBi0FLI45bkCdSGR0txHsvoEYHO7gwbtnUhleqGFEHn
                                                    ejH6QNMZAAazLD9pSVnEf0bCn4RdATEQURot0JjZRSh4eu0/Q9/JasX6/noaJokB0KTgoX0xcn5h
                                                    3ouoo/dXTogSdnb18ocNe3EqPe/mWCghm0qWexTHFw5TCnm4kjyByuEKo/FtrKhyUAJ79nbzcG+a
                                                    WEXOQwJBDuMnOXjh8Y2BxjrmzZxe9uz/oVHiGyGgGsooR89wHoAGGtObMDKyl0jEMJCLcG86QtMk
                                                    uQENAvcMhEh7bkF2t64Y1JBxJCLs6+4jtTdJpMLzbo6JUniZtI3wlgoDBNQV8pAlmfqXt8hfNOyy
                                                    BkAFIdDdtQ+SWdyK/GD0UOLfoWS9gItOX0gkWvCKmHETMAk9AAhhZajN9RH1+4+qdZDxYlyTjI2Y
                                                    AGgO+qoWImK4fiBMOucWZOQiEFEGQz7+/+u71kFkEpSOOsLengFyucmohFF55J8fGgp5zJJpUApc
                                                    qxzeVQm7NgsEAdy1ZkuFxiEF4w3sr/k/hIzHM09fRjwWqpgQgAE8o4hRIQMqECFlmJLecdRKdRHN
                                                    E4N1oB1E5a9fA11a6NKSj6MPJwdqASO0KUODGCpVAE8AAsVjPTGm1qUnbAMIeQMgq4VAG/5y32Yi
                                                    0Up878aIo9jTO0DO83Cj4eqy8qoUIzQW8nglMwB8n9sFXidCbSUkbh3PiIDWhl8+vIVIJSYAmgDt
                                                    DXD44j/kRKWpra3cIzyE4Tg4jmGyZEQZIKLTuLndIEdZrMRwZ289DcrQr4XtgYCj+cSMfp7dkmZK
                                                    zEOGugPqwGFXKsSNXTG+0RmHtAuuYaEyhCrstsWU4aHuGM+eU5jPNOxolHZ5bPNuSGVxY7FyX+LE
                                                    EWF33yCe50G0yisaqoG8K62hkIcsmQFwxnT59eo95oOuYmWl7NyOV0Sgq3cANnURmVZwbYkJo3M9
                                                    YAIOn3g9bSDisnTRgoqI/x9MVudduqOxbUXysWAlghwUftHGoLUBYypgMyU4BETIHn0sBu7raaQ3
                                                    gJdMyfDK+d08c0YPof2Z74d+hqdgeN4C+LoRnuiNcfPmZq7YUcODGZdFjqkYGeFmgSf2xQt1K4ko
                                                    gyA8tWlHdTb/GQFHCeu7+/F9v9xDOS4wAEJzIY9Z0ifRGK5wXGsAlBsl8PhT2yFRaRORYII0xh9q
                                                    9nMYXhBw+qI51Ne4ZLPlHuuh5IziWBaAUoI2EASaff1J1mztYtuuHjw/IB6LsHBGM0tnTyESDuE6
                                                    eYMiKJulY0AcjBNF/NyIm2Alhm2pGu7xXP53UTf/tnQ3sVCQd/UfUR3xwIGWNKRZcup2XrwgyuVP
                                                    tPLf22upN0JtBegJaAwq5IIKQzDBBc7kmwIlM1nuW7+rutX/DsIVYV9fEh3k5YCtZ7fI5PcG1RkC
                                                    AFjZJv93X6f5hg0DlBdRsGPLDghXyn5rmMOa/RxOMscLz+2omNj/MPlKAHXEREARCLkO2/YO8Ieb
                                                    HuHjt2+Ex/ZAzMkvBgJoAxkN0RAXdUznJafP5OTFM1kypxVXCUGgMZiSTrJGORg3Ctk+Ri4BNGwa
                                                    bOCvZ+xgRXtfftHXY3CXD92vqTUZPnvmZl6ws4HPPDSV6wbCzFbgkPcIKPJGaymjBDt9ePZCQEWB
                                                    p4ejxkrYMeSyWf742E4i1V7+N4QjAj1JjK6wF3KSYgyI0FTIY5Z8CyiKvynhpZU2iR8viEDvQI4n
                                                    t+6BipqIBJ3rw+gcI022Zsj/deLCuRXn/h/GM4rwYW10RfKJXzfevY63XnEbXd1piCjqZozgXq6D
                                                    wBiuf2wH1z+wHRL38YrFrTy7Yz4XrphLLBqlNhbGGE1QCglEcTDqyLHdwChWzvSJxgYgmMCzZAQ8
                                                    h9Pb+vnFM1P8x72z6cw69ARCly/sDYSNwZBxMZxYKNAIJATCAi75pMJCGAmBgZkxWDlD8CWKy8CE
                                                    jxl2hMc27sxX3dRHCjDK8iMCpHOkMxXmjpukGABd5QaAp7nGhYtFiFsvQOkRgf7+Qa7b2k20kgSA
                                                    TIDxjrzT8oyGlgZCkcop/zsYTT4PIHyQ6pujFJ42fP8Pd/KJqx6ChKI27h51kXJEqAs5mBBkjeY3
                                                    j+zkN/dsg8Z7edtp7Zy5dDonLZ7FklnNOCIEWmOGcweKgHFCjBjXMAaJ1hCNhQvn+9VCQ8Tn68/Y
                                                    QF/OIe07ZH1FLlB4vovWCs932J1x2JVx2JZx2ZFx2JRxuTvjMJhxIecMFTfnjYT9X8N/B2ICtUAE
                                                    CMkBT4MMGRA9Gt7UbqiPg+9HCzNJOvDI+u0QqTSv2wQJK/Z29zF3zoxyj2TyY8BIYTsCltwAOKNN
                                                    rrxvj/mEUiyxXoDSIwJ9vf3Q2U+4sXIWU53rIb/QHMEACAznzWohnkhUbKxxIAhR4+TjxY6j2Nk1
                                                    wEe/9zeuvm8HifrImMreBIiKEA07EHbI+h4/vHMzP7xlI6R8mFbHR89bwEvOXEBDQy0zW+tQUvhQ
                                                    gQmPnAgnbhgVqy184HcoLFAf1tSHNYcYH/vvnzns70PfG8rBGMi69Ax9DeTyX+mcSzbnkvVcuj1h
                                                    j+ewNyfs9RXbc4onfEXGU3lPhgfnzNfEXPCJwiFdEcZPWD09sbXqCTvs2rvPNgQqESKFzQ8uSxaY
                                                    gZ+K4iuTrGy6KlAK7ni0khoADTX7OULi334CzYKpzdTVxCvSABBgMHDxjCKiNL2DGf7jJzdx9YO7
                                                    qGuYuMs3ooRIxIGIg6kNkfZyfO3aR/naX9Zw6vRaLj6pnWWLZnDWshk01MQIuc5QaoHBjPuGGbQ7
                                                    QrmaMUg0MVQeWKQPY/9h5ejfG4HakKE2lGNWTe5Qo2HozzoQclrhBYKvFYEWAq0wWuFrYXfaZVGT
                                                    g5tyEHExohAzwcnKwKLpDeDpCnr3CoCjbEvgKqYsBkBHq3z1vk7zVuWwwOaPlBal4C8PPIWqmATA
                                                    YyT+DeMHNLW0EA6B55V7zEe6Etidi7KgPuA7P7mJn92+hbqGwtdHCxBXAnEXbeChvYM89Le1cPUa
                                                    UA4vWDWDl6+cw/y5U1kwfQr1iTB+oDE6bwyMesk2Bh2KD2UfHTwAQcJxKlb5xQzfJUY0GhQQVYao
                                                    Y8h/aodex4zGoW+nDSE4ug7CqMdkOGV2I6R1Pv4wWXAVe7t7yz0KyzgpWx2YCbjGCB8q9w04nhCB
                                                    vT1Ztu3oJh6rhBJAQef6MeawZj8jkQuY0tZakbv/A1cDGePww388wX/98TFqm4sfYlECdY6A40I0
                                                    bxBc+8gOrr1vG8RDnNUa58yTZvH8lfOY095EQ22MaNgl0HpUeQPGjR5W3WiQUPSYJY9VwZE8CsPf
                                                    L+S21hjmttSCq44S6KpClKLHegCqlrKtAh3T5MP3dZo3iaLBVGhW92RDKdi0bTeYoRKesiIY7Q21
                                                    +h3FWDI+09vbqORnxXFg265u3vvzmwg1RsoyySuBuqG8gZwx3NmZ5M5tj/GNPz1CbGY9H1k+nRMX
                                                    zeCURdOZ21aP1vkEQmMM+gjWlXHCB4SZDOCEynmbqxMDjuvA1DiZTI5YtTcCGkYJg/39Ez+OpSyU
                                                    dRtoDL92Fe/wK3hSn2x07tgNVELzDjPk+j/2fsgA5DTzZ06nFNVv40EEMjnN/1x5AyTTxCLl97CE
                                                    RfJSDzEXE4Nkb4ovXr8Wrn4cej1mrpzOB86ey3mnzmFKUx2tjQmMHi4xHE4kNOhwAifdgxl2hU+G
                                                    3X8ZiIRDXDarjj8/sTdvqU0GREgmU2Ry4GAfi2qjrLNU1ue3IrxUFFMqeWc3GRCBTDZgzaZdFdAA
                                                    SDBBBnOEHvOHkws0LJmB46iKDQGIwI23P8DNj22jpiLCK4eND6hxBGIuxICGMNt2dvPhK/fC7x/i
                                                    krn1LD9hKmeeMoeT5rYRj4WJhpx8o6PGBejIPsRPIV4KhZOPi5vh+LnOZ+/LwWezHIIxxMIup05N
                                                    8OfH9sAkcaKIQF/Op38wRWNt3FoAVUZZZ6pzZsjNqzvNrSGXl3i5ct+KyU82m+OXa3YQccufAGiO
                                                    UfZ3MH6gOXfO1MLGZAuI48DWnd18+uc3E404pemxXQDqXAU1Cs9ortvYzXVPdsFVD0FznLefMZPn
                                                    LZ/LjGlTWDa3DVPXij+cRBj4KO0hxkdpH9E+ynhIkMv/rvNfeYY+s0M+u8r8HItNKOIyd0oc/Mmz
                                                    SiqEfi8gncnQVFeZFTqTigI7b8u+Velok5fe32n6RVFrvQDFQwT6+gdhWzeRlgI1ORnfSDD+ICbw
                                                    xrSgO0oqctkQgYFUjh9c9TcQTViV/ZUaMyERQq7klSFjLjkdcPltG7n85g0QdbhgThPnnzqL5y6f
                                                    S2tTHU31cZQTxdea4JAJ3+z/XYxBtIfSWZT2cHQubxiYADEaTJAvrRteMfY/C5X4KReOWE2cio1j
                                                    jQMF9PiaXLZCS3MmESKgDQVNuKiI2UrDn5Th9eUex2RGKXjwya15/flyMtzqd6y7eTNaf0FpCblw
                                                    478e4vqHt1Jbga7/8RBWQjiad//njOGfm/bxzyf28Klf3c+5i6fwvBPbWXnafFYsmkbYcUaQJhaM
                                                    CMaJop3oUO5gPnFA6QBMgDIBGD3kQciR8zziksHROdhfGzyStm+lPQFjwBhqamMcZjVVNSJgAk3O
                                                    y1XzJ1MdCKDoLOQhK2LG6miTN9y3x5ynFLMqVee92lEK1j65GcJl/MhF0LkBCHKFqa0uM64DT27e
                                                    wxe+dwOJ1vikmwAFiIgQcQVqFNrAbVu6uW19F/zsAZjTwPdfeDJnnTyXudMa802L9MHCQ2b/b8MC
                                                    ZkYUiCIgr48QDJ8oJiSHziomQOlcPsww9LvSPipIo4JcxYaCjokxnDy3FdIa01jVpsx+FECgyeW8
                                                    yXFBFYwIOIadhTxmRRgAQ/xChE+WexCTERHo6c+xbXc3Y9KjLTSBh/GTk2LxF4G+wSw//t1N0BSt
                                                    gLLK4qNkKG/AVRB3GUxmeOcVd9I65SFecmI7LzxvGSfPa6MmHsZR+f6whryXf/j3A5jD/nhocFOr
                                                    CFrlFRSNCGI0YgJiqZ04/iBVudpow/SmOGQmkQcAIND4vg0BFBsBtLC3kMesGANgRav8+32d5uWO
                                                    wwLbI6CwiMDuPd3csWcwryBXnlGgvf4D9eRVTjgMN1x/P9ff8xR1jbGJH7AKqXEEakJ0pXJ8/45N
                                                    fP9v61m4sImPPnsh0+csQsWaqIkZ6qLQFDNMiZv9qvrGPN0wGLIDhn0F+88jQz9glIuO1uOkBob+
                                                    Y/U9RxJ2SxICGGodW/zrEYFAE1SqPOdkIv95Tr4QwDAGvqYNl9s648IiAr37uqE/g1tbeGnaUYwA
                                                    E2QxXrJ63bcHoRTc/+gWvnz1XUQbKqehUp6hl8cYDHpo8Szuy1QDEALTqFjf2c3bfnQXqHsItzcy
                                                    Y9ZppOPTqE80UeeGmFqjmVenmVcPc+tgVh2EQhB2DZEQxEJQE366gWAAVxn+trmW7r3tnDdtgNba
                                                    NNFQkG8RXCXGgM76RffCGSAWCZH1/An0gRgDgSbw/eKf5zhHABOwp5DHrCgDoKNNfnj/HvNmx2Fl
                                                    YJ+ngqENrF67Ld/7tCyYvOJfdczRR0UEPN/wjav+CUFAOFT+ksrhG2u0l9dWCLJgNMYEDBsDpSIB
                                                    oEBj8LZ3snHzIzTVJOhpXUJk/koeyc3l/h6XTm3wg3zCjwrDGTFhbhSmx2BG3BCLQ2MNtNZCe42h
                                                    NQH3bBe+84Di7/0tsLaZj0zJcFpLkgtmd9MWzx0QKKpUY0CEgbRX1Fl3+JOeP3sGmzZvI5nzi2pz
                                                    C4DOl4ZaioyAKLoLeciKMgAAsgEfjcDVomi0ZYEFwsAV96wnUpYEQMEEaUyQYSIWgKqQMkBt4Kpr
                                                    buXR9buoqyv37j+/4pkgi8n1YoLsgW8f+oeSo4CIo4g4UTI5n9TWB9n71J3Mbm6gdsFzaG1dSDbW
                                                    DgjaaPamDDuT+fB4N0Lu4D49RvJ/dmB+GJaGNBr4RVeMr++JwcOtPKM5zSfm9jOveZBFTYP7A6YV
                                                    ZQwI9CZz4BZvTMaA4wjLFsyle9du+nIeoWI/B8ZYD0CJ0AE9hTxexRkAZ7XLbat3m5+Gw3zQswbA
                                                    hMknAKZgazeRqYmyjMHk+plIEZ9yFHdvK2juy7hwXXh07Va++bcHiNVOvMXvxBCMzmFy/UOKiiUK
                                                    +o5npCI4TohYLMSupI+5/0/UJ2qpaZ5F/YJz8WpmoNw4LhA3mqZRHFMBTcrQpAA3YMdghIsfamFe
                                                    uJlLaj1OmdrPS+f0Eg75xMJ+ZRgDIjyxeQ/EVNGWZI3BFcXiuTN5dPX9bOhLEip24q8SkumMFQEq
                                                    AZ6QLuTxKjIdu2OqfMjz2OxUgne1ylEKHt+wvUw9yIclf7NMZDcadRTJhzbRP5gs2xqnBPqTHh+/
                                                    4q/g+4TKvNgaP4lO78EEqaHvVObifziOKNxQjMGsx87t63j0H98hddc3yW28iURuD7gREGfM1xMV
                                                    w1LXEAqE3/dEeMuaVhr+uoD33jGHvz/VypaBCIR8UBqkPCuV72nuXrOjqO+iHmqFvGjOTBrjkdLk
                                                    ACihP5meTPpGFYcIeDkymdwkDwEMY+AzgeYKEcLWshw/IrB9y3byXWFKjc43/Jng2iQAtSEefmId
                                                    559xGn6Jq0SE/MT6x+v/xY5dPdQlypFIeQCd6Tqoj0J1LPyHk/cKuDhOLTu7+5Gu69j+8HXMmTYd
                                                    mX8Rkfpp5CJNeVGgMcQCHYFGMTSqfAni3/bF+FFXDGjjwtos753fy2ktg7TVZAg5GnSJ9kBK2NrZ
                                                    x+fv2I6KFO+cPoaGkENzYz3KcUqTTO0IvYOpfOVBCU53PDLUemPLs2fLxkIetyI9AAAdbXKlgX9a
                                                    L8D4ESCTM+zp6svXbpf47MbPYPTEdv/7ibrs2ra9LBICjgMPr93MN/98L4l4ebu46Fwvxk8xmaZa
                                                    RymUG0G5YTbu6mTb7T+k++4fYtZdRzjblS81U2P3CghQpwxLHcNix7A+GeHSB9s489Y5fObOufxr
                                                    Vws4LkOJBhR1tXQUP73xCejPFrUVsDFQF3ZJJFy0KtHLIsJAKo2xLoCiIYDRhd39QwUbAAArWuXi
                                                    wGe7NQLGicBgMsP6zv4ytB8dyvwvFJEQdz28ln09qZKGAZSCfX1pvvWrGyEkZRT8EYw3kM+nmARC
                                                    SiNfoRByHLQbY0/3PjY88g/W/eXzcP+3CTofJ6oHMU546PrH9jkoID4UJkj4iv/aFqcn1EaqfiGp
                                                    mjl4kea8bLHRB3U5LBCu4taHtvHF69cTShTZ6WoMdbUJ4hGGjKbShAB6BtMYYyo1DaXqkbyzb6DQ
                                                    x63omWTI9foZHRDYB2vsiEA2m+W+rgGiJTUAhmL/2qNQO9WYq7h9zWa2bttOqTY2kHf9X3n1LTyy
                                                    fR+1ZeuiKJgghc71TdrF/9CrzXsFQqEIhGtZv20nu+78P7bf8h0iT/4WUl2EyGGUy3ieLwPMqDWs
                                                    nK7R2hA4cTLRNpI1c0jVziUXnYJRofyxJ1qKpBSPb+rish/eCWEhXOzXUBvqGxvy1QCuW5oQgBJ6
                                                    k6nS5BscpxgDgSE18SMdSsXPJh1T5ScG/hkqb9i1agk8j+y+ZMmT1ow/lJleIJQIOPCbG24lVKLM
                                                    lZALj63bxk+vfYDaiFsmp7uA9tCZgnv/qgIBQo6D70QZSPbz2KN3suvv/0H6wSuJdN5HSHR+sR6D
                                                    V2BXAO+cZYiFhyUSht3/kjcGYlNJ1swjnZiJF2nK9y8Y1lQYy8AjLqvXd/Kq795GX2+aRClkuANN
                                                    c1MjAK5bohdFhL3JDMaqtxUHAR0QCDxa6ENXvAEAsKJNnpvLstaGAsaGCOzr6YecV2LXnC5KnDoS
                                                    CXH9rfezfsveonsBlIJtu3v53BV/QRrC5XNtmoAg20W+EP74RQAlikgoTNaJs2XrOtb+60o2//mj
                                                    xNb/GtW/jbD4x/QKGCCn4Oy5hpAa+SfEaIwofDdBJt7OYN0iUrXzyLr15LQcGNCIaECT9BRf++39
                                                    rHz/tTyyJ0miVEm4vqZtSmM+IU9JSTwAjghPDlgPQLGQ/C+eK9xa6GNXbBXACHfhv0TxU9ElFTar
                                                    akRg/fa9Ja4AyAv/YIKCu6sdEVDCmsceZ/a0Zxb1KpSC399wF5v39FEXK1fin6BzvVDAUMpkQADX
                                                    ccFx8YzhkUfuoSm6mnDzQqbPP5V040loJ0JAvonQwXgGTgvDkqmjkeTf35iAwE0woKB7IEfc0dSG
                                                    NDFXE3X0/h/VCANOM71OC1uTOT72f1cQnhoprffN17Q01pPzoLerNM2/HIEglbXy7UXEgF7eJv8s
                                                    9HGrxgBY0So/W91pLlCK19kHbXSIwBNb93CErU7RMH66KKI0AhALcfl1t/CMs1ZSk4gVxRhUCm5b
                                                    vZaf3vAgNWUT/BGM14/xBo+LuP94EREioTCDvsHsXs/ObY/REnOZsuh84lOXEdTNIWscxARgDHsD
                                                    eM1CQ0MEsmMQrxMMqWQKX0O/cejzHAyCIwYlBq3BC9XiNc3BUeBJL3gZQlJitUgvoL2lie27enhi
                                                    by9OqRJm7K6sqEiRdgBVNbN0tMnrMTxWqtBWtSMCT23fC04JP2YTFHXHmnAdtm3axd9vuaMoYQCl
                                                    oKtnkC9cdTMqESp98QQw7EU5XpL+CoGIoJRLLJKgPwiz7pGb2XLr5ez659ep67oXN9eHq4Q+Ubzo
                                                    BPDHEVFJp1OIyFA4ApwhQSFt8pLMEq3BkfykmkpnyuO0CQytTY3s6+qiqy9V/KRDS9FRCrRhbVGO
                                                    Xe6LGyuB5pNBQH8pM8GrFc+HbXv7SuqCNPub0BSRmghX/vUWdu/tLagRIAJ+AL/88y10dfZSU0rD
                                                    6cAowPiYbA/Wpzo+lAjhUIRUIPT3d3HvTVcycMf/sPfhP/HCyBYaEnrMG9ZcLod/NL17Y9Dhmv2K
                                                    zP2DqZJ73rQxUB/HCYXo6+mGrJdPnrVUNaJACQ8U49hVt4yunCrXmoD/J9UrglYSlIKde/vpzQXF
                                                    7D1yGPmMdXRxDYCEo9i6cx+//MNfCrpBdhz41+rH+NlNa6iJl6vsROclfo2PfcAnRt4r4BCPJtg1
                                                    kGPXAzdzgfsQbXWhMcnWigipVH73PzIG40YxoQPu/r7BZMnFtzxjiLXUow3c+ciTEC2vaJWlMCgF
                                                    xrC5KMcu98WNhxXt8oMg4OaybNCqBBHo7umHwOCUcCExQbYk61asJsIvrrmdDZt3UYjqEKVgV9cA
                                                    H/rhDYSjTplc/6BzfRhtF/9Co0QgK8yaP3/MinVaazKZzJF/wJDf/Q8hAoPJdEkS8A7G14bFDTWI
                                                    Ulz/+EacimhVbZkIIuBlyQaGncU4ftUuoSva5Fk64EnH5gOMiAD9ff0Q6NKVsIlMuO3vaFEiEHX5
                                                    819vJOdN7BpFwPMNv7nmNgj8EosmHRiE8QYx3kDFdvWrZlIZn5mnzuJZHUsJgrF5qIIgIJfLHdkD
                                                    IIKO1B7yrYFkqrS5NwDaMK2xlpzn0ff4NqJ2h1T1SL6Sc1fKcFMxjl/VT4iG9wQ+SZsP8HQMkB4Y
                                                    BGNKtpc02gNTur7gsViYK6+/k3/ccgehCXg7XRf+cfsD/PTvD1NbppI/42fyJX92519wkoGGRJSr
                                                    P/YKxloaLyJks9mjGw3Kwbix/QcWgcFUqvTy29owvbme9Zu3Q8zu/icDwxLA57fL5mIcv6qXzo42
                                                    uRHhP7S2m6bD8XzYtqeXUiUAGGDAy5HTpROsUQKSCPOpX1zDjt2949pw5XMlBvjK1XfiJELlWX6N
                                                    xmS7sUl/hScwwPo+fv3O57N47gyCYGzPp4iQTh+tBbtBO1GMe6jhmEplymAAaFoa6ti7Zy9Y9//k
                                                    IF9g0lWsw1e1AQCwolX+y8BXAG2NgDwikPM8HtnaVTI35EA24NMvP5+WmjjZEhoBcUdBMsV/fvfH
                                                    pLJjUzzM3yfN1390LQN9KRJlcpnq7D6b9FcEktqQ2T3If3/hpVz8zOXocSSnaq1Jp9NHdv8bg47U
                                                    Pe3bqVSy9LsSbQjHEyT37YWy9a2wFBIRMIY/Fuv4VW8AAHS0yce14U82H+AAOtDcuquXSAkWNd8Y
                                                    CLucdtIi3nDJefjJXEn3svFomNsfWMc/b7trTGWBouDWex7lnw9voTZajodH0NnekuVNHC8YIJn1
                                                    wQj/96mX8eYXPjO/kRrjQzns/tdHM2hF9pf/HUwmnS29B8BRbOsZYP2OPWVo/20pBkqgY6p8t2jH
                                                    L/cFFoqONnlp4LFuIrHgSYXWsL2HcAkmoZQ2dExJ0FBfy/OedS4rFs8mlStdLoAAbm2Ez/zkTzyx
                                                    fsuoqgIcB7bs6OITV91MKF4O13++w1++ZbJd/AuBAZK+JrU3Rdv0Kaz+73fyqovPQYmMW6c+nU4f
                                                    5f8ajBvDOIdOOiLgZTKl9wAIJHMBj23fWxLD31Jc8h7KwncAPJhJ9ZR4cK7nsf54VwoUgV1dvWB0
                                                    aZaWwLBwVivN9RHqamN84E2vgKRHUEJ50IhSoH0+/J2fkUx7R/UE5F8sw+ev+As6kyNW8qx/wegs
                                                    Otttlf4miAF8A0k/INWT4fRpjfzi86/msW+9n6XzpqODYNyL/6jK/0KJp32GBvBzZTAAEOKOYfu+
                                                    PlwbD616HAcw3F7Mc0yq2eeMNunM+bzTD+g6njsHKoEtu/aVrglQLmD2nGn5ntUBLFs0lze95Hwy
                                                    g9mShgISIZddG3fwq99fg+cfpTRQ4MZ/PchDj22nrgzJUtoEmMy+ifeaP47xjSGZ8Un1ZsnuSzOv
                                                    fQpffMuF/OFL7+BF568gGnbHnPB3OFprstnsUQSAhur/D/vnnAfZEnrA9qOE3oEyVB9YioIBjGFb
                                                    Mc8x6fbKZ02Xf/6r07w6GvA75VBfZFG6ikQUbNvVVTop0kzAGSfOYzhUajS84eWXseapLdzz1DYS
                                                    4dI9ZvH6ON+76u/MnN7OJReeRS536L+7LqxZt4N///lNxBtL26hFGxg0hrkxn11JD6eEu/+cMXjV
                                                    am8YA4HOC/jnNGQ11MX4t/OW8uzli1h8wlxOmjcdYzR+EKCHhH5kArtgEWFwcBCtNepI7qQR4v8i
                                                    kErnSGa9kkd2Qo5i/bZdhMoR/7cFLAVFBAKfvkDzl2KeZ9IZAADntMk/Vu82X9EBnxUhcrw1qhKB
                                                    vn09JdkJZLWB6Q3U19fsT7LSBupro7zl5S/gns98myDk5Fv5lujaVX2UT/zkD8ydM5MT5s7cb5go
                                                    gb7BHN+96h+AxpXS7f61gUFf86bzlvHjG/5GvITiFTljmBINMasmMgoJXIMgGAzlzk0wGFwR2moi
                                                    NLU0Ma2tkfnTp7BoRgs1sSixeIzaeBSMYc/evQU/fzKZPKr8rw7XMJKwQCaXI+n5JQ0BGKAmGmbT
                                                    rj2ESiyMEhggES334zKpGHp0Bs6YJn8u5nkmpQEA0DFVvnzPLhOqqeXz6RTHlYWazUF/3yBFaZd3
                                                    +Ln8gFcsnU44fKh2vu/DaSct4QOvvohvXvVXErWxkl1/zFEkM1m+8L8/538/+yHqa2N5I0DgL/+8
                                                    h7vW76Y2Xtps0cFkjg+++EymT62D/jTSkCjZub3+HB9/3fmsOGHm/t3xUcnXHpcdg8FRisaaGI7K
                                                    J/JpY/LXYAKyqQEyyYGijuGo5X/huhF+Pt84aCDnlzS+aoyhNhalq2+w5KkHQaB51szWI3tKLGNG
                                                    KQi84jQAOphJawAArGqXL6zuNM1KeB9yfLSsVgKd3QNs6E6VYv2HnKZj8UziUYfDm6UpBS98/nP4
                                                    3o13kRxMkihhbXIiEuLxp7Zx5e/+zDvf8ErCYVj9yCa+duVt1DRGSrpZ6c8FLJs9hVe+8Dx+euVv
                                                    IVw648M3BpTDeSfNw3VVVb4DQRAwshCflE8ATLnocGJEQymby9Gd80vaiU8Az9fl2YV7ASfNmYbj
                                                    OFX5fFUiygHf49qin6fcF1psOtrk/VpzhRvi+HBRCSSTadYMZIgUOQRgAERomDJlxBdfa2iojfL9
                                                    974ecrqkVQEA0ZooP/7r7Vx34y309uf4+dW3Q22opBPzYKBpqI3x2bddSi6bY+1Tm0uq0pbNBHzg
                                                    kpNwHIXWBmOq76vyMBgnjHFG7hjpex59XlDSXDwRYSCdLs8UlwuYO63Vag8VCBHIZUmmdPE9AJPe
                                                    AADomCpvzXlc7jqTXzJYBDLpNHogU/RSIN8YEFiy4ECc/XCCAE5atpj3vvTZZLqTJb0XjgjRaIjP
                                                    ffdXfPq7v+G29btKmvUfGIMe8PjWuy5j6YI29uzt4uatewmXqEY7MIAIq5bOQtnM8MJhhuP/T/8c
                                                    RcDzPChxCCA/rNIbSwbAdYjV1E70UJYhVH6KeuLcaWINgELR0Srv8Hx+P9kNAIBMKg25oOi7gXSg
                                                    WbFoOnWJI7v+jAFXCa988SU8++yT89nRJcQRqGlu4fanOqkrodqfAZJpn0++7lxOPGEWfgBbt26D
                                                    ff2ESrQYZ7TmnJn1nDBn2tHV7CxjxKDDtUfMkwg8H/ziv3+VgDYGoiFiNTUTP5gFgMAHNPeW4lzH
                                                    jQEA0NEmL9OGqyOlrf4qOY9t3l2aEsCMz8UdizhWubU2EI+G+MBbXg01CZJ+qWozDYiLijRQW+Le
                                                    7APJHM/vmM+lzz0byO8M//XIkxArYdpNLuDkRTOpiYZtbLaQKBcdjh/xn4PABy+YUBliteAPvdt1
                                                    dXX2GSsAIiDgL2+Xd5fifMeVAQCwolVelElz02RNWDXAfRuKbwBoY8B1OX3pbEazuQwCmNHezBUf
                                                    /DfwDd5ostEnjKAiTVDCcj+Afi/gnCXT+eibLiXsCsaAH8Af/nIn0UhpEgANQFrzivNOwi+ZwXUc
                                                    YAxBbMpRY4kmOH48AL4xzEtEaJvSaA2AAqAUaMN9pXp2JukyeHQ6psoFvuGuySgZLMC/tu4jWuQ4
                                                    86A2rJjTTLymZtQvfr40cDFffPvLyfUki1xpZlChWsSJUMqatpw20JPh/a99HrWJCFrnX+rN2/fA
                                                    YLpkeggpT/Pc5TOIRqOVUNE3STCgXIJY41EfKRPooQSM4wBtqK+rIRGzFQCFQCkQ4V8lO1+5L7hc
                                                    rGyVszyPq0OhyZUYqA2waV/xmwB5mlUL2pnSmBjbi2/g+c95BpdduIrUQGYM/3EsGFBhZIQ67WIS
                                                    GEMmp/n6R1/MormtBwSIFGzcuBHqIqUbTDbgeafNoz4RrdBM+irDGEDhNczCuOEj/xjQn0zlk0+O
                                                    BwJNy9Q2u/gXAKXA8+hMBlxTqnNOwj3w6OmYKi9avcdcpeCV5R5LIVAKduzpK82nmguYNW8mSmAs
                                                    6WXG5KWC3/WGl9Pb18+tj28kUWi3uChUpJG8fVu6mSk5kOMTrzmXC846kdxQrqMA2Zxh/boNEC2N
                                                    +18DpD1OXjZvAnr4Zv+tGzaQi7mkKcdBDo/LGUMQBEUV8Bg+8hGNJBEQFx2O4ddOy5f+HW33b6Bn
                                                    IHn8GAA5n8XzZlkDoAAMvWfbnzlNitoA6GCOawMAoKNVXnVfp+mOxXlXOk1FKKCNFxHY0bkPwiVw
                                                    7PTnOGXRnFHF/w9Ha2ibUseH3/Zabn3n58m4unAhC6NR4QZEhSnlh9mf8XjmSTO55IJVh94TgWQq
                                                    xb1PbStZ/X/aD5D57bQvPI1MNju+gxgDGMQcqHaTYpkAAg8/8ijbN6xHDXfxMgYnGue8Cy7AcZ2i
                                                    fJRm6FdtOKKRYURh3DDGjYxuDAZ6B5JwHLTjzeeZ+Kw8efG45gHLoTgu5DyuKOU5j3sDAGBFm7z7
                                                    vk6TVIqPHmUuqHhEYO/e7qIvNKlAU3fiNJoba8fd0M73Yeb0Vn7wuXfxji99n1xEChC2MIgTRcL1
                                                    Jf0Q+72AuW0NfOpdLyEeDR0yGYpAX08PD61eT3xaiUISPWl+8NEXk3VC6PGqDh70UQRQPFtK8l8P
                                                    bO3l6z+8DRqGJKO9AOZN587nvZBwqDgGwOHXeUTM6K/fAF39A8eFByDlByw5eS719Q1VO2dWCnkJ
                                                    abxV7fKDUp538pupo2RFm3zM8/kOBl3NFQLp/oGiNwHycwH/tmL+SH1QxoQOoOPUZXz89Zfi9afH
                                                    FEoYEXGQSENJvTieMSAOX3rb82lpjD9tJ6QUPLp+E8TdkmSFpwLNtLmtzJg+bWLdhs1hX8XCgAxp
                                                    RVAXJpEIkUiEoCbE/LCDYIp738wovsZ4vO6B1ORKLDoSuYBnn7SAurrRJwJbRkY5gHBTyc9b7guv
                                                    JFa1y/t84ZXasMctba+YCSNA1oOunuLuPgyAhtMWz5lwr4HhOeMllzyH977mEtJ7+se/1hiDCteX
                                                    NOvfAOnOJF9947NZNH/G03ohADgO3HHPgxAPj/n44xpTzueS0xczrX2KdcuWAQPs6U+WpBNn2cl4
                                                    zJo3h5D1I08IEdABaaP5U6nPbQ2Aw1jVKr/zc1wY+KwJVZMRMNQD4PFdvUWNP2a1YeaUBE0tzQWx
                                                    +s1QjPnfXnkpL3remaRSuXEs3wYJxRE3XjLXvwEGMj5veskqLjjnlBFtDhHY251m/dadpYsJ96U5
                                                    44yVVZ3LUtUYw6b+5PEhvdyT4cSlNv4/UUTAaHZ3tMnlpT63NQBG4IwZ8sjyVjnRC9gQDleHN08k
                                                    34Xsnr0DRIs4+eS0YXFLLdPbGgr24huT//rYu9/Is06aTyo51sQ1hQo3UMrHeSDrc86CqbzpZRfk
                                                    E+ZHWHCVgh07d7OxL13Uz2SYwBgIRzhx8QI7KZeB4XmidyBVMr2HcuFpDTOamN5Wb5+1CRIKgVb8
                                                    ohzntgbAUVjRIgsyOX5rDKYa3ufA8/A6i6w1n/M56cQFBe/8ZQxEwi7/+cn30zG/nWRm9D0DVKQR
                                                    xKVU297+QBNNRPnE219IIhY6ch8EYOfWLTCYKcmCkBnI8Im3vADXtaIs5cIAdA9OegMgl87xrhee
                                                    Zxf/CaIUZLPs3JWhpMl/+89f7htQ6axsk1cY+N9hV3WlIgL9g6m8BnkxT5QJWL5kfOV/x0JrCIcd
                                                    PvXBtzO1oYak5x/jfxjETeRd/yVa/H1jwDN85x0voL2l/gh96of6s3uae57YCPHix5Lyu/8Qixct
                                                    rOjndNJjgL40ahILARsAH1advNgamhNEBLThictmyc5ynN9OFaOgo03eawz/rgMGKlU+WAQe37Qb
                                                    IsUrAcxqA9ObmNbWVDTLX2uYM7OVr3z4baAckkcTshEHFa4v2vWORKovy2deeS5nnDbv6PdAIPB9
                                                    /njDaqLh4j80mcBwansDi0+w7v9yYjDQn6mKsOF4yQSamTOaaZwyxRoAE0AEggAjis+WawzWABgl
                                                    HVPlPwPNJX7A405pe8uMChFYt3VPUZsAZb2AN5w4nWisuO0UPQ9OXjKPn336vZD0yBzBCFDh+v3N
                                                    s0tBfzLHWy4+jec9q4Nc7ug/qxRs3LYTsqVx/5PO8uzzziQaETspl5FkKl0aIa4yov2AsxfOYFqb
                                                    rTSZCCovVPpwR6vcUbYxlPsmVBOrpsntK1plWeBzZzhSWcmBIrBt977iZpt7miXzphMNq6IvMkEA
                                                    p544n//5f28iSHrkRphpdK4f38/SnzVkizyefi+Axlpe+5ILiIaPHWNXCh57/EmoLb7+v8kPkHNX
                                                    nX7EkISl+IjAYDJdmlbc5STnM2OOLf+bKNqAFm4o5xgm+ZNaHFZMlbOzGf7HQK6EG9Cj4gfQtbe3
                                                    aOVH+bifZs68WSUrMfM8ePYzV/CDz74TrzvztBbCgfZJ9e7ify5sIoui3zNFGVpaG05orOGGz76e
                                                    +prIMXc9AmRyhk3rN8B4lfjGQCrr8YpLz6DZumTLigD9yeTkNwC6M5yz8lRrbE4A5YDRrF/ZJp8o
                                                    6zjKfSOqlY6p8iEd8Emt2euU2RJWAp37BtmVCwgVySvhGwOxCAtntzLu/jLjIJuFVctP4luffgu5
                                                    /kx+HENk+n3+69JFfOAlJ/HoR07hkpkxBtK64EaAIAS5XgaTg6NK7RIFXft6uH9rJ7gleMXSHqec
                                                    uIhEzLUGQDkRSKUzk7oPQFZrWNhOS1OTfdYmwFAu2ZXlHsfkfVJLwMp2+YbWnO97POq65QsJiMDe
                                                    fb0M5gKKJTib9gIuWj6f0NB1Ok6+fjUcPvAVCuW/X+j7EATwrGd28JUPvIbstn6MgWQ2YP6cet51
                                                    6ekgwolz6vnVB07nKxfPYGCvR3/B+rELkWCQDXt28dLPfoude3o4ViKoCPTu28dT63cRL8VisKmf
                                                    s85caXdkZUYYygGYxH0A/JzPa1YswanUbOgqQCnIZdizok2+WO6x2E9xgqycKmuAk+/vND9DeI1S
                                                    OCVPjBEY7B8AL0AVy/2YDbh45QlD5YZpHl+3hevvWsP2zh5S/UmcsMu8Oe288tkrmDdnGomoi1/A
                                                    BSmbhede+AzisSjvfc+3WXTWDP720QuojYfJuyQMdbEQH3vxCZw4s4b3/mETG7uz1EYmUpAloLPo
                                                    bA+JkEtyMMknv/q/fO6Db2PO9NYjXp9SsPqxdRB1il4MlvR8TrpsOc0NUcbb+M9SIATS6fSk9gCQ
                                                    CVixdAGRsLIG5zgxBlBcU+5xgDUACsbyNnnD6j1mrWg+4bjUBscqYS8gIuBnMhAUp3GKZww0JJg3
                                                    ZzoPP7Gdy399I7c/uA3qw+AoRASTyvHEfeu57q51vHTVPF548dksmT8dlS91KQi+D+ee28H/++xr
                                                    ubClj9nTGvJd44YxBgLDxSvaOWl2PW+4Yg03rx8gmnAIj+fGmACd7dnfMS4RDfHQxp3813d/zJc+
                                                    /j6a6uIjhkOUgm9e/y9UrAT6/z1p3vOiZ4/Yh8BSerKZbGVlBxcQbYCwQ01jY7mHUrWIAqPpXdEm
                                                    by33WMCGAApKR6t8efmtL2/QPg9GoqWbBzwfNu7cB25xTpjVhmfPbOTWB57ktR+8gts376GuJU5d
                                                    2KXOUdQqoc5R1EVcahIhfv/gZl774Sv46Nev4pHHNyOqcKGBbA4+dOlyLuiYf+jifzDaMLMlzvUf
                                                    Wc73XjqHTM6MKySgM10YnePgnrGJeIS7127l37/8Lfb1DXJ4SagI7OvNwhPbiRZ5J5gMNIsXz2Dm
                                                    7Nk2HlshZDOZSdsIyDOGcCKS7zRpn7dxEQoBwo/KPY5hrAFQYOTlv9PL2+T0dJpfGsgWWzNABDw/
                                                    4OEtXUVLOIsqYW3XIN/80+3UTKul7ig6wPmurg51U2u46fFtvOErv+Ubl/+JJzfuItAGxxn//GiA
                                                    BjNAa3YDx8xE1IaIq3jn8+Zx54dOhrBDf260s5agc30YnWWkhvGJRIS7n9jKD664kr6B9CHKe0rB
                                                    40+uh8Zo8bXgcj5nL5lLe1ujrceuAETAz01eD4CvNYua6mhvtfr/42FI9nd3yvDzco9l/5jKPYDJ
                                                    ysqp8loDHwk0W4rdUEgHATdv7y7ajjOV9XnO6QvIOS6Dx5TnPUBd2CERUfzq7nW88v/9mB9ceR0P
                                                    r93G7u5BXPdA4qDr5j0ESuW/RrpXBggbj7neBhjt0mryDd3PXNLMxo8v5y2nN9Pf7ZE+qh0gmCCN
                                                    8fqPep5EbZTf3/ow//3t/8NwYMwG2Ll5M0RKEF3rSXH2M86ynf8qiCCXG/XjWXX4AYtOmGcXjfEi
                                                    IIq/ndsmj5R7KMPYHIAi0tEq3wW+u3qP+bMYLlIOIV2MxBljYHs3oSmxgh9aGyBneOMLz+MVF53N
                                                    l7/3e255chc1sdCodvKOCHURFxNx+fEta/jxLWvAUTREXGa3NrBoZguLZ7dxwowW6moTuOEQ0WiE
                                                    mniMSPhAp0CtYYG3HpcsY7Zbfc3ctjg/fMuJrJpXx1uv3YrnBdQ9LWQiGJ1FZ/Yxmlk8UR/jmjvX
                                                    0PTdH/Gud/wbrqsYTGa5f91mKLL8b1ZrmD6FxfOL05fBMnaMAe37k9YDQDLHOactRVuDc8yofOx/
                                                    34pWeWO5x3Iw1gAoAR2tctnqTvPvWvN+x6VFB4VrWy8CPf1JCHRRNh6DQcDyE2cQDYeoTYT54ode
                                                    xU9/909+dP0DROsihEc52QlQF3XRBgIMST/g4e1dPLxlD9z8KOQCiEdobE5wypQaFrTW0dRQS21z
                                                    I60tjVwyF+LuIJhx7j+0QQTecsFsTpldx9uvXMuD3TnqDjmcGVr8NaPdxiUa4/z0uruJRUK87e2v
                                                    J5tOc/3tjxFrLK5csj+Y5TNvvohIJGTjsRWC50Myk52UOQD5zHWHeTOnW4NzHAzdsx+XexyHYw2A
                                                    EtHRJl8CvnRfp7lNhLOVgyqEN0AJrN28C2JFSjbIai5dsRDHFYIA4tEw737DRSxdOIMPf++vZMJC
                                                    XWj051YCCiEkEFOSz1sYUsvVxpAaSHFLX5Jb1u3Kux98DamAZ5w+lZ+/6UTmtEUYd31hvvyGeW1R
                                                    ZrrdPOg5EDngNdHZfWB8xurDTUyp4ftX/4vBVIblqzpANKqIu8Dhzn/zFy5AqcJVWVjGjwhkcz59
                                                    qcyk9ACktGbuwmlE43Ebchojjgu+zwMdbfKxco/lcGw4p8SsaJNzteHDOmCXKkBmvAjs7NwHbuEN
                                                    gOGynzmz2vdvaowBo+H8s07iqs+9hpOnNdGf9gpyPiVCRAl1br6ioC4Woq42Ql1bnNs39nD6N+7n
                                                    lsf7h0oKxnOzAANf+NW9XPN4Fwl/HybXRz7prx/jpxhvADfRlODK2x/mqz/6DeGGeME/i4PJBJrT
                                                    pjdz0tIFdvGvIDzPZyCdnZyzqhfwjAUzqK2psev/WBAY2uh9vtxDGYnJ+KhWPB1t8s0VbTItCLje
                                                    GPSEKgUE+vf1FkV9LGsMs2sitLY0Yw5y+xmTf6iXLJzBNz78Ki5YNov+3gy6iL7ouohDz0CG879w
                                                    Nz+/Yy+IM/anVykuv/5Rvn3TZqLxvPNLe/3obNcxk/5GQyIWpiudIVTsHWA6xzPP6ZjUejPViO/7
                                                    9KUnaRWAFzB7xjTisWM3wrIcwHXBGO7saJOKEP45HDuFlJGONrlYXM7WAdtExjdv+AEkB5NFiTt6
                                                    vubUBe1Mb6sZMfHH96G5IcGXP/xqPvPGZzGY8kkVMUOozhHizSHecPlDvPYHa9g7qEZv+LiKfz6w
                                                    hXf8zz1EatyD/psM7fwLQ7EX/8AY8OG5z1hld/8VhEjeAOiepCEAsj5tM2bY+P8YEAW+R5/AO8s9
                                                    liNhDYAys7xZ7l7eJrOM5gpjCMYimCMC+/pSbN5XHAOAXMDShTOP+tJrnVc+vey5Z/LdD7wIXw+1
                                                    zi0SrkBtvcsv79/Fi//7XtbtCY5tBDiKrbv6eP8v7oNp0RH0kqpnws7kfF76rNOora+3O7EKIwgC
                                                    OtO5YulxlZfBHLOmt9tnbgw4DmC4bnkFlf0djjUAKoQVU+WtXo7TtGa1MRwiLnMkRGCgf5C79yWJ
                                                    FXjXMVRCz8oT5x3T6h8u1Tt35SL++Pk3ctacVvoHs0UrFxKgLubwr12DLPrsnfzxnq68qICM/MMD
                                                    gxlmf/561nQOkqj22TntcfrJS6lN2Oz/SiMIAnpTWSbSfWLM5yzBQ2CMAcdlZnuz9QCMEuVA4LM9
                                                    08Y7yj2Wo46z3AOwHODMmfLo8lZZqQ3v15reY4UFBMhlMtCfwS2wB2BQa06c30pDfe2oF5qcB3Om
                                                    T+GrH30Nr33WyQxm/KJOUHUhhVIBL/nBo/zPNZsYyMkIT7SwObSA06dPBx1UdQKTAehKc/aZHVb7
                                                    vwLRQQDpXMmqAANjyDguyb2DJNNe0d61VKCZtnx+Vb87pUQk30bEM3zxHJGBco/naFgDoAJZOVW+
                                                    vfzT0qgNfzAG4zgccXfr5zzI+gXfcxhPc+4J7cTj0TGV/WgN8WiI977h+Xzx9c8i2Zlm8FiyvROg
                                                    RgmJhOJDV63lg794ks5BDgoJ+OxVbXg1bXzjI2/jkjNOItU1ULVCJinPZ8n5J9FQF7W7/wrE6AAy
                                                    uZJ4AAyQSft8/72v46df/SCvet5ZZPwQyT6PZFaT9DS5Qj0kXsD5i+cW/ZomC24IDPzrjDb5YbnH
                                                    ciysAVChyA+ho01eWhthvtY8jsEcHhYQgUc27oJIET7GrM8Ji+YSCcmYLX+t8+X9L7iwg99+8600
                                                    1sbpzxSmVHAkHIG6xhA/uncnU998Mw9szcux9qpWtjgzMRrqa+N84SPv4B2vuZh0f5pclVkBBqA/
                                                    y7+/9jLrhq1QjNGQ9kqSA6iNgWiYObNmcOrypXzm2fPY8rZ6/vmBDr72jBbe1TEDL5YgOeCT9DRJ
                                                    bfDG+8inPc48cWEVZcqUD+WA57GlcZBLyz2WUY233AOwHJ1FDbJpeassM5ovaM3eYb38Ye7fsAvG
                                                    IMQzajIBc2dNG/diY0y+SmDRvKn85GOv4oWnzaV/MFfU3XddRMEUxfIv3cHVa3LsCB/YtWgNGHjT
                                                    q17Ex9/8YryMT6aInolCkwo0Sxe209TSYnf/FYoONKWyznxjiNfGQRSBBrNvC16ynzmZtbx0kcd7
                                                    T4E7Lknwp7ecyKtOmc7JNSFybohkJu8dGPU1GQOREI2NDWW6q9WFEjDwvfnzpa/cYxkNVgmwSuho
                                                    l88Bn1vdaa7A8JJwmAYRuGn9bmIFLgjPaQPTGpk/s55MZmLH8nyY2d7EJ979cmb96Sa+/cd7UDUh
                                                    aopUxO4KqJoIzrSlHJ6OZQw4SnjZZc9hwbxZvOWT3yEZExKRUFHGUlByPmcsW8DMaY1ks+UejOVw
                                                    RKB3YBBCpdlT+dpwYn0CN+SCBqd/F0Y5GBy0HxCil6kRaDeDnL7cIXXWTNZ1abZ2Z7mtJ8Lvbt0A
                                                    UYGwAsl3/BypmMYzhtrmWmKJGmt4HgPHAT/g5o5W+Wq5xzJarAegyuhok7dkAlblcvze8xlgZy+h
                                                    AmcdZXI+/3bmCQWrMw8CcB3hjS+7gG9/+EXUR8P0+8XZKfk9Gb7+umczs73xEPGiYYwBNCw/eTFX
                                                    f//TrFwwk2SqClbU7hTnn3uWTf6rUPb35ChSS+6noQ3tDTWEwmFUshfxBjl4OjcI2ggBipxvCCV3
                                                    c1J8DxfPTvPFk/q4/72z+PmrlvDupQ1cMKOODA7JdEAyOHSV97Xh1JZ6Ghtt2enRUAoCzV4P3lbu
                                                    sYxp3OUegGXsPGO6rOuYKi9LK56r2moLemwD4MO5py4oqDdzuFTwnBVL+OknXwuBoj+VK+jY+9Me
                                                    zz1rIed0LD3q2A15o2TOrKl87gNv5dSFs0n2poqqZDgRhjv/zZtthVgqmd7BJCWTZ9SG5to44VAY
                                                    lepF/PRR5SwMisAotO/jGo963cszEtv4yJmK/3pWPX+9pJ4vXbIQGmtIbusl2ZcmmfXAC5g2pZGG
                                                    upg1AI6CckAbfnpmqzxV7rGMadzlHoBl/Jxz7qebawu9+9eGmVPrmNLSXPAXfrit76xpzdz+vffx
                                                    1uecSv++NH4BTtQfaOa31vHhN16y/1zHwvehva2J733hI7znVc8jPZDLL7YVhj+Y5XOvvJBoLGIn
                                                    4QpFBLr7BkpnAASatqYGolFBDXZDkGG0glZ5iQ/BNwo/l6NRd7O4IcNrWzfzxIcv4lc//y+++J5X
                                                    8qJVJ0GgaGxrm4wNDgtGKAS+x19WVmCzn2NhcwCqmPjC+ueaAlfner7m7NnNtE5pGNGFXgiCABKx
                                                    EG96xXOZ2dbEZ666DRxD3TgnTwMwkOMDb38+LU01YwpdBAFEQw6vf8ULmTt7Jh/++o/xIy6JYiRW
                                                    judeGQMhl/kLFqAErPpv5dI7UCRFzpHQmnhtLQpw+rbme2OME4MQmHwSY7Z5IYsbW1kyu43zzz2b
                                                    t79+gM59PRSic+lkZCjrf/OKNnlBuccyrvGXewCW8SPCqoJvCb2A2fNmEg0Xt+un1hB2FS+8aBU/
                                                    /OCLIRqhP+uP65wDaY83Pudkzjh9ybhc5HooOfDZ567gJ1/6IHPappAcSFeE8ElGG6ZPqePEJfOs
                                                    9n8FIwI9pTQAAkMkngADTs9GkAnu5YwmqGkniNaig7xhHIuEaG1p4uTF86migpmSoRQYTdoL+FS5
                                                    xzLuayj3ACwTQKgp+DEzAacunVsSi98YyOWg4+T5/OM/3sIFJ0xjID02IyAZaCJ1cV7zkgtw1Ohc
                                                    /0cai+fBKUsX8pP/+AivuPAMUn2pkkitHpWBDG990XNsDXYVsK9/sIQGgCZRWwOBQfVvzXeemQjG
                                                    J2g6ARM6IPw1HLKzi//TEcnfG9/wpTOnyS/LPZ7xYg2AKsUADhIq5D7d0waaapgzraWkanlBAFPq
                                                    43z+A6/kLc85lYG9yVEJ9RggGPD42usuoLUpXpAEOT0kGvSBt76Od7z8OWR60qTKNAMGxoA4dJy8
                                                    1Cb/VQE9g6nSdQL0NbW1taiBPUghjFSjCepnYGywf1So/GbjxlVt8qVyj2Ui2ByAKiV63peeGxHq
                                                    C3nMtBfw2mcsQjml7/kdaIhFQ7z7dc/l1MVzeM/3riUTBNQdJRY/kMzxjkuXc+aKZfgFFBrUGsIh
                                                    h7e/7iWcueJU3vAf/0sykyMeDZV0J57J+rz+OctpmjLFJv9VAU/19IM2JAMNSGGbTJr9v+QZ9Ghs
                                                    qMfp3jBx9z8AgjdlNmKfs2PiuuD7PNUxVS4s91gmfC3lHoBlfAQxTgSaCrUy5Mv/DKuWzSEckrLE
                                                    m42BwIezViziN5+q5cs/uZ6HNu+lLv50oZ5UoCEW4RWXPhNHFV6AzZi8Z+KUpfP53Zc+zHd//Gtu
                                                    fWQD8ZpI6YyAtMfSZUuIRZSt/68CltZEcWrz7aYbyeWbwhTgaREMnhZ6JIwaMgIeVg6N9bWopzox
                                                    aoIJq8ZAKE5Q14LYPJOjohT4AXuDgI+WeyyFwBoAVYrjSJMo1zG6MCtDYAzEQjS3TClu9t8o0AEs
                                                    mj+Nb3zk1Xzzx3/m2rs3EK+P4A65V7UBPxvwnfe9gIbaaFGNFd+HhXOn89kPv5Or/nQd//eLG3Bb
                                                    a4iMpl/zRFnXx1mrltvkvyrA8+BbX/goiOAEWVqe+APKS1EIN4AYn9TU0+mecQZqKDlHG0NdSJDB
                                                    TiYcyTU+XuvJ5b6FFY9I3gDI5fjcGdPk6nKPpxBYA6BKcVy3tpArdUrDipaEXjy/XVWCF9D3obEu
                                                    xqfe+0qWL72bz/3qNpyQkHAUg6kc77rodM7uWFySxdH383kB7/63lzGjvZXPXvlnfM8jESre65PM
                                                    eFz6zguoTUSsAVAFGANN9TV5z78fIprpQTLdE0/OA/Az6Jkraa6PHqgDFZDBblRq74TPIdrDn3qy
                                                    df8fheHUDs/jB2e0y/fKPZ5CYZMAqxRRMquQ72vcUexN+3cp4Vs6YKfj5rWtS5XTNBLDXQUvfc4Z
                                                    fP8DLyLw82p/0lzLZc87q6SeiuGQwCUXPpOff+rd1DU2FC050AAkczz/3JWlu0DLhDEGjAZjDAbB
                                                    oAryhSgMBq0PKGoaAyqXmbiRYQw6XEuQKL/nr5IZavH7q46p8s5yj6WQWAOgSlHIKYVU6nGVYsu+
                                                    vttPbZYPrGiT6TmPtwSaJzBo1y2fITBcinTW8oX85Stv5cwTpvHjt11C25TakmfGm7yEGqcum8//
                                                    vvs1mP4Jdko6Ailfs2LJDOYtmG+z/y0jYgSc/p3IhOt1A3TtLIJEozUAjoBywMvxlxWt8ppyj6Xg
                                                    11buAVjGTXvhXljBBEF/yOeR4e+smio/WtEqSzW80/f4J4bBw1sRlxLPg2mtDXztQ69k2aI5ZU2K
                                                    833YuG17ES/W58RFc2lpsh3YLEdAwOneiFET7GSpA4KGGZgihrOqGccFY9hUrUp/x8IaAFWIAUQK
                                                    mIwugsHs9f7xqasO/6eONvnhiqny7FzAM3XAL7RmZyhcnvCA1hCLhlHljEsAQWD45b1PQCxKcksf
                                                    yb1Zkr0eyUGfZDYg6WvS2oxfS6FzkEsuPM/Kr1qehuPkteeVA273UxOSAIZ8/N9rnmPj/yOgHAh8
                                                    +jI5Jt3Ofxhr9lUhicu+erELqmA+OxG0kSeO9iNnTpMHgNcB3LPbvNkR3gksDoVI+P74FfjGSiXs
                                                    iEWEX336vWgg070Ttt7Lzu40fb2DbNjZy0O7k/y9M0W6OwOZAGIKQpJvFCMQEsGVka3vpB8we/l8
                                                    pra1llSMyVL5OA489th6/nzzXbzsuefQEaRB5XX8x4cBpQia51n3/2EMyfxmVrRJQ7nHUkysAVCF
                                                    GKMvAFWwz05EMOR+MtqfXzVVfgT86J7d5s14PAe4WClqhuUxK2GRLgkCCxpd2uun5xOxRMhlfPpT
                                                    WdJZD9/z2bynnzuf6uLhbX2s2dbDk/1ZvJzG8wwEBpSBEDiuky8tTOX4twtWkYhHbPzf8jR27+7k
                                                    97+5id/ftJqPnVrD2SfUsawujcJgjEabMXjHjMZvmIdxCiooWvUoB0zAYCBUXXe/sWINgCpERJ2M
                                                    5E3UQmAC36T/9Mk/jvX/DRsCAKs7zWcFLgUWhcMHvAKT2RgQA/Fg4BAVorArTKmLgcQAmDujmfNX
                                                    zAMElJAcyLCps5/O7kGyyRQbujU3bM3yjw3bST25AzpTLFq2tKzVF5bKQxC0gb+tfgzaaoiGXb66
                                                    Jg33p2iYFuerJ0dY3BZhTjyDHxi0kWOu6aI9/NaT8lIFk/g9HQvKAR0wiOKVK1vkunKPp9hYA6Aa
                                                    UUww8+cgRGHQD0z0MB1t8nng83ftMC8Q4XwDLxFodV2igS6YrVJRhAiImDSHiL0MS7aag75xUCw/
                                                    EXE5cXYTJ85pBjHsZCan6xY+7uUwOqCvf5Bp7W229t/ydAzceO8TRCIujkDCFagRenvTvO2mNHPq
                                                    QzxvWojLliWYEctR42oCrY+oRmiUS1A/zRoAQwwt/gPa8OrjYfEHawBUJUpUvFDHEhH8XLCpUMc7
                                                    c7pcC1wLfGh1p3m78bgE4ZxIlEbfy6v4TQZjwACOCYgebgAc8z+ag3TdNQOhBNGQQkJRAGprE9b1
                                                    b3kaohSd+wZgZw/u/OZD/i2hBBOGzSmfHzzp8YNHU7zghBoungFnzK+hWQbxdd6DcMAuNZhQgqC2
                                                    2S7+HHD7+z5vO2O6/KXc4ykV1gCoNpa9d74I0wvz1gpGB+nA0zcXY6gdbXI5cDnAPZ3m1crwXhHm
                                                    K4cWobrzBQxQYwbJb+/Hm4ktDEgNctDEXK33w1JclFI8uvYpaIyO+O8CJARwBePCtVsGuXaTwE2D
                                                    vG1FI5fN0sxuckhIjkCDQWOiTQSJJuQ4NzidoZ3/8japK/dYSo0tA6wynMb6hSIyrSArhYAxJpX9
                                                    6yeKLm25qk1+1TFVzvQ0L/c8vqoDHsHgK1V+xcHxYIAaPcD4td4NGYljPf2WUSFC1+7dED72nk2A
                                                    hCPEQxCOCz98uIdL/jLAl25J8detYZImjEJjpswrm65HpeA4EAR0BoZXl3ss5cB6AKoMNxzKinIw
                                                    QSGUcARjeKqU4z+zXW4BbgH+H8C9u80vHMWpwJJQGBVUQfKgDFX0NehB8ja0jBD7PxaGAVVnLfDJ
                                                    huTDavkvCtISWCnFYF8vazfvgPDovU0ChIBQSAgwXLUtw1UbM6Dhc2fVMi+cY/rMNI21seMy7DTc
                                                    1jc1wLPOXSDbyj2estyDcg/AcmyiK/59pjOz8VNgmgVpN4V8WxXhxIu+fnnyTx95ezmubeVUeS3A
                                                    PZ3mhdrjeQIXAfVKUS8q3xmwUowBJYCCgYEM27duYsDfxfT6MPVhjeO6RCJhImGXkCP5EoFhg8Ac
                                                    9PtBDB5/HsdJjQhkcz7ZVBKdDVBZQyEUdsQodnfu4frNu3Dd8ZmMDnmvAA5o4HP39sPd/4Sf3cIN
                                                    3/osLU0NFfOeFZthb6Pvs3pFmxzXDTesAVAFqITrOcJF4oRmGlPAlHqjcZzwaX6QK6Ku7ehY1SZX
                                                    A1cDrN5lzjMOrw08ThDhrHAEJwiGG62U1iAYbgHqOLCnO8Udd9zNDXfcz113PgGhMOTIu2UXNvOK
                                                    OY0saU0wNeFQH1VE4nEScZfWxhqmNcZpbUrkt2Vag3HJSqSAco6WcqMUPPT4Or70098xTQ8MvacF
                                                    aAeMIXCewPRmC9KGWgGJsCIwhszWPhpqa8p960qGUvnGPtksV3a0yevLPZ5yYw2AKiBnnLmO4GAK
                                                    vR0WdOD3B1nvK+W+xoPpOBAmAOD+TvMaA29DmINmRiiMCoLiGgMieRfhQNJj8+Yt/PaGW7nmz3dA
                                                    XRhiYRLT6/f/rAFS3b38Zm8P+Ib96daa/J8DwNMQDXHGqrk854Q2Tp3fzoyTFCqMzcKeJBgDrVMa
                                                    2XHvU+yYN2X4uwU6eoq4KqT+N2R8zdJzluA4znGx+3dD4HvsyKT51Mp2+Wm5x1MJWAOgClARM0WQ
                                                    SMEPLIIJ/O2Z6z95R7mv8Wgsb5NfAr/8V5eZFg54ledzKobzBKaK4CpVuIoCx4FAQyqd5da7VnPP
                                                    6ge59q4nICzEptfnwwCH30Yg4ai8nzV86L+Zg34PjOHuNZu4+661XHDmUj677GwS2PV/smAMTG9r
                                                    AaWIq4KE/w+iCL6inM95y+YjSib1QyiS//I91voO7zqjTYpS9VSNWAOgCjBKTQFihX5JRTn4XvDz
                                                    cl/faDlniuwEvjH89zX7zNKUz8dNwBLgxHCE6MFJhIcbBLL/l6f/fdizuubJzdz34CP8z6//Adks
                                                    1ESI1Y6/AZEc9LsSIRRySNaEaK+PE7Yd2CYVxoDrOLBsJrnBASJOhad45gJOXjgHRzFphaeUAmMI
                                                    tOH3K9rkleUeT6VhZ6AqQESagXhBzXQRjO91Bjt7/lbu6xsvy5rlceD1AHfuMGeJcDbCZcZwAoaE
                                                    GyI+fMu0hpyv8TyfwA8IgoAg8DFaIxie3LSNP//tFm58dCP4PuFYmFAiUZyBa0MiGibkqkkhimQ5
                                                    gIhw8aLZ/PWehyvaAAiMgdoYNfUN5R5K0RjyDA4Ghk+smirfLfd4KhFrAFQDjhMT5WB0IUr/hhEC
                                                    E2zxVv/nQ+W+vEJw1nS5E7gT+BrAg3vNqz2fC1ff//AFXXv2zEgNJqW7P0nXwCB7+1J0DqRY1zcI
                                                    A2noS+Wb8tRGiYQd3Ejhoy2HYCASDuM6+dSA45nhUrlq04E44vUoOGneDP56+wMQKZxiN0BOG7yB
                                                    DMTDJEITawOc1YY5DQkaGhsnXfxfqXx+bjbDI57mfWe2y63lHlOlYg2AKkCUuAUP0hmNzvhfLve1
                                                    FYvTLn7L8wi5L2c4d0IJOPmGPCgFKt+W1wkJqiVR2mx8Y1Chwi4OxWC4+kEb8Atpe450S5CnhbmV
                                                    CIZ8U5tirlEhN3/qQDPhenglcMLs6QW37LJaM7u5kfe+5/n87q83c8fda6E5TtR1cMZhPRltWNTa
                                                    yPSpjRREUqQCEMk/r35AVzrFl1e2y3+Xe0yVjjUAqgBXqfDEj3IQIhhtutLXf/Lqcl9boXmZMVz3
                                                    vA9sFaVmHtDcrzCMwQkV9iMtJCL5ePbGLTu49c7V9HV2kgsCpEjbdAHWbutE4gfuScxRdO7dx7e+
                                                    fTlKFc88M8YQjYRpmT6d885eSXtr84SNgFAsDjURAmPGtTiPfJOEDV09rDj9VJafchJPPrWRn/72
                                                    Wv61bhtgiEdCYzNi/YCW6dNQwqRQoxxy95sg4Bov4JtDgmOWY2ANgCpAlMQLWvwnDoHxJl+3q0WX
                                                    zbnuog/cLMqZWdHBdQNuOFyRrleR/C74il/+nst/fj3UhsEtvlazhBTxg2rclQie5/Gb1U8U34Yz
                                                    BrKr+drlV3P5f76HlStOGveu2BioqauluS5ObyqDU6Db5gJ+1mfzth2ctGg2K05dwsnLlrB23Xqu
                                                    /NPf+MdND0JDlHAkRGg0BlPW58TFC6peh0IEwhHIZljnaf7zzHb5WbnHVE1YA6A6qBWO3d97dAha
                                                    ewO5VOqf5b6oQhOdPed7opw5Fa9ragzhYucZjBeB3/7pL1z+ixuITq0t3A52HCgREqPQvi8I0RDp
                                                    QPP2L/2Qn33xfZy8bOG4MuONgZamJhY1JrhzMJVvM1egewGwccMmZra3UZOIEg7BycsW8uXFC3nd
                                                    izdyy2138OPbHiTXnyJcE8U9mm5ALMTd9z1MxynLaGqoqcoqgOH2vZks3+5ok0+VezzVSGGeTkvR
                                                    MMCXlz73nRjdIMLE2wCLQht2ZP7yyTeX+9oKydSL/rMlJ8lvipGKD657aY/nnHM6J8ybVVG2ilKw
                                                    Z283X/rJ7xhQpiCqc9VESAmeCXh003ZeffEzxr0oxmMOd9/7MOt27yNcoEoAARxX8Y9H1rHhiSfZ
                                                    t3sXA9mAxoYG4lGH9rZGVpx+Cs8/41Tmtjdzy91r8NI5PCUjjiHsOjy6cSePPPwoy05YQOuUuor0
                                                    SD3tPqh8Hw43BEHATbmAD5wxVf6v3OOqVqwHoMJ4mXkZ175g+fecsDtbYU5tcCPTlB4qbi+AD0BE
                                                    EBP8udzXWWi6vZ1fD4VC8aqYxbQhGolO/DgFRgT27O5kx9odJKY3HPVnfWPI5vx8hmC14CjiYfeo
                                                    bu94OMSG2x+npy9HIjb+ME3LtHa4f+2ouveNevgiRI3m9ic3c/ujT0Hqr5AMuPCyM7ho1SnMnDmD
                                                    uXNm8Nq5F/L85z6LO++5j7/echc33fgQtNUQDruEDvLoJOJhHtrRxcvf9Bk++u4X8eJLLyYSUhVl
                                                    lA4jaqh5j8c+P+DBFVPkwmoPX1QC1gCoANyV/74iNLX2bOWo19/wUpkfjkg9ygGjMUGuoOcywOCf
                                                    /t+Hyn3NhcZRzhwRB0MFdQ86EtoQjUYqbpgisG1PF8SP7kTxjaEmGuGyM04hEgpVYprliNfWN5ji
                                                    mtWPEXedo8e+EyH6BgepiTeN6zMyBmbPaIdcQAF8dofgiORLAEMOJCKYKfCPex/lH7c8AA0JXnzy
                                                    fE497WTOPeN0nnn2Ks5etYLHX7iO6/5+K3+8by25XJZoLLw/tJMIOQTTavnaT65l555u3vzqF9NY
                                                    QSGBISEfjKHb87jeE/7vzKm2rK9QWAOgjCQu+uKzTCT6CdeRk0W5rcZo8h3kTL4N3qiRQ3475PtD
                                                    L7qQL38zXvbJcl93URCeNIFfA9KMMEscV4Znb7O/Te9Bs3k5KwQCTV1dHaEwiDe0iR4aSjlbIRsD
                                                    c6ZNBc9gOLL4bDbn84LlS/nwO95ILCoVZ8iMhBLo7s9xzd/ehW6pOXpuQ1+O2kRi3NdlNCycPR0e
                                                    6yF5ymHudzX0Tgr51U0O+z75Zj2uyH7ZaWHIczfCuUQgEQlBJISnNX+8by1/vO1h+O6vecWFK3jO
                                                    M8/ijOVLOP2UJbziqa38/ZY7+dFvb4aI5PUEhsoI441xfnnDnazZvINPvev1LJg7veiln0dCJL/j
                                                    D4Ugl2W71tzQMVXeWp7RTG6sF6UMRC76z7eGY+F3i3AKoti/6I+IHKpZu39Bz5PvDmiyBjJiyBjB
                                                    w5jAIMYYnUZkLYYNxui1+Hpbavn8W/j8ywvrVqg0WjqmhmYta5G6mrnKUUuNYrEgp4jQIIgjEDZC
                                                    TKBOlHOogVACwyBphHdf8sz3v+lVl2mjORc41eSn5AiQcFxqRPLD0OZAF8RiowT2dvfy/i98k7V7
                                                    ukm4I6cIJbsG+crH3shzLzi7bIvEeAiH4c0f/zqrn9xMIjqylyOZzvHM0xbznc++l9w43xKRfC+J
                                                    f9x2F14mAyJD1RWa7OAAaE0m57OndwBvaKvdNZBibzKDALlAs3kwA6n8/yXQ0J8GP4CIA0fK8vd1
                                                    Xn9AD80nrgshl5984yOcunQ+kP+nvv4U1/3tJv5x94M88vhWaIgRdRSOCMmcDwM5fvSVD3LqiYtL
                                                    atwpBY4LXo5BY9gtiv9e0SrfL90Ijj+sAVAGal/8tduVGz7nmMp+BowxSaBHMN1GZK82ph8Y1IHO
                                                    GGN845uUEbPb+GZnyA+e+OiNn3nw8/ZTPSIGSKx482leSJ1IJLRUHNXgOCqGSCvQLsgCEak59M2Q
                                                    w47AhFZkUQ6Df73xHHj4kCZMd283J6NYJQ4nKqFGDK3AIoF5qHzCbn43eNBITGG9Bo4D19xwC5/9
                                                    8k8JTW8gfNhik0znwAlz58+/RiTsVsXu/+BrW7N2I6/99LdAmaep6SVzPojDL7/4fpaeMHdCbvBh
                                                    UZqRvg/5tTyd8dBDAfdczsMbtqaMwfd9dOADgjEGowOy2Sy7u3oYTGfgEB+NQSlFQ00NLY11uG6+
                                                    u59yHJQbormpkWgktP+zUkM77K7uftaue4pvXPUXNm/elf/HYS0GA9/50Js494xT8L3imMTDO/3h
                                                    qwgCthq4NTDcfMZU+UkRTmk5DLtUlBFz+F+GNvtHc79aSoMxEDnvPS8UR52OMitQ0qxEuSIkBOoQ
                                                    WkXyU7wZ/g/7PQj7jzLisUU5ZLr6zvTvveLusYzpwS5zWaA5D1iFIQx5L4ZRNIZDJPYPYTiKdFgy
                                                    12idG44Dv//LjXzpx3+GTBZiofwudF+aiy9ZyQfe8mpamhsIKjBZ7FiEQvmGT6/+7Heguz+f72CA
                                                    wSwLls7m8+96HScumYvnFX8sh0chjlVxKYc5Aw/HHMGBdSQDcdhIMcCGLbt46IGH+e7f7qB33Q6o
                                                    i8KeJP/5xbfz3PPOKpihN9yZz3HA89AirDeGNYtaeUetyN6i33TLIdh1xmIZC781uF9+9Zk6Gl+g
                                                    wuEG5bq1rpIZRpiNyGKBpnzChTgCISCSD/MMYxBxGNywvYMnf33fRIdz5w5zmlbMDQnTlCImhlaB
                                                    ORrmiTBv6JSOCC6GsHLz2jQHew8ONxRkqDtsV1cP9zy8hqee2kRjUyMrT13G3FkziEdDVbn4D6MU
                                                    9PYNct8jj7Nuw2YcR7HkhPl0nLyMWCxckVnwxcZRoIGBgRSPr9/AHXffzyNPbuLRf23iW//7Qc49
                                                    87Rxe0SGS/eCAAykMPQZw41aceOqVqmabqSTEWsAWCwFxgCxs97xDN91TlMuJ4lSLaJUWClpAFoF
                                                    piXXb34GG66+vxTj2ZI07V1pLggClmFYKEJEhDiGKQJtyqVtv7v64F2kHBpu1kNa+QfvKCtVbflY
                                                    DO9Ch3fdB1/b8YwMt8pQsHtvPzu3bycaibBo0fxRG0ZKAZJf9JUD2QzdCA8aw5ZA84cz2uWv5b5O
                                                    Sx5rAFgsFh7ZZ2bkPBZqxWwH2o1hphamK800hAaTT0RXgIMhJEIYQwSIuSEOhEKG/jBSTuXRFlcz
                                                    6m9aSsVwrsBIXiJgf8hyOJavBDwPA+wUYVBrrjNhfryySdaU+1osI2MNAIvFMiZu7TQnRXzmKodW
                                                    Y2hDaHYUymgiIsSAWqBx6CtuDFGBqAhRI0SHDIjh1ImjzUGHpmLKYX8+OCY+GuPiCF6L433XfyyG
                                                    4/bD99wc6JpoyN++7UpYY2BHYNjhKC5f0SK7yj1uy7GxBoDFYqkoHttj5vua5kDRGAj1ElCDUAck
                                                    DNSgqRNFLUKdaGpFiBiTz7zAoFAIBsfkG0A7gCvgGiEkEDIQxhAWIYIh7Lg4w6rHT7MFzNE9GyP9
                                                    /JEoe7hEjjDhH1RhrORQ40pr8H0GMHQhdANZY9iA4uaOVpupX+1YA8BisUx6/r7bJBzDlFBAvQoR
                                                    1z4J1yHmGKIBxJXgGI0TcnC1IawgZoSYMSQEahASGOpEUQPUiaFeG+oQQpBfOIe8GfmvfPcuRb6P
                                                    jzIGh7wx4jgO++U/jsRY7AQ5xj8aA4EPAoGBQITAGDT5vL9AJN8R2Bh2I2zEsBVhe2DoNZDUOfbo
                                                    HE+cM1+2lvtztBQWawBYLBZLAdlgNtR27py3QLlMEcMUhHoxNBhDg0CtERpU3nAQYcg4UENVfgZl
                                                    hjbiDBsPQz8j+b9rk1+4tTFoyWv7aBE0BiOCBozWaPILu0HwtKEfTZ8IPUboQ7OPEPt8n8fOnip7
                                                    yn3PLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8Vi
                                                    sVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKx
                                                    WCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFY
                                                    LBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgs
                                                    FovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwW
                                                    i8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaL
                                                    xWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxWKxWCwWi8VisVgsFovF
                                                    YrFYLBaLxWKxWCwWi8VisVgsFovFYrFYLBaLxXIc8f8BDCJyxSgaDkcAAAAldEVYdGRhdGU6Y3Jl
                                                    YXRlADIwMjAtMDgtMTZUMDU6MjA6NDkrMDM6MDCXLjfFAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIw
                                                    LTA4LTE2VDA1OjIwOjQ5KzAzOjAw5nOPeQAAAABJRU5ErkJggg==" />
                </svg>

            </div>
        </div>
    </div>

    <div class="py-24 bg-white">
        <div class="text-center mb-24">
            <p class="mt-4 text-sm leading-7 text-gray-500 font-regular">
                SERVICES
            </p>
            <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-gray-900">
                Our<span class="text-primary-600"> Features</span>
            </h3>
        </div>

        <div
            class="max-w-screen-xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 md:col-gap-8 md:row-gap-10 flex flex-row items-center justify-center">

            <div class="">
                <ul class="grid grid-cols-1 md:row-gap-10">

                    <li class="my-5 md:mt-0">
                        <div class="flex flex-row justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900 font-semibold">Feature Name</h4>
                                <p class="text-gray-500 ">Sub Headline</p>
                            </div>
                        </div>
                    </li>
                    <li class="my-5 md:mt-0">
                        <div class="flex flex-row justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900 font-semibold">Feature Name</h4>
                                <p class="text-gray-500 ">Sub Headline</p>
                            </div>
                        </div>
                    </li>
                    <li class="my-5 md:mt-0">
                        <div class="flex flex-row justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900 font-semibold">Feature Name</h4>
                                <p class="text-gray-500 ">Sub Headline</p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

            <div class="">
                <div class="h-full mx-auto rounded bg-cover bg-right shadow-lg"
                    style="min-height:450px; background-image:url(https://images.pexels.com/photos/1043473/pexels-photo-1043473.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);">
                </div>
            </div>

            <div class="">
                <ul class="grid grid-cols-1 md:row-gap-10">

                    <li class="my-5 md:mt-0">
                        <div class="flex flex-row justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900 font-semibold">Feature Name</h4>
                                <p class="text-gray-500 ">Sub Headline</p>
                            </div>
                        </div>
                    </li>
                    <li class="my-5 md:mt-0">
                        <div class="flex flex-row justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900 font-semibold">Feature Name</h4>
                                <p class="text-gray-500 ">Sub Headline</p>
                            </div>
                        </div>
                    </li>
                    <li class="my-5 md:mt-0">
                        <div class="flex flex-row justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-900 font-semibold">Feature Name</h4>
                                <p class="text-gray-500 ">Sub Headline</p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </div>





    <div class="py-24 bg-white">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="mt-4 max-w-2xl text-lg leading-7 text-gray-500 lg:mx-auto font-regular">
                    Features
                </p>
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    Our Features
                </h3>
            </div>

            <div class="mt-10 sm:mt-24">
                <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 md:col-gap-8 md:row-gap-10">

                    <li class="my-10 md:mt-0">
                        <div class="flex flex-col justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-500">Feature Name</h4>
                            </div>
                        </div>
                    </li>
                    <li class="my-10 md:mt-0">
                        <div class="flex flex-col justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-500">Feature Name</h4>
                            </div>
                        </div>
                    </li>
                    <li class="my-10 md:mt-0">
                        <div class="flex flex-col justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-500">Feature Name</h4>
                            </div>
                        </div>
                    </li>
                    <li class="my-10 md:mt-0">
                        <div class="flex flex-col justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-500">Feature Name</h4>
                            </div>
                        </div>
                    </li>
                    <li class="my-10 md:mt-0">
                        <div class="flex flex-col justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-500">Feature Name</h4>
                            </div>
                        </div>
                    </li>
                    <li class="my-10 md:mt-0">
                        <div class="flex flex-col justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-500">Feature Name</h4>
                            </div>
                        </div>
                    </li>
                    <li class="my-10 md:mt-0">
                        <div class="flex flex-col justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-500">Feature Name</h4>
                            </div>
                        </div>
                    </li>
                    <li class="my-10 md:mt-0">
                        <div class="flex flex-col justify-center items-center">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md text-primary-500">
                                    <svg class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h4 class="text-lg leading-6 font-medium text-gray-500">Feature Name</h4>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>




    <!-- Component Code -->
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
            <div class="rounded overflow-hidden shadow-lg">
                <a href="#">
                    <div class="relative">
                        <img class="w-full"
                            src="https://images.pexels.com/photos/196667/pexels-photo-196667.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="Sunset in the mountains">
                        <div
                            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 bg-primary-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                Photos
                            </div>
                        </a>
                        <a href="!#">
                            <div
                                class="text-sm absolute top-0 right-0 bg-primary-600 px-4 text-white rounded-full h-16 w-16 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                <span class="font-bold">27</span>
                                <small>March</small>
                            </div>
                        </a>
                    </div>
                </a>
                <div class="px-6 py-4">
                    <a href="#"
                        class="font-semibold text-lg inline-block hover:text-primary-600 transition duration-500 ease-in-out">Best
                        View in Newyork City</a>
                    <p class="text-gray-500 text-sm">
                        The city that never sleeps
                    </p>
                </div>
                <div class="px-6 py-4 flex flex-row items-center">
                    <span href="#" class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
                                              c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
                                              c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z" />
                                </g>
                            </g>
                        </svg>
                        <span class="ml-1">6 mins ago</span></span>
                </div>
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <a href="#">
                    <div class="relative">
                        <img class="w-full"
                            src="https://images.pexels.com/photos/1653877/pexels-photo-1653877.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="Sunset in the mountains">
                        <div
                            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 bg-primary-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                Photos
                            </div>
                        </a>
                        <a href="!#">
                            <div
                                class="text-sm absolute top-0 right-0 bg-primary-600 px-4 text-white rounded-full h-16 w-16 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                <span class="font-bold">20</span>
                                <small>March</small>
                            </div>
                        </a>
                    </div>
                </a>
                <div class="px-6 py-4">
                    <a href="#"
                        class="font-semibold text-lg inline-block hover:text-primary-600 transition duration-500 ease-in-out">Best
                        Pizza in Town</a>
                    <p class="text-gray-500 text-sm">
                        The collection of best pizza images in Newyork city
                    </p>
                </div>
                <div class="px-6 py-4 flex flex-row items-center">
                    <span href="#"
                        class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row justify-between items-center">
                        <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
                                              c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
                                              c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z" />
                                </g>
                            </g>
                        </svg>
                        <span class="ml-1">3 mins read</span></span>
                </div>
            </div>
            <div class="rounded overflow-hidden shadow-lg">
                <a href="#">
                    <div class="relative">
                        <img class="w-full"
                            src="https://images.pexels.com/photos/257816/pexels-photo-257816.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                            alt="Sunset in the mountains">
                        <div
                            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>
                        <a href="#!">
                            <div
                                class="absolute bottom-0 left-0 bg-primary-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                Photos
                            </div>
                        </a>
                        <a href="!#">
                            <div
                                class="text-sm absolute top-0 right-0 bg-primary-600 px-4 text-white rounded-full h-16 w-16 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-primary-600 transition duration-500 ease-in-out">
                                <span class="font-bold">15</span>
                                <small>April</small>
                            </div>
                        </a>
                    </div>
                </a>
                <div class="px-6 py-4">
                    <a href="#"
                        class="font-semibold text-lg inline-block hover:text-primary-600 transition duration-500 ease-in-out">Best
                        Salad Images ever</a>
                    <p class="text-gray-500 text-sm">
                        The collection of best salads of town in pictures
                    </p>
                </div>
                <div class="px-6 py-4 flex flex-row items-center">
                    <span href="#"
                        class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row justify-between items-center">
                        <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
                                              c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
                                              c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z" />
                                </g>
                            </g>
                        </svg>
                        <span class="ml-1">6 mins read</span></span>
                </div>
            </div>
        </div>
    </div>


    <!-- Component Code -->
    <div class="max-w-sm rounded overflow-hidden shadow-lg">
        <div class="relative">
            <img class="w-full clippy"
                src="https://images.pexels.com/photos/3779448/pexels-photo-3779448.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                alt="Sunset in the mountains">
            <div
                class="clippy absolute bottom-0 left-0 top-0 right-0 bg-blue-700 bg-opacity-50 p-4 text-white flex flex-col justify-end items-center">
            </div>
            <a href="#"
                class="absolute bottom-0 right-0 mb-6 mr-6 rounded-full h-16 w-16 flex items-center bg-green-400 justify-center text-4xl font-thin absolute right-0 text-white shadow-2xl hover:bg-green-700">+</a>
        </div>
        <div class="pt-3 pb-5 px-5 flex flex-col items-center">
            <a href='#'>
                <h4 class="font-bold text-3xl">John Doe</h4>
            </a>
            <p class="text-gray-500 mb-2">Product Designer</p>
            <p class="text-center mb-2">Apparently we had reached a great height in the atmosphere</p>
            <div class="flex flex-row align-center justify-center">
                <a href="#"><svg class="ml-2" height="20px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M431.908,70.315l-9.978-9.455l-0.206,0.347C375.361,21.659,317.04,0,256.002,0c-33.211,0-65.606,6.383-96.411,18.975
                                          l-0.092-0.096l-6.709,3.07C77.399,55.32,22.291,123.207,5.862,203.544v1.364H5.433c-0.015,0-0.027-0.53-0.043-0.455l-1.727,7.945
                                          l0.158-0.096c-2.519,14.554-3.81,29.189-3.81,43.792c0,75.444,32.77,145.914,90.198,194.771l-0.063,0.12l6.594,5.241
                                          C142.571,492.721,197.645,512,256.002,512c30.811,0,61.217-5.693,90.711-16.902l6.896-2.688v-0.163
                                          c84.883-34.19,143.853-110.479,155.637-202.726l0.601,0.179l1.143-14.172c0.556-7.123,1-13.092,1-19.52
                                          C511.99,185.211,483.564,119.26,431.908,70.315z M256.002,21.905c57.011,0,111.432,20.689,154.261,58.376
                                          c-30.582,48.616-73.471,87.25-124.933,112.497C256.82,135.542,220.161,82.937,176.13,36.061
                                          C201.807,26.673,228.6,21.905,256.002,21.905z M154.572,45.148c44.864,46.57,82.081,99.184,110.783,156.6
                                          c-36.75,14.942-75.54,22.504-115.479,22.504c-42.008,0-82.685-8.343-121.034-24.804C45.553,132.192,91.81,75.396,154.572,45.148z
                                           M21.915,256.008c0-11.522,0.881-23.127,2.598-34.65c39.828,16.448,81.927,24.799,125.363,24.799
                                          c43.211,0,85.164-8.284,124.886-24.611c6.052,13.268,11.749,27.039,17.029,41.185c-84.042,27.756-152.979,87.846-192.084,167.314
                                          C50.103,385.566,21.915,322.901,21.915,256.008z M256.002,490.089c-50.517,0-98.344-15.82-138.864-45.822
                                          c36.162-76.604,101.739-134.555,182.008-160.921c20.995,62.529,32.028,127.656,32.84,193.854
                                          C307.203,485.758,281.679,490.089,256.002,490.089z M353.715,468.575c-1.625-65.294-12.878-129.52-33.529-191.314
                                          c55.356-13.923,113.844-12.102,168.06,5.067C479.104,365.698,428.602,435.329,353.715,468.575z M490.046,259.912
                                          c-30.724-9.231-62.523-13.905-94.718-13.905c-27.767,0-55.421,3.527-82.367,10.479l-0.055-0.158l-0.064,0.019
                                          c-5.557-14.971-11.573-29.582-17.973-43.626l0.093-0.043l-0.078-0.16c53.821-26.39,98.916-66.417,131.52-116.725
                                          c41.18,43.618,63.7,99.997,63.7,160.215C490.105,257.313,490.083,258.618,490.046,259.912z" />
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </svg></a>
                <a href="#"><svg class="ml-2" height="20px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M437.019,74.981C388.667,26.628,324.379,0,256,0S123.333,26.628,74.981,74.981C26.628,123.333,0,187.621,0,256
                                          s26.628,132.667,74.981,181.019C123.333,485.372,187.621,512,256,512s132.667-26.628,181.019-74.981S512,324.379,512,256
                                          S485.372,123.333,437.019,74.981z M256,495.832C123.756,495.832,16.168,388.244,16.168,256S123.756,16.168,256,16.168
                                          S495.832,123.756,495.832,256S388.244,495.832,256,495.832z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path d="M436.352,162.391c-2.433-2.104-5.958-2.463-8.875-1.11c-4.183,1.94-8.457,3.644-12.806,5.107
                                          c4.313-5.884,7.758-12.422,10.188-19.432c1.002-2.891,0.503-6.176-1.569-8.427c-2.593-2.814-6.723-3.406-9.963-1.56
                                          c-11.815,6.733-24.558,11.306-37.931,13.618c-14.958-13.729-34.201-21.24-54.643-21.24c-42.313,0-77.147,32.642-80.648,74.065
                                          c-8.741-1.364-25.844-6.241-29.933-7.578c-29.581-10.075-56.228-27.814-77.075-51.307c-1.236-1.393-2.864-2.429-4.695-2.764
                                          c-3.68-0.672-7.171,1.186-8.745,4.339c-5.181,10.383-7.809,21.548-7.809,33.185c0,16.093,5.038,31.261,14.113,43.73
                                          c-2.828-0.531-5.838,0.462-7.812,2.89c-1.135,1.396-1.703,3.168-1.77,4.966c-0.03,0.82-0.057,1.643-0.057,2.472
                                          c0,21.817,9.99,41.646,26.136,54.588c-1.115,0.755-2.055,1.797-2.703,3.082c-0.963,1.904-1.07,4.143-0.434,6.178
                                          c7.052,22.559,24.572,39.739,46.292,46.781c-19.673,11.976-42.429,18.434-65.679,18.434c-2.053,0-4.166-0.053-6.279-0.156
                                          c-4.046-0.185-7.675,2.639-8.371,6.744c-0.568,3.349,1.162,6.698,4.087,8.423c29.718,17.529,63.734,26.792,98.39,26.792
                                          c41.361,0,80.758-12.881,113.607-36.725c4.052-2.942,4.499-8.821,0.959-12.362l-0.003-0.003
                                          c-2.852-2.852-7.338-3.159-10.605-0.793c-29.275,21.198-65.207,33.714-103.959,33.714c-21.719,0-43.162-3.968-63.255-11.61
                                          c24.303-4.268,47.275-14.808,66.409-30.712c2.312-1.922,3.529-4.962,2.947-7.911c-0.744-3.767-3.972-6.43-7.707-6.535
                                          c-19.686-0.558-37.26-11.435-46.698-28.06c4.501-0.216,9.006-0.832,13.44-1.841c3.382-0.77,6.119-3.472,6.559-6.913
                                          c0.529-4.142-2.134-7.925-6.085-8.897c-21.117-5.2-36.647-22.364-40.14-43.256c6.19,1.451,12.624,2.092,19.047,1.896
                                          c3.963-0.119,7.317-3.109,7.792-7.166c0.374-3.196-1.323-6.291-4.07-7.966c-17.529-10.682-27.985-29.272-27.985-49.783
                                          c0-5.014,0.623-9.917,1.859-14.665c21.193,20.954,46.914,36.922,75.086,46.518c0.258,0.088,28.093,8.754,38.636,8.797
                                          c0.688,0.017,3.975,0.162,3.98,0.162c3.388,0.137,6.673-1.919,7.953-5.326c0.368-0.978,0.502-2.03,0.477-3.074
                                          c-0.011-0.471-0.023-0.942-0.023-1.416c0-35.713,29.055-64.768,64.769-64.768c17.487,0,33.878,6.872,46.158,19.348
                                          c1.777,1.807,4.282,2.697,6.793,2.349c8.227-1.141,16.256-3.025,24.037-5.632c-4.142,4.544-9.025,8.437-14.502,11.504
                                          c-3.692,2.067-5.258,6.558-3.518,10.415l0.119,0.264c1.424,3.152,4.691,5.045,8.136,4.72c6.687-0.638,13.282-1.739,19.753-3.291
                                          c-5.725,5.904-12.02,11.267-18.849,16.051c-2.228,1.561-3.509,4.147-3.416,6.865l0.017,0.511c0.019,0.553,0.04,1.107,0.04,1.664
                                          v0.731c-0.186,45.29-17.461,86.654-45.668,117.994c-2.882,3.201-2.702,8.117,0.344,11.163c3.312,3.312,8.72,3.151,11.855-0.332
                                          c31.691-35.208,49.224-80.18,49.633-127.902c14.422-10.743,26.595-23.876,36.227-39.093
                                          C440.029,169.5,439.434,165.057,436.352,162.391z" />
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </svg></a>
                <a href="#"><svg class="ml-2" height="20px" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path d="M437.019,74.981C388.667,26.628,324.379,0,256,0S123.333,26.628,74.981,74.981C26.628,123.333,0,187.621,0,256
                                          s26.628,132.667,74.981,181.019C123.333,485.372,187.621,512,256,512s132.667-26.628,181.019-74.981S512,324.379,512,256
                                          S485.372,123.333,437.019,74.981z M256,495.832C123.756,495.832,16.168,388.244,16.168,256S123.756,16.168,256,16.168
                                          S495.832,123.756,495.832,256S388.244,495.832,256,495.832z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M347.845,97.011H164.155c-37.024,0-67.144,30.121-67.144,67.144v183.692c0,37.022,30.121,67.143,67.144,67.143h183.692
                                          c37.022,0,67.143-30.121,67.143-67.144V164.155C414.989,127.131,384.869,97.011,347.845,97.011z M398.821,347.845
                                          c0,28.108-22.868,50.976-50.976,50.976H164.155c-28.108,0-50.976-22.868-50.976-50.976V164.155
                                          c0-28.108,22.868-50.976,50.976-50.976h183.692c28.107,0,50.975,22.868,50.975,50.976V347.845z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <path
                                    d="M339.402,251.22c-2.391-42.533-37.002-76.75-79.558-78.669c-49.108-2.214-89.535,38.232-87.292,87.346
                                          c1.945,42.56,36.19,77.154,78.728,79.51c17.951,0.995,34.762-3.727,48.803-12.494c4.374-2.731,5.087-8.814,1.441-12.459
                                          c-0.039-0.039-0.077-0.077-0.115-0.115c-2.657-2.658-6.778-3.059-9.971-1.075c-10.491,6.519-22.892,10.241-36.158,10.102
                                          c-37.455-0.394-67.676-31.844-66.621-69.286c1.061-37.681,33.215-67.721,71.657-65.312c33.126,2.076,60.09,28.49,62.819,61.569
                                          c1.111,13.475-1.787,26.206-7.61,37.157c-1.667,3.136-1.153,6.982,1.358,9.493c0.041,0.041,0.083,0.083,0.124,0.124
                                          c3.773,3.773,10.154,2.886,12.675-1.816C336.664,282.269,340.301,267.197,339.402,251.22z" />
                            </g>
                        </g>
                        <g>
                            <g>
                                <circle cx="342.232" cy="158.989" r="21.558" />
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </svg></a>
            </div>
            <div class="mt-5 flex flex-row justify-center items-start">
                <div class="px-3 text-center">
                    <p class="text-gray-500">Following</p>
                    <b class="text-2xl">561</b>
                </div>
                <div class="px-3 text-center">
                    <p class="text-gray-500">Tweets</p>
                    <b class="text-2xl">1,337</b>
                </div>
                <div class="px-3 text-center">
                    <p class="text-gray-500">Followers</p>
                    <b class="text-2xl">781</b>
                </div>
            </div>
        </div>
    </div>
@endsection
