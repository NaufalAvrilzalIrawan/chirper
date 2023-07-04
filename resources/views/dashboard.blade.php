<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Selamat Datang Kembali di Chirp, " . Auth::user()->name ."!") }}
                </div>
                <img src="https://th.bing.com/th/id/R.26ff532f3d9f3661834014354af3958d?rik=HcLvz5o0TGO5%2fw&riu=http%3a%2f%2fimg13.deviantart.net%2fbb55%2fi%2f2014%2f207%2f3%2f8%2fsinh__the_slumbering_dragon_by_themefinland-d7sdgn8.jpg&ehk=fTSXyCVSTG2S3sLaAzpncZhLHRS6jhxZxCNVGLFmgUI%3d&risl=&pid=ImgRaw&r=0">
            </div>
        </div>
    </div>
</x-app-layout>
