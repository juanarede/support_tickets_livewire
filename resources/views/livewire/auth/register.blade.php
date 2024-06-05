<div class="flex items-center justify-center p-12 mt-8">
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <form wire:submit.prevent="register" enctype="multipart/form-data">
            @csrf
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
            @if ($role === 'agente')
            <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="puesto" class="mb-3 block text-base font-medium text-[#07074D]">Puesto</label>
                        <input
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md"
                            wire:model="puesto" type="text" id="puesto">
                        @error('puesto') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="dependencia"
                            class="mb-3 block text-base font-medium text-[#07074D]">Dependencia</label>
                        <input
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md"
                            wire:model="dependencia" type="text" id="dependencia">
                        @error('dependencia') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="sueldo" class="mb-3 block text-base font-medium text-[#07074D]">Sueldo</label>
                        <input
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md"
                            wire:model="sueldo" type="number" step="0.01" id="sueldo">
                        @error('sueldo') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="w-full px-3 mb-5 sm:w-1/2">
                    <div class="mb-5">
                        <div class="relative profile-pic-wrapper">
                            <div class="relative pic-holder">
                                <img id="profilePic" class="pic"
                                    src="{{ $imagen ? asset($imagen->temporaryUrl()) : asset('img/profile_mockup.png') }}">
                                <input class="uploadProfileInput" wire:model="imagen" type="file" name="imagen"
                                    id="newProfilePhoto" accept="image/*" style="opacity: 0;" />
                                <label for="newProfilePhoto" class="upload-file-block">
                                    <div class="text-center text-uppercase">
                                        Update <br /> Profile Photo
                                    </div>
                                </label>
                            </div>
                            <div id="deleteIconWrapper" wire:click="deleteImage" class="absolute top-0 {{ $imagen ? '' : 'hidden' }} p-1 mt-2 mr-2 bg-red-500 rounded-full cursor-pointer delete-icon-wrapper right-26" data-default-image="{{ asset('img/profile_mockup.png') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @if ($role === 'usuario_externo')
            <div class="mb-5">
                <label for="empresa" class="mb-3 block text-base font-medium text-[#07074D]">Empresa</label>
                <input wire:model="empresa" type="text" id="empresa"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md">
                @error('empresa') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label class="mb-3 block text-base font-medium text-[#07074D]">Company</label>
                        <input name="Empresa" placeholder="Company" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3 mb-5 sm:w-1/2">
                    <div class="mb-5">
                        <div class="relative profile-pic-wrapper">
                            <div class="relative pic-holder">
                                <img id="profilePic" class="pic"
                                    src="{{ $imagen ? asset($imagen->temporaryUrl()) : asset('img/profile_mockup.png') }}">
                                <input class="uploadProfileInput" wire:model="imagen" type="file" name="imagen"
                                    id="newProfilePhoto" accept="image/*" style="opacity: 0;" />
                                <label for="newProfilePhoto" class="upload-file-block">
                                    <div class="text-center text-uppercase">
                                        Update <br /> Profile Photo
                                    </div>
                                </label>
                            </div>
                            <div id="deleteIconWrapper" wire:click="deleteImage" class="absolute top-0 {{ $imagen ? '' : 'hidden' }} p-1 mt-2 mr-2 bg-red-500 rounded-full cursor-pointer delete-icon-wrapper right-26" data-default-image="{{ asset('img/profile_mockup.png') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <button type="submit"
                            class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-black rounded-lg hover:bg-gray-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            <span>Sign Up</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
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
