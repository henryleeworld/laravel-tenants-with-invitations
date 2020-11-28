@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ trans('frontend.tenant.title') }}</div>

                    <div class="card-body">
                        <a href="{{ route('tenants.create') }}"
                            class="btn btn-primary">{{ trans('frontend.tenant.create.title') }}</a>
                        <br /><br />
                        <table class="table">
                            <thead>
                            <tr>
                                <th>{{ trans('frontend.tenant.create.content.name') }}</th>
                                <th>{{ trans('frontend.tenant.create.content.email') }}</th>
                                <th>{{ trans('frontend.tenant.create.content.domain') }}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($tenants as $tenant)
                                <tr>
                                    <td>{{ $tenant->name }}</td>
                                    <td>{{ $tenant->email }}</td>
                                    <td>{{ $tenant->domain }}</td>
                                    <td>
                                        <a href="{{ route('tenants.edit', $tenant->id) }}"
                                            class="btn btn-sm btn-info">{{ trans('frontend.tenant.edit.title') }}</a>
                                        <form action="{{ route('tenants.destroy', $tenant->id) }}"
                                              method="POST" style="display: inline-block">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                    onclick="return confirm({{ trans('frontend.tenant.message.are_you_sure') }})"
                                                    class="btn btn-sm btn-danger">{{ trans('frontend.tenant.delete.title') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">{{ trans('frontend.tenant.message.no_tenants') }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
