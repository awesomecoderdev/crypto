@extends('layouts.app')

{{-- title --}}
@section('title', $article->title . ' : CryptoGainers')
@section('description', $article->description)
@section('url'){{ route('news.show', $article->slug) }}@endsection
@section('image', $article->thumb())
{{-- @section('time', \Carbon\Carbon::now()) --}}
@section('time', $article->updated_at)


@section('nav')
    {{-- start:nav --}}
    @include('layouts.nav')
    {{-- end:nav --}}
@endsection


{{-- <div class="whitespace-pre-wrap text-ellipsis">
        @json($article)
    </div> --}}
@section('content')
    @can('update')
        <script src="{{ asset('js/ckeditor.js?var=') }}{{ csrf_token() }}"></script>
        <script src="{{ asset('js/admin.js?var=') }}{{ md5(filemtime(public_path('js/admin.js'))) }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
    @endcan

    <div x-data="AdminController()">
        <x-articale-adminbar :article="$article" />

        <div class="container">
            <main class="article flex">
                {{-- content --}}
                <article class=" flex-auto p-4">
                    <h1 id="article_title" class="text-4xl mt-5 mb-10">{{ $article->title }}</h1>

                    @can('update')
                        @php
                            $errorClasses = 'bg-red-50 border-red-500 text-red-900 placeholder-red-700 focus:ring-red-500 focus:border-red-500 dark:bg-red-100 dark:border-red-400';

                            $errorLebel = 'text-red-600 dark:text-red-500';
                            $lebel = 'text-gray-500 dark:text-gray-400 ';

                            $errorPeer = 'peer-focus:text-red-600 peer-focus:dark:text-red-500';
                            $peer = 'peer-focus:text-primary-600 peer-focus:dark:text-primary-500';

                            $errorInput = 'border-red-300 dark:border-red-600 dark:focus:border-red-500 focus:border-red-600';
                            $input = 'border-gray-300 dark:border-gray-600 dark:focus:border-primary-500 focus:border-primary-600';
                        @endphp
                        <style>
                            div.ck.ck-editor__top.ck-reset_all>div>div.ck.ck-sticky-panel__content>div {
                                border-bottom: 1px solid var(--ck-color-base-border) !important;
                            }

                            .ck.ck-editor__main>.ck-editor__editable {
                                background: transparent !important;
                                border: transparent !important;
                            }

                        </style>
                        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" autocomplete="off">
                            @csrf
                            @method('PUT')

                            <div x-show="edit">
                                {{-- title --}}
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="text" name="title" id="title"
                                        class="@error('title') {{ $errorInput }} @else {{ $input }} @enderror  block py-2.5 px-0 w-full text-sm  text-gray-900 dark:text-white bg-transparent border-0 border-b-2  appearance-none focus:outline-none focus:ring-0 peer"
                                        placeholder=" "
                                        @error('title') value="{{ old('title') }}"@else value="{{ !empty($article->title) ? $article->title : old('title') }}" @enderror>
                                    <label for="title"
                                        class="absolute text-sm  @error('title') {{ $errorLebel }} {{ $errorPeer }} @else {{ $lebel }} {{ $peer }} @enderror duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-primary-600 peer-focus:dark:text-primary-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Title</label>
                                    @error('title')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                                            </span>{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- slug --}}
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="text" name="slug" id="slug"
                                        class="@error('slug') {{ $errorInput }} @else {{ $input }} @enderror  block py-2.5 px-0 w-full text-sm  text-gray-900 dark:text-white bg-transparent border-0 border-b-2  appearance-none focus:outline-none focus:ring-0 peer"
                                        placeholder=" "
                                        @error('slug') value="{{ old('slug') }}"@else value="{{ !empty($article->slug) ? $article->slug : old('slug') }}" @enderror>
                                    <label for="slug"
                                        class="@error('slug') {{ $errorLebel }} {{ $errorPeer }} @else {{ $lebel }} {{ $peer }} @enderror absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Slug</label>
                                    @error('slug')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                                            </span>{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- descritption --}}
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="text" name="description" id="description"
                                        class="@error('description') {{ $errorInput }} @else {{ $input }} @enderror  block py-2.5 px-0 w-full text-sm  text-gray-900 dark:text-white bg-transparent border-0 border-b-2  appearance-none focus:outline-none focus:ring-0 peer"
                                        placeholder=" "
                                        @error('description') value="{{ old('description') }}" @else value="{{ !empty($article->description) ? $article->description : old('description') }}" @enderror>
                                    <label for="description"
                                        class="@error('description') {{ $errorLebel }} {{ $errorPeer }} @else {{ $lebel }} {{ $peer }} @enderror absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
                                    @error('description')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                                            </span>{{ $message }}</p>
                                    @enderror
                                </div>
                                {{-- keywords --}}
                                <div class="relative z-0 mb-6 w-full group">
                                    <input type="text" name="keywords" id="keywords"
                                        class="@error('keywords') {{ $errorInput }} @else {{ $input }} @enderror  block py-2.5 px-0 w-full text-sm  text-gray-900 dark:text-white bg-transparent border-0 border-b-2  appearance-none focus:outline-none focus:ring-0 peer"
                                        placeholder=" "
                                        @error('keywords') value="{{ old('keywords') }}" @else value="{{ !empty($article->keywords) ? $article->keywords : old('keywords') }}" @enderror>
                                    <label for="keywords"
                                        class="@error('keywords') {{ $errorLebel }} {{ $errorPeer }} @else {{ $lebel }} {{ $peer }} @enderror absolute text-sm duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                        Keywords
                                    </label>
                                    @error('keywords')
                                        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                                            </span>{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            {{-- content --}}
                            <div class="relative z-0 mb-6 w-full group">
                                <style>
                                    .ck.ck-editor__main>.ck-editor__editable {
                                        background: transparent !important;
                                    }

                                </style>
                                <textarea class="opacity-0 @error('content') {{ $errorInput }} @else {{ $input }} @enderror  block py-2.5 px-0 w-full text-sm  text-gray-900 dark:text-white bg-transparent border-0 border-b-2  appearance-none focus:outline-none focus:ring-0 peer"
                                    name="content" id="contents" cols="30" rows="100">{!! !empty($article->content) ? $article->content : old('content') !!}</textarea>
                                @error('content')
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!
                                        </span>{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="submit"
                                class="bg-primary-500 hover:bg-primary-600 px-5 py-2 text-sm leading-5 rounded-full font-semibold text-white">
                                Save changes
                            </button>
                        </form>
                    @else
                        {!! $article->content !!}
                    @endcan
                </article>

                {{-- sidebar --}}
                <div class="max-w-xs w-full py-4">
                    <div class="px-4 bg-gray-500">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta molestias neque molestiae qui
                            autem
                            tenetur.
                            Quam possimus quia cumque explicabo. Perferendis fugiat cumque voluptates accusantium corrupti
                            hic
                            impedit
                            deleniti quibusdam!
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta molestias neque molestiae qui
                            autem
                            tenetur.
                            Quam possimus quia cumque explicabo. Perferendis fugiat cumque voluptates accusantium corrupti
                            hic
                            impedit
                            deleniti quibusdam!
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta molestias neque molestiae qui
                            autem
                            tenetur.
                            Quam possimus quia cumque explicabo. Perferendis fugiat cumque voluptates accusantium corrupti
                            hic
                            impedit
                            deleniti quibusdam!
                        </p>
                    </div>
                </div>
            </main>
        </div>
    </div>
    @can('update')
        <script>
            $(document).ready(function() {
                const ajaxUrl = "{{ route('admin.articles.slug') }}/?_token={{ csrf_token() }}";
                const slug = "{{ $article->slug }}";
                $(document).on("keyup", "#title", function() {
                    $("#article_title").text($(this).val());
                    $.ajax({
                        type: "POST",
                        url: ajaxUrl,
                        data: {
                            title: $(this).val(),
                            edit: slug,
                        },
                        success: function(response) {
                            console.log(response.slug);
                            $("#slug").val(response.slug);
                        }
                    });
                });
            });
            const upload_url = "{{ route('admin.articles.ckeditor.upload') . '?_token=' . csrf_token() }}";
            ClassicEditor.create(document.querySelector('#contents'), {
                ckfinder: {
                    uploadUrl: upload_url
                },
            }).catch(error => {
                console.error(error);
            });
        </script>
    @endcan

@endsection


@section('footer')
    {{-- start:nav --}}
    @include('layouts.footer')
    {{-- end:nav --}}
@endsection
