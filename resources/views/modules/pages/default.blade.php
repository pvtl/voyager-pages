@extends('voyager-pages::layouts.default')
@section('meta_title', $page->title)
@section('meta_description', $page->meta_description)
@section('page_title', $page->title)
@section('page_banner', $page->image, 1200, 211)

{!! $page->body !!}
