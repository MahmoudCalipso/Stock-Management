@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.product.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.product.fields.name') }}
                    </th>
                    <td>
                        {{ $product->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.description') }}
                    </th>
                    <td>
                        {!! $product->description !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.price') }}
                    </th>
                    <td>
                        ${{ $product->price }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Categories
                    </th>
                    <td>
                        @foreach($product->categories as $id => $category)
                            <span class="label label-info label-many">{{ $category->name }}</span>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>
                        Tags
                    </th>
                    <td>
                        @foreach($product->tags as $id => $tag)
                            <span class="label label-info label-many">{{ $tag->name }}</span>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.product.fields.photo') }}
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection