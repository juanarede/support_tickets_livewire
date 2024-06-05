<div class="flex items-center justify-center p-12 mt-8">
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form wire:submit.prevent="register" enctype="multipart/form-data">
            @csrf
            <!-- Rol selection -->
            <div class="mb-5">
                <div class="flex flex-col md:flex-row md:items-center md:-mx-2 md:gap-5">
                    <a id="clientLink" wire:click="setRole('usuario_externo')"
                       class="relative flex justify-center inline-block w-full px-3 py-1 mb-2 mr-2 text-base font-bold {{ $role === 'agente' ? 'text-black bg-white border-black hover:bg-black hover:text-white' : 'text-white bg-black border-black' }} transition duration-100 border-2 rounded md:mb-0 fold-bold md:w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="mx-2">Cliente</span>
                    </a>
                    <a id="workerLink" wire:click="setRole('agente')"
                       class="relative flex justify-center inline-block w-full px-3 py-1 text-base font-bold {{ $role === 'usuario_externo' ? 'text-black bg-white border-black hover:bg-black hover:text-white' : 'text-white bg-black border-black' }} transition duration-100 border-2 rounded fold-bold md:w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span class="mx-2">Agente</span>
                    </a>
                </div>
            </div>

            <!-- User and Email fields -->
            <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="usuario" class="mb-3 block text-base font-medium text-[#07074D]">User</label>
                        <input wire:model="usuario" type="text" id="usuario" required
                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">Email</label>
                        <input wire:model="email" type="email" id="email" required
                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md" />
                    </div>
                </div>
            </div>

            <!-- Password fields -->
            <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="password" class="mb-3 block text-base font-medium text-[#07074D]">Password</label>
                        <input wire:model="password" type="password" id="password" placeholder="Password" required
                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="password_confirmation"
                               class="mb-3 block text-base font-medium text-[#07074D]">Confirm Password</label>
                        <input wire:model="password_confirmation" type="password" id="password_confirmation"
                               placeholder="Confirm Password" required
                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md" />
                    </div>
                </div>
            </div>

            <!-- Conditional fields for 'agente' role -->
            @if ($role === 'agente')
            <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="puesto" class="mb-3 block text-base font-medium text-[#07074D]">Puesto</label>
                        <input wire:model="puesto" type="text" id="puesto"
                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="sueldo" class="mb-3 block text-base font-medium text-[#07074D]">Sueldo</label>
                        <input wire:model="sueldo" type="number" id="sueldo"
                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3">
                    <div class="mb-5">
                        <label for="dependencia"
                               class="mb-3 block text-base font-medium text-[#07074D]">Dependencia</label>
                        <select id="dependencia" wire:model="dependencia"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md">
                            <option value="">Seleccione una opción</option>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            @endif

            <!-- Conditional fields for 'usuario_externo' role -->
            @if ($role === 'usuario_externo')
            <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3">
                    <div class="mb-5">
                        <label for="empresa" class="mb-3 block text-base font-medium text-[#07074D]">Empresa</label>
                        <input wire:model="empresa" type="text" id="empresa"
                               class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md" />
                    </div>
                </div>
            </div>
            @endif

            <!-- Upload Image Field -->
            <div class="mb-5">
                <label for="imagen" class="mb-3 block text-base font-medium text-[#07074D]">Imagen</label>
                <input type="file" wire:model="imagen"
                       class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
            </div>

            <!-- Submit button -->
            <div>
                <button type="submit"
                        class="px-8 py-3 text-base font-semibold text-center text-white bg-black rounded-md outline-none hover:shadow-form">
                    Registrarse
                </button>
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    @if (session('email_error'))
        Toastify({
            text: "{{ session('email_error') }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "right",
            backgroundColor: "linear-gradient(to right, #FF5F6D, #FFC371)",
            stopOnFocus: true,
        }).showToast();
    @endif

    function closeErrorMessage(button) {
        button.parentElement.style.display = 'none';
    }


    var defaultProfileImagePath = "{{ asset('img/profile_mockup.png') }}";
</script>
