@extends('dashboard.admin.template')

@section('title', 'Articles | CryptoGainers')

@section('contents')



    <form action="{{ route('admin.articles.index') }}" method="get"
        class="w-full mb-4 md:mb-2 md:w-2/4 md:flex space-y-4 md:space-y-0 md:space-x-2">
        <div class="flex rounded-md shadow-sm">
            <input placeholder="Search" type="text" name="s" value="{{ request()->query('s') }}"
                class="block w-full border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 dark:bg-gray-700 dark:text-white dark:border-gray-600  focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 rounded-md ">
        </div>

        <div class="relative block md:inline-block text-left">
            <div>
                <button type="submit"
                    class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600">
                    Search
                    <svg xmlns="http://www.w3.org/2000/svg" class="-mr-1 ml-2 h-5 w-5 pointer-events-none" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
    </form>

    <form action="{{ route('admin.articles.update.status') }}" method="POST">

        <input type="hidden" name="action" id="action" value="1">
        <div class="mb-4">
            <div class="relative inline-block text-left" @click.outside="bulkAction =false" @close.stop="bulkAction = false">
                <div>
                    <button type="button" @click="bulkAction = !bulkAction"
                        class=" inline-flex w-32 justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-1 focus:ring-offset-1 focus:ring-offset-gray-100 focus:ring-primary-500/70 dark:bg-gray-700 dark:border-transparent dark:text-gray-200"
                        id="menu-button" aria-expanded="true" aria-haspopup="true">
                        <span id="option">Active</span>
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div x-show="bulkAction" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class=" z-30 origin-top-right absolute right-0 mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none dark:bg-gray-700 dark:border-transparent dark:text-gray-200"
                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <span data-status="1" data-title="Active" @click="bulkAction =false"
                            class="changeNewsStatus cursor-pointer flex items-center px-3 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">Active</span>
                        <span data-status="0" data-title="Inctive" @click="bulkAction =false"
                            class="changeNewsStatus cursor-pointer flex items-center px-3 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">Inactive</span>
                    </div>
                </div>
            </div>
            <button type="submit"
                class="ml-2 inline-flex justify-center w-auto rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-1 focus:ring-offset-1 focus:ring-offset-gray-100 focus:ring-primary-500/70 dark:bg-gray-700 dark:border-transparent dark:text-gray-200">Update
            </button>

            <a href="{{ route('admin.articles.create') }}"
                class="ml-2 inline-flex justify-center w-auto rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-1 focus:ring-offset-1 focus:ring-offset-gray-100 focus:ring-primary-500/70 dark:bg-gray-700 dark:border-transparent dark:text-gray-200">Create</a>
        </div>

        @csrf
        <div class="relative w-full">
            <div class="flex flex-col">
                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden ">
                            <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                <thead class="bg-gray-100 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-all" type="checkbox"
                                                    class="w-4 h-4 text-primary-600 bg-gray-100 rounded border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-all" class="sr-only">checkbox</label>
                                            </div>
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            News Title
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-center text-gray-700 uppercase dark:text-gray-400">
                                            Action
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            News Slug
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Tags
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                            Created
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                    @foreach ($articles as $post)
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <td class="p-4 w-4">
                                                <div class="flex items-center">
                                                    <input id="news-checkbox" type="checkbox"
                                                        name="status[{{ $post->id }}]"
                                                        class="news-checkbox w-4 h-4 text-primary-600 bg-gray-100 rounded border-gray-300 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="news-checkbox" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <a href="{{ route('news.show', $post->slug) }}" target="_blank"
                                                    class="flex">
                                                    <p class="flex items-center">
                                                        @if ($post->status)
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="inline-block h-5 w-5  text-green-500 " fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                </path>
                                                            </svg>
                                                        @else
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="inline-block h-5 w-5  text-red-500 " fill="none"
                                                                viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                                                </path>
                                                            </svg>
                                                        @endif
                                                        <span class="truncate w-40  ml-2"> {{ $post->title }}</span>
                                                    </p>

                                                </a>
                                            </td>
                                            {{-- action --}}
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                                <div class="relative flex justify-center items-center ">
                                                    @can('update')
                                                        <a href="{{ route('admin.articles.edit', $post) }}"
                                                            class="lg:text-sm lg:leading-6 font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                                                            <div
                                                                class="pointer-events-none mx-1 bg-gray-50/5 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-primary-200 dark:group-hover:bg-primary-500 dark:bg-slate-400/10 dark:highlight-white/5">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class="h-7 w-5 m-1 p-0.5" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                </svg>
                                                            </div>
                                                        </a>
                                                    @endcan

                                                    @can('delete')
                                                        <button @click.prevent="setDelete($event)"
                                                            data-deleteId="deleteArticleForm{{ $post->id }}"
                                                            class=" lg:text-sm lg:leading-6  font-medium text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300">
                                                            <div
                                                                class="pointer-events-none mx-1 bg-gray-50/5 rounded-md ring-1 ring-slate-900/5 shadow-sm group-hover:shadow group-hover:ring-slate-900/10 dark:ring-0 dark:shadow-none dark:group-hover:shadow-none dark:group-hover:highlight-white/10 group-hover:shadow-primary-200 dark:group-hover:bg-primary-500 dark:bg-slate-400/10 dark:highlight-white/5">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    class=" h-7 w-5 m-1 p-0.5" fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor" stroke-width="2">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </div>
                                                        </button>
                                                        <form id="deleteArticleForm{{ $post->id }}"
                                                            action="{{ route('admin.articles.destroy', $post) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>

                                                        <form id="deleteArticleForm{{ $post->id }}"
                                                            action="{{ route('admin.articles.destroy', $post) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                        </form>
                                                    @endcan
                                                </div>


                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <p class="truncate w-40"> {{ $post->slug }}</p>
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                @php $tag_counter=0; @endphp
                                                @foreach ($post->tags as $tag)
                                                    @if ($tag_counter < 1)
                                                        <a href="{{ route('news.show', "?tag=$tag") }}"
                                                            class="{{ isset($request['tag']) && $request['tag'] == $tag ? 'bg-primary-100 dark:bg-primary-600/20 border-primary-200/70 dark:border-primary-500/25 ' : '' }} rounded-xl font-medium mr-2 border transition-all hover:bg-primary-100 dark:hover:bg-primary-600/10 hover:text-gray-600 border-primary-100 dark:border-primary-500/25 px-2 my-2 text-gray-500 dark:text-gray-300">
                                                            {{ $tag }}
                                                        </a>
                                                    @endif
                                                    @php $tag_counter++; @endphp
                                                @endforeach

                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                {{ _ago($post->created_at) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                {{ $articles->withQueryString()->links() }}
            </div>
        </div>
    </form>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#checkbox-all").change(function(e) {
                e.preventDefault();
                var checkedStatus = this.checked;
                $(".news-checkbox").each(function() {
                    $(this).prop('checked', checkedStatus);
                });
            });

            $(".changeNewsStatus").click(function(e) {
                e.preventDefault();
                var status = $(this).data("status");
                var btnText = $(this).data("title");
                $("#option").text(btnText);

                $("#action").val(status);
            });
        });
    </script>
@endsection
