<!-- Container for demo purpose -->
<div class="container my-2 mx-auto md:px-6">
    <section class="mb-2 text-center">

        <div class="grid gap-x-6 md:grid-cols-3 lg:gap-x-12">

            @forelse ($testimonials as $item)
                <div class="py-4 md:py-2 mb-6 md:mb-2 bg-{{$item->color_class}}-100">
                    <div class="mb-6 flex justify-center">
                        <img src="{{$item->file_url}}"
                            class="w-32 rounded-full shadow-lg" />
                    </div>
                    <div>
                        {!! $item->body !!}
                    </div>
                    <h5 class="mb-2 text-lg font-bold">{{$item->title}}</h5>
                    <h6 class="mb-0 font-medium text-primary">{{$item->description}}</h6>
                    @include('svg.starts')
                </div>
            @empty
            <div>no hay posts registrados en esta section</div>
            @endforelse

        </div>

    </section>
</div>
<!-- Container for demo purpose -->