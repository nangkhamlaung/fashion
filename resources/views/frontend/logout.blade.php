@extends('master')
@section('content')
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="http://127.0.0.1:8000/logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" class="d-none">
                                        <input type="hidden" name="_token" value="jQT8N4Fmw0IDs6jw08KNv7i9PcBZR8F3XGfwPx1s">                                    </form>
                                </div>
 @endsection