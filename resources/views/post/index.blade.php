<x-app-layout meta-description="Newsbdjob.com: the largest job site in Bangladesh. Our mission is to provide the latest and most relevant job news and opportunities. Our team works tirelessly to bring you up-to-date information on the job market.">
<!-- Posts Section -->
<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-4 mx-auto">
    <!-- End Title -->
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- End Card -->
      @foreach ($posts as $post)
      <x-post-item :post="$post"></x-post-item>
     @endforeach
    </div>
    <!-- End Grid -->

    <!-- Card -->
    <div class="mt-12 text-center">
        {{ $posts->links() }}
    </div>
    <!-- End Card -->
  </div>
  <!-- End Card Blog -->
</x-app-layout>
