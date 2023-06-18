<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
    <style>
        ::-webkit-scrollbar {
            width: 0;
        }

        .text {
            transform: translateX(100%);
            /* animation: roll 5s linear 0 infinite alternate; */
            animation-name: roll;
            animation-duration: 15s;
            animation-timing-function: linear;
            animation-delay: 0;
            animation-iteration-count: infinite;
            animation-direction: forwards;
        }

        .logout-button {
            display: none;
        }

        .login-email-container:hover .logout-button {
            display: block;
        }

        .logout-button {
            background-color: #e74c3c;
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        @keyframes roll {
            to {
                transform: translateX(-200%);
            }
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        roll: "spin 3s linear infinite",
                    },
                },
            },
        };
    </script>
</head>

<body>
    <header class="flex bg-stone-900 text-white justify-between items-center w-screen h-12">
        <div class="logo flex-shrink-0 w-2/12 grid place-items-center">
            <h4> 🔥🔥Handilao</h4>
        </div>
        <div class="noti whitespace-nowrap overflow-clip text-white/50">
            <p class="text">
                Ẩm thực Việt Nam phong phú
            </p>
        </div>
        <div class="register flex w-5/12 h-full justify-around text-center">
            <div class="avatar flex-grow self-center mr-[93px]">🤓</div>
            <div class="login cursor-pointer flex-grow self-center">
                <form action="{{ route('frontend_signup') }}" method="POST">
                    @csrf
                    @if ($login_email)
                        <div class="login-email-container" onmouseover="showLogoutButton()"
                            onmouseout="hideLogoutButton()">
                            <p class="mr-2 text-purple-500 login-email">Table Name: {{ $login_email }}</p>
                            <button class="logout-button " onclick="logout()">Logout</button>
                        </div>
                    @else
                        <button>Join</button>
                    @endif
                </form>

            </div>
            {{-- <div class="signup cursor-pointer flex-grow self-center">
                <p class="w-full border-l-2 border-l-white/50">Dang ky</p>
            </div> --}}
            <form action="{{ route('find') }}" method="post">
                @csrf
                @if ($login_email)
                    @if ($price_final != 0)
                        <button type="submit" class="mr-7 w-fit h-5 mt-[14px]">Check</button>
                    @endif
                @endif
            </form>
        </div>
    </header>
    <main class="w-full h-[calc(100vh-3rem)] flex overflow-clip bg-red-500">
        <div class="sidebar bg-stone-900 w-2/12  flex items-center overflow-auto">
            <ul class="w-full  list-none cursor-pointer">
                @foreach ($types as $t)
                    <li>
                        <form action="{{ route('checktype') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $t->type_name }}" id="type_name" name="type_name" required>
                            <button class="w-full py-3 text-center text-white focus:bg-red-500" type="submit">
                                {{ $t->type_name }}
                            </button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="content relative bg-stone-800 w-10/12 h-screen overflow-auto flex flex-row flex-wrap">
            @foreach ($foodss as $food)
                <section class="w-1/2 h-1/3 flex bg-gray-200 pb-1">
                    <div class="wrapper w-4/6 h-full bg-blue-500">
                        <img src="{{ $food->image_url }}" class="w-full h-full object-cover" alt="" />
                    </div>
                    <div class="flex flex-col h-full p-2 w-2/6 justify-between bg-white">
                        <div>
                            <div class="name text-xl font-bold">{{ $food->name }}</div>
                            <div class="price text-sm">&#8363;{{ $food->price }}</div>
                        </div>
                        <form action="{{ route('addtocart') }}" method="post">
                            @csrf
                            <input type="hidden" id="name" name="name" value="{{ $food->name }}">
                            <input type="hidden" id="price" name="price" value="{{ $food->price }}">
                            <button type="submit"
                                class="w-8 h-8 bg-red-500 text-center leading-7 rounded-full text-3xl text-white self-end cursor-pointer">
                                +
                            </button>
                        </form>
                    </div>
                </section>
            @endforeach
            <div
                class="total fixed bottom-0 right-0 flex items-center justify-between px-4 w-5/12 h-12 text-white bg-green-400">
                <div class="monney font-bold">🛒&#8363; {{ $price_final }}</div>
                <div class="text-xs">Tong gia tri</div>
            </div>
        </div>
    </main>
</body>

<script>
    function showLogoutButton() {
        var logoutButton = document.querySelector('.logout-button');
        logoutButton.style.display = 'block';
    }

    function hideLogoutButton() {
        var logoutButton = document.querySelector('.logout-button');
        logoutButton.style.display = 'none';
    }

    function logout() {
        //danngu
    }
</script>

</html>
