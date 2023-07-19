      <!-- Card -->
      <a class="group flex flex-col h-full border border-gray-200 hover:border-transparent hover:shadow-lg transition-all duration-300 rounded-xl p-5 dark:border-gray-700 dark:hover:border-transparent dark:hover:shadow-black/[.4]" href="{{ route('show', $post) }}">
        <div class="aspect-w-16 aspect-h-11">
          <img class="w-full object-cover rounded-xl" src="{{ $post->getThumbnail() }}" alt="Image Description">
        </div>
        <div class="my-6">
          <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-300 dark:group-hover:text-white">
            {{ $post->title }}
          </h3>
          <p class="mt-5 text-gray-600 dark:text-gray-400">
            {{ $post->shortBody() }}
          </p>
        </div>
      </a>
