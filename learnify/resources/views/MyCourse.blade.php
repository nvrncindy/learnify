<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Course Catalogue</title>
  <script src="https://cdn.tailwindcss.com"></script>

<body class="bg-white text-gray-700 antialiased">
    <div class="container max-w-full bg-gray-200 rounded-b px-6 py-4 mb-6 flex items-center justify-between">
        <h1>Learnify</h1>
        <nav>
            <ul class="flex items-center gap-4">
                <li>
                    <a href="/LandingPage">Home</a>
                </li>
                <li>
                    <a href="/Course">Course Catalogue</a>
                </li>
                <li>
                    <a href="/MyCourse">MyCourse</a>
                </li>
                <li>
                    <a href="/Profile">Profile</a>
                </li>
                <li>
                    <div class="w-6 h-6 bg-white border rounded shadow-sm ml-auto"></div>
                </li>
            </ul>
        </nav>
    </div>



<div class="flex items-center justify-center ">
  <div class="space-y-6 w-full max-w-3xl">
     <h1 class="text-lg font-bold">My Courses</h1>
    <ul class="space-y-4">
        </li>
            <li class="">
            <div class="flex bg-gray-300 m-auto rounded-lg shadow items-center justify-between p-4">
                <img class="rounded-xl w-[120px]"  src="{{ asset('ai.png') }}" alt="COMPSCI COURSE">
                <div class="flex-1 flex flex-col ml-4">
                    <h1 class="text-lg font-bold">Fundamentals of AI</h1>
                    <p class="text-sm text-gray-700">Last Acessed: Title</p>
                    <p class="text-sm text-gray-700">Updated: Just now</p>
                </div>
                <div class="flex-col">
                    <h1>Progress : 50%</h1>
                    <div class="container text-center"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Continue</button>

                </div>
            </div>
        </li>
        </li>
            <li class="">
            <div class="flex bg-gray-300 m-auto rounded-lg shadow items-center justify-between p-4">
                <img class="rounded-xl w-[120px]"  src="{{ asset('Comp.png') }}" alt="COMPSCI COURSE">

                <div class="flex-1 flex flex-col ml-4">
                    <h1 class="text-lg font-bold">Fundamentals of Computer Science</h1>
                    <p>Last Acessed: Title</p>
                    <p>Updated: Just now</p>
                </div>
                <div class="flex-col">
                    <h1>Progress : 50%</h1>
                    <div class="container text-center"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Continue</button>

                </div>
            </div>
        </li>
        </li>
            <li class="">
            <div class="flex bg-gray-300 m-auto rounded-lg shadow items-center justify-between p-4">
                <img class="rounded-xl w-[120px]"  src="{{ asset('Web.png') }}" alt="COMPSCI COURSE">
                <div class="flex-1 flex flex-col ml-4">
                    <h1 class="text-lg font-bold">Introduction to Web Programming</h1>
                    <p>Last Acessed: Title</p>
                    <p>Updated: Just now</p>
                </div>
                <div class="flex-col">
                    <h1 class="text-center">Progress : 100%</h1>
                    <div class="container text-center"><button type="button" class="text-black bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Completed</button>

                </div>
            </div>
        </li>
    </ul>
    </div>

</body>
</html>