<div>
    <img src="{{ asset('assets/locationPointer.png') }}" alt="Location Pointer" class="w-[45px]"/>
    <div class="absolute w-[250px] h-[125px] flex flex-col hidden opacity-0 transform group-hover:flex group-hover:opacity-100 group-hover:transition-opacity" style="top: 100%; left: -150%; background-color: #f8f8f8; transition:300ms; border-radius:15px; box-shadow: 0px 3px 15px rgba(0,0,0,0.2); overflow:hidden;">
        <img src="{{ asset('assets/jogjaView.jpg') }}" class="h-[62.5px] bg-blue-500"/>
        <div class="description pl-2">
            <p class="font-bold">{{ $name }}</p>
            <p>{!! $titikUkur !!}</p>
        </div>
    </div>
</div>
