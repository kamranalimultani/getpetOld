@extends('MainSite2.index',['title'=>'Getpet.in | '. $catDetails->main_cat_name,'tags'=>$catDetails->main_cat_paragraph ,'description'=>$catDetails->main_cat_paragraph])
@section('content')
@include('MainSite2.Common.BreadCrum',['backPage'=>'Categories','backPageUrl'=>'/','currentPage'=>$catDetails->main_cat_name,'currentPageUrl'=>"/category/".$catDetails->main_cat_name."/".$catDetails->main_cat_id,'desc'=>$catDetails->main_cat_paragraph])

@include('MainSite2.Common.productListing',['Cat'=>$catDetails])

@endsection

