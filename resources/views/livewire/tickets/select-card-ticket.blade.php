
<section id="features" class="w-full py-8 space-y-6 md:py-12 lg:py-24">
    <div class="flex flex-col items-center w-full mx-auto space-y-4 text-center">
        <h2 class="font-heading text-1xl leading-[1.1] sm:text-1xl md:text-3xl mb-4">¿Cómo podemos ayudarle?</h2>
    </div>
    <div class="grid justify-center gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:max-w-[40rem] w-full mx-auto">
        @foreach($categorias as $categoria)
        <div class="relative w-full overflow-hidden border rounded-md hover:shadow-lg hover:scale-80 hover:cursor-pointer">
            <a href="{{ route('tickets.create', ['categoria' => $categoria->value]) }}">
                <div class="flex flex-row h-[100px] justify-start items-center rounded-md p-2">
                    <div class="flex items-center justify-center w-12 h-12 ml-3 bg-red-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 6l6 6l-6 6" />
                        </svg>
                    </div>
                    <div class="ml-6 space-y-2">
                        <h3 class="font-bold">{{ $categoria->title() }}</h3>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
      

    </div>
</section>
