<div>
    <div class="flex items-center justify-center min-h-screen">
        <div class="p-4 px-4 mt-4 mb-6 bg-white rounded shadow-lg md:p-3">
          <div class="grid grid-cols-1 gap-4 text-sm gap-y-2 lg:grid-cols-3">

            <div class="flex flex-row h-[100px] justify-start items-center rounded-md p-2">
                <div class="flex items-center justify-center w-12 h-12 bg-red-500 rounded-full ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-plus">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                        <path d="M12 11v6" />
                        <path d="M9 14h6" />
                    </svg>
                </div>
                <div class="ml-2 space-y-2">
                    <h3 class="font-bold">Enviar una Solicitud de Asistencia</h3>
                    <h4 class="mb-4 font-semibold text-1xl">{{ $category }}</h4>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="grid grid-cols-1 gap-4 text-sm gap-y-2 md:grid-cols-4">

                    <div class="md:col-span-2">
                        <label for="nombre">Nombre</label>
                        <input type="text" wire:model="nombre" id="nombre" class="w-full h-10 px-4 mt-1 border rounded bg-gray-50" />
                        @error('nombre') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="email">Email</label>
                        <input type="email" wire:model="email" id="email" class="w-full h-10 px-4 mt-1 border rounded bg-gray-50" />
                        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="prioridad">Prioridad</label>
                        <input type="text" wire:model="prioridad" id="prioridad" class="w-full h-10 px-4 mt-1 border rounded bg-gray-50" />
                        @error('prioridad') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="numero_de_serie">Número de Serie</label>
                        <input type="text" wire:model="numero_de_serie" id="numero_de_serie" class="w-full h-10 px-4 mt-1 border rounded bg-gray-50" />
                        @error('numero_de_serie') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="modelo">Modelo</label>
                        <input type="text" wire:model="modelo" id="modelo" class="w-full h-10 px-4 mt-1 border rounded bg-gray-50" />
                        @error('modelo') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="empresa">Empresa</label>
                        <input type="text" wire:model="empresa" id="empresa" class="w-full h-10 px-4 mt-1 border rounded bg-gray-50" />
                        @error('empresa') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="numero_de_activo">Número de Activo</label>
                        <input type="text" wire:model="numero_de_activo" id="numero_de_activo" class="w-full h-10 px-4 mt-1 border rounded bg-gray-50" />
                        @error('numero_de_activo') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="asunto">Asunto</label>
                        <input type="text" wire:model="asunto" id="asunto" class="w-full h-10 px-4 mt-1 border rounded bg-gray-50" />
                        @error('asunto') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                    <div class="md:col-span-4">
                        <label for="mensaje">Mensaje</label>
                        <textarea wire:model="mensaje" id="mensaje" class="w-full h-20 px-4 mt-1 border rounded bg-gray-50"></textarea>
                        @error('mensaje') <span class="text-red-500">{{ $message }}</span> @enderror
                    </div>

                </div>
            </div>
        </div>

        <div class="flex justify-end mt-4">
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded">Crear Ticket</button>
        </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>


    </div>
    </div>
</div>
