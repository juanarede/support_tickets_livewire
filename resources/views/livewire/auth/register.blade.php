<div class="flex items-center justify-center p-12 mt-8">
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <div class="mb-5">
            <div class="flex flex-col md:flex-row md:items-center md:-mx-2 md:gap-5">
                <a id="clientLink" href=""
                    class="flex justify-center mr-2 mb-2 md:mb-0 fold-bold relative inline-block w-full md:w-auto rounded border-2 border-black bg-black px-3 py-1 text-base font-bold text-white transition duration-100">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span class="mx-2">Cliente</span>
                </a>

                <a id="workerLink" href=""
                    class="flex justify-center fold-bold relative inline-block w-full md:w-auto rounded border-2 border-black bg-white px-3 py-1 text-base font-bold text-black transition duration-100 hover:bg-black hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="mx-2">Agente</span>
                </a>
            </div>
        </div>

        <form action="" method="" enctype="multipart/form-data">
            @csrf
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label class="mb-3 block text-base font-medium text-[#07074D]">User</label>
                        <input name="Usuario" placeholder="Username" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label class="mb-3 block text-base font-medium text-[#07074D]">Email</label>
                        <input name="Email" type="email" placeholder="Email" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md" />
                    </div>
                </div>
            </div>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label class="mb-3 block text-base font-medium text-[#07074D]">Password</label>
                        <input name="password" type="password" placeholder="Password" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label class="mb-3 block text-base font-medium text-[#07074D]">Confirm Password</label>
                        <input name="password_confirmation" type="password" placeholder="Confirm Password" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md" />
                    </div>
                </div>
            </div>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label class="mb-3 block text-base font-medium text-[#07074D]">Company</label>
                        <input name="Empresa" placeholder="Company" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-2 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#000000] focus:shadow-md" />
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <div class="profile-pic-wrapper relative">
                            <div class="pic-holder relative">
                                <img id="profilePic" class="pic" src="{{ asset('img/profile_mockup.png') }}">

                                <input class="uploadProfileInput" type="file" name="imagen" id="newProfilePhoto"
                                    accept="image/*" style="opacity: 0;" />
                                <label for="newProfilePhoto" class="upload-file-block">
                                    <div class="text-center">
                                        <div class="text-uppercase">
                                            Update <br /> Profile Photo
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div id="deleteIconWrapper"
                                class="delete-icon-wrapper absolute top-0 right-26 mt-2 mr-2 hidden bg-red-500 rounded-full cursor-pointer p-1"
                                data-default-image="{{ asset('img/profile_mockup.png') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                    viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
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
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <button type="submit"
                            class="flex items-center justify-between w-full px-6 py-3 text-sm tracking-wide text-white capitalize transition-colors duration-300 transform bg-black rounded-lg hover:bg-gray-600 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                            <span>Sign Up</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 rtl:-scale-x-100"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
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

    {{--  document.getElementById("workerLink").addEventListener("click", function(event) {
        event.preventDefault();
        window.location.href = "{{ route('register.agentUser') }}";
    });  --}}



    document.addEventListener("DOMContentLoaded", function() {
        var triggerInput = document.getElementById("newProfilePhoto");
        var deleteIconWrapper = document.getElementById("deleteIconWrapper");

        if (!triggerInput || !deleteIconWrapper) return;

        triggerInput.addEventListener("change", function(event) {
            var currentImg = triggerInput.closest(".pic-holder").querySelector(".pic").src;
            var holder = triggerInput.closest(".pic-holder");
            var wrapper = triggerInput.closest(".profile-pic-wrapper");

            var alerts = wrapper.querySelectorAll('[role="alert"]');
            alerts.forEach(function(alert) {
                alert.remove();
            });

            var files = triggerInput.files || [];
            if (!files.length || !window.FileReader) {
                return;
            }

            if (/^image/.test(files[0].type)) {
                var reader = new FileReader();
                reader.readAsDataURL(files[0]);

                reader.onloadend = function() {
                    holder.querySelector(".pic").src = this.result;

                    var successMessage = document.createElement('div');
                    successMessage.className = 'snackbar show bg-green-500 text-white py-2 px-4 rounded';
                    successMessage.setAttribute('role', 'alert');
                    successMessage.innerHTML = '<i class="fas fa-check-circle mr-2"></i> Profile image updated successfully';
                    wrapper.appendChild(successMessage);

                    deleteIconWrapper.classList.remove('hidden'); // Mostrar el ícono de eliminar
                    setTimeout(function() {
                        successMessage.remove();
                    }, 3000);
                };

                reader.onerror = function() {
                    var errorMessage = document.createElement('div');
                    errorMessage.className = 'snackbar show bg-red-500 text-white py-2 px-4 rounded';
                    errorMessage.setAttribute('role', 'alert');
                    errorMessage.innerHTML = '<i class="fas fa-times-circle mr-2"></i> Error updating profile image';
                    wrapper.appendChild(errorMessage);

                    setTimeout(function() {
                        errorMessage.remove();
                    }, 3000);
                };
            }
        });

        function deleteImage() {
            var defaultImagePath = deleteIconWrapper.dataset.defaultImage; // Obtener la ruta de la imagen predeterminada
            var holder = triggerInput.closest(".pic-holder");
            var wrapper = triggerInput.closest(".profile-pic-wrapper");

            holder.querySelector(".pic").src = defaultImagePath;

            triggerInput.value = "";

            deleteIconWrapper.classList.add('hidden');
        }

        deleteIconWrapper.addEventListener("click", deleteImage);
    });


    import Toastify from 'toastify-js';
    import "toastify-js/src/toastify.css";


</script>
