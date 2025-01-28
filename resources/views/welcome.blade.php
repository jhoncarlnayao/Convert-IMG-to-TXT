<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body class="bg-neutral-900">
    <div id="contents">
        <div id="content1">
            <div id="title-description">
                <h1 class="p-4 md:p-5 text-2xl font-semibold text-gray-700 dark:text-neutral-200">Convert your Image
                    into Text</h1>
                <p class="px-4 md:px-5 text-sm text-gray-700 dark:text-neutral-400">This app can convert image into
                    text. The image can be uploaded or you <br>can take a photo from your device.The text will be
                    displayed in the box below the image.</p>
            </div>
            <div id="card1" class="cursor-pointer flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70 relative">
                <div class="absolute inset-0 bg-neutral-700 opacity-40 rounded-xl"></div>
            
                <div class="p-4 md:p-5 relative z-10" id="card1-content" onclick="document.getElementById('fileInput').click();">
                    <div class="w-20 h-20 dark:bg-neutral-700 rounded-full flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-from-line">
                            <path d="m18 9-6-6-6 6" />
                            <path d="M12 3v14" />
                            <path d="M5 21h14" />
                        </svg>
                    </div>
                    <p class="mt-2 text-gray-500 dark:text-neutral-400">
                        Drop your image here or <a href="#" class="text-blue-600 decoration-2 hover:text-blue-900 hover:underline focus:underline focus:outline-none focus:text-blue-700"><strong>browse</strong></a>
                    </p>
                    <p class="mt-2 text-gray-500 dark:text-neutral-400 text-xs">
                        Pick an image up to 5mb
                    </p>
                    <input type="file" id="fileInput" class="hidden" accept="image/*" onchange="changeBackground(event)" />
                </div>
            </div>
            
            <div id="buttons">
                <button type="button" id="button2" onclick="resetCardBackground()"
                    class="mt-5 py-3 px-32 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border text-gray-500 hover:border-blue-600 hover:text-blue-600 focus:outline-none focus:border-blue-600 active:border-blue-600 focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-red-500 dark:hover:border-red-600 dark:focus:text-red-500 dark:focus:border-red-600 dark:active:text-red-500 dark:active:border-red-600">
                    Delete
                </button>
                <button type="button" id="button1"
                    class="mt-5 py-3 px-32 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 text-gray-500 hover:border-blue-600 hover:text-blue-600 focus:outline-none focus:border-blue-600 active:border-blue-600 focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:border-neutral-700 dark:text-neutral-400 dark:hover:text-blue-500 dark:hover:border-blue-600 dark:focus:text-blue-500 dark:focus:border-blue-600 dark:active:text-blue-500 dark:active:border-blue-600">
                    Convert
                </button>
            </div>
        </div>

        <div id="content2">
            <div id="card2"
                class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="p-4 " id="card1-content">
                    <div class="flex self-start flex-row gap-4 mb-7">
                        <button type="button" title="Copy"
                            class="flex shrink-0 justify-center items-center gap-2 size-[38px] text-sm font-medium rounded-lg border border-transparent bg-neutral-700 text-white hover:bg-neutral-500 focus:outline-none focus:bg-neutral-500 disabled:opacity-50 disabled:pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-copy">
                                <rect width="8" height="4" x="8" y="2" rx="1" ry="1"/>
                                <path d="M8 4H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2"/>
                                <path d="M16 4h2a2 2 0 0 1 2 2v4"/>
                                <path d="M21 14H11"/>
                                <path d="m15 10-4 4 4 4"/>
                            </svg>
                        </button>
        
                        <button type="button" title="Clear"
                            class="flex shrink-0 justify-center items-center gap-2 size-[38px] text-sm font-medium rounded-lg border border-transparent bg-neutral-700 text-white hover:bg-neutral-500 focus:outline-none focus:bg-neutral-500 disabled:opacity-50 disabled:pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash">
                                <path d="M3 6h18"/>
                                <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                                <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                            </svg>
                        </button>
                    </div>
                    <div class="overflow-y-auto max-h-96 custom-scrollbar">
                        <p class="text-gray-500 dark:text-neutral-400">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis ducimus neque enim facere earum error ad hic velit quas et? Asperiores mollitia quasi consequatur debitis. In fuga voluptate obcaecati unde.
                        </p>
                        <p class="text-gray-500 dark:text-neutral-400">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis ducimus neque enim facere earum error ad hic velit quas et? Asperiores mollitia quasi consequatur debitis. In fuga voluptate obcaecati unde.
                        </p>
                        <p class="text-gray-500 dark:text-neutral-400">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis ducimus neque enim facere earum error ad hic velit quas et? Asperiores mollitia quasi consequatur debitis. In fuga voluptate obcaecati unde.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
<script>
    function changeBackground(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                
                const card = document.getElementById('card1');
                card.style.backgroundImage = `url(${e.target.result})`;
                card.style.backgroundSize = 'cover';
                card.style.backgroundPosition = 'center'; 
                card.querySelector('.absolute').style.display = 'none';
            };
            reader.readAsDataURL(file);
        }
    }

    function resetCardBackground() {
        const card = document.getElementById('card1');

        card.style.backgroundImage = '';
        card.style.backgroundSize = '';
        card.style.backgroundPosition = '';
        card.querySelector('.absolute').style.display = 'block';
    }
</script>
</html>
