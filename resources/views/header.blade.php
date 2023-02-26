<nav
  class="relative flex w-full flex-nowrap items-center justify-between bg-neutral-100 py-4 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 lg:flex-wrap lg:justify-start"
  data-te-navbar-ref>
  <div class="flex w-full flex-wrap items-center justify-between px-6">

    <button
      class="block border-0 bg-transparent py-2 px-2.5 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 lg:hidden"
      type="button"
      data-te-collapse-init
      data-te-target="#navbarSupportedContent3"
      aria-controls="navbarSupportedContent3"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="[&>svg]:w-7">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="h-7 w-7">
          <path
            fill-rule="evenodd"
            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
            clip-rule="evenodd" />
        </svg>
      </span>
    </button>

    <div
      class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
      id="navbarSupportedContent3"
      data-te-collapse-item>
      <a class="text-xl text-black" href="#">E-comm</a>
      <!-- Left links -->
      <ul
        class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row"
        data-te-navbar-nav-ref>
        <li class="lg:px-2" data-te-nav-item-ref>
          <a
            class="active disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
            aria-current="page"
            href="#"
            data-te-nav-link-ref
            >Home</a
          >
        </li>
        <li class="lg:pr-2" data-te-nav-item-ref>
          <a
            class="p-0 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
            href="#"
            data-te-nav-link-ref
            >Orders</a
          >
        </li>
    
        <li class="lg:pr-2" data-te-nav-link-ref>
          <a
            class="text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
            >Disabled</a
          >
        </li>
      </ul>

      <form class="d-flex mx-10" role="search">
       <div class="mb-3 xl:w-96 ">
       <div class="relative mb-4 flex w-full flex-wrap items-stretch">
       <input
        type="search"
        class="relative m-0 -mr-px block w-[1%] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out focus:border-primary-600 focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
        placeholder="Search"
        aria-label="Search"
        aria-describedby="button-addon3" />
       <button
        class="relative z-[2] rounded-r border-2 border-primary px-6 py-2 text-xs font-medium uppercase text-primary transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
        type="button"
        id="button-addon3"
        data-te-ripple-init>
        Search
        </button>
        </div>
        </div>
      </form>
    <ul class="nav navbar-nav navbar-right"
        data-te-navbar-nav-ref>  
        <li class="lg:px-2" data-te-nav-item-ref>
        <div class="relative flex items-center">
         <!-- Icon -->
         <a
         class="mr-4 text-neutral-500 hover:text-neutral-700 focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
         href="#">
         <span class="[&>svg]:w-5">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-5 w-5">
            <path
              d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
          </svg>
         </span>
         </a>
          <a
            class="active disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
            aria-current="page"
            href="#"
            data-te-nav-link-ref
            >Add To Cart</a
          >
          </div>
        </li>
    </ul>    
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
</nav>
