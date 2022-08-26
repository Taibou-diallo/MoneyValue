@extends('back.layout')

@section('content')
    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('formulaire de creation de pair') }}
            </h2>
        </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                                    <div class="p-6 bg-white border-b border-gray-200">
                                        @if (session()->has('message'))
                                            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                                                role="alert">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        <form style="width:65%" method="POST" action="{{ route('back.create') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label">Premiere devise</label>
                                                <input type="text" class="form-control"name="name"
                                                    value="{{ old('currency_start') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Seconde devise</label>
                                                <input type="text" class="form-control" name="description"
                                                    value="{{ old('currency_end') }}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Taux</label>
                                                <input type="text" class="form-control" name="price"
                                                    value="{{ old('taux') }}">
                                            </div>
                                            <div class="mb-3">

                                                <button type="submit" class="btn btn-primary"
                                                    style="background-color:blue">
                                                    Enregistrer
                                                </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
@endsection
