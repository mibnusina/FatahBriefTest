<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatah</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="container mx-auto px-4 py-24">
    
        <header class="text-center mb-16">
            <h1 class="text-5xl mb-4 font-semibold">Paket Keanggotaan</h1>
        </header>

        
        <div class="lg:flex lg:items-center lg:-mx-2">
            @foreach ($data as $d)
            <div class="mb-4 lg:mb-0 lg:w-1/3 lg:px-2">
                <div class="text-center border border-grey-light p-10 rounded">
                    <h2 class="text-lg mb-4 font-semibold">{{ $d->nama }}</h2>
                        <div class="mb-6">
                            <span class="block text-5xl pb-2 font-semibold">Rp. {{ $d->harga }}</span>
                            <span class="text-sm text-grey font-light">{{ $d->durasi }} Bulan</span>
                        </div>
                    <button class="text-sm tracking-wide uppercase inline-block bg-white border border-red text-red font-bold w-full p-3 rounded no-underline hover:bg-violet-400" href="#">Get started</button>
                    
                </div>
            </div>
            @endforeach
        </div>
        
        
    </div>
    
</body>
</html>