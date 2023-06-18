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

        .tables {
            background: url('https://www.mckinsey.com/~/media/mckinsey/industries/technology%20media%20and%20telecommunications/high%20tech/our%20insights/ordering%20in%20the%20rapid%20evolution%20of%20food%20delivery/ordering-in-1221325418-thumb-1536x1536.jpg') no-repeat;
            background-size: cover;

        }
    </style>
</head>

<body class="flex">
    <div class="navbar w-[5%] bg-stone-700 grid place-items-center">
        <ul class="w-11/12 list-none flex flex-col gap-2 text-center">
            <li>
                <button class="aspect-square w-full border border-gray-500 rounded-md cursor-pointer focus:bg-blue-50">
                    📅
                </button>
            </li>
            <form action="{{ route('alltable') }}" method="POST">
                @csrf
                <li>
                    <button type="submit"
                        class="aspect-square w-full border border-gray-500 rounded-md cursor-pointer focus:bg-blue-50">
                        🛒
                    </button>
                </li>
            </form>
        </ul>
    </div>
    <main class="w-[95%] h-screen flex overflow-clip">
        <div class="tables w-8/12 h-full flex flex-wrap pl-1 pt-1 overflow-auto">
            @if ($login_email == 1)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-blue-500 grid place-items-center cursor-pointer">
                        ban 1
                    </div>
                </div>
            @endif
            @if ($login_email == 2)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 2
                    </div>
                </div>
            @endif
            @if ($login_email == 3)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 3
                    </div>
                </div>
            @endif
            @if ($login_email == 4)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 4
                    </div>
                </div>
            @endif
            @if ($login_email == 5)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 5
                    </div>
                </div>
            @endif
            @if ($login_email == 6)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 6
                    </div>
                </div>
            @endif
            @if ($login_email == 7)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 7
                    </div>
                </div>
            @endif
            @if ($login_email == 8)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 8
                    </div>
                </div>
            @endif
            @if ($login_email == 9)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 9
                    </div>
                </div>
            @endif
            @if ($login_email == 10)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 10
                    </div>
                </div>
            @endif
            @if ($login_email == 11)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 11
                    </div>
                </div>
            @endif
            @if ($login_email == 12)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 12
                    </div>
                </div>
            @endif
            @if ($login_email == 13)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 13
                    </div>
                </div>
            @endif
            @if ($login_email == 14)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 14
                    </div>
                </div>
            @endif
            @if ($login_email == 15)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 15
                    </div>
                </div>
            @endif
            @if ($login_email == 16)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 16
                    </div>
                </div>
            @endif
            @if ($login_email == 17)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 17
                    </div>
                </div>
            @endif
            @if ($login_email == 18)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 18
                    </div>
                </div>
            @endif
            @if ($login_email == 19)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 19
                    </div>
                </div>
            @endif
            @if ($login_email == 20)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 20
                    </div>
                </div>
            @endif
            @if ($login_email == 21)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 21
                    </div>
                </div>
            @endif
            @if ($login_email == 22)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 22
                    </div>
                </div>
            @endif
            @if ($login_email == 23)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 23
                    </div>
                </div>
            @endif
            @if ($login_email == 24)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 24
                    </div>
                </div>
            @endif
            @if ($login_email == 25)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 25
                    </div>
                </div>
            @endif
            @if ($login_email == 26)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 26
                    </div>
                </div>
            @endif
            @if ($login_email == 27)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 27
                    </div>
                </div>
            @endif
            @if ($login_email == 28)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 28
                    </div>
                </div>
            @endif
            @if ($login_email == 29)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 29
                    </div>
                </div>
            @endif
            @if ($login_email == 30)
                <div class="waper aspect-square w-1/5 pr-1 pb-1">
                    <div class="aspect-square w-full bg-green-500 grid place-items-center cursor-pointer">
                        ban 30
                    </div>
                </div>
            @endif
        </div>
        <div class="info flex flex-col w-4/12 h-full px-8 py-8">
            <div class="name text-center text-3xl">Table {{ $login_email }}</div>
            <div class="detail h-full flex flex-col pt-4 pb-8 justify-between">
                <div class="time flex justify-between">
                    <div class="">Dine in at: <span class="ml-1">{{ $time }}</span></div>
                    <div class="">Check out at: <span class="ml-1">{{ $time2 }}</span></div>
                </div>
                <ul class="orders flex flex-col gap-2 max-h-[70%] overflow-auto">
                    @foreach ($list_final as $list)
                        <li class="flex justify-around ">
                            <div class="order text-left relative top-0 left-0 float-left"
                                style="width: 50%; margin-right: 10px">{{ $list->food_name }}</div>
                            <div class="price text-right relative top-0 left-0 float-left"
                                style="width: 20%; margin-right: 10px">{{ $list->food_money }}&#8363;</div>
                            <div class="quantity text-right relative top-0 left-0 float-left" style="width: 20%;">
                                {{ $list->quantity }}</div>
                        </li>
                    @endforeach
                </ul>
                <div class="checkout flex flex-col gap-2">
                    <div class="total flex flex-row justify-between">
                        <p>Total:</p>
                        <p>{{ $price_final }}&#8363;</p>
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
                <div class="">Dine in at: <span class="ml-1">{{ $time }}</span></div>
                <div class="">Check out at: <span class="ml-1">{{ $time2 }}</span></div>
            </div>
            <ul class="orders flex flex-col gap-2 max-h-[70%] overflow-auto">
                @foreach ($list_final as $list)
                    <li class="flex justify-around ">
                        <div class="order text-left relative top-0 left-0 float-left"
                            style="width: 50%; margin-right: 10px">{{ $list->food_name }}</div>
                        <div class="price text-right relative top-0 left-0 float-left"
                            style="width: 20%; margin-right: 10px">{{ $list->food_money }}&#8363;</div>
                        <div>
                            <button class="btn btn-link px-2 w-2 h-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus"></i>
                            </button>
                            <input id="form1" min="0" name="quantity[{{ $list->id }}]"
                                value="{{ $list->quantity }}" type="number"
                                class="form-control form-control-sm w-9 h-5 border-[1px] border-solid border-gray-500" />
                            <button class="btn btn-link px-2 w-2 h-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div>
                <div class="flex justify-between mb-2">
                    <p>Total:</p>
                    <p>{{ $price_final }}</p>
                </div>
                <form action="{{ route('confirm_bill') }}" method="post">
                    @csrf
                    <div class="flex gap-2">
                        <input type="submit" class="bg-green-500 w-full rounded-md py-2 text-white cursor-pointer">
                    </div>
                </form>
                <button class="bg-red-500 w-full rounded-md py-2 text-white" onclick="cancel()">
                    Cancel
                </button>
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
