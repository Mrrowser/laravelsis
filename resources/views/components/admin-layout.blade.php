<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Admin SIS</title>
    </head>
<body class="mb-48">
    

    <main>
        {{$slot}}
    </main>

    <footer class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-gray-300 text-white h-24 mt-24 opacity-90 md:justify-center">
        <p class="ml-2 text-black">Copyright &copy; 2023, Group Arc</p>

        <a
            href="/admins/create"
            class="absolute top-1/3 right-10 bg-blue-900 text-white py-2 px-5 hover:bg-blue-900"
            >
            Announcement!
        </a>
    </footer>

    <x-flash-message/>
</body>
</html>