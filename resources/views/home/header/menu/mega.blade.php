<!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
<nav class="relative flex w-full items-center justify-between bg-neutral-50 py-2 text-neutral-600 shadow-lg lg:flex-wrap lg:justify-start"
    data-te-navbar-ref>
    <div class="px-6">
        <button
            class="border-0 bg-transparent py-3 text-xl leading-none transition-shadow duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 lg:hidden"
            type="button" data-te-collapse-init data-te-target="#navbarSupportedContentX"
            aria-controls="navbarSupportedContentX" aria-expanded="false" aria-label="Toggle navigation">
            <span class="[&>svg]:w-8">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-8 w-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </span>
        </button>
        <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
            id="navbarSupportedContentX" data-te-collapse-item>
            <ul class="mr-auto flex flex-row" data-te-navbar-nav-ref>
                <li data-te-nav-item-ref>
                    <a class="block py-2 pr-2  transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 lg:px-2"
                        href="#!" data-te-ripple-init data-te-ripple-color="light">Regular link</a>
                </li>
                <li class="static" data-te-nav-item-ref data-te-dropdown-ref>
                    <a class="flex items-center whitespace-nowrap py-2 pr-2  transition duration-150 ease-in-out hover:text-neutral-700 focus:text-neutral-700 lg:px-2"
                        href="#" data-te-ripple-init data-te-ripple-color="light" type="button" id="dropdownMenuButtonX"
                        data-te-dropdown-toggle-ref aria-expanded="false" data-te-nav-link-ref>Mega menu
                        <span class="ml-2 w-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="h-5 w-5">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </a>
                    <div class="absolute left-0 right-0 top-full z-[1000] mt-0 hidden w-full border-none bg-white bg-clip-padding text-neutral-600 shadow-lg [&[data-te-dropdown-show]]:block"
                        aria-labelledby="dropdownMenuButtonX" data-te-dropdown-menu-ref>
                        <div class="px-6 py-5 lg:px-8">
                            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                                <div>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Lorem
                                        ipsum</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Dolor
                                        sit</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Amet
                                        consectetur</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Cras
                                        justo odio</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Adipisicing
                                        elit</a>
                                </div>
                                <div>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Explicabo
                                        voluptas</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Perspiciatis
                                        quo</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Cras
                                        justo odio</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Laudantium
                                        maiores</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Provident
                                        dolor</a>
                                </div>
                                <div>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Iste
                                        quaerato</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Cras
                                        justo odio</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Est
                                        iure</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Praesentium</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Laboriosam</a>
                                </div>
                                <div>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Cras
                                        justo odio</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Saepe</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Vel
                                        alias</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full border-b border-neutral-200 px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Sunt
                                        doloribus</a>
                                    <a href="#!" aria-current="true"
                                        class="block w-full px-6 py-2 transition duration-150 ease-in-out hover:bg-neutral-50 hover:text-neutral-700">Cum
                                        dolores</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>