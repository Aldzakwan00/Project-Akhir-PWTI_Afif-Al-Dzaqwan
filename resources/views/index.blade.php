<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Afif Al Dzaqwan</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class=" bg-[#091e27] overflow-x-hidden">
    <!-- header -->
    <header
      class="fixed top-0 right-0 left-0 md:py-1 transition-all duration-300"
    >
      <nav
        class="max-w-7xl mx-auto bg-gray-800 md:bg-transparent p-5 order-[10001]"
      >
        <div class="flex items-center justify-between">
          <a
            href="/"
            class="text-white font-bold text-lg flex items-center gap-3"
            >Personal Website</a
          >
          <!-- only for large device -->
          <div class="hidden md:flex space-x-10">
            <a href="#home" class="text-white hover:text-gray-300">Home</a>
            <a href="#background" class="text-white hover:text-gray-300">Background</a>
            <a href="#project" class="text-white hover:text-gray-300">Project</a>
            <a href="#skill" class="text-white hover:text-gray-300">Skills</a>
            <a href="#contact" class="text-white hover:text-gray-300">Contact</a>
          </div>
          <!-- menu btn, only disply on mobile -->
          <div class="md:hidden">
            <button id="mobile-menu-button" class="text-white text-2xl">
              <i class="bx bx-menu"></i>
            </button>
          </div>
        </div>

        <!-- mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden">
          <a href="#home" class="block text-white py-2 mt-3 hover:bg-gray-700"
            >Home</a
          >
          <a href="#background" class="block text-white py-2 hover:bg-gray-700"
            >Background</a
          >
          <a href="#project" class="block text-white py-2 hover:bg-gray-700"
            >Project</a
          >
          <a href="#skill" class="block text-white py-2 hover:bg-gray-700"
            >Skills</a
          >
          <a href="#contact" class="block text-white py-2 hover:bg-gray-700"
            >Contact</a
          >
        </div>
      </nav>
    </header>
    @foreach($users as $user)

    <!-- banner section -->
    <section class="max-w-7xl mx-auto px-5 my-32" id="home">
      <div
        class="flex md:flex-row flex-col justify-between items-center text-white gap-4 py-10"
      >
        <div class="md:w-1/2">
          <p class="text-xl font-medium mb-4">
            Hello, <span class="text-primary">I'm</span>
          </p>
          <h1 class="font-bold text-4xl tracking-[3.22px] mb-5">{{ $user->name}}</h1>
          <p class="text-2xl font-montserrat mb-5">
          {{ $user->profesi}}
          </p>
          <p class="text-l mb-12 md:w-3/4 text-justify leading-8">
          {{ $user->description}}
          </p>
        </div>

        @foreach($profilePictures as $profilePicture)
            <div class="w-[500px]">
                <img src="{{ asset('images/' . $profilePicture->image) }}" alt="Profile Picture">
            </div>
        @endforeach
    </section>

    <!-- Backgorund -->
    <section class="max-w-7xl mx-auto px-5 my-6 text-white" id="background">
      <div class="text-center">
        <p class="mb-3 font-montserrat font-medium text-3xl">Background</p>
        <h3 class="text-primary text-3xl font-bold mb-16">Siapa Aku?</h3>
      </div>
      <div
        class="my-10 flex flex-col md:flex-row justify-around items-center gap-16"
      >
      @foreach($backgrounds as $background)
        <div
          class="w-[354px] h-[580px] px-5 py-8 rounded-lg border border-primary shadow-[#5dadec3b] cursor-pointer shadow-xl"
        >
          <img src="data:image/jpeg;base64,{{ base64_encode($background->image) }}" alt="Background Image" class="w-[300px] h-[200px] mb-12 mx-auto"/>
          <h5 class="text-center my-5 text-xl">{{ $background->title }}</h5>
          <p class="text-justify">
            {{ $background->content }}
          </p>
        </div>
      @endforeach
    </section>

    <!-- projects -->
    <section class="px-5 my-32 mx-auto max-w-7xl" id="project">
      <div class="text-center text-white">
        <h3 class="text-3xl font-bold mb-5">
          Recent <span class="text-primary">Projects</span>
        </h3>
        <p class="mb-6 md:w-3/4 mx-auto">
        With a fervent dedication to crafting user-centric experiences, I proudly exhibit my latest endeavors that seamlessly fuse contemporary design trends with state-of-the-art technologies. My primary goal is to deliver designs that not only cater to user needs but also transcend their expectations through intuitive interfaces and captivating aesthetics.
        </p>
      </div>
      <div
      class="flex md:flex-row flex-row items-center justify-center gap-8 my-20"
      >
      @foreach($projects as $project)
      <a href="{{ $project->link }}">
        <div
          class="border border-primary shadow-xl shadow-[#5dadec3b] md:w-[441px] md:h-96 rounded-2xl p-5 md:p-0"
        >
          <img src="data:image/jpeg;base64,{{ base64_encode($project->image) }}" alt="" class="p-5 w-full h-full" />
          <p class="text-center text-xl text-white mt-5">{{ $project->title }}</p>
        </div>
      </a>
        
      @endforeach
      </div>
    </section>

    <!-- skills  -->
    <section class="my-16 max-w-7xl mx-auto px-5" id="skill">
      <div class="text-center">
        <p class="mb-3 font-montserrat font-medium text-white text-3xl">Skills</p>
        <h3 class="text-primary text-3xl font-bold mb-16">
          What Can I Do
        </h3>
        <section class="flex flex-col lg:flex-row justify-between space-y-10 lg:space-y-0 lg:space-x-10">
          <div class="flex-1">
              <div class="relative mb-10">
                  <h2 class="relative text-white text-2xl font-helvetica mb-8 inline-block">Programming Skills</h2>
              </div>
              @foreach($programmingSkills as $skill)
                  <div class="space-y-6">
                      <div>
                          <div class="text-lg font-light text-gray-500 uppercase mb-3">{{ $skill->skill_name }}</div>
                          <div class="relative w-full h-4 bg-gray-500 rounded-full mb-5">
                              <div class="absolute top-0 left-0 h-4 bg-[#ffff] rounded-full" style="width: {{ $skill->percentage }}%"></div>
                              <div class="absolute top-0 right-0 transform -translate-y-8 text-lg text-gray-500"></div>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
          <div class="flex-1">
              <div class="relative mb-10">
                  <h2 class="relative text-white text-2xl font-helvetica mb-8 inline-block">Language Skills</h2>
              </div>
              @foreach($worldLanguages as $skill)
                  <div class="space-y-6">
                      <div>
                          <div class="text-lg font-light text-gray-500 uppercase mb-3">{{ $skill->skill_name }}</div>
                          <div class="relative w-full h-4 bg-gray-500 rounded-full mb-5">
                              <div class="absolute top-0 left-0 h-4 bg-[#ffff] rounded-full" style="width: {{ $skill->percentage }}%"></div>
                              <div class="absolute top-0 right-0 transform -translate-y-8 text-lg text-gray-500"></div>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>
      </section>

    <!-- Contact -->  
    <section class=" w-full flex flex-col justify-center items-center my-32" id="contact">
        <div class="text-center">
        <p class="font-montserrat font-medium text-white text-3xl mb-10">Contact</p>
            <a href="https://wa.link/d7y4ue" class="px-20 py-3 bg-white rounded-full no-underline text-gray-600 transition duration-300 ease-in-out hover:bg-gray-700 hover:text-white inline-flex items-center">
                Hubungi Saya
            </a>
        </div>
        <nav class="flex space-x-8 mt-10">
            <a href="https://www.facebook.com/afif.jawa.1" class="w-20 h-20 bg-white flex justify-center items-center rounded-full relative shadow-lg transition duration-300 ease-in-out hover:shadow-xl hover:bg-blue-600">
                <span class="absolute bottom-full mb-2 text-white transform translate-y-2 text-lg p-2.5 rounded opacity-0 transition duration-300 ease-in-out hover:translate-y-0 hover:opacity-100">Facebook</span>
                <svg viewBox="0 0 126.22 246" class="w-8 h-8 fill-current text-gray-600 hover:text-white">
                    <path d="M173.6,27h35.92V70.19h-29.7c-15,2.39-14,19.79-14,19.79v29.33h47.27l-7.05,47.52H166.33V273H119.19V166.09H86.89V119.31h32.3V87.74A68.5,68.5,0,0,1,127,55.49c5.27-9.87,14-20.18,28.41-25.47A53,53,0,0,1,173.6,27Z" transform="translate(-86.89 -27)"/>
                </svg>
            </a>
            <a href="https://twitter.com/Sheesstrash" class="w-20 h-20 bg-white flex justify-center items-center rounded-full relative shadow-lg transition duration-300 ease-in-out hover:shadow-xl hover:bg-blue-400">
                <span class="absolute bottom-full mb-2 text-white transform translate-y-2 text-lg p-2.5 rounded opacity-0 transition duration-300 ease-in-out hover:translate-y-0 hover:opacity-100">Twitter</span>
                <svg viewBox="0 0 245.97 198.8" class="w-8 h-8 fill-current text-gray-600 hover:text-white">
                    <path d="M44.28,59.23S89.07,113,147.62,111C140.12,86,172.14,21.7,234,65.49c0,0,24.77-5.26,32.28-12.51,0,0-3.5,14.76-20.77,27.52,0,0-1.25,2.5,27.53-6.76,0,0-12.27,16.77-25.28,26,0,0,7.18,101-91.91,141,0,0-60.72,26.69-128.79-14,0,0,40.71,6.67,74.4-20.69,0,0-38.36-3.67-46.37-35.36,0,0,13.35,3.67,22-1,0,0-36-4-39.7-49.71,0,0,17,7.33,22.35,6.33C59.71,126.37,23.85,104.52,44.28,59.23Z" transform="translate(-27.01 -50.6)"/>
                </svg>
            </a>
            <a href="https://www.linkedin.com/in/afif-al-dzakwan-0899942b3/" class="w-20 h-20 bg-white flex justify-center items-center rounded-full relative shadow-lg transition duration-300 ease-in-out hover:shadow-xl hover:bg-blue-700">
                <span class="absolute bottom-full mb-2 text-white transform translate-y-2 text-lg p-2.5 rounded opacity-0 transition duration-300 ease-in-out hover:translate-y-0 hover:opacity-100">Linkedin</span>
                <svg viewBox="0 0 244.65 226.28" class="w-8 h-8 fill-current text-gray-600 hover:text-white">
                    <path d="M35.73,81.63a24.22,24.22,0,0,1-8-18.5,24.59,24.59,0,0,1,8-18.79q8.06-7.47,20.76-7.48,12.43,0,20.48,7.48a24.59,24.59,0,0,1,8,18.79,24.22,24.22,0,0,1-8,18.5q-8,7.5-20.48,7.49Q43.79,89.12,35.73,81.63ZM80.5,105.51V263.14H32.2V105.51Z" transform="translate(-27.68 -36.86)"/>
                    <path d="M255.8,121.75q16.51,17.94,16.52,49.3v92.09h-48v-85.6q0-15.81-8.19-24.57t-22-8.76q-13.84,0-22,8.76t-8.2,24.57v85.6H115.53V105.51h48.31v20.9a51.15,51.15,0,0,1,19.78-16.53,63,63,0,0,1,28-6.07Q239.27,103.81,255.8,121.75Z" transform="translate(-27.68 -36.86)"/>
                </svg>
            </a>
            <a href="https://www.instagram.com/_aldzakwan/" class="w-20 h-20 bg-white flex justify-center items-center rounded-full relative shadow-lg transition duration-300 ease-in-out hover:shadow-xl hover:bg-pink-600">
                <span class="absolute bottom-full mb-2 text-white transform translate-y-2 text-lg p-2.5 rounded opacity-0 transition duration-300 ease-in-out hover:translate-y-0 hover:opacity-100">Instagram</span>
                <svg viewBox="0 0 246.15 246.15" class="w-8 h-8 fill-current text-gray-600 hover:text-white">
                    <path d="M201,51.5A47.49,47.49,0,0,1,248.41,99V200.88A47.49,47.49,0,0,1,201,248.32H99a47.49,47.49,0,0,1-47.44-47.44V99A47.49,47.49,0,0,1,99,51.5H201m0-24.66H99A72.11,72.11,0,0,0,26.92,99V200.88A72.12,72.12,0,0,0,99,273H201a72.12,72.12,0,0,0,72.11-72.11V99A72.11,72.11,0,0,0,201,26.84Z" transform="translate(-26.92 -26.84)"/>
                    <path d="M150,124.34a25.57,25.57,0,1,1-25.57,25.57A25.6,25.6,0,0,1,150,124.34m0-24.66a50.24,50.24,0,1,0,50.23,50.23A50.23,50.23,0,0,0,150,99.68Z" transform="translate(-26.92 -26.84)"/>
                    <circle cx="189.98" cy="55.33" r="13.81"/>
                </svg>
            </a>
        </nav>
    </section>
    @endforeach
  </body>
</html>
