@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <table>
            <tr>
                <th>
                    Name
                </th>
                <th>
                    E-mail
                </th>
                <th>
                    IsAdmin
                </th>
            </tr>
            @foreach($user as $u)
                <tr>
                    <td>
                        {{$u->name}}
                    </td>
                    <td>
                        {{$u->email}}
                    </td>
                    <td>
                        {{$p->isAdmin}}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection