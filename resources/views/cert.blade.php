@extends('layouts.app')

@section('title')

    Сертификация авто PLC Group

@endsection

@section('content')

<img src="/assets/cert.png" class="w-full " alt="">

<div class="px-10 lg:px-60 py-10">

    <p class="text-lg text-justify">@lang('cert.text1')</p>
    <br>
    <p class="text-lg text-justify">@lang('cert.text2')</p>

    <p class="text-lg text-justify">@lang('cert.text3')</p>
    <br>
    <p class="text-lg text-justify">@lang('cert.text4')</p>

    <p class="text-lg text-justify">@lang('cert.text5')</p>
    <br>

    <div class="space-y-2 text-lg text-justify">
        <div class="flex space-x-2 items-start">
            <div class="my_blue rounded-full bullet"></div>
            <div class="text-lg text-justify">@lang('cert.step1')</div>
        </div>
        <div class="flex space-x-2 items-start">
            <div class="my_blue rounded-full bullet"></div>
            <div class="text-lg text-justify">@lang('cert.step2')</div>
        </div>
        <div class="flex space-x-2 items-start">
            <div class="my_blue rounded-full bullet"></div>
            <div class="text-lg text-justify">@lang('cert.step3')</div>
        </div>
        <div class="flex space-x-2 items-start">
            <div class="my_blue rounded-full bullet"></div>
            <div class="text-lg text-justify">@lang('cert.step4')</div>
        </div>
    </div>

    <div class="mt-8">
        <h4 class="h_color text-2xl uppercase font-bold">@lang('cert.requirements_title')</h4>
        <div class="space-y-2 text-lg text-justify mt-4">
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('cert.requirement1')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('cert.requirement2')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div>@lang('cert.requirement3')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('cert.requirement4')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('cert.requirement5')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('cert.requirement6')</div>
            </div>
        </div>
    </div>
    
    <div class="mt-8">
        <h4 class="h_color text-2xl uppercase font-bold">@lang('cert.documents_title')</h4>
        <div class="space-y-2 text-lg text-justify mt-4">
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('cert.document1')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('cert.document2')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('cert.document3')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('cert.document4')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('cert.document5')</div>
            </div>
            <div class="flex space-x-2 items-start">
                <div class="my_blue rounded-full bullet"></div>
                <div class="text-lg text-justify">@lang('cert.document6')</div>
            </div>
        </div>
    </div>

    <h4 class="h_color text-2xl uppercase font-bold mt-8">@lang('cert.how_certification_title')</h4>
    <div class="space-y-2 text-lg text-justify mt-4">
        <div class="flex space-x-2 items-start">
            <div class="my_blue rounded-full bullet"></div>
            <div class="text-lg text-justify">@lang('cert.how_step1')</div>
        </div>
        <div class="flex space-x-2 items-start">
            <div class="my_blue rounded-full bullet"></div>
            <div class="text-lg text-justify">@lang('cert.how_step2')</div>
        </div>
        <div class="flex space-x-2 items-start">
            <div class="my_blue rounded-full bullet"></div>
            <div class="text-lg text-justify">@lang('cert.how_step3')</div>
        </div>
        <div class="flex space-x-2 items-start">
            <div class="my_blue rounded-full bullet"></div>
            <div class="text-lg text-justify">@lang('cert.how_step4')</div>
        </div>
    </div>

    <h4 class="h_color text-2xl uppercase font-bold mt-8">@lang('cert.advantages_title')</h4>
    <div class="space-y-2 text-lg text-justify mt-4">
        <div class="flex space-x-2 items-start">
            <div class="my_blue rounded-full bullet"></div>
            <div class="text-lg text-justify">@lang('cert.advantage1')</div>
        </div>
        <div class="flex space-x-2 items-start">
            <div class="my_blue rounded-full bullet"></div>
            <div class="text-lg text-justify">@lang('cert.advantage2')</div>
        </div>
        <div class="flex space-x-2 items-start">
            <div class="my_blue rounded-full bullet"></div>
            <div class="text-lg text-justify">@lang('cert.advantage3')</div>
        </div>
        <div class="flex space-x-2 items-start">
            <div class="my_blue rounded-full bullet"></div>
            <div class="text-lg text-justify">@lang('cert.advantage4')</div>
        </div>
    </div>

</div>

@include('inc.footer')

@endsection
