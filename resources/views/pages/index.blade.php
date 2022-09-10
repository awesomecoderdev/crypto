@extends('layouts.app')

{{-- title --}}
@section('title', 'Crypto Charts And Market Capitalizations : CryptoGainers')
@section('description',
    'Top cryptocurrency prices and charts, listed by market capitalization. Free access to current
    and historic data for Bitcoin and thousands of altcoins.',)
@section('url'){{ route('page.index') }}@endsection
    {{-- @section('image', $article->thumb()) --}}
@section('time', \Carbon\Carbon::now())


@section('nav')
    {{-- start:nav --}}
    {{-- @include('layouts.nav') --}}
    {{-- end:nav --}}
@endsection

@section('content')
    {{-- start:nav --}}
    @include('layouts.nav')
    {{-- end:nav --}}
    <!-- Hero Section Code -->
    <section
        class="hidden relative h-screen w-full flex flex-col sm:flex-row items-center justify-center sm:justify-start text-center sm:text-left bg-cover bg-center"
        style="background-image:url(https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80);">
        <div class="absolute top-0 right-0 bottom-0 left-0 bg-gray-900 opacity-75"></div>

        <div class=" px-8 sm:px-24 z-10 sm:w-2/3">
            <div class="">
                <h2
                    class="text-4xl tracking-tight leading-10 font-extrabold sm:text-5xl text-white sm:leading-none md:text-6xl">
                    Enter Your
                    <span class="text-primary-600">Headline</span>
                </h2>
                <p class="mt-3 text-white sm:mt-5 sm:max-w-xl md:mt-5 text-lg font-light">
                    Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.
                </p>
                <div class="mt-5 sm:mt-8 sm:flex justify-start">
                    <div class="rounded-md shadow">
                        <a href="#"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-primary-600 hover:bg-primary-500 focus:outline-none focus:border-primary-700 focus:shadow-outline-primary transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                            Get started
                        </a>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <a href="#"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-primary-700 bg-primary-100 hover:text-primary-600 hover:bg-primary-50 focus:outline-none focus:shadow-outline-primary focus:border-primary-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                            Live demo
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex sm:flex-col z-10">

            <div class="text-sm font-light flex items-center m-5">
                <svg width="35px" fill="white" class="mr-3" version="1.1" id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 511 511" style="enable-background:new 0 0 511 511;" xml:space="preserve">
                    <g>
                        <path
                            d="M511,48h-56V16h-47v32h-41V16h-47v32h-41V16h-47v32h-41V16h-47v32h-41V16H56v32H0v95h16v352h367.5h7.5h3.606L495,394.606
                                                                                                                                                                                                                                                                                                                          V391v-7.5V143h16V48z M423,31h17v49h-17V31z M335,31h17v49h-17V31z M247,31h17v49h-17V31z M159,31h17v49h-17V31z M71,31h17v49H71
                                                                                                                                                                                                                                                                                                                          V31z M391,477.394V391h86.393L391,477.394z M480,376H376v104H31V143h449V376z M496,128h-1H16h-1V63h41v32h47V63h41v32h47V63h41v32
                                                                                                                                                                                                                                                                                                                          h47V63h41v32h47V63h41v32h47V63h41V128z" />
                        <rect x="231.5" y="184" width="48" height="15" />
                        <rect x="151.5" y="184" width="48" height="15" />
                        <rect x="71.5" y="184" width="48" height="15" />
                        <rect x="391.5" y="184" width="48" height="15" />
                        <rect x="311.5" y="184" width="48" height="15" />
                        <rect x="231.5" y="232" width="48" height="15" />
                        <rect x="151.5" y="232" width="48" height="15" />
                        <rect x="71.5" y="232" width="48" height="15" />
                        <rect x="391.5" y="232" width="48" height="15" />
                        <rect x="311.5" y="232" width="48" height="15" />
                        <rect x="231.5" y="280" width="48" height="15" />
                        <rect x="151.5" y="280" width="48" height="15" />
                        <rect x="71.5" y="280" width="48" height="15" />
                        <rect x="391.5" y="280" width="48" height="15" />
                        <rect x="311.5" y="280" width="48" height="15" />
                        <rect x="231.5" y="328" width="48" height="15" />
                        <rect x="151.5" y="328" width="48" height="15" />
                        <rect x="71.5" y="328" width="48" height="15" />
                        <rect x="391.5" y="328" width="48" height="15" />
                        <rect x="311.5" y="328" width="48" height="15" />
                        <rect x="231.5" y="376" width="48" height="15" />
                        <rect x="151.5" y="376" width="48" height="15" />
                        <rect x="71.5" y="376" width="48" height="15" />
                        <rect x="311.5" y="376" width="48" height="15" />
                        <rect x="231.5" y="424" width="48" height="15" />
                        <rect x="151.5" y="424" width="48" height="15" />
                        <rect x="71.5" y="424" width="48" height="15" />
                        <rect x="311.5" y="424" width="48" height="15" />
                    </g>
                </svg>
                <span class="text-white">1<sup>st</sup> August</span>

            </div>

            <div class="text-sm font-light flex items-center m-5">
                <svg width="35px" fill="white" class="mr-3" version="1.1" id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                    <g>
                        <path
                            d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30
                                                                                                                                                                                                                                                                                                                          S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z" />
                        <path
                            d="M31,26.021V15.879c0-0.553-0.448-1-1-1s-1,0.447-1,1v10.142c-1.399,0.364-2.494,1.459-2.858,2.858H19c-0.552,0-1,0.447-1,1
                                                                                                                                                                                                                                                                                                                          s0.448,1,1,1h7.142c0.447,1.72,2,3,3.858,3c2.206,0,4-1.794,4-4C34,28.02,32.72,26.468,31,26.021z M30,31.879c-1.103,0-2-0.897-2-2
                                                                                                                                                                                                                                                                                                                          s0.897-2,2-2s2,0.897,2,2S31.103,31.879,30,31.879z" />
                        <path
                            d="M30,9.879c0.552,0,1-0.447,1-1v-1c0-0.553-0.448-1-1-1s-1,0.447-1,1v1C29,9.432,29.448,9.879,30,9.879z" />
                        <path
                            d="M30,49.879c-0.552,0-1,0.447-1,1v1c0,0.553,0.448,1,1,1s1-0.447,1-1v-1C31,50.326,30.552,49.879,30,49.879z" />
                        <path
                            d="M52,28.879h-1c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S52.552,28.879,52,28.879z" />
                        <path
                            d="M9,28.879H8c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S9.552,28.879,9,28.879z" />
                        <path
                            d="M44.849,13.615l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
                                                                                                                                                                                                                                                                                                                          s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S45.24,13.225,44.849,13.615z" />
                        <path
                            d="M14.444,44.021l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
                                                                                                                                                                                                                                                                                                                          s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S14.834,43.631,14.444,44.021z" />
                        <path
                            d="M45.556,44.021c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707c0.195,0.195,0.451,0.293,0.707,0.293
                                                                                                                                                                                                                                                                                                                          s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L45.556,44.021z" />
                        <path
                            d="M15.151,13.615c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707c0.195,0.195,0.451,0.293,0.707,0.293
                                                                                                                                                                                                                                                                                                                          s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L15.151,13.615z" />
                    </g>
                </svg>
                <span class="text-white">8:00 AM</span>

            </div>

            <div class="text-sm font-light flex items-center m-5">
                <svg width="35px" fill="white" class="mr-3" version="1.1" id="Capa_1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 490 490" style="enable-background:new 0 0 490 490;" xml:space="preserve">
                    <g>
                        <path
                            d="M245.001,0C156.458,0,84.424,71.987,84.424,160.472c0,85.04,145.93,315.146,152.142,324.9
                                                                                                                                                                                                                                                                                                                          c1.836,2.882,5.017,4.628,8.435,4.628c3.418,0,6.599-1.746,8.434-4.628c6.212-9.754,152.141-239.861,152.141-324.9
                                                                                                                                                                                                                                                                                                                          C405.576,71.987,333.542,0,245.001,0z M245.001,461.127c-13.207-21.363-40.009-65.587-66.549-114.588
                                                                                                                                                                                                                                                                                                                          c-48.429-89.418-74.027-153.758-74.027-186.067C104.424,83.015,167.487,20,245.001,20c77.514,0,140.575,63.015,140.575,140.472
                                                                                                                                                                                                                                                                                                                          c0,32.309-25.599,96.649-74.027,186.067C285.009,395.539,258.207,439.764,245.001,461.127z" />
                        <path
                            d="M244.999,76.071c-41.884,0-75.959,33.149-75.959,73.894c0,40.744,34.075,73.891,75.959,73.891s75.959-33.147,75.959-73.891
                                                                                                                                                                                                                                                                                                                          C320.958,109.22,286.883,76.071,244.999,76.071z M244.999,203.855c-30.855,0-55.959-24.175-55.959-53.891
                                                                                                                                                                                                                                                                                                                          c0-29.717,25.104-53.894,55.959-53.894s55.959,24.177,55.959,53.894C300.958,179.68,275.855,203.855,244.999,203.855z" />
                    </g>
                </svg>
                <span class="text-white">New York City</span>

            </div>



        </div>

    </section>

    <!-- Component Code -->
    <section class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
        <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">


            @foreach ($articles as $news)
                <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center"
                    style="height: 450px; background-image:url({{ $news->thumb() }});">
                    <div class="absolute right-0 bottom-0 left-0 p-5" style="background: rgba(0,0,0,.7);">
                        <main class="z-10">
                            <a href="{{ route('news.show', $news->slug) }}"
                                class="text-md tracking-tight font-medium leading-7 font-regular text-white hover:underline text-opacity-100">
                                {{ $news->title }}
                            </a>
                        </main>
                        <div class="mt-5 text-sm font-regular text-white flex items-center justify-between">
                            <span class="mr-3 flex flex-row items-center">
                                <svg class="text-primary-600 " fill="currentColor" height="13px" width="13px" version="1.1"
                                    id="Layer_1" xmlns="http://www.w3.org/2000/svg"
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
                                <span class="ml-1">{{ _ago($news->updated_at) }}</span></span>
                            <p class="flex flex-row items-center hover:underline  mr-3">
                                <svg class="text-primary-600" fill="currentColor" height="16px" aria-hidden="true"
                                    role="img" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor"
                                        d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                    </path>
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                </svg>
                                <span class="ml-1">{{ $news->author->name }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection


@section('footer')
    {{-- start:nav --}}
    @include('layouts.footer')
    {{-- end:nav --}}
@endsection
