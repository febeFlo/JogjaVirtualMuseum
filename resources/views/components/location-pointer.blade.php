{{-- <div>
    <img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="w-[45px]"/>
    <div class="absolute w-[250px] h-[125px] flex flex-col hidden opacity-0 transform group-hover:flex group-hover:opacity-100 group-hover:transition-opacity" style="top: 100%; left: -150%; background-color: #f8f8f8; transition:300ms; border-radius:15px; box-shadow: 0px 3px 15px rgba(0,0,0,0.2); overflow:hidden;">
        <img src="{{ asset('assets/jogjaView.jpg') }}" class="h-[62.5px] bg-blue-500"/>
        <div class="pl-2 description">
            <p class="font-bold">{{ $name }}</p>
            <p>{!! $titikUkur !!}</p>
        </div>
    </div>
</div> --}}

<div class="relative group">
    <img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="w-[45px]" />
    <div class="absolute left-0 z-50 top-full mt-2 max-w-[300px] flex flex-col hidden opacity-0 group-hover:flex group-hover:opacity-100 group-hover:transition-opacity transition-opacity duration-300 bg-[#f8f8f8] rounded-lg shadow-lg overflow-hidden">
        <img src="{{ asset('assets/jogjaView.jpg') }}" class="object-cover w-full h-auto" />
        <div class="p-4 description">
            <p class="font-bold">{{ $name }}</p>
            <p>{!! $titikUkur !!}</p>
        </div>
    </div>
</div>
