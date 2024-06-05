<div>
    <img alt="tania andrew"
         src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1480&amp;q=80"
         class="relative inline-block object-cover object-center w-12 h-12 rounded-full cursor-pointer"
         wire:click="toggleMenu" />

    @if($isOpen)
    <ul role="menu" data-popover="profile-menu" data-popover-placement="bottom"
        class="absolute z-10 flex min-w-[180px] flex-col gap-2 overflow-auto rounded-md border border-blue-gray-50 bg-white p-3 font-sans text-sm font-normal text-blue-gray-500 shadow-lg shadow-blue-gray-500/10 focus:outline-none">
        <!-- Opciones del menú -->
    </ul>
    @endif
</div>
