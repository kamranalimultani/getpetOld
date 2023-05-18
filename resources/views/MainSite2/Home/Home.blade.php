@extends('MainSite2.index', ['title' => 'GetPet.in | Home', 'tags' => 'getpet.in, how to sell pets in india,pet shops near me,pet shops in nagina', 'description' => 'Getpet.in is an open source platform to buy and sell pets in india,all type of exotic birds,dogs,cats,and reptiles. Pets will be home delivered to your home easily at best price.'])
@section('content')
    @include('MainSite2.Home.mainScreen')
    @include('MainSite2.Home.CategoriesRow')
   
    
@endsection
