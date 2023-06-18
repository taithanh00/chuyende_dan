<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        * {
            box-sizing: border-box;
        }
    </style>
</head>

<body class="flex">
    <div class="navbar w-[5%] bg-stone-700 grid place-items-center">
        <ul class="w-11/12 list-none flex flex-col gap-2 text-center">
            <form action="{{ route('index') }}" method="POST">
                @csrf
                <li>
                    <button
                        class="aspect-square w-full border border-gray-500 rounded-md cursor-pointer focus:bg-blue-50">
                        📅
                    </button>
                </li>
            </form>
            {{-- <form action="{{ route('alltable') }}" method="POST">
                @csrf
                <li>
                    <button type="submit"
                        class="aspect-square w-full border border-gray-500 rounded-md cursor-pointer focus:bg-blue-50">
                        🛒
                    </button>
                </li>
            </form> --}}
        </ul>
    </div>
    <main class="w-[95%] h-screen flex overflow-clip">
        <div class="tables w-8/12 h-full flex flex-wrap pl-1 pt-1 overflow-auto">
            @foreach ($tables as $table)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <form action="{{ route('alltable-find') }}" method="POST">
                        @csrf
                        <div class="aspect-square w-full bg-orange-500 grid place-items-center cursor-pointer">
                            <input type="hidden" value="{{ $table->table_id }}" id="table" name="table">
                            <button type="submit" class="table-button">ban {{ $table->table_id }}</button>
                        </div>
                    </form>
                </div>
            @endforeach
        </div>
        <div class="info flex flex-col w-4/12 h-full px-8 py-8">
            <div class="name text-center text-3xl">Table 1</div>
            <div class="detail h-full flex flex-col pt-4 pb-8 justify-between">
                <div class="time flex justify-between">
                    <div class="">Dine in at: <span class="ml-1">7:30 pm</span></div>
                    <div class="">Check out at: <span class="ml-1">7:30 pm</span></div>
                </div>
                <ul class="orders flex flex-col gap-2 max-h-[70%] overflow-auto flex-wrap">
                    @if ($get_value)
                        <li class="flex justify-around">
                            @foreach ($get_value as $value)
                                <div class="order font-medium text-purple-500">
                                    <p>{{ $value }}</p>
                                </div>
                            @endforeach
                            {{-- <div class="price">300.000&#8363;</div> --}}
                        </li>
                    @endif
                </ul>
                <div class="checkout flex flex-col gap-2">
                    <div class="total flex flex-row justify-between">
                        <p>Total:</p>
                        <p>1.200.000&#8363;</p>
                    </div>
                    <button class="bg-red-500 w-full rounded-md py-2 text-white" onclick="checkout()">
                        Check out
                    </button>
                </div>
            </div>
        </div>
    </main>
    <div
        class="modal hidden absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-1/2 h-2/3 rounded-xl p-4 shadow-2xl bg-white border border-gray-200">
        <div class="flex flex-col h-full justify-between">
            <p class="text-center">check out!</p>
            <div class="time flex flex-col justify-between">
                <div class="">Dine in at: <span class="ml-1">7:30 pm</span></div>
                <div class="">Check out at: <span class="ml-1">7:30 pm</span></div>
            </div>
            <ul class="orders flex flex-col gap-2 max-h-[70%] overflow-auto">
                <li class="flex justify-around">
                    <div class="order">Lau 1</div>
                    <div class="price">300.000&#8363;</div>
                </li>
                <li class="flex justify-around">
                    <div class="order">Lau 1</div>
                    <div class="price">300.000&#8363;</div>
                </li>
                <li class="flex justify-around">
                    <div class="order">Lau 1</div>
                    <div class="price">300.000&#8363;</div>
                </li>
                <li class="flex justify-around">
                    <div class="order">Lau 1</div>
                    <div class="price">300.000&#8363;</div>
                </li>
                <li class="flex justify-around">
                    <div class="order">Lau 1</div>
                    <div class="price">300.000&#8363;</div>
                </li>
                <li class="flex justify-around">
                    <div class="order">Lau 1</div>
                    <div class="price">300.000&#8363;</div>
                </li>
                <li class="flex justify-around">
                    <div class="order">Lau 1</div>
                    <div class="price">300.000&#8363;</div>
                </li>
                <li class="flex justify-around">
                    <div class="order">Lau 1</div>
                    <div class="price">300.000&#8363;</div>
                </li>
            </ul>
            <div>
                <div class="flex justify-between mb-2">
                    <p>Total:</p>
                    <p>1.200.000&#8363;</p>
                </div>
                <div class="flex gap-2">
                    <button class="bg-green-500 w-full rounded-md py-2 text-white">
                        Confirm
                    </button>
                    <button class="bg-red-500 w-full rounded-md py-2 text-white" onclick="cancel()">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function checkout() {
        let modal = document.querySelector(".modal");
        modal.classList.remove("hidden");
    }

    function cancel() {
        let modal = document.querySelector(".modal");
        modal.classList.add("hidden");
    }
</script>

</html>
